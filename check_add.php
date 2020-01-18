<?php
 $conn = new mysqli('localhost','root','','zakat_alfitr');
      if ($conn->connect_errno) {
      die( "Failed to connect to MySQL : (" . $mysqli->connect_errno . ") " . $conn->connect_error);}
      $conn->set_charset("utf8");

if (isset($_POST['Insert'])) {

        $Type01    = $_POST['Type01'];
        $firstName = $_POST['firstName'];
        $lastName  = $_POST['lastName'];
        $Phone     = $_POST['Phone'];
        $people    = $_POST['people'];
        $Type02    = $_POST['Type02'];
        $Kg        = $_POST['Kg'];
        $PriceTotal     = $_POST['PriceTotal'];

    $strSQL = "INSERT INTO `info` (`Fname`, `Lname`, `Tel`, `Peoples`, `Rice_type`, `Zakat_type`, `kg`,  `Status`, `total`) 
    VALUES ('$firstName', '$lastName', '$Phone', '$people', '$Type02', '$Type01', '$Kg', 'First', '$PriceTotal');";
    mysqli_query($conn, $strSQL);
}


?>