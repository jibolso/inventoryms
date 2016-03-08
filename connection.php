<?php
/**
 * Created by PhpStorm.
 * User: akpabioignatius
 * Date: 08/03/2016
 * Time: 2:47 PM
 */
$connection = mysql_connect(DB_SERVER, DB_USER, DB_PASS);
if (!$connection){
    die("Database Connection Failed:" .mysql_errno());
}
$db_select = mysql_select_db(DB_NAME, $connection);
if (!$db_select){
    die("Database Connection Failed:" .mysql_error());
}