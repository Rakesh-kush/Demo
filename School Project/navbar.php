<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <meta http-equiv="X-UA=Compatible" content="ie=edge" />
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link href="https://fonts.googleapis.com/css?family=Candal|Lora&display=swap" rel="stylesheet"> 
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>



<style type="text/css">
  *{ margin:0px;padding:0px; }

  .navbar { margin:0px;padding:0px;margin-bottom:0; }
    .navbar-brand { width:20%; }
  }

	#collapsibleNavbar { justify-content:center;padding-left:20px;width:100%;align-content:center;margin-bottom:0; }

	.navbar-nav{ align-content:center;width:53%; }

	.nav-item { padding-left:20px;font-size:15px; }
	.nav-right{ width:40%;justify-content:flex-end;padding-right:10px; }


</style>
<script>
  $(document).ready(function(){
    $("#navbardrop").click(function(){
      $(".dropdown-menu").toggle();
    });
  });
</script>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark bar">
 <a href="school.php" class="navbar-brand">Microtek College </a>

 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
 	<span class="navbar-toggler-icon"></span>
 </button>
	
 <div class="collapse navbar-collapse" id="collapsibleNavbar">
  <ul class="navbar-nav">
   <li class="nav-item">
   	<a href="school.php" class="nav-link" style="color:white;">Home</a>
   </li>
   <li class="nav-item">
   	<a href="aboutus.php" class="nav-link" style="color:white;">About us</a>
   </li>
   <li class="nav-item">
   	<a href="0" class="nav-link" style="color:white;">Faculties</a>
   </li>
   <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown" style="color:white;">Course</a>
     <div class="dropdown-menu" style="z-index:1;overflow:all;">
      <a class="dropdown-item" href="ugCourse.php">Under Graduate Course</a>
      <a class="dropdown-item" href="PGcourse.php">Post Graduate Course</a>
      <a class="dropdown-item" href="DeplomaCourse.php">Deploma Course</a>
      <a class="dropdown-item" href="Certificate.php">Certificate Course</a>      
     </div>
    </li>
    <li class="nav-item">
   	<a href="gallary.php" class="nav-link" style="color:white;">Gallary</a>
   </li>
   <li class="nav-item">
   	<a href="event.php" class="nav-link" style="color:white;">Event</a>
   </li> 
  </ul>
  <ul class="navbar-nav nav-right">  
   <li class="nav-item">
    <label class="nav-link" href="0" style="color: white;margin-top:10px;">CALL :
     <i class="material-icons" style="font-size:15px;">local_phone</i>6391474528</label >
   </li>
   <li class="nav-item">
    <a class="nav-link" href="ragistration.php" style="color:white;font-weight:bold;font-size:18px;">Online Ragistration</a>
   </li>
  </ul>
 </div>	
</nav>
</body>
</html>