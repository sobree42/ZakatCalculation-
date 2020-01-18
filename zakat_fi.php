<!DOCTYPE html>
<html lang="en">
<head>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

<script>
$(document).ready(function(){
  $("#SubmitForm").click(function(){

    var Type01 = $("#Type01").val();
    var firstName = $("#firstName").val();
    var lastName = $("#lastName").val();
    var Phone = $("#Phone").val();
    var people = $("#people").val();
    var Type02 = $("#Type02").val();
    var kg = $("#Kg").html();
    var PriceTotal = $("#basket-total").html();

    $.ajax({
      method: "POST",
      url: "check_add.php",
      data: { 
        Insert      : "Insert", 
        Type01      : Type01, 
        firstName   : firstName,
        lastName    : lastName,
        Phone       : Phone,
        people      : people,
        Type02      : Type02,
        Kg          : kg,
        PriceTotal  : PriceTotal 
      }
    })
      .done(function( msg ) {
        alert( "Data Saved: " + msg );
        location.reload();  
    });
  });
});
</script>

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

</style>

<body class="w3-white w3-content" style="max-width:1800px">

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-bar-block w3 w3-animate-left w3-text-grey w3-collapse w3-top w3-center" style="z-index:3;width:300px;font-weight:bold" id="mySidebar"><br>
  <h3 class="w3-padding-64 w3-center"><img src="icon/image.png" width="150px"></h3>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-padding w3-hide-large" style="color: white;">CLOSE</a> 
  <a href="index.php" onclick="w3_close()" class="w3-bar-item w3-button" style="color: white;">HOME</a>
 <!--  <a href="" onclick="w3_close()" class="w3-bar-item w3-button" style="color: white;">ABOUT ZAKAT</a> -->
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


<b  style="border:1px solid #ccc">
  <div class="container">
    
    <p> <img src="icon/contract.png" width="25"> Please fill in this form to create an account.</p>
    <hr>

     <label for="type"><b> Select type of Zakat  </b></label>
            <select name="Type01" id="Type01" style="height: 35px;" class="form-control" onchange="Noob()" required>\
              <option>--</option>
              <option value="ZakatFtirah">ZakatFtirah</option>
              <option value="ZakatFediah">ZakatFediah</option>
              <option value="ZakatKafarah">ZakatFediah</option>
            </select>
<hr>
    <label for="fname"><b> First Name </b></label>
    <input type="text" placeholder="Enter First name " name="firstName" id="firstName" autocomplete="off" required>
<hr>
    <label for="lname"><b> Last Name </b></label>
    <input type="text" placeholder="Enter Last name" name="lastName" id="lastName" autocomplete="off" required>
<hr>
    <label for="phone"><b> Phone Number </b></label>
    <input type="number" placeholder="Enter Phone Number" name="Phone" id="Phone" autocomplete="off" required>
    <hr>
    <label for="people"><b id="nameZakatLabel"> How many people do you have? </b></label>
    <input type="number" placeholder=" Enter number of people " name="people" id="people" onkeyup="Noob()" autocomplete="off" required>
  
 <label for="type"><b> Select type of rice </b></label>
              <select name="Type02" id="Type02" onchange="Noob()" style="height: 35px;" class="form-control" required>
              <option value=""></option>
              <option value="75" >Jasmine rice</option>
              <option value="50">Mellow rice</option>
              </select>
 <!-- <br> <br> -->

<!-- <label for="kg"><b> You have to use rice. </b></label>
<input type="Number" placeholder=" Enter kg " name="Kg" id="Kg" autocomplete="off" required>

<div class="b" id="Kg">0 </div>kg  -->
   <div class="summary-total">
          <div class="total-title">kg</div>
          <div class="" id="Kg" name="kg"> 0 </div>
        </div>

     <div class="summary-total">
          <div class="total-title">Total</div>
          <div class="total-value final-value" id="basket-total" name="total"> 00.0 </div>
        </div>

        <button id="SubmitForm" type="submit" class="registerbtn">Send</button>
        <hr>
        <a href="upload.php"><button id="SubmitForm" type="submit" class="registerbtn">If you odrer finish. you can upload the document.</button></a>
         <!-- If you odrer finish. you can submit the<a href="upload.php"> <b>Document.</b></a> -->
  </div>
</div>
</b>
<!-- Footer -->
<footer class="w3-container w3-center w3-opacity w3-margin-bottom">
  <br>
  <br>
  <div class="w3-xlarge w3-padding-10">

   <!--  <p class="grey" style="font-size: 18px;">Find us on social media.</p>
    <a href="https://www.facebook.com/tv.whitechannel/" target="blank"><i class="fa fa-facebook-official w3-hover-opacity"></i></a>
    <a href="https://www.instagram.com/whitechannel.tv/" target="blank"><i class="fa fa-instagram w3-hover-opacity"></i></a>
    <a href="https://www.pinterest.com/whitechannel/" target="blank"><i class="fa fa-pinterest-p w3-hover-opacity"></i></a>
    <a href="https://twitter.com/White_Channel" target="blank"><i class="fa fa-twitter w3-hover-opacity"></i></a> -->
    
  </div>
  <p>Powered by <a href="https://www.facebook.com/groups/1257795264352610/" target="_blank" class="w3-hover-text-green">White.DEV</a></p>
</footer>  


  



<script>


function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}

function Noob(){
  var str = document.getElementById("Type01").value;
  if (str == "ZakatFtirah") {
    document.getElementById("nameZakatLabel").innerHTML = "How many people do you have?";
    // Math //
      var TwoMud = 1.5; 
      var Multi = 2; 
      var people = document.getElementById("people").value;    
      var people = parseInt(people);
      var rice = document.getElementById("Type02").value;
      var rice = parseInt(rice);

      var basketTotal = rice*Multi*people;
    // Math //
    if (people >= 1 && rice >= 1) {
      document.getElementById("Kg").innerHTML = (Multi*TwoMud)*people;
      document.getElementById("basket-total").innerHTML = basketTotal;
    }


  } //ZakatFtirah

  if (str == "ZakatFediah") {document.getElementById("nameZakatLabel").innerHTML = "How many day do you left?";
    // Math //
      var TwoMud = 1.5; 
      var Multi = 1; 
      var people = document.getElementById("people").value;    
      var people = parseInt(people);
      var rice = document.getElementById("Type02").value;
      var rice = parseInt(rice);

      var basketTotal = rice*Multi*people;
    // Math //
    if (people >= 1 && rice >= 1){
    document.getElementById("Kg").innerHTML = (Multi*TwoMud)*people;
    document.getElementById("basket-total").innerHTML = basketTotal;
  }
  }
  if (str == "ZakatKafarah") {document.getElementById("nameZakatLabel").innerHTML = "How many people do you have?";
    // Math //
      var TwoMud = 1.5; 
      var Multi = 1; 
      var people = document.getElementById("people").value;    
      var people = parseInt(people);
      var rice = document.getElementById("Type02").value;
      var rice = parseInt(rice);

      var basketTotal = rice*Multi*people;
    // Math //
    if (people >= 1 && rice >= 1){
    document.getElementById("Kg").innerHTML = (Multi*TwoMud)*people;
    document.getElementById("basket-total").innerHTML = basketTotal;
  }
  }
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
