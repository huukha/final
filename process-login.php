<?php
require "database-config.php";
session_start();

if(isset($_POST["username"])){
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT * from users WHERE username = '".$username."'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            $usernameDB = $row["username"];
            $passwordDB = $row["password"];

            if ($username == $usernameDB && $password == $passwordDB) {
                echo "ok";
                $_SESSION['user_session'] = $row['id'];
                $_SESSION['name'] = $row['fullname'];

                // Change status to Online
                // $online = "UPDATE account SET status = 'Online' WHERE username = '".$username."'";
                // mysqli_query($conn, $online);
            } else{
            	echo "Mật khẩu không chính xác";
            }       
        }
    } else{
        echo "Tài khoản không tồn tại";
    }
mysqli_close($conn);
}
?>
