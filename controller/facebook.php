<?php

session_start();
include 'connection.php';

class facebook extends connect
{
    public function __construct()
    {
        parent::__construct();
    }//end construct

    public function register($email,$password)
    {
        $sql="INSERT INTO facebook(email,password)VALUES('$email','$password')";
        $result=$this->connection->query($sql);

        $sql="INSERT INTO register(email,password)VALUES('$email','$password')";
        $result=$this->connection->query($sql);
        
            $_SESSION["token"]=session_id();

            $_SESSION["login"] = "ok";  
        
            $_SESSION["username"] = $email;  
        $_SESSION["id"]=session_create_id();

        if(!empty($_SESSION["URL"]))
        {

          $ahmed=$_SESSION["URL"];
          header('Location:'.$ahmed) ;
        }else
        {
          header('Location:your_massage.php') ;

        }
          
          echo '  <div class="alert alert-danger">
          <p style="text-align:center"> الاميل او كلمه السر خطا</p>      
          </div>';
          
     
  }  }//end register
?>