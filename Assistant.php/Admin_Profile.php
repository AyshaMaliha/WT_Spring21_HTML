<?php

?>

<html>
	<head></head>
	<body>
	<style>
body{
	background-color:rgb(255, 255, 204);
}
.login-div{
	border:2px solid ;
	margin:auto; rgb(50,50,50);
	width:50%;
	margin-top:10%;
	background-color:white;
}
.my-font{
	font-size:px;
	font-family:consolas;
}
.my-text-field{
	width:200px;
}
.btn-mine{
	background-color:blue;
	border:none;
	color:white;
}

</style>

	    <fieldset style="width:1000px" align="center">
	    <legend align="center"><center><h1>Hospital Hub</h1></center></legend>
		<img align="left" src="Admin.jpg" alt="" height="300px" width="250px">
			
			 
			<center><h1>Tahsin Hasan Saad</h1></center>
			<center><h2>ID: 3517</h2></center>
			
			<br>
			<br><br><br>
			
		<span style="text-align=centre"><b>Hospital</b></span>
		<select>
		<option>Popular Diagnostic Centre</option>
		<option>Kurmitola Hospital</option>
		<option>Uttara Hospital</option>
		</select>
		 	
		<br>
		<br>
		
		<span style="text-align= centre" class="my-font"><b>Coordinator</b></span>
		
		<select>
		<option>Jurat</option>
		<option>Fahim</option>
		
		</select>
		<br>
		<br>
		<span><b>Assistant</b></span>
		
		<button>Noor A Aysha</button>
		<br>
		<br>
		
		<tr>
		<td><span class="my-font"><b>Patient Name<b></span></td>
		<td>:<input class="my-font"type="text"></td>		
		</tr>
		
		
			
			
			<br><br>
			<br>
			<br>
			<br><br>
				<h4 style="text-align:left;"><a href="Edit_Profile.php">Edit Profile</a></h5>
			     <h4 style="text-align:left;"><a href="Chat.php">Chat</a></h5>
				 <h4 style="text-align:left;"><a href="Notification.php">Notification</a></h5>
				 <br>
				 
				 
				 
		
				
				
				<br>
				
			
		
			
			<a href="Admin_Add_Coordinator.php" target="_blank"><button align="left" style="height: 100px; width: 250px";><b><h2>Add Coordinators</h2></b></button></a>
				<button  onclick="document.location='Login.php'" style="height: 50px; width: 200px; float: right"><b><h3>Log Out</h3></b> </button>

			
			
			
			
	
		
			
		</fieldset>	
		</body>
</html>