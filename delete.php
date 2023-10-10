<?php
    include "connection.php";

    if(isset($_GET['del_id']))
    {
        $delete = "DELETE FROM data WHERE st_id=$_GET[del_id]";

        mysqli_query($con,$delete);

        header("location: display.php");
    }
?>