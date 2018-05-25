<?php
require "database-config.php";

if(isset($_POST["usernamesu"]) && !empty($_POST['usernamesu'])){
    $username = $_POST["usernamesu"];

    $sql = "SELECT * from users WHERE username = '".$username."'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        echo "exist";
    } else{
        echo "ok";
    }
mysqli_close($conn);
} else {
	echo "empty";
}
?>
