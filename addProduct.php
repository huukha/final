<?php 
header("Content-Type:application/json");
require 'database-config.php';

if($_SERVER["REQUEST_METHOD"] == "POST"){
  if(isset($_POST["product_name"]) && isset($_POST["product_code"])){
       
        
        $title = $_POST["product_name"];
        $des = $_POST["product_code"];
        $date = $_POST["date"];
        ///////////////////////////////////////////////////////////////////////
       
        $target_dir = "images/";
        $target_file = $target_dir .date("YmdHis"). basename($_FILES["fileToUpload"]["name"]);
        move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);

        $target_dir = "images/";
        $target_file2 = $target_dir .date("YmdHis"). basename($_FILES["fileToUpload2"]["name"]);
        move_uploaded_file($_FILES["fileToUpload2"]["tmp_name"], $target_file2);

        $target_dir = "images/";
        $target_file3 = $target_dir .date("YmdHis"). basename($_FILES["fileToUpload3"]["name"]);
        move_uploaded_file($_FILES["fileToUpload3"]["tmp_name"], $target_file3);
        ////////////////////////////////////////////////////////////

        $sql = "INSERT INTO album(title, description, thumbnail,dates) VALUES('".$title."','".$des."','".$target_file."','".$date."')";
        $result = mysqli_query($conn, $sql);

        if ($result === TRUE) {
            $last_id = $conn->insert_id;
        $sql1 = "INSERT INTO photo(title, description, id_album, link) VALUES('".$title."','".$des."','".$last_id."','".$target_file."')";
         $result1 = mysqli_query($conn, $sql1);

          $sql2 = "INSERT INTO photo(title, description, id_album, link) VALUES('".$title."','".$des."','".$last_id."','".$target_file2."')";
         $result2 = mysqli_query($conn, $sql2);

          $sql3 = "INSERT INTO photo(title, description, id_album, link) VALUES('".$title."','".$des."','".$last_id."','".$target_file3."')";
         $result3 = mysqli_query($conn, $sql3);


        }
       
        

        if($result){
            $data["result"] = true;
            $data["message"] =  "Add product successfully";
            // echo header("location: index.php");
          // die();
        }else{
          $data["result"] = false;
          $data["message"] =  "Can not add product. Error: ".mysqli_error($conn);
        }
    }else{
        $data["result"] = false;
        $data["message"] = "Invalid product information";
    }
    echo json_encode($data);
}
 ?>