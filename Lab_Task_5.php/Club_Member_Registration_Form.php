<?php
	$name="";
	$err_name="";
	$uname = "";
	$err_uname="";
	$pass="";
	$err_pass="";
	$conpass="";
	$err_conpass="";
	$email="";
	$err_email="";
	$pcode="";
	$number="";
	$err_number="";
	$address="";
	$s_add="";
	$err_s_add="";
	$city="";
	$err_city="";
	$state="";
	$err_state="";
	$zip="";
	$err_zip="";
	$bdate="";
	$day="";
	$err_day="";
	$month="";
	$err_month="";
	$year="";
	$err_year="";
	$gender="";
	$err_gender="";
	$about="";
	$err_about="";
	$bio = "";
	$err_bio="";
	
	
	
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		if(empty($_POST["name"]))
		{
			$err_name = "Name Required";
		}
		
		elseif(htmlspecialchars($_POST["name"]))
		 {
			 $err_name="HTML KeyWords Used";
		 }

		 else 
		 {
			 $name="No keywords used";
			 $name=$_POST["name"];
		 }
		if(empty($_POST["uname"]))
		{
			$err_uname = "Username Required";
		}
		elseif(htmlspecialchars($_POST["uname"]))
		 {
			 $err_uname="HTML KeyWords Used";
		 }
		elseif(strlen($_POST["uname"]) < 6)
		{
			$err_uname = "Username should be at least 6 characters.";
		}
		elseif(strpos($_POST["uname"], " "))
		{
			$err_uname = "Username can not contain white space.";
		}
		else
		{
			$uname = $_POST["uname"];
		}
		if(empty($_POST["uname"]))
		{
			$err_uname = "Username Required";
		}
		elseif(strlen($_POST["uname"]) < 6)
		{
			$err_uname = "Username should be at least 6 characters.";
		}
		elseif(strpos($_POST["uname"], " "))
		{
			$err_uname = "Username can not contain white space.";
		}
		else
		{
			$uname = $_POST["uname"];
		}
		if (strlen($_POST["pass"]) <= 8) {
        $passwordErr = "Your Password Must Contain At Least 8 Characters!";
    }
    elseif(!preg_match("#[0-9]+#",$pass)) {
        $passwordErr = "Your Password Must Contain At Least 1 Number!";
    }
    elseif(!preg_match("#[A-Z]+#",$pass)) {
        $err_pass = "Your Password Must Contain At Least 1 Capital Letter!";
    }
    elseif(!preg_match("#[a-z]+#",$pass)) {
        $err_pass = "Your Password Must Contain At Least 1 Lowercase Letter!";
    }
		if(empty($_POST["conpass"]))
		{
			$err_conpass = "Password Required";
		}
		elseif ($pass == $conpass)
		{
			$conpass = "Password Match";
			$conpass = $_POST["conpass"];
		}
		else
		{
			$err_c_pass = "Password does not match.";
		}
		if(empty($_POST["email"]))
		{
			$err_email = "Email Required";
		}
		else
		{
			$email = $_POST["email"];
		}
		if(empty($_POST["number"]))
		{
			$err_number = "Number Required";
		}
		elseif(is_numeric($number))
		{
			$number = $_POST["number"];
		}
		else
		{
			$err_number = "MUST CONTAIN ONLY NUMERIC VALUES!!";;
		}
		if(empty($_POST["pcode"]))
		{
			$err_pcode = "Code Required";
		}
		else
		{
			$pcode = $_POST["pcode"];
		}
		if(empty($_POST["s_add"]))
		{
			$err_s_add = "Street Required";
		}
		else
		{
			$s_add = $_POST["s_add"];
		}
		if(empty($_POST["city"]))
		{
			$err_city = "City Required";
		}
		else
		{
			$city = $_POST["city"];
		}
		if(empty($_POST["state"]))
		{
			$err_state = "State Required";
		}
		else
		{
			$state = $_POST["state"];
		}
		if(empty($_POST["zip"]))
		{
			$err_zip = "Zip/Postal Code Required";
		}
		else
		{
			$zip = $_POST["zip"];
		}
		if(empty($_POST["bio"]))
		{
			$err_bio = "Bio Required";
		}
		else
		{
			$bio = $_POST["bio"];
		}
		
		 
		if(!isset($_POST["gender"]))
		{ 
			$err_gender = "No buttons were checked."; 
		} 
		else
		{
			$gender = $_POST["gender"];
		}
		if(!isset($_POST["about"]))
		{ 
			$err_about = "No buttons were checked."; 
		} 
		else
		{
			$about = $_POST["about"];
		}
		
		
		
		
		
		
		echo "Name: ". $_POST["name"]."<br>";
		echo "User Name: ". $_POST["uname"]."<br>";
		echo "Password: ". $_POST["pass"]."<br>";
		echo "Confirmed Password: ". $_POST["conpass"]."<br>";
		echo "Email: ". $_POST["email"]."<br>";

		echo "Post Code: ". $_POST["pcode"]."<br>";
		echo "Number: ". $_POST["number"]."<br>";
		echo "Address: ". $_POST["s_add"].  $_POST["city"].  $_POST["state"].  $_POST["zip"]. "<br>";
		echo "Gender: ". $gender."<br>";
		echo "Date of Birth: ". $day,  $month, $year."<br>";
		echo "Bio: ". $_POST["bio"]."<br>";
		
		 /*$var=array($_POST["hobbies"]);
			  echo "hobbies: ";
			  
			  for($i=0;$i<count($var) ;$i++)
			  {
				  echo $var[$i].", ";
			  }*/
			  
		$var = $about;
		echo "Where did you hear about us?: ";
		if (is_array($var)) {
			for($i=0; $i<count($var); $i++)
			{
				echo $var[$i]. ", ";
			}
		}else{
			echo $var;
		}
		
	}
	
	

