
<?php  

 $sql="SELECT * FROM ayarlar";
  $host = "localhost";
  $user_name = "root";
  $password = "";
  $db_name = "autizm";
  $db_connection = mysqli_connect($host,$user_name,$password,$db_name);
  $query= mysqli_query($db_connection,$sql);
		
	
		$sql="SELECT * from ayarlar ";  
		$query=mysqli_query($db_connection,$sql);
		$row=mysqli_fetch_assoc($query);
		
		?>