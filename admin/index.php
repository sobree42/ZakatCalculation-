<?php
if (isset($_POST['username']) AND isset($_POST['password'])) {
 if ($_POST['username'] == "admin" AND $_POST['password'] == "1234") {
  session_start();
  $_SESSION['Admin-WhiteSearch'] = "Admin-WhiteSearch";
  echo "<script>window.location.href = 'admin.php';</script>";
 }
 else{echo "WRONG";}
}

if (isset($_GET['out'])) {
 session_start();
 session_unset();
 session_destroy(); 
 echo "<script>window.location.href = 'index.php';</script>";
 exit;
}

?>

<!DOCTYPE html>
<html lang="en">
 <head>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <title> Login </title>
	  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	  <link href="style.css" rel="stylesheet" type="text/css">
	  <link rel="icon" href="../icon/logo-white.ico">
	  <meta property="al:ios:url" content=""/>
	    <meta property="al:ios:app_store_id" content=""/>
	    <meta property="al:ios:app_name" content="WhiteDev"/>
	    <meta property="al:android:url" content=""/>
	    <meta property="al:android:package" content=""/>
	    <meta property="al:android:app_name" content="WhiteDev"/> 
	    <meta name="format-detection" content="telephone=no"/>
	    <meta name="apple-mobile-web-app-capable" content="yes"/>
	    <meta name="apple-mobile-web-app-status-bar-style" content="green"/>
	    <meta name="description" content="">
	    <meta name="author" content="">
 </head>
 <body>
  <div class="login">
      <h1><img src="../assets/img/whitechannel.jpg" width="30"> White | Admin </h1>
   <form action="index.php" method="post">
    <label for="username">
     <i class="fas fa-user"></i>
    </label>
    <input type="text" name="username" placeholder="Username" id="username" autocomplete="off" required>
    <label for="password">
     <i class="fas fa-lock"></i>
    </label>
    <input type="password" name="password" placeholder="Password" id="password" autocomplete="off" required>
    <input type="submit" value="Login" name="login">
   </form>
  </div>
 </body>
</html>