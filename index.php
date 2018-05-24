<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Hêu Hêu Team</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <link rel="stylesheet" href="css/timelinepage.css">

  
</head>

<body>
  
<div class="timeline-container" id="timeline-1">

  <div class="timeline-header">
    <h2 class="timeline-header__title">Hêu Hêu Team</h2>
    <h3 class="timeline-header__subtitle">Tạo album mới</h3>
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
      echo"  <h2 class='timeline__content-title'>".$row['date']."</h2>";
      echo"  <p class='timeline__content-desc'>".$row['title']."</p>";
      echo"</div>";
    echo"</div>";
      }
       ?>
    <!-- <div class="timeline-item" data-text="Team 2.4 Hêu Hêu">
      <div class="timeline__content"><img class="timeline__img" src="https://i.pinimg.com/originals/2b/06/20/2b0620a68844100a4dfe8b02ff24abd4.jpg"/>
        <h2 class="timeline__content-title">2002</h2>
        <p class="timeline__content-desc">2 năm sau thành lập công ty mạng........</p>
      </div>
    </div>
    <div class="timeline-item" data-text="Team 2.4 Hêu Hêu">
      <div class="timeline__content"><img class="timeline__img" src="http://buxtedvillage.org.uk/wp-content/uploads/2010/06/IMG_3879.jpg"/>
        <h2 class="timeline__content-title">2008</h2>
        <p class="timeline__content-desc">Sau 8 năm bước trên nền công nghiệp mạng vĩ đại</p>
      </div>
    </div>
    <div class="timeline-item" data-text="Team 2.4 Hêu Hêu">
      <div class="timeline__content"><img class="timeline__img" src="https://img.otofun.net/upload/v5/9339/0u1r38nm2bejtdi7kqs5_14c9c255c8950ff4cf14f6b66ee373d7.jpg"/>
        <h2 class="timeline__content-title">2012</h2>
        <p class="timeline__content-desc">Trải qua 12 năm sau thành lập đã trở nên giàu có đầy quyền lực</p>
      </div>
    </div>
    <div class="timeline-item" data-text="Team 2.4 Hêu Hêu">
      <div class="timeline__content"><img class="timeline__img" src="http://www.iwebstreet.com/wp-content/uploads/2014/01/The-Longaberger-Company.jpg"/>
        <h2 class="timeline__content-title">2016</h2>
        <p class="timeline__content-desc">16 năm ròng rã công ty ngày ngày phát triển</p>
      </div>
    </div>
    <div class="timeline-item" data-text="Team 2.4 Hêu Hêu">
      <div class="timeline__content"><img class="timeline__img" src="https://c1.staticflickr.com/3/2204/2195151272_7cc6abf1eb.jpg"/>
        <h2 class="timeline__content-title">2018</h2>
        <p class="timeline__content-desc">2018 công ty đạt đỉnh cao ngành công nghiệp sống trong nhung lụa</p>
      </div>
    </div> -->
  </div>
</div>
<div class="demo-footer"><a href="http://www.turkishnews.com/Ataturk/life.htm" target="_blank">Template made by Hêu Hêu Team</a></div>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>

    <script src="js/timelinepage.js"></script>

</body>
</html>
