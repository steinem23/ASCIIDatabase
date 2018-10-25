<html>
<body>
<?php
    $con = mysql_connect("localhost","harrisbd","900632055");
    mysql_select_db("DBS17T-8",$con); 
    $result = @mysql_query("SELECT * FROM member WHERE fname = '$_POST[memberInfo]';",$con);
    while($row = mysql_fetch_array($result))
    {
          echo ("First Name: {$row['fname']}<br>  "."Last Name: {$row['lname']} <br>  ".
               "Email: {$row['email']}<br>  "."Phone Number: {$row['phoneNo']}<br>  "."Year: {$row['year']}<br>" ."Major: {$row['major']}<br>".
                "Points: {$row['points']}<br>"."team: {$row['team']}<br>");
    }
?> 
</body> 
</html>
