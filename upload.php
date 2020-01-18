<?php
session_start();
if(isset($_POST['Tel'])){

	$tel = $_POST['Tel'];
	require 'admin/connect-db.php';
	$strSQL = "SELECT * FROM `info` WHERE `Tel` = '$tel'; ";
   	$objQuery = mysqli_query($conn,$strSQL);
   	$objResult = mysqli_fetch_array($objQuery);

		if ($objResult) {
			$_SESSION["tel"] = $tel; 
			echo "<script>window.location.href = 'upload.php';</script>";
		}	
		else{echo "don't have data.";}
}

if (isset($_GET['clear'])) {
	session_unset(); 
	session_destroy(); 
	 echo "<script>window.location.href = 'upload.php';</script>";
}

if (isset($_FILES['bill'])) {
  $ID = $_POST['ID'];
  $Tel = $_SESSION["tel"];
  $temp = explode(".", $_FILES["bill"]["name"]);
  $newfilename = round(microtime(true)) . '.' . end($temp);
  require 'admin/connect-db.php';

    $strSQL = "SELECT * FROM `info` WHERE `Id` = '$ID' AND `Tel` = '$Tel';";
    $objQuery = mysqli_query($conn,$strSQL);
    while($row=mysqli_fetch_array($objQuery,MYSQLI_ASSOC))
      { echo $oldFile = $row['Slips']; 
        if ($oldFile == ""){}
        else{ unlink("admin/myfile/".$oldFile);}
      }

  if (move_uploaded_file($_FILES["bill"]["tmp_name"], "admin/myfile/" . $newfilename) ){  
    $Update = "UPDATE `info` SET `Slips` = '$newfilename' WHERE `Id` = '$ID' AND `Tel` = '$Tel';";
    mysqli_query($conn, $Update);
    echo "upload File";
  }

}
?>

<?php
if (isset($_SESSION["tel"])) {
	$tel = $_SESSION["tel"];
?>
<!DOCTYPE html>
<html lang="en">
<title> Zakat Service from white </title>
<link rel="icon" href="icon/whitechannel.ico">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}
body, html {
  height: 100%;
  color: #777;
  line-height: 1.8;
  color: #696969;
}

/* Create a Parallax Effect */
.bgimg-1, .bgimg-2, .bgimg-3 {
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

/* First image (Logo. Full height) */
.bgimg-1 {
  background-image: url('pic/zakat.jpg');
  min-height: 100%;
}

/* Second image (Portfolio) */
.bgimg-2 {
  background-image: url("/w3images/parallax2.jpg");
  min-height: 400px;
}

/* Third image (Contact) */
.bgimg-3 {
  background-image: url("w3images/parallax3.jpg");
  min-height: 400px;
}

.w3-wide {letter-spacing: 10px;}
.w3-hover-opacity {cursor: pointer;}

/* Turn off parallax scrolling for tablets and phones */
@media only screen and (max-device-width: 1600px) {
  .bgimg-1, .bgimg-2, .bgimg-3 {
    background-attachment: scroll;
    min-height: 400px;
  }
}
.w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
.w3-half img:hover{opacity:1}

* {
  box-sizing: border-box;
}

.columns {
  float: left;
  width: 33.3%;
  padding: 8px;
}

.price {
  list-style-type: none;
  border: 1px solid #eee;
  margin: 0;
  padding: 0;
  -webkit-transition: 0.3s;
  transition: 0.3s;
}

.price:hover {
  box-shadow: 0 8px 12px 0 rgba(0,0,0,0.2)
}

.price .header {
  background-color: #111;
  color: white;
  font-size: 25px;
}

.price li {
  border-bottom: 1px solid #eee;
  padding: 20px;
  text-align: center;
}

.price .grey {
  background-color: #eee;
  font-size: 20px;
}

.button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 10px 25px;
  text-align: center;
  text-decoration: none;
  font-size: 18px;
}

@media only screen and (max-width: 600px) {
  .columns {
    width: 100%;
  }
}
.w3{
  background-color: #333;
}
.ins{
  background-color: white;
}
.summary-total {
  border-top: 1px solid #ccc;
  border-bottom: 1px solid #ccc;
  clear: both;
  margin: 1rem 0;
  overflow: hidden;
  padding: 0.5rem 0;
}

.total-title, .total-value{
  color: #111;
  float: left;
  width: 50%;
}
.price:before,
.subtotal:before,
.subtotal-value:before,
.total-value:before,
.promo-value:before {
  content: '฿';
}
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
  background-color: #a1b736   ;
  color: white;
  padding: 14px 17px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}
/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #748825 ;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
 /* float: left;*/
  width: 50%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}

