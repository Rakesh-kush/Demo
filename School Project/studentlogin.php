<!DOCTYPE html>
<html>
<head>
	<title></title>
<style type="text/css">
	#log-contain { width:40%;margin:0px 400px;border:1px solid black;line-height:50px;background-color:lightgrey;
                    margin-bottom:80px;
                   
	 }
	.heading { font-size:25px; }
    button { height:40px;width:100px;background-color:blue;color:white;border:none;padding-bottom:20px;
             cursor:pointer; }

    #input{

    	 height:25px;width: 300px;margin-left:15px;background:none;border-bottom-color:black;border-left:none;
    	  border-right:none;border-top:none;outline:none;
    }
    input[type="password"]{

    	 height:25px;width: 300px;margin-left:15px;background:none;border-bottom-color:black;border-left:none;
    	   border-right:none;border-top:none;outline:none;
    }
</style>	
</head>
<body>	
<?php
    
    include_once('header.php');

?>

<div class="container" id="log-contain">
 <center>
  <div class="heading">
	   <label>STUDENT LOGIN</label>
	 </div>
<form >	 	
 <table style="justify-content:center;">	
    <tr>
 	 <td><label><b>User Name</b></label></td>
 	 <td><input type="text" name="user" id="input"></td>	
 	</tr>
 	<tr>
 	 <td><label><b>Password</b></label></td>
 	 <td><input type="password" name="pwd"></td>	
 	</tr>
 </table>
   <button style="color:white;font-size:15px;font-weight: bold;padding-bottom:15px;">Login</button>
</form>
</div>
</center>

<?php
    
    include_once('foot.php');

?>
</body>
</html>