?>


<html>
	<head></head>
	<body>
	<fieldset>	
		<legend><h1>Club Member Registration</h1></legend>
		<form action="" method="post">
			<table>
			    <tr>
					<td><span><b>Name</b>:</span></td>
					<td><input type="text" name="name" value = "<?php echo $name;?>"><br>
					<td><span><?php echo $err_name;?></span></td>
				</tr>
				<tr>
					<td><span><b>Username</b>:</span></td>
					<td><input type="text" name="uname" value = "<?php echo $uname;?>"><br>
					<td><span><?php echo $err_uname;?></span></td>
				</tr>
				<tr>
					<td><span><b>Password</b>:</span></td>
					<td><input type="password" name="pass" value = "<?php echo $pass;?>"><br>
					<td><span><?php echo $err_pass;?></span></td>
				</tr>
				<tr>
					<td><span><b>Confirm Password</b>:</span></td>
					<td><input type="password" name="conpass" value = "<?php echo $conpass;?>"><br>
					<td><span><?php echo $err_conpass;?></span></td>
				</tr>
				<tr>
					<td><span><b>Email</b>:</span></td>
					<td><input type="text" name="email" value = "<?php echo $email;?>"><br>
					<td><span><?php echo $err_email;?></span></td>
				</tr>
				<tr>
				    <td><span><b>Phone</b>:</span></td>
					<td><input type="text" name="pcode" size="3" placeholder ="Code" value="<?php echo $pcode;?>">-<input type="text" name="number" size="9" placeholder ="Number" value="<?php echo $number;?>"><br>
					<td><span><?php echo $err_number;?></span></td>
				</tr>	
				<tr>
				
					<td><span><b>Address</b>:</span></td>
					
					<td><input type="text" name="s_add" placeholder = "Street Address" value = "<?php echo $s_add;?>"><br>
					<td><span><?php echo $err_s_add;?></span></td>
				
				<tr>
				<td></td>
					<td><input type="text" name="city" size = "6" value = "<?php echo $city;?>" placeholder = "City"> - <input type="text" name="state" size = "6" value = "<?php echo $state;?>" placeholder = "State"><br>
					<td><span><?php echo $err_city;?></span></td>
					<td><span><?php echo $err_state;?></span></td>
				
					<tr>
					<td></td>
					<td><input type="text" name="zip" placeholder = "Postal/Zip Code" value = "<?php echo $zip;?>"><br>
					<td><span><?php echo $err_zip;?></span></td>
					</tr>
					</tr>
					</tr>
					
				<tr>
					<td><span><b>Birth Date</b>:</span></td>
					<td><select name="day">
							<option disabled selected>Day</option>
							<?php
							    for($i=1;$i<=31;$i++){
									echo "<option>$i</option>";
								}
							?>
							</select>
					<td><span><?php echo $err_day;?></span></td>
					<td><select name = "month">
					    <option disabled selected>Month</option>
					    <?php
						$month= array("Jan" => "1", "Feb" => "2", "Mar" => "3", "Apr" => "4","May" => "5","Jun" => "6","Jul" => "7","Aug" => "8","Sep" => "9","Oct" => "10","Nov" => "11","Dec" => "12");
						foreach($month as $j=>$j_val)
						{
							echo "<option> $j($j_val)<option>";
						}
						?>	
						</select>
					<td><span><?php echo $err_month;?></span></td>	
					<td><select name="year">
							<option disabled selected>Year</option>
							<?php
							    for($i=1900;$i<=2021;$i++){
									echo "<option>$i</option>";
								}
							?>
							</select>
					<td><span><?php echo $err_year;?></span></td>
						
					</td>
				</tr>
				<tr>
					<td><span><b>Gender</b>:</span></td>
					<td><input type="radio" name="gender" value="Male"><span>Male</span>
					    <input type="radio" name="gender" value="Female"><span>Female</span></td>
					<td><span><?php echo $err_gender;?></span></td>
				</tr>
				<tr>
					<td><span><b>Where did you hear about us?</b>:</span></td>
					<td><input type="checkbox" value = "A Friend or Colleague" name = about[] > A Friend or Colleague<br>
					    <input type="checkbox" value = "Google" name = about[] > Google<br>
						<input type="checkbox" value = "Blog Post" name = about[] > Blog Post<br>
						<input type="checkbox" value = "News Article" name = about[] > News Article<br>
						<td><span><?php echo $err_about;?></span></td>
				</tr>
				
				<tr>
					<td><span><b>Bio</b>:</span></td>
					<td><textarea name="bio" value = "<?php echo $uname;?>"></textarea><br>
					<td><span><?php echo $err_bio;?></span></td>
				</tr>
				
			</table>
			<br>
			<input type="submit" name="Register">
		</form>
		</fieldset>
	</body>
</html>