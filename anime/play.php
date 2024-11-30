<?php
$host="localhost";
$user="root";
$pass='12345678';
$dbname='anime';

$con= mysqli_connect($host,$user,$pass,$dbname);
mysqli_query($con ,"set char set utf8");
$id = $_GET['id'];
$query= mysqli_query($con,"SELECT * FROM data_anime WHERE id = $id");
$result= mysqli_fetch_array($query);

?>

<html>
<head>
<title><?=$result['NAME']?></title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<body>
    <!--Menu-->
<nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: #d7b9df !important;">
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
          <a class="nav-link" href="#">Hot anime</a>
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


<div class="album py-5 bg-light" style="background-color: #e3d8e5 !important;">>
    <div class="container">

    <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="./">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page"><?=$result['NAME']?></li>
  </ol>
</nav>
        <div class="row"> 
        <div class="col-md-3">
            <div class='card mb-4 shadow-sm'>
            <img src="<?=$result['img']?>" while='100%' height='350' class="card-img-top" />
            </div>
          </div>
           <div class="col-md-9">
            <div class='card mb-4 shadow-sm'>
            <iframe width="100%" height="350" src="https://www.youtube.com/embed/<?=$result['Videoex']?>"  frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
          </div>
        </div> 

        <div class="row"> 
        <div class="col-md-12">
            <div class='card shadow-sm text-center' style="background-color: #9f95a1 !important;color: wheat;" ><h3>Teaser</h3></div>
            <div class='card mb-4 shadow-sm'>
            <iframe width="100%" height="623" src="https://www.youtube.com/embed/<?=$result['Videomain']?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
          </div>
          <!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
    </title>
</head>
<body>
    <h1><?=$result['Text']?>"</h1>
    <style>
        /* ปรับขนาดตัวอักษรในแท็ก h1 */
        h1 {
            font-size: 16px;
        }
        </style>
    
</body>
</html>

<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
    </title>
</head>
<body>
    <h1><?=$result['TEXT2']?>"</h1>
     <style>
    h1 {
            font-size: 16px;
            color: Purple;
            background-color: white; /* สีน้ำเงิน */
            padding: 10px; /* เพิ่มระยะห่างภายใน */
            border-radius: 10px; /* มุมโค้ง */
        }

        /* เพิ่มกรอบและสีพื้นหลังให้กับฟอร์ม */
        form {
            background-color: #ecf0f1; /* สีพื้นหลังเทาอ่อน */
            padding: 20px;
            border: 2px solid #3498db; /* กรอบสีน้ำเงิน */
            border-radius: 15px; /* มุมโค้ง */
            width: 400px; /* กำหนดความกว้างของฟอร์ม */
            margin: auto; /* จัดกึ่งกลาง */
        }
        </style>
    
</body>
</html>




   </div>
    </div>
        
       


<footer class="py-5 text-center text-body-secondary bg-body-tertiary" style="padding: 15px;background-color: #e0c5e5;">
  <p style="margin:0; color:#ff3399;">Anime is life by <a href="./" style="color:#990099;">Kuanime</a> </p>
 
</footer>
</body>
</html>