</style>
<body class="w3-white w3-content" style="max-width:2000px">

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-bar-block w3 w3-animate-left w3-text-grey w3-collapse w3-top w3-center" style="z-index:3;width:300px;font-weight:bold" id="mySidebar"><br>
  <h3 class="w3-padding-64 w3-center"><img src="icon/image.png" width="150px"></h3>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-hide-large" style="color: white;">CLOSE</a> 
  <a href="index.php" onclick="w3_close()" class="w3-bar-item w3-button" style="color: white;">HOME</a>
  <a href="zakat_fi.php" onclick="w3_close()" class="w3-bar-item w3-button" style="color: white;">GIVE ZAKAT</a>
</nav>

<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-white w3-xlarge w3-padding-16">
  <span class="w3-left w3-padding"> WHITE SERVICE </span>
  <a href="javascript:void(0)" class="w3-right w3-button w3-white" onclick="w3_open()">☰</a>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px">

  <!-- Push down content on small screens --> 
  <div class="w3-hide-large" style="margin-top:83px"></div>

<!-- Header -->
<header class=" bgimg-1 w3-container w3-center" style="padding:128px 16px">
  <h1 class="w3-jumbo w3-large w3-center w3-padding-16" style="color: #182e37;"> WHITE SERVICE </h1>
  <p class="w3-xlarge w3-center  w3-padding-16" style="color: #182e37;">Hands to hands we're hold together</p>
</header>
    <div class="w3-row-padding w3-center">
    <div class=" w3-center">
	<center>
    <form method="post" enctype="multipart/form-data">
      <br>
			<p>Please select your transaction.</p>
                         
                     <table class="table" style="width: 80%;">
                      <th>First Name</th>
                      <th>Last Name</th>
                      <th>Tel</th>
                      <th>Slips</th>
                      <th></th>
                    </thead>
                    <tbody>
                      <tr class="w3-light-grey">
                        <?php
                          require 'admin/connect-db.php';
                          $strSQL = "SELECT * FROM `info` WHERE `Tel` = '$tel'; ";
                          $objQuery = mysqli_query($conn,$strSQL);
                          while($row=mysqli_fetch_array($objQuery,MYSQLI_ASSOC)){
                              $id    = $row['Id'];
                              $Fname = $row['Fname'];  
                              $Lname = $row['Lname'];  
                              $Tel   = $row['Tel'];        
                              $Slips = $row['Slips'];     

                              if ($Slips != "") { $Slips_output = "<a href='admin/myfile/$Slips' target='_bank'>
                              <img height='50' width='50' src='admin/myfile/$Slips'></a>";
                              }       
                              else{ $Slips_output = "don't have slips."; }         
                        ?>
                          <td><?php echo $Fname; ?></td>
                          <td><?php echo $Lname; ?></td>
                          <td><?php echo $Tel; ?></td>   
                          <td><?php echo $Slips_output; ?></td>   
                          <td><input required type="radio" name="ID" value="<?php echo$id; ?>" ></td>              
                      </tr>
                        <?php
                            }
                        ?>

                    </tbody>

                  </table>
                  <input type="file" name="bill" required="" >
                    <br>
       <div class="clearfix w3-center" >
      <a href="upload.php?clear=clear"><button type="button" class="cancelbtn" style="width: 30%;">Enter New </button></a>
      <button type="submit" class="signupbtn" style="width: 30%;">Send</button>
    </div>
    </form>
  <!--  <a href="upload.php?clear=clear">Enter new information</a> -->
  </center>

                   </div>
                    </div>

    
    <!-- Footer -->
<footer class="w3-container w3-center w3-opacity w3-margin-bottom">
  <br>
  <br>
  <div class="w3-xlarge w3-padding-50">
  </div>
  <p>Powered by <a href="https://www.facebook.com/groups/1257795264352610/" target="_blank" class="w3-hover-text-green">White.DEV</a></p>
</footer>

<script>
// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}
</script>

<script>
// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}
</script>

<script type="text/javascript">
// Used to toggle the menu on small screens when clicking on the menu button
function toggleFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>
<script>
// Script to open and close sidebar
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("myOverlay").style.display = "none";
}

// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}

</script>
</body>
</html>

<?php
}


else{
?>
<!DOCTYPE html>
<html lang="en">
<title> Zakat Service from white </title>
<link rel="icon" href="icon/whitechannel.ico">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}
body, html {
  height: 100%;
  color: #777;
  line-height: 1.8;
  color: #696969;
}

