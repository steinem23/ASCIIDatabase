<?php

    $mydb = @mysql_connect("localhost", "fenwickgg", "900556709");
    if (!$mydb) {
        die('Could not connect: ' . mysql_error());
    }
    mysql_select_db("DBS17T-8", $mydb);
    
    $sql='DELETE FROM ' . $_POST[table] . ' WHERE ' . $_POST[field2] . '  '.$_POST[field3].' ' .$_POST[field4] . ';';
    if (!mysql_query($sql,$mydb)) {
        die('Error: ' . mysql_error());
    }
    echo "record(s) modified";

?>
