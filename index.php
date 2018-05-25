<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Hêu Hêu Team</title>
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <link rel="stylesheet" href="css/timelinepage.css">

  
</head>

<body>

  
<div class="timeline-container" id="timeline-1">

  <div class="timeline-header">
    <h2 class="timeline-header__title">Hêu Hêu Team</h2>
    <h3 class="timeline-header__subtitle"><a href="#"  data-toggle="modal" data-target="#myModal">Tạo album mới</a></h3>
    <h3 class="timeline-header__subtitle">Đăng xuất</h3>

  </div>
  <div class="timeline">
    <
    <?php 
      $connect = mysqli_connect("localhost", "root", "", "xuka_db");
      mysqli_query($connect, "SET NAMES 'utf8'");
      $query = "SELECT * FROM album";
      $data = mysqli_query($connect, $query);
      while($row = mysqli_fetch_assoc($data)){
      $countquery="select * from photo where id_album=".$row['id'];
      $data1 = mysqli_query($connect, $countquery);
      $count= mysqli_num_rows($data1);
      echo"<div class='timeline-item' data-text='".$row['description']."'>";
      echo"<div class='timeline__content'><a href='single/single.php?id=".$row['id']."'><img class='timeline__img' src='".$row['thumbnail']."'/></a>";
      echo"  <h2 class='timeline__content-title'>".$row['dates']."</h2>";
      echo"  <p class='timeline__content-desc'>".$row['title']."</p>";
      echo"</div>";
    echo"</div>";
      }
       ?>


    </div>
     
    
  </div>
</div>
<div id="myModal" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title"><i class="fa fa-plus"></i> New Product</h4>
          </div>
          <div class="modal-body">
            <form id="add-product-form" method="POST" action="<?php  $_SERVER["PHP_SELF"] ?>" enctype="multipart/form-data">
              <div class="form-group">
                <label for="name">Title</label>
                <input type="text" class="form-control" name="product_name" id="name" required>
              </div>
              <div class="form-group">
                <label for="code">Description</label>
                <input type="text" class="form-control" name="product_code" id="code">
              </div>

              <div class="form-group">
                <label for="code">Date</label>
                <input type="text" class="form-control" name="date" id="code">
              </div>




              <div class="form-group">
              <label for="fileToUpload">Image</label>
              <input type="file" name="fileToUpload" id="fileToUpload">
              <img src="#" id="img-preview" style="height: 150px">              
              </div>
              <div class="form-group">
              <label for="fileToUpload">Image 2</label>
              <input type="file" name="fileToUpload2" id="fileToUpload">
                     
              </div>
              <div class="form-group">
              <label for="fileToUpload">Image 3</label>
              <input type="file" name="fileToUpload3" id="fileToUpload">
                   
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-success" id="add-btn" style="width: 20%" data-dismiss="modal">Add</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
<div class="demo-footer"><a href="http://www.turkishnews.com/Ataturk/life.htm" target="_blank">Template made by Hêu Hêu Team</a></div>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>

    <script src="js/timelinepage.js"></script>
     <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>
    <script src="js/sb-admin-charts.min.js"></script>
    <script type="text/javascript" src="script.js"></script>

</body>
</html>
