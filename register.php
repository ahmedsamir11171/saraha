<?php
include 'controller/auth.php';
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
<body class="with-top-navbar" cz-shortcut-listen="true">


    <div class="growl" id="app-growl"></div>
      <script src="/js/jquery.js"></script>
<link rel="stylesheet" href="/css/iziToast.min.css">
<script src="/js/iziToast.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="/fontawesome-free-5.2.0-web/css/all.css">

<!--<script async src="//increaserev.com/ads/cm/secureads.js"></script>-->


  
<nav class="navbar navbar-expand-sm navbar-dark "style="background-color:#10BBB3">
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
          <a class="nav-link" href="javascript:void(0)"><h6>دخول</h6></a>
        </li>
      
      </ul>
      <a class="navbar-brand" href="javascript:void(0)">صراحه<img src="public/img/logo.png"alt="" srcset=""></a>
  
    </div>
  </div>
</nav>
				<style>
/* Firefox old*/
@-moz-keyframes blink {
    0% {
        opacity:1;
    }
    50% {
        opacity:0;
    }
    100% {
        opacity:1;
    }
} 

@-webkit-keyframes blink {
    0% {
        opacity:1;
    }
    50% {
        opacity:0;
    }
    100% {
        opacity:1;
    }
}
/* IE */
@-ms-keyframes blink {
    0% {
        opacity:1;
    }
    50% {
        opacity:0;
    }
    100% {
        opacity:1;
    }
} 
/* Opera and prob css3 final iteration */
@keyframes  blink {
    0% {
        opacity:1;
    }
    50% {
        opacity:0;
    }
    100% {
        opacity:1;
    }
} 
.blink-image {
    -moz-animation: blink normal 2s infinite ease-in-out; /* Firefox */
    -webkit-animation: blink normal 2s infinite ease-in-out; /* Webkit */
    -ms-animation: blink normal 2s infinite ease-in-out; /* IE */
    animation: blink normal 2s infinite ease-in-out; /* Opera and prob css3 final iteration */
}


	
</style>

		
<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-6206a06ee41ea1a0"></script>


	 	 
    <div class="container p-t-md">
            
<div class="col-sm-12">
<center>
 <!-- <script src="//ads.projectagoraservices.com/?id=18712" type="text/javascript"></script>-->
</center>
<br>
<br>
     <center> <h4>سجل دخولك و إعرف الحقيقة</h4></center>


     <hr>
    <center> <h4>مباشرة</h4></center>
    
     <hr>
    <center><a href="facebook.php"><img id="connectFb" src="public/img/dd.png" style="width: 290px;height:80px;cursor: hand;cursor: pointer;">
	</a>
	<br>
	<br>
	<br>
	<center>

<?php

if(isset($_POST['submit']))
{
    $username=$_REQUEST['username'];
    $email=$_REQUEST['email'];
    $password=$_REQUEST['password'];
    $password_confirm=$_REQUEST['password_confirm'];

    if(strlen($password) > 6 AND strlen($password_confirm) > 6 AND strlen($username) > 6 AND strlen($email) > 6
    AND $password === $password_confirm)
{

   $x=new auth();
   $x->register($username,$email,$password);
}
else{
    echo '<div class="alert alert-info" role="alert">
يجب ان يكون الاسم وكلمه المرور والاميل اكبر من 6 وان تكون كلمه السر مطابقه لتاكيد كلمه السر
    </div>';
}

}

?>
		
      
				
</center>
	</center>
    <hr>
    <form method="post" style=" direction:rtl;" class="form-horizontal" enctype="multipart/form-data" 
   >
        
        <center> <h4>أو بإدخال بياناتك</h4></center>
        <hr>
        <div class="form-group">
            <label class="col-md-2 control-label" for="Name">الاسم</label>
            <div class="col-md-10">
                <input class="form-control" data-val="false" data-val-required="هذا الحقل مطلوب" id="Name" name="username" type="text">
                <span class="text-danger field-validation-valid" data-valmsg-for="Name" data-valmsg-replace="true"></span>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label" for="Email">البريد الإلكتروني</label>
            <div class="col-md-10">
                <input class="form-control" data-val="false" data-val-email="The البريد الإلكتروني field is not a valid e-mail address." data-val-required="هذا الحقل مطلوب" id="Email" name="email" type="text">
                <span class="text-danger field-validation-valid" data-valmsg-for="Email" data-valmsg-replace="true"></span>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label" for="Password">الرقم السري</label>
            <div class="col-md-10">
                <input class="form-control" data-val="false" data-val-length="الرقم السري يجب أن يتكون من  6 إلى 100 خانات." data-val-length-max="100" data-val-length-min="6" data-val-required="هذا الحقل مطلوب" id="Password" name="password" type="password">
                <span class="text-danger field-validation-valid" data-valmsg-for="Password" data-valmsg-replace="true"></span>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label" for="ConfirmPassword">تأكيد الرقم السري</label>
            <div class="col-md-10">
                <input class="form-control" data-val="false" data-val-equalto="الرقم السري وتأكيده لا يتطابقان." data-val-equalto-other="*.Password" id="ConfirmPassword" name="password_confirm" type="password">
                <span class="text-danger field-validation-valid" data-valmsg-for="ConfirmPassword" data-valmsg-replace="true"></span>
            </div>
        </div>

    
        
       
       

        <div class="form-group">
            <div class="col-md-offset-2 col-md-10">
                <button type="submit" class="btn " name="submit" style="background:#10BBB3">تسجيل</button>
            </div>
        </div>
