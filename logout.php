<?php
session_start();
// Change status to Offline
require "database-config.php";
$offline = "UPDATE account SET status = 'Offline' WHERE id = ".$_SESSION['user_session'];
mysqli_query($conn, $offline);
// Logout
unset($_SESSION['user_session']);
header("Location: index.php");
// if(session_destroy()){
// 	header("Location: index.php");
// }
?>