<?php
    $pname="";
	$err_pname="";
	
	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{ 
      echo " Patient Name: ". $_POST["pname"]."<br>";
	}
	
?>
<html>
	<head></head>
	<body>
	    <fieldset style="width:1000px" align="center">
	    <legend align="center"><center><h1>Hospital Hub</h1></center></legend>
		<form action="" method="post">
		
			<center><h1>Appointment Request List</h1></center>
			<table>
				 <tr>
				 <td><span><b>Requested Appointments</b></span></td>
                    <td>
                        <select name="requests" style="height: 50px; width: 250px">
                            <option disabled selected>Requests</option>
							<?php 
                                echo "<b>Fahim Mahtab Ifsan</b>"
                                
                            ?>
                            
                        </select>
						<?php echo $err_pname;?>
                        
                        
                        
                        
				</tr>
				</table>
			
			
			
			
	
		</form>
		</fieldset>	
		</body>
</html>