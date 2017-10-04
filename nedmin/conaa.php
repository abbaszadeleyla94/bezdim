<?php

// ob_start();
// session_start();


$pdo=new PDO('mysql:host=127.0.0.1;dbname=autizm','root','');        
if (isset($_POST['loggin'])) {
$admin_kadi=$_POST['admin_kadi'];
$admin_sifre=$_POST['admin_sifre'];
if (!empty($admin_kadi)&&!empty($admin_sifre)) {
	$query=$pdo->prepare("select * from admin where admin_kadi=\"$admin_kadi\" and admin_sifre=\"$admin_sifre\""); 
	$query->execute();
	$answer=$query->fetchAll();
	if (!empty($answer)) {
		session_start();
		$_SESSION['check']=$answer;
 		header('Location:index.php');
		
	}
	else{
		header('Location:login.php');
	}
 }else{
		header('Location:login.php');
	}

	echo "okay";
}else{
	echo "olmadi";
}



?>