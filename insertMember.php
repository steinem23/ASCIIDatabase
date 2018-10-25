<?php
$con = mysql_connect("localhost","harrisbd","900632055");
if (!$con)
 {
 die('Could not connect: ' . mysql_error()); 
 }
mysql_select_db("DBS17T-8", $con);
$sql="INSERT INTO member (email, fname, MI, lname, phoneNo, year, major, gender)
VALUES
('$_POST[memail]','$_POST[mfname]','$_POST[minit]','$_POST[mlname]','$_POST[MphoneNo]','$_POST[year]','$_POST[major]','$_POST[gender]')";
if (!mysql_query($sql,$con))
 {
 die('Error: ' . mysql_error());
 }
echo "record(s) added";
mysql_close($con);
?>  