<?php
$db         = "notes";
$dbhost     = "localhost";
$dbuser     = "root";
$dbpassword = "";

$create = "CREATE DATABASE IF NOT EXISTS notes";
$create1 = "CREATE TABLE IF NOT EXISTS notes.notes (
  `id` int(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1";
$create2 = "CREATE TABLE IF NOT EXISTS notes.users (
  `id` int(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `username` varchar(64) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `remember_token` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1";

$conn = new mysqli($dbhost,$dbuser,$dbpassword);

if($conn->connect_error) {
  die("Connection failed: ".$conn->connect_error);
}
if($conn->query($create) === TRUE) {
  $conn->query($create1);
  $conn->query($create2);


}
?>
