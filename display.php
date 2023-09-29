<?php
	include ("connection.php");

?>

<?php
	$data = mysqli_query($con,"SELECT * FROM practice");
?>

<table border="5px" width="5px" cellspacing="10" bordercolor="red" >
	<tr>
		<th>eid</th>
		<th>ename</th>
		<th>efname</th>
		<th colspan="2">Action</th>
	</tr>
	<?php
		while($row = mysqli_fetch_array($data))
		{
	?>
	<tr>
		<td><?php echo $row['eid']; ?></td>
		<td><?php echo $row['ename']; ?></td>
		<td><?php echo $row['efname']; ?></td>
		<td>Edit</td>
		<td><a href="delete.php?del=<?php echo $row['eid']; ?>">Delete</a></td>
	</tr>
	<?php
		}
	?>

</table>