/* Create a Parallax Effect */
.bgimg-1, .bgimg-2, .bgimg-3 {
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

/* First image (Logo. Full height) */
.bgimg-1 {
  background-image: url('pic/zakat.jpg');
  min-height: 100%;
}

/* Second image (Portfolio) */
.bgimg-2 {
  background-image: url("/w3images/parallax2.jpg");
  min-height: 400px;
}

/* Third image (Contact) */
.bgimg-3 {
  background-image: url("w3images/parallax3.jpg");
  min-height: 400px;
}

.w3-wide {letter-spacing: 10px;}
.w3-hover-opacity {cursor: pointer;}

/* Turn off parallax scrolling for tablets and phones */
@media only screen and (max-device-width: 1600px) {
  .bgimg-1, .bgimg-2, .bgimg-3 {
    background-attachment: scroll;
    min-height: 400px;
  }
}
.w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
.w3-half img:hover{opacity:1}

* {
  box-sizing: border-box;
}

.columns {
  float: left;
  width: 33.3%;
  padding: 8px;
}

.price {
  list-style-type: none;
  border: 1px solid #eee;
  margin: 0;
  padding: 0;
  -webkit-transition: 0.3s;
  transition: 0.3s;
}

.price:hover {
  box-shadow: 0 8px 12px 0 rgba(0,0,0,0.2)
}

.price .header {
  background-color: #111;
  color: white;
  font-size: 25px;
}

.price li {
  border-bottom: 1px solid #eee;
  padding: 20px;
  text-align: center;
}

.price .grey {
  background-color: #eee;
  font-size: 20px;
}

.button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 10px 25px;
  text-align: center;
  text-decoration: none;
  font-size: 18px;
}

@media only screen and (max-width: 600px) {
  .columns {
    width: 100%;
  }
}
.w3{
  background-color: #333;
}
.ins{
  background-color: white;
}
.summary-total {
  border-top: 1px solid #ccc;
  border-bottom: 1px solid #ccc;
  clear: both;
  margin: 1rem 0;
  overflow: hidden;
  padding: 0.5rem 0;
}

.total-title, .total-value{
  color: #111;
  float: left;
  width: 50%;
}
.price:before,
.subtotal:before,
.subtotal-value:before,
.total-value:before,
.promo-value:before {
  content: '฿';
}
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
  background-color: #a1b736   ;
  color: white;
  padding: 14px 17px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}
/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #748825 ;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
 /* float: left;*/
  width: 50%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}

</style>
<body class="w3-white w3-content" style="max-width:2000px">

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-bar-block w3 w3-animate-left w3-text-grey w3-collapse w3-top w3-center" style="z-index:3;width:300px;font-weight:bold" id="mySidebar"><br>
  <h3 class="w3-padding-64 w3-center"><img src="icon/image.png" width="150px"></h3>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-hide-large" style="color: white;">CLOSE</a> 
  <a href="index.php" onclick="w3_close()" class="w3-bar-item w3-button" style="color: white;">HOME</a>
  <a href="zakat_fi.php" onclick="w3_close()" class="w3-bar-item w3-button" style="color: white;">GIVE ZAKAT</a>
</nav>

<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-white w3-xlarge w3-padding-16">
  <span class="w3-left w3-padding"> WHITE SERVICE </span>
  <a href="javascript:void(0)" class="w3-right w3-button w3-white" onclick="w3_open()">☰</a>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px">

  <!-- Push down content on small screens --> 
  <div class="w3-hide-large" style="margin-top:83px"></div>

<!-- Header -->
<header class=" bgimg-1 w3-container w3-center" style="padding:128px 16px">
  <h1 class="w3-jumbo w3-large w3-center w3-padding-16" style="color: #182e37;"> WHITE SERVICE </h1>
  <p class="w3-xlarge w3-center  w3-padding-16" style="color: #182e37;">Hands to hands we're hold together</p>
</header>
	<center>
		<form method="post" enctype="multipart/form-data">
      <table>
        <tr>
          <br>
			<td><input type="number" name="Tel" required="" placeholder="Tel-Phone"></td>
    </tr>
      <tr>
			<td><button type="submit">Send</button></td>
    </tr>
  </table>
		</form>
	</center>
  <footer class="w3-container w3-center w3-opacity w3-margin-bottom">
  <br>
  <br>
  <div class="w3-xlarge w3-padding-50">
  </div>
  <p>Powered by <a href="https://www.facebook.com/groups/1257795264352610/" target="_blank" class="w3-hover-text-green">White.DEV</a></p>
</footer>
<script>
// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}
</script>

<script>
// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}
</script>

<script type="text/javascript">
// Used to toggle the menu on small screens when clicking on the menu button
function toggleFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>
<script>
// Script to open and close sidebar
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("myOverlay").style.display = "none";
}

// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}

</script>
</body>
</html>
<?php
}
?>