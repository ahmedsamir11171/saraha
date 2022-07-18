<?php
include 'connection.php';
include 'trit.php';
ob_start();
class auth extends connect
{
    use valid;
    public function __construct()
    {
        parent::__construct();
    }//end construct

    public function register($username,$email,$password)
    {
        $sql="INSERT INTO register(username,email,password)VALUES('$username','$email','$password')";
        $result=$this->connection->query($sql);

        if($result)
        {
            header('Location:http://localhost/saraha/') ;
          }
          
     
    }//end register

    public function select($email,$password)
    {
        $sql="SELECT * FROM register WHERE email='$email' AND password='$password' limit 1";
        $result=$this->connection->query($sql);

    
        if($result->num_rows > 0)
        {

           
            while($row = $result->fetch_assoc()) {
              echo  $row["id"];
          $_SESSION["online"] = $row["id"];
           $oo=$_SESSION["online"] ;
            
          $sqll = "UPDATE register SET online= 1 WHERE id=$oo";
          $resultt=$this->connection->query($sqll);
          $_SESSION["login"] = "ok";  
          $_SESSION["username"] = $email;  
        }
      
        if(!empty($_SESSION["URL"]))
        {

          $ahmed=$_SESSION["URL"];
          header('Location:'.$ahmed) ;
        }else
        {
          header('Location:your_massage.php') ;

        }
          }
          echo '  <div class="alert alert-danger">
          <p style="text-align:center"> 
          لايوجد اميل بهذه الاسم يرجي تسجيل الدخول اولا او
          الاميل او كلمه السر خطا</p>      
          </div>';
          
        
    }//end of select
    public function all($ahmed)
    {
        $sql="SELECT * FROM massage WHERE to_user='$ahmed'";
        $result=$this->connection->query($sql);

      if($result->num_rows > 0)
      {
        
        return $result;
      }else{
        echo '  <div class="alert alert-danger">
        <p style="text-align:center"> لاتوجد رسائل حتي لان لكي تحصل ع رسال شارك اميلك   </p>      
        </div>';
      }
          

    }//end of all


public function massage($massage,$from_user,$to_user)
{
$time=date('l F Y h:i:s') ;
  $sql="INSERT INTO massage(massage,from_user,to_user,time)VALUES('$massage','$from_user','$to_user','$time')";
        $result=$this->connection->query($sql);

        if($result)
        {
            header('Location:end.php') ;
           
          }

          
     
    }//end register


public function all_user()
{
  $sql="SELECT * FROM register ";
  $result=$this->connection->query($sql);

if($result->num_rows > 0)
{
  
  return $result;
}else{
  echo '  <div class="alert alert-danger">
  <p style="text-align:center"> لاتوجد رسائل حتي لان لكي تحصل ع رسال شارك اميلك   </p>      
  </div>';
}
    
}











    public function redirct()
    {
     

       if(!$_SESSION["login"] == "ok")
       {
        header('Location:http://localhost/saraha/');
  }
       
       
    }

    public function logoout()
    {
 

      session_start();
     $_SESSION['login']=true;
        session_destroy();
        session_unset();

      header('Location:http://localhost/saraha/index.php') ;


    }


    
}
