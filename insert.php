<?php
    include "connection.php";

    if(isset($_POST['btnsubmit']))
    {
        $name = $_POST['txtname'];
        $contact = $_POST['txtcontact'];
        $spid=$_POST['txtspid'];

        $sql="INSERT INTO data VALUES(0,'$name','$contact','$spid')";

        /*if($sql)
        {
            echo "Data Inserted";
        }
        else
        {
            echo "Not Inserted";
        }*/
        
        $data = mysqli_query($con,$sql);

        header("location: display.php");
    }
?>