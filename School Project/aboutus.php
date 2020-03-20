<!DOCTYPE html>
<html>
<head>
	<title>About Us</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
 *{ margin:0px;padding:0px;box-sizing:border-box; }

 .about { position:relative;width:100%;margin:0px;padding:0px;margin-bottom:0px;margin-top:-19px;}

 .about img { vertical-align:middle;left:0px;width:100%; }

 .about .aboutcontent{
 	position:absolute;bottom:0;background:rgb(0,0,0);top:0;left:0;
    background:rgba(0,0,0,0.5);width:100%;color:#f1f1f1;padding-top:60px;
 }

 .circle { width:8px;height:8px;border-radius:50%;background-color:white;margin-bottom:0px; }

 .row-content { padding:70px;font-size:17px; }


 @media(max-width:786px){

    .row-content { padding-left:50px; }
    .row-line { padding-left:20px;padding-right:20px;align-content:center; }
 }
</style>	
</head>
<body>
<?php

 include('navbar.php');

?>

<div class="container-fluid about">
 <img src="pic/aboutpic.jpg" style="width:100%;height:350px;left:0px;">
  <div class="aboutcontent">
   <center><h1 style="font-weight:bold;font-size:40px;">About Us</h1></center>
   <center style="padding:25px;font-size:20px;">
   	<a href="school.php" style="color:white;font-weight:bold;text-decoration:none;">Home</a>
   	 <label class="circle"></label>
     <label style="font-weight:bold;color:yellow;">About Us</label>
  </center>	
  </div>	
</div>
<div class="container row-content">
 <div class="row row-line">
  <p><strong>Microtek Group of Institutions</strong> was established in year 1999-2000 with admission to shoulder the noble responsibility of producing young and dynamic professionals in the field of Computer & Management Science, Bio Technology , Paramedical Sciences , Mass Communication and Journalism etc, ready to face challenges and demands of the highly changing corporate and industries.</p>
 </div>
 <div class="row row-line">
  <p>We, <strong>Microtek Group of Institutions</strong>, focus on nourishing students energy and aptitude to make them a complete winner.Students who are moving towards a career of immense pride, professionalism and prudence!! Our objective is to sharpen their edges by enhancing their skills to touch the highest niche in their respective field to excel in their way of life!!.</p>
 </div>
 <div class="row row-line">
  <p><strong>Microtek Group of Institutions</strong>is governed by Microtek Educational Society a non profit making organisation the society is approved by AICTE, MHRD Govt. of India New Delhi.</p>
 </div>
 <div class="row row-line">
  <p>Since inception of Microtek it's Alumani base is more than 15000 students & as of now the students on roll strength is more than 5000+. "The best part of <strong>Microtek Group of Institutions</strong>is their dedicated placement support to their deserving students due to this continuous effort <strong>Microtek College of Management & Technology</strong> has grabbed the utmost prestigious award of the country for providing placement to students the "Gold Trophy for Best Institute - Placement by ASSOCHAM, New Delhi for two consecutive years in a row I,e 2014-15 & 2015-16"</p>
 </div>
</div>
<?php

 include('footer.php');
?>
<?php
 include('foot.php');
?>


</body>
</html>