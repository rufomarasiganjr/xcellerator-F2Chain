const express = require('express');
const router  = express.Router();
const bcrypt = require('bcryptjs');
const config = require('config');
const jwt = require('jsonwebtoken');
const Web3 = require('web3');
const web3 = new Web3(new Web3.providers.HttpProvider("http://localhost:7545"));
const abi = JSON.parse('[{"constant": true,"inputs": [],"name": "userCount","outputs": [{"internalType": "uint256","name": "","type": "uint256"}],"payable": false,"stateMutability": "view","type": "function"},{"constant": true,"inputs": [],"name": "transactionNextId","outputs": [{"internalType": "uint256","name": "","type": "uint256"}],"payable": false,"stateMutability": "view","type": "function"},{"constant": true,"inputs": [{"internalType": "uint256","name": "","type": "uint256"}],"name": "users","outputs": [{"internalType": "uint256","name": "id","type": "uint256"},{"internalType": "string","name": "dbid","type": "string"},{"internalType": "string","name": "name","type": "string"},{"internalType": "string","name": "userType","type": "string"}],"payable": false,"stateMutability": "view","type": "function"},{"constant": true,"inputs": [{"internalType": "uint256","name": "_dbid","type": "uint256"}],"name": "getUserDb","outputs": [{"internalType": "string","name": "","type": "string"},{"internalType": "string","name": "","type": "string"}],"payable": false,"stateMutability": "view","type": "function"},{"constant": false,"inputs": [{"internalType": "string","name": "_name","type": "string"},{"internalType": "string","name": "_dbid","type": "string"},{"internalType": "string","name": "_userType","type": "string"}],"name": "createUser","outputs": [{"internalType": "uint256","name": "","type": "uint256"}],"payable": false,"stateMutability": "nonpayable","type": "function"},{"constant": true,"inputs": [{"internalType": "uint256","name": "","type": "uint256"}],"name": "transactions","outputs": [{"internalType": "uint256","name": "t_id","type": "uint256"},{"internalType": "uint256","name": "gbsid","type": "uint256"},{"internalType": "string","name": "t_time","type": "string"},{"internalType": "string","name": "t_date","type": "string"},{"internalType": "string","name": "store_name","type": "string"},{"internalType": "uint256","name": "rating","type": "uint256"},{"internalType": "string","name": "comment_content","type": "string"},{"internalType": "string","name": "comment_author","type": "string"}],"payable": false,"stateMutability": "view","type": "function"},{"constant": true,"inputs": [{"internalType": "uint256","name": "_gbsid","type": "uint256"}],"name": "getUser","outputs": [{"internalType": "string","name": "","type": "string"},{"internalType": "string","name": "","type": "string"}],"payable": false,"stateMutability": "view","type": "function"},{"constant": true,"inputs": [{"internalType": "uint256","name": "_gbsid","type": "uint256"}],"name": "getUserTransaction","outputs": [{"internalType": "uint256","name": "","type": "uint256"},{"internalType": "string","name": "","type": "string"},{"internalType": "string","name": "","type": "string"},{"internalType": "string","name": "","type": "string"},{"internalType": "uint256","name": "","type": "uint256"},{"internalType": "string","name": "","type": "string"},{"internalType": "string","name": "","type": "string"}],"payable": false,"stateMutability": "view","type": "function"},{"constant": false,"inputs": [{"internalType": "uint256","name": "_gbsid","type": "uint256"},{"internalType": "string","name": "_t_time","type": "string"},{"internalType": "string","name": "_t_date","type": "string"},{"internalType": "string","name": "_store_name","type": "string"},{"internalType": "uint256","name": "_rating","type": "uint256"},{"internalType": "string","name": "_comment","type": "string"},{"internalType": "string","name": "_author","type": "string"}],"name": "createTransactions","outputs": [],"payable": false,"stateMutability": "nonpayable","type": "function"},{"constant": true,"inputs": [],"name": "userNextId","outputs": [{"internalType": "uint256","name": "","type": "uint256"}],"payable": false,"stateMutability": "view","type": "function"},{"inputs": [],"payable": false,"stateMutability": "nonpayable","type": "constructor"}]');
const contractInstance = new web3.eth.Contract(abi,'0x2BDDE01A1ace1998857F6bb8798c11CBF78ead5A');


// Item Model
const User = require('../../models/User');

// @router  POST api/users
// @desc    Register new user
// @access  Public
router.post('/', (req, res) => {
    const {name, email, password, userType} = req.body;
    console.log(name, email, password, userType);
      // Simple validation
    if(!name || !email || !password || !userType) {
        return res.status(400).json({ msg: 'Please enter all fields' });
    }

    // Check for existing user
    User.findOne({ email })
        .then(user => {
         if(user) return res.status(400).json({ msg: 'User already exists' });
        var sc_id="";
        const newUser = new User({name, email,password, userType,sc_id});
        // Create salt & hash
        bcrypt.genSalt(10, (err, salt) => {
            bcrypt.hash(newUser.password, salt, (err, hash) => {
            if(err) throw err;
            newUser.password = hash;

            contractInstance.methods.userNextId().call((err, userlast_id) => {
                console.log((userlast_id));
                newUser.sc_id = parseInt(userlast_id) + 1;
                newUser.save()           
           
                .then(user => {
                    jwt.sign(
                        { id: user.id },
                        config.get('jwtSecret'),
                        { expiresIn: 3600 },
                        (err, token) => {console.log(name);
                            contractInstance.methods.createUser(name,user.id,userType).send({
                                from: "0x87b254DDd0c01984491f8e5C969eDef0F7bC953F", 
                                gas: 2000000
                            }, function (err, result){
                                console.log("OKay na po!");                               
                                
                                res.json({ 
                                    msg: "registered",
                                    token,
                                    user: {
                                        id: user.id,
                                        name: user.name,
                                        email: user.email,
                                        userType: user.userType
                                    }
                            });
                            
                            }
                        );                            
                    })
                });
            })
            });
        })
    })
});


router.post('/login', (req, res) => {
    //authenticate input against database
    const {email, password} = req.body;
    console.log("Credentials :" + email + ":" + password)
    // Simple validation
    if(!email || !password) {
        return res.status(400).json({ msg: 'Please enter all fields' });
    }

    User.findOne({ email })
        .then(user => {
         if(!user) return res.status(400).json({ msg: 'Invalid Username / Password' })
         else {
            bcrypt.compare(password, user.password, function (err, result) {
                if (result === true) {

                    jwt.sign(
                        { id: user.id },
                        config.get('jwtSecret'),
                        { expiresIn: 3600 },
                        (err, token) => {console.log(token)
                            res.status(200).json({msg: "User Now Login", status: 1, token: token, name: user.name, email: user.email, id: user.id, usertype: user.userType,sc_id: user.sc_id,})
                        });
                } else {
                    res.status(200).json({msg: "Invalid Username / Password", status: 0});
                }
            });         
        }
    });
});

module.exports = router;
