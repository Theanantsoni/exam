<?php
	include ("connection.php");

	if(isset($_GET['del']))
	{

		$delete = "DELETE FROM practice WHERE eid=$_GET[del]";

		mysqli_query($con,$delete);

		//echo "Delete id";
		header("location: display.php");
	}
?>