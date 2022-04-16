<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "online medicine donation";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
