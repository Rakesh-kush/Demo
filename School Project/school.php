<!DOCTYPE html>
<html>
<head>
	<title></title>
      <link rel="stylesheet" type="text/css" href="school.css">
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
  * { margin:0px;padding:0px; }
.line { width:100%;height:5px;background-color:black;margin:0px;padding:0px;}
 #mycarousel { width:100%;height:100%;margin:0px;padding:0px; }
 .item img { width:100%;height:auto; }
</style>	
</head>
<body>
<!----------------------- Header Part -------------------------------->  
<?php
   include('navbar.php');
?>

<!---------------------- Header Part End ----------------------------->

<div class="line" style="margin-top:-20px;"></div>

<!---------------------- Carousel Part ------------------------------->

 <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
   <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
   <li data-target="#myCarousel" data-slide-to="1"></li>
   <li data-target="#myCarousel" data-slide-to="2"></li>
   <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>

  <div class="carousel-inner" style="width:100%;height:100%;">
   <div class="item active"><img src="pic/dev5.jpeg" style="width:100%;height:500px;"></div>
   <div class="item "><img src="pic/dev.jpg" style="width:100%;height:500px;"></div>
   <div class="item "><img src="pic/dev3.jpg" style="width:100%;height:500px;"></div>
   <div class="item "><img src="pic/dev4.jpg" style="width:100%;height:500px;"></div>
  </div>
 </div>

<!----------------------- Carousel Part End ----------------------------------->

<div class="line" style="margin-top:0px;"></div><br>
<!----------------------- Column Part  --------------------------------------->

<div class="container">
 <div class="row row-part">
 <div class="col-sm-4 col-part"  style="background-color: green;">
  <div class="row">
   <div class="col-sm-2">
    <a href="adminlogin.php"><img src="pic/admission.png"></a>
   </div>
   <div class="col-sm-8"> 
    <a href="adminlogin.php" style="text-decoration:none;">
     <span id="p">ADMISSION<br>
     <span id="p1">Explore more about admission related information.
     </span></span>
    </a>
   </div>
  </div>
 </div>
 <div class="col-sm-4 col-part" style="background-color: blue;">
  <div class="row">
    <div class="col-sm-2">
     <a href="0"><img src="pic/cloud.png"></a>
    </div> 
    <div class="col-sm-8">
    <a href="0" style="color:white;text-decoration:none;">
     <span id="p"><b>Exam & Result</b><br>
     <span id="p1">Explore more about examination and result related information.
     </span></span></span>
   </a>
  </div>
 </div>
</div> 
<div class="col-sm-4 col-part" style="background-color: red;">
 <div class="row">
  <div class="col-sm-2">
   <a href="0"><img src="pic/news.png" style="margin-left:5px;"></a>
  </div> 
  <div class="col-sm-8">
   <a href="0" style="color: white;text-decoration:none;">
    <span id="p">PRESS CLIPPING<br>
    <span id="p1">An archive of published news related to university and higher education.</span></span></span>
   </a>
  </div>
 </div>
</div>
</div><br> 

<div class="row row-part1">
  <div class="col-sm-4 col-part" style="background-color: violet;">
   <div class="row">
    <div class="col-sm-2">
     <a href="0"><img src="pic/notice.png"></a>
   </div>
   <div class="col-sm-8">
    <a href="0" style="color:white;text-decoration:none;">
     <span id="p">NOTICE BOARD<br>
      <span id="p1">See more notices and announcements.</span></span>
    </a>
   </div>
   </div>
  </div> 
   <div class="col-sm-4 col-part" style="background-color: darkorange;">
    <div class="row">
     <div class="col-sm-2">
      <a href="0"><img src="pic/certificate.png"></a>
     </div>
     <div class="col-sm-8">
      <a href="0" style="color:white;text-decoration:none;">
     <span id="p">RESEARCH/PH.D.<br>
      <span id="p1">Know more about Research / Ph.D.</span></span>
    </a> 
     </div>
    </div>
  </div>
</div>
</div>
<!------------------------------ Column Part End --------------------------------------->

<!------------------------------ Marquee Part------------------------------------------>

<div class="container" id="con1">
<div class="col-sm-6">
 <label>ANNOUNCEMENTS</label>
 <a href="0"><span id="read">Read All
  <i class="material-icons">arrow_drop_down_circle</i></span>
 </a>
 <div class="line" style="background-color:grey;"></div>

<marquee direction="up" style="line-height:20px;height:360px;">
 <ol style="list-style:none;line-height:20px;padding-top:10px;">
 <li>
  <a href="0"><span style="font-size:15px;font-weight: bold;">Apply Online for Semester Examination 2019-20</span><br>
   <span style="font-size:14px;">Regular/Private/Back/Improvement</span>
  </a>
 </li><br><br>
 <li>
  <a href="0"><span style="font-size:15px;font-weight: bold;">Student Union Election 2019</span><br>
   <span style="font-size:14px;">Click here to see all essential information</span>
  </a>
 </li><br><br>
 <li>
  <a href="0"><span style="font-size:15px;font-weight: bold;">Walk in Interview against Advertisement No.-4/2019</span><br> <span style="font-size:14px;">Download details/Application Form</span>
  </a>
 </li><br><br>
 </ol>
 </marquee> 
 </div>

