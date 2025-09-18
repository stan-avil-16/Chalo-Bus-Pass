<?php
$host = "localhost";
$user = "root";
$psw = "";
$dbname = "chalo";

$con= mysqli_connect($host,$user,$psw,$dbname);

if(!$con){
    die("connection failed:".mysqli_connect_error());
} 