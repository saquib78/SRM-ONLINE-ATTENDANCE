<?php

	if(isset($_POST['name'])){
	$server = "localhost";
	$username = "root";
	$password = "";

	$con = mysqli_connect($server,$username,$password);

	if(!$con)
	{
		die("connection to this database failed due to" .
		mysqli_connect_error());
	}
	//echo "success conecting to the db";


	$name = $_POST['name'];
	$reg_no = $_POST['reg_no'];
	$subject = $_POST['subject'];
	$batch = $_POST['batch'];

	$sql = "INSERT INTO `attendance`.`attendance` (`name`, `reg_no`, `subject`, `batch`, `dt`) VALUES ('$name', '$reg_no', '$subject', '$batch', current_timestamp());";

	//echo $sql;

	if($con->query($sql) == true)
	{
		//echo "successfully inserted";
	}
	else
	{
		echo "ERROR : $sql <br> $con ->error";
	}

	$con->close();


}

?>


<!DOCTYPE html>
<html>
<head>
	<title>ATTENDANCE MANAGENMENT</title>
	<link rel="stylesheet" type="text/css" href="mobile.css">
</head>
<body class="all">
	<h1><i>SRM CSE ONLINE ATTENDENCE MANAGENMET<i></h1>

	<div id="in">
	<form method="POST" action="index.php" class="fom">
		NAME : <input type="text" name="name" placeholder="Enter Your Name" class="name"><br>
		REG NO : <input type="text" name="reg_no" placeholder="Enter Your Registration Number" class="reg_no"><br>
		SUBJECT : 
		<select class="sub" name="subject">
			<option value = "Transforms and Boundary Value Problems"> Transforms and Boundary Value Problems </option>
			<option value = "Biology"> Biology </option>
			<option value = "Analog and Digital Electronics"> Analog and Digital Electronics </option>
			<option value = "Data Structures and Algorithms"> Data Structures and Algorithms </option>
			<option value = "Object Oriented Design and Programming"> Object Oriented Design and Programming </option>
			<option value = "Computer Organization and Architecture"> Computer Organization and Architecture </option>
			<option value = "Management Principles for Engineers"> Management Principles for Engineers </option>
			<option value = "Competencies in Social Skills"> Competencies in Social Skills </option>
			
		</select><br>
		BATCH : 
		<select class="btch" name="batch">
			<option value="Aerospace"> Aerospace </option>
			<option value="Automobile"> Automobile </option>
			<option value="Automotive"> Automotive </option>
			<option value="Biotech"> Biotech </option>
			<option value="Chemical"> Chemical </option>
			<option value="CSE-IOT"> CSE-IOT </option>
			<option value="Biotech-RM"> Biotech-RM </option>
			<option value="Biotech-GE"> Biotech-GE </option>
			<option value="Civil"> Civil </option>
			<option value="ECE-BM"> ECE-BM </option>
			<option value="ECE-EIE"> ECE-EIE </option>
			<option value="Nanotech"> Nanotech </option>
			<option value="CSE-AIML"> CSE-AIML </option>
			<option value="CSE-BDA"> CSE-BDA </option>
			<option value="CSE-CC"> CSE-CC </option>
			<option value="CSE-CN"> CSE-CN </option>
			<option value="CSE-CS"> CSE-CS </option>
			<option value="CSE-IT"> CSE-IT </option>
			<option value="CSE-SE"> CSE-SE </option>
			<option value="CSE"> CSE </option>
		</select><br>
		<input type="submit" name="submit" class="btn">
	</form>
</div>

<footer class="foot"><center><p>&copy;2020 And It Is <strong> Tottly Fake </strong>--> Website Developed by <a href="https://www.linkedin.com/in/abdul-malik-59206b189" target="_blank">Abdul Malik </a> </p></center></footer>
</body>
</html>








