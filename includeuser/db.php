<?php

$db['db_host'] = "localhost";
$db['db_user'] = "root";
$db['db_pass'] = "Vino$$$1999";
$db['db_name'] = "miniprojectmtb";


foreach($db as $key => $value)
{
    define(strtoupper($key),$value);
}

$link = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);

?>