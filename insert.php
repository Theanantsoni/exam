<?php
	include ("connection.php");

	if(isset($_POST['btnsubmit']))
	{
		 $name = $_POST['txtname'];
		 $fname = $_POST['txtfname'];

		$sql = "INSERT INTO practice VALUES(0,'$name','$fname')";

		$data = mysqli_query($con,$sql);

		//echo "yess success";

		header("location: display.php") ;
	}
?>
