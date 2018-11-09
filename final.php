
<!DOCTYPE html>
<html>

<head>
	<title>Admission Form</title>
	<link rel="stylesheet" href="insert.css">
</head>

<body>
	
	<form action="final.php" method="post">	
		
		<H1>Admission Form</H1><br>

		<label>Admission Date</label><br>        
		<input class="input" type="date" name="admission_date" value="" placeholder="Admission date" required="" />
		<br>
		
		<label>First Name</label><br>
		<input class="input" type="text" name="first_name" value="" placeholder="Enter First name" required="" />
		<br>
		
		<label>Middle Name</label><br>
		<input class="input" type="text" name="middle_name" value="" placeholder="Enter Middle name" />
		<br>
		
		<label>Last Name</label><br>
		<input class="input" type="text" name="last_name" value="" placeholder="Enter Last name" />
		<br>

		<label>Date of Birth</label><br>        
		<input class="input" type="date" name="date_of_birth" value="" placeholder="Date of Birth" required="" />
		<br>
		
		
		<label>Permanent Address</label><br>        
		<input class="input" type="text" name="street_no" value="" placeholder="Street No./Village" />
		<br>
		<input class="input" type="text" name="street_name" value="" placeholder="Street Name" />
		<br>
		<input class="input" type="text" name="area" value="" placeholder="Area" />
		<br>
		<input class="input" type="text" name="thana" value="" placeholder="Thana" />
		<br>
		<input class="input" type="text" name="district" value="" placeholder="Disrict" />
		<br>

		<label>Contact:</label><br />
		<input class="input" type="text" name="contact" value="" placeholder="Enter Contact" required="" />
		<br><br>
		
		<label>Profession</label><br /> 
		<input type="radio" name="pro" value="gov_j">Government Job </input>
		<input type="radio" name="pro" value="pri_j">Private Job </input>
		<input type="radio" name="pro" value="bsn">Business </input>
		<input type="radio" name="pro" value="far">Farmer </input>
		<input type="radio" name="pro" value="rt">Retierd </input>
		<input type="radio" name="pro" value="oth">others </input>
		<br><br>
		
		<label>Admission on</label><br /> 
		<input type="radio" name="room" value="cabin" required="">Cabin </input>
		<input type="radio" name="room" value="ward" required="">Ward </input> 
		<br><br>

		<input class="submit" type="submit" name="submit" value="Insert" />	

	</form>

<?php
		
$connection = mysqli_connect("localhost", "root", "");
		
$db = mysqli_select_db( $connection, "final");

	error_reporting(0);	
		
		if(isset($_POST['submit']))
		{
			
			$admission_date = $_POST['admission_date'];
			$first_name = $_POST['first_name'];
			$middle_name = $_POST['middle_name'];
			$last_name = $_POST['last_name'];
			$date_of_birth = $_POST['date_of_birth'];
			$street_no = $_POST['street_no'];
			$street_name = $_POST['street_name'];
			$area = $_POST['area'];
			$thana = $_POST['thana'];
			$district = $_POST['district'];
			$contact = $_POST['contact'];
			$pro = $_POST['pro'];
			$room = $_POST['room'];

				
	
				 $query = mysqli_query($connection, "insert into admission(
				 	admission_date,first_name,middle_name,last_name,date_of_birth,street_no,street_name,area,thana,district,contact,pro,room) 		values ('$admission_date','$first_name','$middle_name','$last_name','$date_of_birth','$street_no',
				 							'$street_name','$area','$thana','$district','$contact','$pro','$room')");
						
						echo "<br/><br/><span>Data Inserted successfully...!!</span>";
    	}
    			
    			
	
	mysqli_close($connection);

?>					
</body>
</html>