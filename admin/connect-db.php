<?php
                          $conn = new mysqli('localhost','root','','zakat_alfitr');
                          if ($conn->connect_errno) {
                          die( "Failed to connect to MySQL : (" . $mysqli->connect_errno . ") " . $conn->connect_error);}
                          $conn->set_charset("utf8");
?>