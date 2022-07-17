<?php
include ('controller/auth.php');

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
        height:30px;
    }h6{
        color:#fff;
        padding-left:10px;
    }h3{
        padding-top:25px;
        text-align:center;
    }.text{
        width:350px;
        height:250px;
       
        margin: auto;
        margin-top:40px ;
        direction:rtl;

    }button{
 
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
          <a class="nav-link" href="register.php"><h6>تسجيل</h6></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="javascript:void(0)"><h6>دخول</h6></a>
        </li>
      
      </ul>
      <a class="navbar-brand" href="javascript:void(0)">صراحه<img src="public/img/logo.png"alt="" srcset=""></a>

    </div>
  </div>
</nav>
<!-- end navbar -->
<?php

if (isset($_POST['submit']))
{
  $email=$_REQUEST['email'];
  $password=$_REQUEST['password'];

  $x=new auth();
  $x->select($email,$password);
}

?>
<div class="container">

    <div class="row">
        <h3>تسجيل الدخول </h2>
       
        <div class="text">
        <form method="post">
  <div class="">
    <label for="email" class="form-label"></label>
    <input type="text" class="form-control" id="email" placeholder="البريد الالكترواني او رقم الهاتف" name="email">
  </div>
  <div class="">
    <label for="pwd" class="form-label"></label>
    <input type="password" class="form-control" id="pwd" placeholder="الرقم السري" name="password">
  </div>
  <br>
  <div class="form-check mt-3" style="  display: inline;">
    <label class="form-check-label">
      <input class="form-check-input" type="checkbox" name="remember" 
>  تذكرني
    </label>
  </div>
<button class="btn btn-success"name='submit' style="       color: #0da39c;
    background-color: transparent;
    border-color: #10bbb3;  display: inline;margin-right:5px;
">دخول</button>

</form>
        </div>
    </div>
</div>





<div class="container content-container">
		<center>
		<!--<script src="//ads.projectagoraservices.com/?id=18712" type="text/javascript"></script>-->
		

		
		
	
			<div class="  p-t-md" style="background-color: rgba(16, 187, 179, 0.11); font-size: 23px;">
		
		أهلا ومرحبا في موقع صراحة، شارك حسابك وابدأ بتلقي الصراحات من الناس، سيكتب الأصدقاء رأيهم الشخصي
		<br>
		والصادق عنك. شارك حسابك وانطلق بعالم صراحة! 
        <br>
		<h4>
		انضم مؤخرا
        </h4>
ينضم الكثير من المستخدمين الجدد إلى موقعنا يومياً، هذا يعني النجاح الكبير <br>
 والشامل لموقع صراحة بشكله الجديد والمميز، ماذا تنتظر؟ قم بالتسجيل وابدأ <br>
 بمشاركة صفحتك مع الأصدقاء، التسجيل في صراحة لا يتطلب سوى خطوة واحدة، <br>
 بل ويمكنك أيضاً التسجيل من خلال الفيسبوك، تويتر، جوجل، انستجرام. <br>
 أهلا بك في عالم موقع صراحة. 
        </div>
		

<!--<script src="https://cdn.speakol.com/widget/js/speakol-widget-v2.js"></script>
                <div class="speakol-widget" id="sp-wi-1955">
                    <script>
                        (spksdk = window.spksdk || []).push({
                            widget_id: "wi-1955",
                            element: "sp-wi-1955"
                        });
                    </script>
                </div> -->

<br>
<br>
<br>
<br>
<br>
</center>

</div>
</body>
</html>
