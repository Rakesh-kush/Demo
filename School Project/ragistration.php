<!DOCTYPE html>
<html>
<head>
	<title>Admin Login </title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<style type="text/css">
    
    .content { width:100%; height:600px; background-color:lightgrey; margin-bottom: 20px; box-shadow: 0px 5px 5px rgba(0,0,0,0.5) }

    .title { text-align:center;padding-top:20px;font-size:40px;font-weight:bold;color:darkblue; }

		.log { margin-top:10px;line-height:40px;align-items:center; }

    .lb{ font-size: 18px; }

		#input { padding-left:5px;margin-left:30px;height:30px;width:450px; }
    input[type="password"] { padding-left:5px;margin-left:30px;height:30px;width:450px; }

		button { margin-left:50px; }
	</style>
</head>
<body>
<?php
 setcookie("localhost","londan",time()+60*60*60);

  include_once('header.php');
?>
<div class="container content">
<div class="title"><b>Student SignUp</b></div>	
<center>
<div class="log">
<form method="post" action="ragister.php">
<table>
	<tr>
	 <td><label class="lb"><b>Name</b></label></td>
	 <td><input type="text" id="input" name="user" required></td>
	</tr>
	<tr>
	 <td><label class="lb"><b>Email</b></label></td>
	 <td><input type="text" id="input" name="mail"  required></td>
	</tr>
	<tr>
	 <td><label class="lb"><b>Date Of Birth</b></label></td>
	 <td><input type="text" id="input" name="dname" required></td>
	</tr>
	<tr>
  <tr>
   <td><label class="lb"><b>Course</b></label></td>
   <td><input type="text" id="input" name="course"  required></td>
  </tr>
  <tr>      
	 <td><label class="lb"><b>Gender</b></label></td>
	 <td><input type="radio" name="m1" value="Male" style="margin-left:50px;"> <span style="font-size: 18px;">Male</span>
       <input type="radio" name="m1" value="Female" style="margin-left:50px;"><span style="font-size: 18px;">Female</span></td>
	</tr>
  	<tr>
  	 <td><label class="lb"><b>Address</b></label></td>
  	 <td><input type="text" id="input" name="adds" ></td>
  	</tr> 
  	<tr>
  	 <td><label class="lb"><b>User Name</b></label></td>
  	 <td><input type="text" id="input" name="uname" required></td>
  	</tr>
  	<tr>
  	 <td><label class="lb"><b>Password</b></label></td>
  	 <td><input type="password" name="pwd" required></td>
  	</tr> 	    
  </table>	<br>
  <input type="submit" name="submit" style="width:180px;height:40px;border:none;background-color:blue;color:white;font-size:20px;font-weight:bold;border-radius:20px;cursor:pointer;outline:none; ">
 </form>
</div>
</center>
</div>

<?php

 include_once('foot.php');

?>
</body>
</html>