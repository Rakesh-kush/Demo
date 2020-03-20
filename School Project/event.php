<!DOCTYPE html>
<html>
<head>
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
 .content { width:100%;  }
 .row-col {width:100%;padding-left:35px; }
 .column-col { margin-bottom:100px;margin-top:40px;padding-left:45px;padding-right:50px; }
 .card { border:1px solid grey;margin-left:0px;width:365px;}
 .card-body { box-shadow:15px,15px,15px,rgba(0,0,0,0.5); }
 .card-text { color:grey;font-size:18px;padding-left:10px; }



@media(max-width:768px)
  {
    /*.content { width:100%;padding-top:30px; }*/
  	/*.row-col { width:95%; flex-direction:column;padding:10px; }*/
  	.column-col { margin-left:25px;width:343px;margin-bottom:40px;	 }
  }*/

</style>	
</head>
<body>

<?php
   include_once('navbar.php');
?>

 <div class="container-fluid content">
  <div class="row row-col">
   <div class="col-sm-4 column-col">
   	<div class="card">
     <iframe width="365" height="245" 
       src="https://www.youtube.com/embed/cfIzXAWxSf0?controls=0">
     </iframe>
      <div class="card-body">
   	    <p class="card-text">MICROTEK COLLEGE CONVOCATION 2017 CONVOCATION PROCESSION</p>
      </div>
     </div>
    </div>
   <div class="col-sm-4 column-col">
   	<div class="card">
     <embed width="365" height="245" controls
       src="https://www.youtube.com/embed/tNmlRCVJatI?controls=0">
     </embed>
      <div class="card-body">
   	    <p class="card-text">ANDROID WORKSHOP AT MICROTEK COLLEGE MALDAHIYA VARANASI</p>
      </div>
     </div>
   </div>
   <div class="col-sm-4 column-col">
   	<div class="card">
     <embed width="365" height="245" controls
       src="https://www.youtube.com/embed/pwHCYLVpAxQ?controls=0">
     </embed>
      <div class="card-body">
   	    <p class="card-text">MICROTEK COLLEGE UDBHAV 2015-FASHION SHOW</p>
      </div>
     </div>
   </div>	
  </div>
 </div>

 <?php
   include_once('footer.php');
?>

<?php
   include_once('foot.php');
?>
</body>
</html>