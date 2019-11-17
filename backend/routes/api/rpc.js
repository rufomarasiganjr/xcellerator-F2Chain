const express = require('express');
const router  = express.Router();
const Web3 = require('web3');
const web3 = new Web3(new Web3.providers.HttpProvider("http://localhost:7545"));
const abi = JSON.parse('[{"constant": true,"inputs": [],"name": "userCount","outputs": [{"internalType": "uint256","name": "","type": "uint256"}],"payable": false,"stateMutability": "view","type": "function"},{"constant": true,"inputs": [],"name": "transactionNextId","outputs": [{"internalType": "uint256","name": "","type": "uint256"}],"payable": false,"stateMutability": "view","type": "function"},{"constant": true,"inputs": [{"internalType": "uint256","name": "","type": "uint256"}],"name": "users","outputs": [{"internalType": "uint256","name": "id","type": "uint256"},{"internalType": "string","name": "dbid","type": "string"},{"internalType": "string","name": "name","type": "string"},{"internalType": "string","name": "userType","type": "string"}],"payable": false,"stateMutability": "view","type": "function"},{"constant": true,"inputs": [{"internalType": "uint256","name": "_dbid","type": "uint256"}],"name": "getUserDb","outputs": [{"internalType": "string","name": "","type": "string"},{"internalType": "string","name": "","type": "string"}],"payable": false,"stateMutability": "view","type": "function"},{"constant": false,"inputs": [{"internalType": "string","name": "_name","type": "string"},{"internalType": "string","name": "_dbid","type": "string"},{"internalType": "string","name": "_userType","type": "string"}],"name": "createUser","outputs": [{"internalType": "uint256","name": "","type": "uint256"}],"payable": false,"stateMutability": "nonpayable","type": "function"},{"constant": true,"inputs": [{"internalType": "uint256","name": "","type": "uint256"}],"name": "transactions","outputs": [{"internalType": "uint256","name": "t_id","type": "uint256"},{"internalType": "uint256","name": "gbsid","type": "uint256"},{"internalType": "string","name": "t_time","type": "string"},{"internalType": "string","name": "t_date","type": "string"},{"internalType": "string","name": "store_name","type": "string"},{"internalType": "uint256","name": "rating","type": "uint256"},{"internalType": "string","name": "comment_content","type": "string"},{"internalType": "string","name": "comment_author","type": "string"}],"payable": false,"stateMutability": "view","type": "function"},{"constant": true,"inputs": [{"internalType": "uint256","name": "_gbsid","type": "uint256"}],"name": "getUser","outputs": [{"internalType": "string","name": "","type": "string"},{"internalType": "string","name": "","type": "string"}],"payable": false,"stateMutability": "view","type": "function"},{"constant": true,"inputs": [{"internalType": "uint256","name": "_gbsid","type": "uint256"}],"name": "getUserTransaction","outputs": [{"internalType": "uint256","name": "","type": "uint256"},{"internalType": "string","name": "","type": "string"},{"internalType": "string","name": "","type": "string"},{"internalType": "string","name": "","type": "string"},{"internalType": "uint256","name": "","type": "uint256"},{"internalType": "string","name": "","type": "string"},{"internalType": "string","name": "","type": "string"}],"payable": false,"stateMutability": "view","type": "function"},{"constant": false,"inputs": [{"internalType": "uint256","name": "_gbsid","type": "uint256"},{"internalType": "string","name": "_t_time","type": "string"},{"internalType": "string","name": "_t_date","type": "string"},{"internalType": "string","name": "_store_name","type": "string"},{"internalType": "uint256","name": "_rating","type": "uint256"},{"internalType": "string","name": "_comment","type": "string"},{"internalType": "string","name": "_author","type": "string"}],"name": "createTransactions","outputs": [],"payable": false,"stateMutability": "nonpayable","type": "function"},{"constant": true,"inputs": [],"name": "userNextId","outputs": [{"internalType": "uint256","name": "","type": "uint256"}],"payable": false,"stateMutability": "view","type": "function"},{"inputs": [],"payable": false,"stateMutability": "nonpayable","type": "constructor"}]');
const contractInstance = new web3.eth.Contract(abi,'0x2BDDE01A1ace1998857F6bb8798c11CBF78ead5A');

// Get Address
router.get('/address', (req, res) => {
  res.send(contractInstance.options.address);
});

//Get User Data
router.get('/user/:id', async (req, res) => {
  contractInstance.methods.getUser(req.params.id).call((err, result) => {res.send(result) })
});

//Get All user transactions
router.get('/transactions/:id', async (req, res) => {
  contractInstance.methods.transactionNextId().call((err, result) => {
    var x = []; var ctr=0;
    for(var i=0; i<= result; i++){
      contractInstance.methods.transactions(i).call((err,result2) => { 
        if(result2[1] == req.params.id){
          x.push(result2);
        } 
        ctr++;
        if(ctr == parseInt(result) + 1){
          res.json({x});
        }
      });
    }     
  });
});

// Get All Transactions
router.get('/alltransactions', async (req, res) => {
  contractInstance.methods.transactionNextId().call((err, result) => {
    var x = []; var ctr=0;
    for(var i=0; i<= result; i++){
      contractInstance.methods.transactions(i).call((err,result2) => { 
        if(result2[1] != 0){
          x.push(result2);
        } 
        ctr++;
        if(ctr == parseInt(result) + 1){
          res.json({x});
        }
      });
    }     
  });
});

// Get all users
router.get('/users', async (req, res) => {
  contractInstance.methods.userNextId().call((err, result) => {
    console.log(result);
    var users = []; var ctr=99;
    for(var i=99; i<= result; i++){
      contractInstance.methods.users(i).call((err,result2) => { 
        if(result2[0] != 0){
          users.push(result2);
       } 
        ctr++;
        if(ctr == parseInt(result) + 1){
          res.send({users});
        }
      });
    }     
  });
});

// Add New Users (Manual For Testing Only)
router.post('/register',(req, res) => {
  contractInstance.methods.createUser("Rufo", "Marasigan Jr").send({
    from: "0x87b254DDd0c01984491f8e5C969eDef0F7bC953F", 
    gas: 2000000}, function (err, result){
        res.send("register Ok!")
      });
});

// Add Transactions
router.post('/newtransactions',(req, res) => {
  const {gbsid, t_time, t_date, store_name, rating, comment, author} = req.body;
  contractInstance.methods.createTransactions(gbsid, t_time, t_date, store_name, rating, comment, author).send({
    from: "0x87b254DDd0c01984491f8e5C969eDef0F7bC953F", 
    gas: 2000000}, function (err, result){
        res.send("Transaction Done!")
      });
});

// For Testing gas estimations
router.get('/gas',(req, res) => {
  console.log(web3.eth.estimateGas({
    from: "0x87b254DDd0c01984491f8e5C969eDef0F7bC953F", 
    to: "0x1e539cbDF234C1e9D691e255355EF56Aafa4fac0", amount: web3.toWei(1, "ether")
  }))
});

module.exports = router;