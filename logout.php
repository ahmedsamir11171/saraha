<?php



include ('controller/auth.php');
$x=new auth();
$id=$_SESSION['online'];
$x->logoout($id);




?>