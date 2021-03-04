<?php
$db = mysqli_connect('localhost', 'root', '', 'id');

$sql = "SELECT * FROM users";

$query = mysqli_query($db, $sql);


if(mysqli_num_rows($query)>0){

			echo "<table>";

			echo "<tr>";

			echo "<th>id</th>";
			echo "<th>firstname</th>";
			echo "<th>lastname</th>";
			echo "<th>email</th>";

			echo "</tr>";


			echo "<tr>";

while ($fetch = mysqli_fetch_array($query)) {


			echo "<td>.$fetch[0].</td>";
			echo "<td>.$fetch[1].</td>";
			echo "<td>.$fetch[2].</td>";
			echo "<td>.$fetch[3].</td>";

			echo "</tr>";

}

			echo "</table>";

mysqli_free_result($query);

}






?>