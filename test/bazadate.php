<?php
$conn = new mysqli('localhost', 'root', '','attila');
// database connection code
if(isset($_POST['Register']))
   {
// get the post records

    $txtFirst_Name = $_POST['firstname'];
    $txtLast_Name = $_POST['lastname'];
    $txtEmail = $_POST['email'];
	$txtDivision = $_POST['division'];
	$txtB_Date = $_POST['B_Date'];
	$txtSelect_R = $_POST['maraton'];

	// database insert SQL code
	$sql = "INSERT INTO race (`First_Name`, `Last_Name`, `email`, `Grup`, `birth_date`,`Race`)
                  VALUES ( '$txtFirst_Name' , '$txtLast_Name', '$txtEmail' , ' $txtDivision' , '$txtB_Date' , '$txtSelect_R')";

// insert in database 
	$rs = mysqli_query($conn, $sql);
	if($rs)
	{
		echo "Race Details Inserted";
	}
	}
	else
	{
		echo "Are you a genuine visitor?";
	
	}
?>