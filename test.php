<?php

include ("brennerfile.php");
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT association FROM contributor WHERE association LIKE '%Google%'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
	echo "<table border='1'>
	<tr>
	<th>Rank</th>
	<th>Contributor</th>
	</tr>";
	
    while($row = mysqli_fetch_assoc($result)) {
		
        echo "<tr>";
		echo "<td>" . '1'. "</td>";
		echo "<td>" . $row['association'] . "</td>"; 
		$brenner = $row['association'];
		echo "</tr>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>