<?php
error_reporting(0);

$server 	= "localhost";
$user   	= "root";
$password 	= "123456";
$database	= "tickets";

$cn  = mysql_connect( $server, $user , $password );

if (!$cn ){
	die("Error connecting to server");
}

$db = mysql_select_db($database );

if (!$db )
	die("Error connecting to the database");

