<?php

$servername = "DESKTOP-7IMVMIU\SQLEXPRESS";
$dbname = "Sisters";
$connectionInfo = array( "Database"=>$dbname);
$conn = sqlsrv_connect( $servername, $connectionInfo);
if( $conn ) {
    echo "Connection established.<br />";
}else{
    echo "Connection could not be established.<br />";
    die( print_r( sqlsrv_errors(), true));
}