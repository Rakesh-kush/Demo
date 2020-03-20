<!DOCTYPE html>
<html>
<head>
<style type="text/css">
	table td{
     padding:.5em; 
}

</style>

	<title></title>
</head>
<body>
    <?php
     include('header.php');
     
		$name=$_POST['user'];
		$email=$_POST['mail'];
		$dob=$_POST['dname'];
		$course=$_POST['course'];
		$gender=$_POST['m1'];
		$address=$_POST['adds'];
		$Username=$_POST['uname'];
		$Pass=$_POST['pwd'];

       echo "<h2><center><b>Ragistration Details</b></center></h2><br>";
	   echo "<center>";
	   echo "<table border=1>";
	   echo "<tr><td><label><b>Name</b></label></td><td> ".$name."</td></tr>";
	   echo "<tr><td><label><b>Email<b></label></td><td>  ".$email."</td></tr>";
	   echo "<tr><td><label><b>Date of Birth</b></label></td><td> ".$dob."</td></tr>";
	   echo "<tr><td><label><b>Course</b></label></td><td> ".$course."</td></tr>";
	   echo "<tr><td><label><b>Gender</b></label></td><td> ".$gender."</td></tr>";
	   echo "<tr><td><label><b>Address</b></label></td><td>  ".$address."</td></tr>";
	   echo "<tr><td><label><b>Username</b></label></td><td>  ".$Username."</td></tr>";
	   echo "<tr><td><label><b>Password</b></label></td><td>  ".$Pass."</td></tr>";	   	   
	   echo "</table>";
	   echo "</center>";

  
$servername="localhost";
$user="root";
$pass="";
$dbname="dev";

$con=mysqli_connect("$servername","$user","$pass","$dbname");
if(!$con)
{
	die("error to connect with database " .mysqli_connect_error());
}
else
{

   # $sql="update student set Name='Gaurav Sing' where Birth='04/10/2002'";
   //$sql="create table std(id int(6),firstname varchar(30),lastname varchar(30),course varchar(20),mobile int(15),email varchar(30))";
   $sql="INSERT INTO `student`(`Name`, `Email`, `Birth`, `Course`, `Gender`, `Address`, `Username`, `Password`) VALUES ('$name', '$email', '$dob', '$course', 'gender', '$address','$Username',$Pass);";
  // $sql="insert into student(Name,Email,Birth,course,Gender,Address) values('Rakesh 
         // Kushwaha','rakeshbhai98074@gmail.com','14/02/1999','BCA','Male','Bharahe Choura')";
   
   //$sql="update student set id='1' where firstname='vikash'";
   
   //$sql="delete from student where id=3";

	   if(mysqli_query($con,$sql))
   {
   	
   	echo "databae is created";
    
    }
else
{
	echo "Database is not created".mysqli_error($con);
}
	
	}

include('footer.php')
 ?>
</body>
</html>