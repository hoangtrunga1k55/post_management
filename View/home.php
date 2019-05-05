<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
<?php
	
	$DIR_FILE = 'D:\mysql\htdocs\post_management';
	include($DIR_FILE. '\DB_Management.php');

	$dB = new DB_Management();
	$lsUsers = $dB->getAllUser();

?>

<table>
  <tr>
    <th>UserId</th>
    <th>UserName</th>
    <th>Email</th>
    <th>City</th>
    <th>Password</th>
  </tr>
  <?php
  	 if ($lsUsers->num_rows > 0) {
  	 	while($row = $lsUsers->fetch_assoc()) {
  	 		echo "<tr>";
  	 		echo "<td>". $row["user_id"]. "</td>";
			echo "<td>". $row["name"]. "</td>";
			echo "<td>". $row["email"]. "</td>";
			echo "<td>". $row["city"]. "</td>";
			echo "<td>". $row["password"]."</td>";
			echo "</tr>";
  	 	}
  	 } else {
  	 	echo "<tr>";
  	 	echo "<td colspan='5'>0 results</td>";
  	 	echo "</tr>";
  	 }
  ?>
</table>