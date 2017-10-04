<?php
session_start();
if (isset($_SESSION['check'])) {
        unset($_SESSION['check']);
    
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Giriş</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

   
  </head>

  <body>

   

      <div id="login-page">
        <div class="container">
        
              <form class="form-login" action="conaa.php" method="POST">
                <h2 class="form-login-heading">Giriş</h2>
                <div class="login-wrap">
                    <input type="text" class="form-control" placeholder="User ID" name="admin_kadi" autofocus>
                    <br>
                    <input type="password" class="form-control" name="admin_sifre" placeholder="Password">
                   
                    <hr>
                </div>
                    <button class="btn btn-theme btn-block" type="submit" name="loggin" value="loggin"><i class="fa fa-lock"></i>GiRİŞ</button> 
                    <a class="btn btn-danger form-control" href="../index.php">Çıxış</a>
              </form>       
            
        </div>
      </div>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type="text/javascript" src="assets/js/jquery.backstretch.min.js"></script>
    <script>
        $.backstretch("assets/img/login-bg.jpg", {speed: 500});
    </script>


  </body>
</html>
