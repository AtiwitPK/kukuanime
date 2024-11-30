<?php
$host="localhost";
$user="root";
$pass='12345678';
$dbname='anime';

$con= mysqli_connect($host,$user,$pass,$dbname);
mysqli_query($con ,"set char set utf8");



$limit_page = 8;
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$limit_start = ($page * $limit_page) - $limit_page;

$query = mysqli_query($con, "SELECT * FROM data_anime ORDER BY id DESC LIMIT $limit_start, $limit_page");
?>




<html>
<head>
<title>KUANIME</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<body>
    <!--Menu-->
<nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-image: url('https://png.pngtree.com/background/20211215/original/pngtree-ancient-style-shading-flowers-and-birds-landscape-chinese-style-beautiful-spring-picture-image_1497736.jpg');background-size: 100%;">
    <a class="navbar-brand" href="./">Kuanime</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
        <a class="nav-link " href="./">Home<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./">Hot anime</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="false">
           List
          </a>
          <div class="dropdown-menu" aria-labelledby="ravbarDropdown">
            <a class="dropdown-item" href="#">Seasonal</a>
            <a class="dropdown-item" href="#">Of all time</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">You will like</a>
       </div>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="true">Soon</a>
        </li>
      </ul>
     
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>

      </form>
    </div>
  </div>
</nav>
 <!--End Menu-->
 

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="web anime/ku1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="web anime/ku2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="web anime/ku3.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


<div class="album py-5 bg-light" style="background-image: url('https://static.vecteezy.com/system/resources/thumbnails/024/701/241/original/apartment-night-lo-fi-animation-blinking-light-in-windows-building-moonlight-residential-animated-2d-cartoon-cityscape-chill-lofi-music-4k-vaporwave-background-alpha-channel-transparency-video.jpg');background-size: 135%;">>
    <div class="container">

    <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Last</li>
  </ol>
</nav>
<div class="row"> 
  

 <?php 

  $query= mysqli_query($con,"SELECT * FROM data_anime ORDER BY id DESC LIMIT $limit_start,$limit_page");
  while($result= mysqli_fetch_array($query)){

  ?>

      
        <div class="col-md-3">
          <div class="card mb-4 shadow-sm">
            <a href="./play.php?id=<?=$result['id']?>">
            <img src="<?=$result['img']?>" while="100%" height="350" class="card-img-top" />
           <div class="card-body">
              <p class="card-text text-center"><?=$result['NAME']?></p>
              </div>
            </a>
            </div>
          </div>
        
        <?php } ?>
        
   </div>

   <div class="btn-toolbar mb-3 text-center" role="toolbar" aria-label="Toolbar with button groups" style="display: block;">
    <div class="btn-group me-2" role="group" aria-label="First group">
        <!-- ปุ่มย้อนกลับ -->
        <?php if($page > 1): ?>
            <a href="?page=<?=($page - 1)?>" class="btn btn-outline-secondary">Previous</a>
        <?php endif; ?>

        <!-- ปุ่มสำหรับทุกหน้า -->
        <?php for ($i = 1; $i <= $limit_page; $i++) { ?>
            <a href="?page=<?=$i?>" class="btn btn-outline-secondary <?=($page == $i) ? 'active' : '';?>"><?=$i?></a>
        <?php } ?>

        <!-- ปุ่มถัดไป -->
        <?php if($page < $limit_page): ?>
            <a href="?page=<?=($page + 1)?>" class="btn btn-outline-secondary">Next</a>
        <?php endif; ?>
    </div>
</div>



</div>
   </div>
    </div>

  
       


<footer class="py-5 text-center text-body-secondary bg-body-tertiary" style="padding: 15px;background-color: #e0c5e5;">
  <p style="margin:0; color:#ff3399;">Anime is life by <a href="./" style="color:#990099;">Kuanime</a> </p>
 
</footer>
</body>
</html>

