<?php
require "database-config.php";
if(isset($_POST["usernamesu"])){
	$fullname = $_POST["fullname"];
    $username = $_POST["usernamesu"];
    $password = $_POST["passwordsu"];

    $sql = "INSERT INTO users (fullname, username, password) VALUES ('".$fullname."', '".$username."', '".$password."')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
    	echo "ok";
    } else{
        echo "Tài khoản ".$username." đã có người sử dụng";
    }
mysqli_close($conn);
}
?>