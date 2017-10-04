<?php include 'baglan.php'; ?> 


<?php

ob_start();
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "autizm";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


if (isset($_POST['ayarkaydet'])) {
	$ayar_title = $_POST['ayar_title'];
	$ayar_telefon = $_POST['ayar_telefon'];
	$ayar_mail = $_POST['ayar_mail'];
	$ayar_twitter = $_POST['ayar_twitter'];
	$ayar_description = $_POST['ayar_description'];
	$ayar_keywords = $_POST['ayar_keywords'];
	$ayar_facebook = $_POST['ayar_facebook'];
	$ayar_adres = $_POST['ayar_adres'];
	$ayar_footer = $_POST['ayar_footer'];
	$ayar_fax = $_POST['ayar_fax'];
	$ayar_logo = $_POST['ayar_logo'];


	 $id=0;

$sql = "UPDATE ayarlar SET `ayar_title`='$ayar_title',`ayar_telefon`='$ayar_telefon',`ayar_mail`='$ayar_mail',`ayar_twitter`='$ayar_twitter',`ayar_description`='$ayar_description',`ayar_keywords`='$ayar_keywords',`ayar_facebook`='$ayar_facebook',`ayar_adres`='$ayar_adres',`ayar_footer`='$ayar_footer',`ayar_fax`='$ayar_fax',`ayar_logo`='$ayar_logo'";
}
if ($conn->query($sql) === TRUE) {
 header('Location: ../parametrler.php?durum=ok');

} else {
    header('Location: ../parametrler.php?durum=no') ;
}

$conn->close();


?>

 