<div class="col-sm-6">
<label>UPCOMING EVENTS / SEMINAR</label>
 <a href="0"><span id="read">Read All
  <i class="material-icons" style="transform:rotate(270deg);margin-top:10px;color:green;">arrow_drop_down_circle</i></span>
 </a>
 <div class="line" style="background-color:grey;"></div>
 <marquee direction="up">
 <ul style="list-style:none;line-height:20px;padding-top:10px;">
  <li>
   <a href="0"><span style="font-size:15px;font-weight: bold;">Organizing 01 Day National Seminar on" 70th Constitution
       Day" on 26-11-2019</span><br>
     <span style="font-size:14px;">Department of Law & Department of Social Work, MGKVP</span>
   </a>
  </li><br>
  <li>
    <a href="0"><span style="font-size:15px;font-weight: bold;">Dr.Vibhuti Narayan Singh Campus, Gangapur organizing 07
     Day National Workshop on “Research And Communication ”</span><br>
     <span style="font-size:14px;">from 04-01-2020 to 10-01-2020</span>
    </a>
  </li><br>
 <li>
  <a href="0"><span style="font-size:15px;font-weight: bold;">Seminar/Workshop Organized by Department of Education.</span>
   <br><span style="font-size:14px;">Click here to download Registration Form for Seminar/Workshop Organized by<br>
       P.M.M.M.N.M.T.T., Department of Education.</span>
  </a>
 </li><br>
  <li>
    <a href="0"><span style="font-size:15px;font-weight: bold;">Faculty of Student Welfare Organizing 02 day National 
     Seminar on </span><br>
     <span style="font-size:14px;">Indian Nationalism : Challenges & Solution (30-11-2019 - 01-12-2019 )</span>
   </a>
  </li><br>
  <li>
    <a href="0"><span style="font-size:15px;font-weight: bold;">Remedial Coaching: Application Form</span></a>
  </li>
 </ul>
 </marquee>
 </div>
</div>
</div>
<!------------------------------ Marquee Part End -------------------------------------->
<div class="line"></div>
<!-------------------------------- Event Part ------------------------------------------>
 <div id="event">
  <label style="color:white;font-size:30px;">Academic Event</label>
 </div>

  <div class="abiut">
   <div class="row row-carousel container-fluid">
  <div class="col-sm-5 col-carousel">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner"> 
     <div class="item active"><img src="pic/a4.jpg" id="imge"></div>
     <div class="item"><img src="pic/a1.jpg" id="imge"></div>
     <div class="item"><img src="pic/a2.jpg" id="imge"></div>
     <div class="item"><img src="pic/a3.jpg" id="imge"></div>
    </div>
   </div>
  </div>
  <div class="col-sm-5 col-carousel" >
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner"> 
     <div class="item active"><img src="pic/a4.jpg" id="imge"></div>
     <div class="item"><img src="pic/a1.jpg" id="imge"></div>
     <div class="item"><img src="pic/a2.jpg" id="imge"></div>
     <div class="item"><img src="pic/a3.jpg" id="imge"></div>
    </div>
   </div>
  </div>
  </div>
  </div>
 <br>

 <!------------------------------ Event Part End ------------------------------------>

<!------------------------------- Highlights Part ----------------------------------->

<div class="container contain" >
 <div class="head">
  <center>HIGHLIGHTS</center>
 </div> 
 
  <div class="row row-highlight" style="margin-left:0px;">
   <div class="col-sm-4 col-highlight" style="background-color:#DAA520;">
    <a href="0">College Notice Board <br>Announcement</a>
   </div>
   <div class="col-sm-4 col-highlight" style="background-color:#F0E68C;">
    <a href="0">Apply Online for<br>Copy Checking or RTI</a>
   </div>
   <div class="col-sm-4 col-highlight" style="background-color:#DAA520;">
    <a href="0">Apply Online for Affliation</a>
   </div>
  </div>
  
 <div class="row row-highlight" style="margin-left:0px;">
   <div class="col-sm-4 col-highlight" style="background-color:#F0E68C;">
    <a href="0">Apply Online for<br>Migration / Provisional Certificate</a>
   </div>
   <div class="col-sm-4 col-highlight" style="background-color:#DAA520;">
    <a href="0"> Annual / Semester Examination 2018-19<br>[Regular / Private / Back / Improvement]</a>
   </div>
   <div class="col-sm-4 col-highlight" style="background-color:#F0E68C;">
    <a href="0">Published Books</a>
   </div>
  </div>

  <div class="row row-highlight" style="margin-left:0px;">
   <div class="col-sm-4 col-highlight" style="background-color:#DAA520;">
    <a href="0">National Academic Depository (NAD)<br>[Information for Students]</a>
   </div>
   <div class="col-sm-4 col-highlight" style="background-color:#F0E68C;">
    <a href="0">Research/Ph.D.<br>[Important Informations]</a>
   </div>
   <div class="col-sm-4 col-highlight" style="background-color:#DAA520">
    <a href="0">e-Lectures</a>
   </div>
  </div>
  <div class="row row-highlight" style="margin-left:0px;">
   <div class="col-sm-4 col-highlight" style="background-color:#F0E68C;">
    <a href="0">IQAC-AQAR-SSS<br>[Student Satisfaction Survey (SSS)]</a>
   </div>
   <div class="col-sm-4 col-highlight"  style="background-color:#DAA520;">
    <a href="0"> Circulars / Notifications for Colleges</a>
   </div>
   <div class="col-sm-4 col-highlight" style="background-color:#F0E68C;">
    <a href="0">Journals</a>
   </div>
  </div>
 </div>

<!----------------------- Footer Part -------------------------------->
<?php
   include_once('footer.php');
?>

<?php
   include_once('foot.php');
?>

<!---------------------- Footer Part End ----------------------------->
</body>
</html>