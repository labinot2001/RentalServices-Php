<?php

require_once "DataBaseConfig.php";

class Mapper extends DataBaseConfig

{

    private $connection;
    private $query;

    public function __construct()
    {
        $this->connection = $this->getConnection();
    }

   
    
    public function getUserByUsername($username)
    {                                   //s
        $this->query = "select * from users where name=:name";
        $statement = $this->connection->prepare($this->query);
        $statement->bindParam(":name", $username);
        $statement->execute();
        return $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        
    }

    public function getAllUsers()
    {                                 //s   
        $this->query = "select * from users";
        $statement = $this->connection->prepare($this->query);
        $statement->execute();
        return $result = $statement->fetchAll(PDO::FETCH_ASSOC);
       
    }

                        /*    (\Simpleuser $user)    */
    public function insertUser(Simpleuser $user)
    {                               //s
        $this->query = "insert into users (name,email,password, role) values (:name,:mail,:password,:role)";
        $statement = $this->connection->prepare($this->query);
        $username = $user->getUserName();
        $email=$user->getEmail();
        $password = password_hash($user->getPassword(), PASSWORD_BCRYPT);
        $role = $user->getRole();
        $statement->bindParam(":name", $username);
        $statement->bindParam(":mail", $email);
        $statement->bindParam(":password", $password);
       $statement->bindParam(":role", $role);
        $statement->execute();
    }

    public function deleteUser($Id)
    {                               //s
        $this->query = "delete from users where ID=:id";
        $statement = $this->connection->prepare($this->query);
        $statement->bindParam(":id", $Id);
        $statement->execute();
    }
    
}




?>