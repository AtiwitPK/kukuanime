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