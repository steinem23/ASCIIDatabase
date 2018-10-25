<?php
$con = mysql_connect("localhost","steinem","900581306");
if (!$con)
 {
 die('Could not connect: ' . mysql_error()); 
 }
mysql_select_db("DBS17T-8", $con);
$table = $_POST[table];
$x = $_POST[dkey];
$op = $_POST[compOperator];
$y = $_POST[condition];

$sql= 'select * from ' . $table . ' where ' . $x . $op . $y . ';';
if (!mysql_query($sql,$con))
 {
 die('Error: ' . mysql_error());
 }
$query  = mysql_query($sql, $con);
while ($row = mysql_fetch_assoc($query)) {
    foreach($row as $key => $value) {
        echo "$key = $value <br />";   
    }
    echo "<br>";
}
mysql_close($con);
?>  
