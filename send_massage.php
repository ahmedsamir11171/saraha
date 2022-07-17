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
 width: 100px;
 padding-left:16px;
 
    }h6{
        color:#fff;
        padding-left:10px;
    }h3{
        padding-top:25px;
        text-align:center;
    }.index{
        margin: auto;
        margin-top:40px ;
        text-align:center

    }h5{
 color:#4F8000
    }textarea{
        direction:rtl
    }.ahmed p{
      display: inline;
    }small{
      padding:10px
    }span{
      width:50px;
      background:green;
      border-radius:20px
    }#online{
      width: 37px;
      position: absolute;
      left:115px;
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
<!-- end navbar -->
<?php  $x=new auth();

if(isset($_POST['submit']))
{
  $massage=$_REQUEST['massage'];
  if(!empty($massage))
  {
    $massage=$_REQUEST['massage'];
    $from_user=$_SESSION['username'];
    $to_user=$_GET['email'];
   $x->massage($massage,$from_user,$to_user);

  }else
  {
    echo '<div class="alert alert-danger">يرجاي ادخال الرساله
    </div>';
  }


}
?>
<div class="container">
    <div class="row">
        <div class="index">
        <div class="container mt-3">
 
        <?php



?>
  <p></p>
  <br>
  <h4><?php
  echo $_GET['email'];  ?></h4>
  <h5>اجعل رسالتك بناءة :)</h5>
  <br>
  <form method="post">
    <div class="mb-3 mt-3">
     
      <textarea class="form-control" rows="5" id="comment" name="massage"></textarea>
    </div>
    <button class="btn btn-success" name="submit" style="       color: #0da39c;
    background-color: transparent;
    border-color: #10bbb3;  display: inline;margin-right:5px;
">صارح</button>
  </form>
</div>


            </form>
        </div>
    </div>
</div>
<div class="container">
  <div class="row">
    <div class="col col-sm-12">

    <div class="ahmed">
      <?php


?>

      


    </div>
    </div>
  </div>
</div>
<br><br><br><br><br><br><br><br>











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