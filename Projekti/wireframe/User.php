<?php
require_once("connection.php");
class Users extends dbConnect{ 
    private $user_id;
    private $name;
    private $surname;
    private $username;
    private $email;
    private $password;
    protected $dbcon;
   
    public function __construct(
        $user_id = '',
        $name = '',
        $surname = '',
        $username = '',
        $email = '',
        $password = ''
    ){
        $this ->user_id = $user_id;
        $this ->name = $name;
        $this ->surname = $surname;
        $this -> username = $username;
        $this -> email = $email;
        $this -> password = $password;
        $this ->dbcon = $this->connect();
    }
    public function setUserId($user_id){
        return $this -> user_id = $user_id;
    }
    public function setName($name){
        return $this -> name = $name;
    }
    public function setSurname($surname){
        return $this -> surname = $surname;
    }
    public function setUsername($username){
        return $this -> username = $username;
    }
    public function setEmail($email){
        return $this -> email = $email;
    }
    public function setPassword($password){
        return $this -> password = $password;
    }
    public function getUserId(){
        return $this-> id;
    }
    public function getName(){
        return $this-> name;
    }
    public function getSurname(){
        return $this-> surname;
    }
    public function getUsername(){
        return $this-> username;
    }
    public function getEmail(){
        return $this-> email;
    }
    public function getPassword(){
        return $this-> password;
    }
    public function insertData(){
        $sql = "INSERT into user (user_id,name,surname,username,email,password) values (?,?,?,?,?,?)";
        $stm = $this->dbcon->prepare($sql);
        $stm ->execute();
        $result = $stm -> fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    public function readData(){
        $sql = "Select * from user";
        $stm = $this->dbcon->prepare($sql);
        $stm->execute();
        $result = $stm ->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    public function readDataByID($user_id){
        $sql = 'SELECT * from book where user_id = :id';
        $stm = $this->dbcon->prepare($sql);
        $stm->execute([':id' => $this->id=$user_id]);
        return $result;
    }
    public function updateData(){
        $sql = "UPDATE user SET name =?, surname=?, username=?, email=?,password=? where user_id=?";
        $stm=$this->dbcon->prepare($sql);
        $stm->execute([$this->name,$this->surname,$this->username,$this->email,$this->password,$this->user_id]);
    }
    public function deleteData($user_id){
        $sql="DELETE FROM user WHERE user_id =:id";
        $stm = $this->dbcon->prepare($sql);
        $stm->bindParam(":id",$user_id);
        $stm->execute();
        if($stm==true){
            echo "<script>
            alert('Te dhenat jane fshire me suksese');
            document.location='dashboard.php';
            </script>";

        }
        else{
            return false;
        }
    }



}
?>