</form></div>
<br>
<br>
<br>
<br>
<center>
		<!--<script src="//ads.projectagoraservices.com/?id=18712" type="text/javascript"></script>-->
</center>
<br>
</div>

	<div class="  p-t-md" style="background-color: rgba(16, 187, 179, 0.11); font-size: 16px; direction:rtl;" >
            <div class="container content-container">
                <div class="col-sm-4">
                    <p><strong>1. يمكنك <span class="darker">إنشاء</span> حساب صراحة خاص بك بكل سهولة <a href="/Account/Register" title="حساب جديد">من هنا</a></strong></p>
                    <p>سيكتب الأصدقاء والآخرون رأيهم الشخصي و الصادق عنك على هذا الرابط</p>
                </div>

                <div class="col-sm-4">
                    <p><strong>2. يمكنك <span class="darker">نشر</span> الحساب الخاص بك على Facebook أو Twitter أو Skype أو أي مكان تريده أنت</strong></p>
                </div>

                <div class="col-sm-4">
                    <p><strong>3. يمكنك <span class="darker">قراءة</span> ما كتبه الناس عنك</strong></p>
                    <p>إن الرسائل التي تصلك خاصة بك وحدك، ولا يمكن لأحد سواك مشاهدتها</p>
                </div>

                
            </div>

        </div>
			<div class="  p-t-md" style="background-color: rgba(16, 187, 179, 0.11); font-size: 23px;direction:rtl;">
		
		أهلا ومرحبا في موقع صراحة، شارك حسابك وابدأ بتلقي الصراحات من الناس، سيكتب الأصدقاء رأيهم الشخصي
		<br>
		والصادق عنك. شارك حسابك وانطلق بعالم صراحة! 
        <br>
		<h1>
		انضم مؤخرا
        </h1>
ينضم الكثير من المستخدمين الجدد إلى موقعنا يومياً، هذا يعني النجاح الكبير <br>
 والشامل لموقع صراحة بشكله الجديد والمميز، ماذا تنتظر؟ قم بالتسجيل وابدأ <br>
 بمشاركة صفحتك مع الأصدقاء، التسجيل في صراحة لا يتطلب سوى خطوة واحدة، <br>
 بل ويمكنك أيضاً التسجيل من خلال الفيسبوك، تويتر، جوجل، انستجرام. <br>
 أهلا بك في عالم موقع صراحة. 
        </div>
		
    
     <script src="/js/jquery.js"></script>
    <script src="/js/toolkit.js"></script>


 			 <script>
   (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
 var user = { 
       "id":"",
       "name":"",
       "gender":"",
       "pic":""
        };
  function statusChangeCallback(response) {
    if (response.status === 'connected') {
      arabyUs();
    } else if (response.status === 'not_authorized') {    
    } else {
    }
  }

  function checkLoginState() {
    FB.getLoginStatus(function(response) {
      statusChangeCallback(response);
    });
  }
  window.fbAsyncInit = function() {
  FB.init({
    appId      : '2309719385777044',
    cookie     : true,  
                        
    xfbml      : true,  
    version    : 'v2.8' 
  });
  FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
  });
  };

 
  function arabyUs() {
    
    FB.api('/me', 'get', { fields: 'id,name,gender,friends,email' }, function(response) {
	user.id =response.id;
	user.name =response.name;
	user.gender =response.gender;
	user.pic ='https://graph.facebook.com/'+ response.id+'/picture?type=large';
	  $.ajax({
                    url: '/Account/RegisterFB',
                    type: 'POST',
                    cache: false,
                    data: {
                        id: user.id,
                        name: user.name,
                        pic: user.pic,
                    },

                    success: function () {
						 location.reload();
                       
                    },
                    error: function() { }

                });
	  });
  }

  $(document).ready(function(){
$( "#connectFb").click(function(){
	  if (!user.name){
		  FB.login(function(response) {
             statusChangeCallback(response);
            });
		  return ;
		  }
  
});
});




  
</script>
<script>
 var addthis_share = {
   url: "https://www.sarahaa.com/",
}
</script>
<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-6206a06ee41ea1a0"></script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-96139191-1', 'auto');
  ga('send', 'pageview');

</script>
<!--<script>
     window.googletag = window.googletag || {cmd: []};
      var interstitialSlot, staticSlot;
      googletag.cmd.push(function() {
        interstitialSlot = googletag.defineOutOfPageSlot(
            '/424536528,22535021215/1515303_ir_interstitial_gt',
            googletag.enums.OutOfPageFormat.INTERSTITIAL);
        if (interstitialSlot) {
          interstitialSlot.addService(googletag.pubads());
          googletag.pubads().enableSingleRequest();
        googletag.enableServices();
        }
      });
    </script>
    <script>
        googletag.cmd.push(function() {
          googletag.display(interstitialSlot);
        });
    </script>-->
<div class="increaserev mcms120x600" ir-btn-text=" "></div>
<script>ir_ads_push();</script>
<div class="iziToast-wrapper iziToast-wrapper-topCenter"></div><div id="fb-root" class=" fb_reset"><div style="position: absolute; top: -10000px; width: 0px; height: 0px;"><div></div></div></div></body>