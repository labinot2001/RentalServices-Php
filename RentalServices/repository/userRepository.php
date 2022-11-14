<?php

//include './database/databaseConnection.php';
include './admin/config/DbConfig.php';

class UserRepository{
    private $connection;

    function __construct(){
        $conn = new DBConnection;
        $this->connection = $conn->startConnection();
    }
                       
    function insertUser($user){
        $conn = $this->connection;

        $id = $user->getId();
        $name = $user->getName();
        $surname = $user->getSurname();
        $email = $user->getEmail();
        $username = $user->getUsername();
        $password = $user->getPassword();
                              //user  //
        $sql = "INSERT INTO users (name,surname,id,email,username,password) VALUES (?,?,?,?,?,?)";
        
        $statement = $conn->prepare($sql);
                           //
        $statement->execute([$name,$surname,$id,$email,$username,$password]);
        echo "<script> alert('User has been inserted successfuly!') </script>";
    }

    function getAllUsers(){
        $conn = $this->connection;
                              //user
        $sql = "SELECT * FROM users";
        $statement = $conn->query($sql);
        $users = $statement->fetchAll();

        return $users;
    }

    function getUserByUsernameAndPassword($username,$password){
      
    }

    function getUserById($id){
      $conn = $this->connection;
                          //user
      $sql = "SELECT * FROM users WHERE id='$id'";
      $statement=$conn->query($sql);
      $user = $statement->fetch();

      return $user;
    }


    function updateUser($id,$name,$surname,$email,$password,$username){
        $conn = $this->connection;
                        //user    //
        $sql = "UPDATE users SET name=?,surname=?,email=?,username=?,password=? where id=?";

        $statement = $conn->prepare($sql);
                             //
        $statement->execute([$name,$surname,$email,$username,$password,$id]);
        echo "<script> alert('User has been updated successfuly!') </script>";
    }

    function deleteUserById($id){
        $conn = $this->connection;
                          //user
        $sql = "DELETE FROM users WHERE id=?";

        $statement = $conn->prepare($sql);
        $statement->execute([$id]);
        echo "<script> alert('User has been deleted successfuly!') </script>";
    }
}


?>