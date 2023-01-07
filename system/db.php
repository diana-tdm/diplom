<?php
session_start();
$dbHost = "localhost";
$dbName = "diplom";
$dbUsername = "root";
$dbPassword = "root";
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);