<?php
    include "connection.php";

    if(isset($_GET['edit_id']))
    {
        $sql = "SELECT * FROM data WHERE st_id=" .$_GET['edit_id']; 

        $result = mysqli_query($con,$sql);

        $row = mysqli_fetch_array($result);
    }

    if(isset($_POST['btnsubmit']))
    {
        $name = $_POST['txtname'];
        $contact = $_POST['txtcontact'];
        $spid = $_POST['txtspid'];

        $update = "UPDATE data SET st_name='$name', st_contact='$contact', st_spid='$spid' WHERE st_id=" .$_GET['edit_id'];

        $edit= mysqli_query($con,$update);

        if(isset($sql))
        {
            header("location: display.php");
        }
        else
        {
            echo "ERROR";
        }
    }
?>











<html>
	<head>
		<title>Student Result</title>
	</head>
	<body bgcolor="#efbaa7">
			<center>
			<h1 style="color:red">-----: STUDENT :-----</h1>
			<form action="edit.php?edit_id=<?php echo $row['st_id']; ?>" method="POST">

                Student Name : 
                <input type="text" name="txtname" value="<?php echo $row['st_name']; ?>" size="30"  style="background-color: #b8ffa9; border: none; padding: 10px 20px; margin: 4px 2px; cursor: space; Border-radius:10px; Font-size:15px";> <br><br>
                Student Contact
                <input type="text" name="txtcontact" value="<?php echo $row['st_contact']; ?>" size="30"  style="background-color: #b8ffa9; border: none; padding: 10px 20px; margin: 4px 2px; cursor: space; Border-radius:10px; Font-size:15px";> <br><br>
                Student SPID : 
                <input type="text" name="txtspid" value="<?php echo $row['st_spid']; ?>" size="30" style="background-color: #b8ffa9; border: none; padding: 10px 20px; margin: 4px 2px; cursor: space; Border-radius:10px; Font-size:15px";> <br><br>
			
			<input type="submit" name="btnsubmit" value="Submit" style="background-color: #ddff3c; border: none; color:#ff000080; padding: 15px 30px; text-decoration: none;margin: 8px 4px; cursor: pointer; Border-radius:10px; Font-size:20px";>
		</center>
		</form>
	</body>
</html>