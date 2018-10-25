
<?php
include ("brennerfile.php");
$rank1;
$rank2;
$rank3;
$rank4;
$rank5;

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql1 = "SELECT association FROM sponsor, contributor WHERE Cemail = Semail GROUP BY Semail ORDER BY sum(amountDonated) DESC LIMIT 1";    
$sql2="SELECT association FROM sponsor, contributor WHERE Cemail = Semail GROUP BY Semail ORDER BY sum(amountDonated) DESC LIMIT 1,1"; 
$sql3="SELECT association FROM sponsor, contributor WHERE Cemail = Semail GROUP BY Semail ORDER BY sum(amountDonated) DESC LIMIT 2,1";
$sql4="SELECT association FROM sponsor, contributor WHERE Cemail = Semail GROUP BY Semail ORDER BY sum(amountDonated) DESC LIMIT 3,1"; 
$sql5="SELECT association FROM sponsor, contributor WHERE Cemail = Semail GROUP BY Semail ORDER BY sum(amountDonated) DESC LIMIT 4,1";  
$result1 = mysqli_query($conn, $sql1);
$result2 = mysqli_query($conn, $sql2);
$result3 = mysqli_query($conn, $sql3);
$result4 = mysqli_query($conn, $sql4);
$result5 = mysqli_query($conn, $sql5);

if (mysqli_num_rows($result1) > 0) {
    // output data of each row
	
    while($row = mysqli_fetch_assoc($result1)) {
		$rank1 =  $row['association'] ;  
    }
	while($row = mysqli_fetch_assoc($result2)) {
		$rank2 =  $row['association'] ; 
    }
	while($row = mysqli_fetch_assoc($result3)) {
		$rank3 =  $row['association'] ; 
    }
	while($row = mysqli_fetch_assoc($result4)) {
		$rank4 =  $row['association'] ; 
    }
	while($row = mysqli_fetch_assoc($result5)) {
		$rank5 =  $row['association'] ; 
    }
} else {
    echo "0 results";
}

mysqli_close($conn);

?>   

