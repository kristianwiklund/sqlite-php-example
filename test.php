<?php

$handle = new SQLite3("database.db",SQLITE3_OPEN_READONLY);
$res = $handle->query("select * from bepa where namn='chimpans';");

while ($row = $res->fetchArray()) {
    print_r($row);

}


?>
