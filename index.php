<?php include "includes/header.php"; ?>

<?php include "includes/navigation.php"; ?>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="public/carousel/slidelaptop.png" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="public/carousel/slidephone1.png" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="public/carousel/slidephone2.png" alt="Third slide">
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

<div class="container">
    <?php include "includes/smartphone_features/popular_smartphones.php"; ?>
    <?php include "includes/tablet_features/popular_tablets.php"; ?>
    <?php include "includes/laptop_features/popular_laptops.php"; ?>
</div>

<?php include "includes/footer.php"; ?>
