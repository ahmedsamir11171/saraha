<?php
include ('controller/auth.php');
error_reporting(0);

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>صراحه</title>
  <link rel="shortcut icon" type="image/x-icon" href="public/img/Logo.png">
  <link rel="shortcut icon" type="image/x-icon" href="public/img/Logo.png">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    
    body{
        
        background-color:#F5F8FA;
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
    }.chat{
     
   
      
       background-color:#fff;
       direction:rtl;
       margin-top:20px;


    }.chat p{
        color:#000;
      padding:15px;
      padding-left:10px;
  

    }.chat span{
        margin-left:150px;
        color:green;
    }.chat button{
      margin-right:100px;
    }
    a{
        color:#000;
        text-decoration: none;

        

    }
    

  </style>
</head>
<body>

<nav class="navbar navbar-expand-sm navbar-dark "style="background-color:#10BBB3">
  <div class="container-fluid">
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="your_massage.php"><h6>رسائلي</h6></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php"><h6>خروج</h6></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="profile.php"><h6>رابط صفحتك الشخصيه</h6></a>
        </li>
      </ul>
      <a class="navbar-brand" href="javascript:void(0)">صراحه<img src="public/img/logo.png"alt="" srcset=""></a>
  
    </div>
  </div>
</nav>

<?php  

?>
<div class="container">
    <div class="row">
        <div class="col col-sm-12">
            <div class="chat">
<div class="alert alert-success">
<div class="mb-3 mt-3">
    <label for="email" class="form-label">your name:</label>
    <input class="form-control"readonly type="text" value="localhost/saraha/send_massage.php?email=<?php echo $_SESSION['username'] ;  ?> " id="myInput">
  </div>
<br>
<br>
<button class="btn btn-success" onclick="myFunction()" >انسخ</button>

<script>
function myFunction() {
  /* Get the text field */
  var copyText = document.getElementById("myInput");

  /* Select the text field */
  copyText.select();
  copyText.setSelectionRange(0, 99999); /* For mobile devices */

  /* Copy the text inside the text field */
  navigator.clipboard.writeText(copyText.value);

}
</script>



</div>

</body>
</html>
