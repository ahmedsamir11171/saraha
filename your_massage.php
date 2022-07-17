<?php
include ('controller/auth.php');
error_reporting(0);

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>صراحه</title>
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
        
    }h6{
        color:#fff;
        padding-left:10px;
    }h3{
        padding-top:25px;
        text-align:center;
    }.chat{
     
   
       background-color:#fff;
       direction:rtl;
margin-top:50px;

word-wrap: break-word;

    }.chat p{
      color:#000;
      display: inline;
      font-size:30px;
      color:blue;


      padding-right:25px;
   
    }.chat span{
        margin-left:150px;
        color:green;
    }a{
        color:#000;
        text-decoration: none;

        

    }p{
     
    }
.private
{
  width:70px;
  height:70px;
}
small{
  font-size: 85%;
  color:#9da9b0;
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
$x=new auth();
$ahmed=$_SESSION['username'];
$result=$x->redirct();
$result=$x->all($ahmed);


?>
<div class="container">
    <div class="row">
        <div class="col col-sm-12">
            <div class="chat">

<?php
foreach($result as $row)
{
echo'<img class ="private" src="public/img/anonym.png" alt="">'; 
echo'<p id="ana">'?><?php echo $row['massage'].'</p>';  
echo '<br>';
echo '<small >'. $row['time'] . '</small>';
echo "<hr>";


}

?>  
     
    
    
    
    
    </div>
        </div>
     
    </div>
</div>


