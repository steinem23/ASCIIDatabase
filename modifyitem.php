<?php

    $mydb = @mysql_connect("localhost", "fenwickgg", "900556709");
    if (!$mydb) {
        die('Could not connect: ' . mysql_error());
    }
    mysql_select_db("DBS17T-8", $mydb);
    
    $sql='UPDATE ' . $_POST[table] . ' SET ' . $_POST[field1] . ' = ' . $_POST[field2] . ' WHERE '.$_POST[field3] .' '.$_POST[field4].' ' .$_POST[field5] . ';';
    if (!mysql_query($sql,$mydb)) {
        die('Error: ' . mysql_error());
    }
    echo "record(s) modified";

?>
