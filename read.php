<?php
$username = $_SESSION['username'];
// selecting some information from database
 $details = mysqli_query($database, "SELECT Firstname, Lastname, Email, Address FROM log WHERE username='$username'"); ?>
<div style="overflow-x:auto;">
<table class='table2'>
	<thead>
		<tr>
			<th>First name</th>
			<th>Last name</th>
			<th>Email</th>
			<th>Address</th>

			<th colspan="2">Action</th>
		</tr>
	</thead>
	<!--Fetches the information from the database-->
	<?php while ($row = mysqli_fetch_array($details)) { ?>
		<tr>	<!--printing the information from the database-->
			<td><?php echo $row['Firstname']; ?>&nbsp;</td>
			<td><?php echo $row['Lastname']; ?>&nbsp;</td>
			<td><?php echo $row['Email']; ?>&nbsp;</td>
			<td><?php echo $row['Address']; ?></td>

			
							
			<td>
				<a href="crud.php?del=<?php echo $row['username']; ?>" class="btn-danger">Delete account</a>
			</td>
		</tr>
	<?php } ?>
</table></div>