<?php
    include "connection.php";
?>

<?php
    $data=mysqli_query($con,"SELECT * FROM data");
?>

<center>
<table border="5px" bordercolor="red" width="80%" cellspacing="15" align="center">
    <tr>
        <th>st_id</th>
        <th>st_name</th>
        <th>st_contact</th>
        <th>st_spid</th>
        <th colspan="2">Action</th>
</tr>
    <?php
        while($row = mysqli_fetch_array($data))
        {
    ?>
    <tr>
        <td><?php echo $row['st_id']; ?></td>
        <td><?php echo $row['st_name']; ?></td>
        <td><?php echo $row['st_contact']; ?></td>
        <td><?php echo $row['st_spid']; ?></td>
        
        <td><a href="edit.php?edit_id=<?php echo $row['st_id']; ?>"> Update </a> </td>
        <td><a href="delete.php?del_id=<?php echo $row['st_id']; ?> "> Delete </a> </td>
    </tr>
    <?php
        }
    ?>
</table>
</center>