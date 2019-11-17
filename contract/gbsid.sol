pragma solidity ^0.5.0;

contract Gbsid {
  uint public userNextId = 99;
  uint public userCount = 0;
  uint public transactionNextId = 1;

  struct User {
    uint id;
    string dbid;
    string name;
    string userType;
  }

  //struct of transactions
  struct Transaction {
      uint t_id; //transaction id
      uint gbsid; //user id
      string t_time;//transaction time
      string t_date;//transaction date
      string store_name; //store/business
      uint rating; //user rating
      string comment_content; //user comment
      string comment_author; //comment author
  }

  mapping(uint => User) public users;
  mapping (uint => Transaction) public transactions;

  constructor() public {
    createUser("Rufo Marasigan Jr", "test-id001", "Seller");
    createUser( "Luzada", "test-id002", "Business");
    createTransactions(100,"12:00","10/08/2019","Lazada",4,"Legit! Trusted","Apolinario Julo");
    createTransactions(100,"11:03","10/015/2019","Lazada",3,"Legit Ulit! Trusted","Aris Monte");
    createTransactions(101, "10:03","10/012/2019","Shoppeee",3,"Nice Swan","King Money");
  }

  function createUser(string memory _name, string memory _dbid, string memory _userType) public returns(uint) {
    userNextId++;
    userCount++;
    users[userNextId] = User(userNextId, _dbid, _name,  _userType);
    return userNextId;
  }

  function createTransactions(
      uint _gbsid,
      string memory _t_time,
      string memory _t_date,
      string memory _store_name,
      uint _rating,
      string memory _comment,
      string memory _author) public {
        transactionNextId++;
        transactions[transactionNextId] = Transaction(transactionNextId,_gbsid,_t_time,_t_date,_store_name,_rating,_comment,_author);
  }
  
  function getUser(uint _gbsid)  public view returns (string memory, string memory){
    return(users[_gbsid].name,users[_gbsid].userType);
  }
  
  // get using Database id
    function getUserDb(uint _dbid)  public view returns (string memory, string memory){
    return(users[_dbid].name,users[_dbid].userType);
  }

    function getUserTransaction(uint _gbsid)  public view returns (
      uint, string memory,string memory, string memory,uint,string memory,string memory){
    return(
          transactions[_gbsid].gbsid,
          transactions[_gbsid].t_time,
          transactions[_gbsid].t_date,
          transactions[_gbsid].store_name,
          transactions[_gbsid].rating,
          transactions[_gbsid].comment_content,
          transactions[_gbsid].comment_author
        );
  }

}