<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/logo-white.ico">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>
    White | Dashboard 
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/paper-dashboard.css?v=2.0.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

  <style type="text/css">
    
      body {
  font-family: WhiteFont;
  src: url(WhiteTHIN.ttf);
}
    
    td input{
      border:0;
      text-align: center; 
      color: #182e37;
    }
    th {
      text-align: center;
      color: #748825;
    }
    .th:hover{
      color: black;
    }
    .btn {
  background-color: #748825  ;
  border: none;
  color: white;
  padding: 12px 16px;
  font-size: 16px;
  cursor: pointer;
}

/* Darker background on mouse-over */
.btn:hover {
  background-color: #a1b736;
}



  </style>
<script>
$(document).ready(function(){
  $("#Body-Table").load("table.php");

  $(".Edit").click(function(){
    var data = $(this).atrr("data");
    alert(data);
  });


});
</script>

<script>
function Edit(code){
  var id         = code;
  var name       = $("#"+id+"Fname").val();
  var LastName   = $("#"+id+"Lname").val();
  var Tel        = $("#"+id+"Tel").val();
  var peoples    = $("#"+id+"Peoples").val();
  var rice_type  = $("#"+id+"Rice_type").val();
  var zakat_type = $("#"+id+"Zakat_type").val();
  var kg         = $("#"+id+"kg").val();
  var status     = $("#"+id+"Status").val();
  var total      = $("#"+id+"total").val();

  if (confirm('Are you sure a save ?')) {
    $("#Body-Table").load("table.php?Update=Update&id="+id+"&Fname="+name+"&Lname="+LastName+"&Tel="+Tel+"&Peoples="+peoples+"&Rice_type="+rice_type+"&Zakat_type="+zakat_type+"&kg="+kg+"&Status="+status+"&total="+total);
  }
  
  
}

/* $(document).on('click', ':not(form)[data-confirm]', function Delete(code) {
    $("#Body-Table").load("table.php?Delete=Delete&id="+code);
     if(!confirm($(this).data('confirm'))){
      
      code.stopImmediatePropagation();
      code.preventDefault();
    }

 });*/

function Delete(code,photo) {
  var txt;
  var r = confirm("Are you sure a delete?");
  if (r == true) {
    txt = $("#Body-Table").load("table.php?Delete=Delete&id="+code+"&photo="+photo);;
  } else {
    txt = "";
  }
}




    

</script>   

</head>
<style type="text/css">
  .edit:hover {
  color: #0a79df;
}

.delete:hover {
  color: #dc2a2a;
}
.button {
  color: #aaa;
  cursor: pointer;
  vertical-align: middle;
  margin-top: -4px;
}
p{
  color:  #748825;
  font-size: 15px;
}
.p:hover{
  color: black;
}
h4{
  color:#748825;   
}
nc-icon nc-tile-56{
  color: green;
}



</style>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-mini">
          <div class="logo-image-small">
            <img src="../assets/img/logo-white.ico">
          </div>
        </a>
        <a href="admin.php" class="simple-text logo-normal">
          White | Admin 
          <!-- <div class="logo-image-big">
            <img src="../assets/img/logo-big.png">
          </div> -->
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="active ">
            <a href="admin.php">
              <i><img src="../icon/spreadsheet.png" width="90%"></i>
              <p class="p">table list</p>
            </a>
          </li>
          <li>      
          <li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
           
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search..." id="myInput" onkeyup="myFunction()" value="<?php echo $_GET["myInput"];?>">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="nc-icon nc-zoom-split"></i>
                  </div>
                </div>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item">
               
              </li>
              <li class="nav-item btn-rotate dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="nc-icon nc-settings-gear-65"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Some Actions</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="index.php">Logout</a>
                 </div>
              </li>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <!-- <div class="panel-header panel-header-lg">
  
  <canvas id="bigDashboardChart"></canvas>
  </div> -->
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Zakat order list </h4>
              </div>
              <div class="card-body">
                <div class="table-responsive" id="Body-Table">



                </div>
              </div>
            </div>
          </div>

      <footer class="footer footer-black  footer-white ">
        <div class="container-fluid">
          <div class="row">
            <nav class="footer-nav">
              <ul>
                <li>
                  <a href="https://www.facebook.com/groups/1257795264352610/" target="_blank">White.Dev</a>
                </li>
              </ul>
            </nav>
            <div class="credits ml-auto">
              <span class="copyright">
                ©
                <script>
                  document.write(new Date().getFullYear())
                </script>, made with <i class="fa fa-heart heart"></i> by White.Dev
              </span>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/paper-dashboard.min.js?v=2.0.0" type="text/javascript"></script>
  <!-- Paper Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>

<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

</body>

</html>