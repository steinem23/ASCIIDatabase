<?php
$con = mysql_connect("localhost","harrisbd","900632055");
if (!$con)
 {
 die('Could not connect: ' . mysql_error()); 
 }
mysql_select_db("DBS17T-8", $con);
$sql="INSERT INTO contributor (Cemail, Cfname, Clname, association, address, CphoneNo)
VALUES
('$_POST[cemail]','$_POST[cfname]','$_POST[clname]','$_POST[association]','$_POST[address]','$_POST[CphoneNo]')";
if (!mysql_query($sql,$con))
 {
 die('Error: ' . mysql_error());
}
$sql2="INSERT INTO sponsor 
VALUES
('$_POST[cemail]','$_POST[SeventID]','$_POST[amountDonated]')";
if (!mysql_query($sql2,$con))
 {
 die('Error: ' . mysql_error());
 }
 
echo "record(s) added";
mysql_close($con);
?>  
