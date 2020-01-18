<?php
function _ASect($x,$y){
    if ($x == $y) { $check = "selected"; }
    else{ $check = ""; }
    echo $check;
}


                          $conn = new mysqli('localhost','root','','zakat_alfitr');
                          if ($conn->connect_errno) {
                          die( "Failed to connect to MySQL : (" . $mysqli->connect_errno . ") " . $conn->connect_error);}
                          $conn->set_charset("utf8");


if (isset($_GET['Update'])) {
  $id         = $_GET['id'];
  $Fname      = $_GET['Fname'];
  $Lname      = $_GET['Lname'];
  $Tel        = $_GET['Tel'];
  $Peoples    = $_GET['Peoples'];
  $Rice_type  = $_GET['Rice_type'];
  $Zakat_type = $_GET['Zakat_type'];
  $kg         = $_GET['kg'];
  $Status     = $_GET['Status'];
  $total      = $_GET['total'];


  $Update       = "UPDATE `info` SET
   `Fname`      = '$Fname', 
   `Lname`      = '$Lname', 
   `Tel`        = '$Tel', 
   `Peoples`    = '$Peoples', 
   `Rice_type`  = '$Rice_type', 
   `Zakat_type` = '$Zakat_type', 
   `kg`         = '$kg', 
   `Status`     = '$Status',
   `total`      = '$total'

   WHERE `info`.`Id` = '$id';";
  /*$Update = "UPDATE `info` SET `Tel` = '$Tel' WHERE `info`.`Id` = '$id';";*/
  mysqli_query($conn,$Update); 
}

if (isset($_GET['Delete'])) {
  $id       = $_GET['id'];
  $photo    = $_GET['photo'];
  $Delete = "DELETE FROM `info` WHERE `info`.`Id` = '$id';";
  mysqli_query($conn,$Delete);
  unlink("myfile/$photo");
}
?>
                  <table class="table">
                    <thead class=" text-primary">
                      <th>First Name</th>
                      <th>Last  Name</th>
                      <th>Tel</th>
                      <th>Numbers of people</th>
                      <th>Type of rice</th>
                      <th>Type of zakat</th>
                      <th>kg</th>
                      <th>Slips</th>
                      <th>Status</th>
                      <th>total</th>
                      <th>Update</th>
                      <th>Delete</th>
                    </thead>
                    <tbody id="myTable">
                      <tr>
                        <?php

                          $strSQL = "SELECT * FROM `info`";
                          $objQuery = mysqli_query($conn,$strSQL);
                          while($row=mysqli_fetch_array($objQuery,MYSQLI_ASSOC)){
                              $id         = $row['Id'];
                              $Fname      = $row['Fname'];  
                              $Lname      = $row['Lname'];  
                              $Tel        = $row['Tel'];
                              $Peoples    = $row['Peoples'];
                              $Rice_type  = $row['Rice_type'];
                              $Zakat_type = $row['Zakat_type'];
                              $kg         = $row['kg'];        
                              $Slips      = $row['Slips'];
                              $Status     = $row['Status'];
                              $total      = $row['total'];  



                              if ($Slips != "") { $Slips_output = "<a href='myfile/$Slips' target='_bank'>
                              <img height='20' width='50' src='myfile/$Slips'></a>";
                              }       
                              else{ $Slips_output = "don't have slips."; }         
                        ?>
                          <td><font hidden><?php echo $Fname; ?></font><input type="text" id="<?php echo $id; ?>Fname" value="<?php echo $Fname; ?>"></td>
                          <td><input type="text" id="<?php echo $id; ?>Lname" value="<?php echo $Lname; ?>"></td>
                          <td><input type="Number" id="<?php echo $id; ?>Tel" value="<?php echo $Tel; ?>"></td>
                          <td><input type="Number" id="<?php echo $id; ?>Peoples" value="<?php echo $Peoples; ?>"></td>
                          <td>
                            <select id="<?php echo $id; ?>Rice_type">
                              <option value="75" <?php _ASect($Rice_type,"75"); ?> >Jasmine rice</option>
                              <option value="150" <?php _ASect($Rice_type,"150"); ?> >Mellow rice</option>
                            </select>
                            <!-- <input type="text" id="<?php /*echo*/ $id; ?>Rice_type" value="<?php /*echo*/ $Rice_type; ?>"> -->
                          </td>
                          <td>

                              <select    id="<?php echo $id; ?>Zakat_type">
                              <option value="ZakatFtirah"  <?php _ASect($Zakat_type, "ZakatFtirah" ); ?> >ZakatFtirah</option>
                              <option value="ZakatFediah"  <?php _ASect($Zakat_type, "ZakatFediah" ); ?> >ZakatFediah</option>
                              <option value="ZakatKafarah" <?php _ASect($Zakat_type, "ZakatKafarah"); ?> >ZakatKafarah</option>
                              </select>

                            <!-- <input type="text" id="<?php /*echo*/ $id; ?>Zakat_type" value="<?php echo $Zakat_type; ?>"> -->

                          </td>
                          <td><input type="Number" id="<?php echo $id; ?>kg" value="<?php echo $kg; ?>"></td>
                          <td><?php echo $Slips_output; ?></td>
                          <!-- <td><input type="text" id="<?php /*echo*/ $id; ?>Status" value="<?php /*echo*/ $Status; ?>"></td> -->
                           <td>

                            <select id="<?php echo $id; ?>Status">
                              <option value="JustApply"    <?php _ASect($Status,  "JustApply" ); ?> >JustApply</option>
                              <option value="Opinion"      <?php _ASect($Status,    "Opinion" ); ?> >Opinion</option>
                              <option value="Opinion"      <?php _ASect($Status,    "Opinion" ); ?> >Opinion</option>
                              <option value="Compelected"  <?php _ASect($Status, "Compelected"); ?> >Compelected</option>
                            </select>

                          </td>

                          <td><input type="number" id="<?php echo $id; ?>total" value="<?php echo $total; ?>"></td>
                          <td><button onclick="Edit('<?php echo $id; ?>');" type="button" class="btn"><i class="fa fa-edit"></i></button></td>  
                         <!--  <td><a href="edit.php?Id=<?php /*echo*/ $id;?>"><button class="btn"> <i class="fa fa-edit"></i></button></a></td>  -->
                          <td><button onclick="Delete('<?php echo $id; ?>','<?php echo $Slips; ?>');" type="button" class="btn"><i class="fa fa-close"></i></button></td>
                      </tr>
                        <?php
                            }
                        ?>

                    </tbody>
                  </table>

