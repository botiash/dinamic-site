<?php include "path.php";
include "app/database/db.php";?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!-- FONT AWESOME-->

    <script src="https://kit.fontawesome.com/dbdccedf36.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Forum&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <title> mind blog</title>
</head>
<body>

<?php include("app/include/header.php"); ?>

<!-- block karuseli START -->
<div class=" container">
    <div class="row" >
        <h2 class="slider-title"> TOP CUTIES</h2>
    </div>
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/images/12.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption-hack carousel-caption d-none d-md-block">
                    <h5> <a href="">  Dog</a></h5>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/images/10.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption-hack carousel-caption d-none d-md-block">
                    <h5><a href=""> Dog </a></h5>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/images/11.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption-hack carousel-caption d-none d-md-block">
                    <h5><a href="">  Dog</a></h5>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

<!-- block karuseli END -->
<!-- block main -->
<div class="container">
<div class="content row">
    <!-- MAIN CONTENT -->
    <div class="main-content col-md-9 col-12">
<h2> Последние публикации</h2>
        <div class="post row">
<div class="img col-12 col-md-4">
    <img src="assets/images/2.jpeg" alt="" class="img-thumbnail">
</div>
<div class="'post_text col-12 col-md-8">
    <h3>
        <a href="single2.php"> obshim koroche tak</a>
    </h3>
    <i class="far fa-user"> Botia</i>
    <i class="far fa-calendar"> Mar 9,2022 </i>
    <p class="preview-text">
        «Никогда не извиняйтесь за эмоциональность. Пусть это будет знаком того, что у вас доброе сердце, и вы не боитесь его показать. » Бриджит Николь

    </p>
            </div>
        </div>
        <div class="post row">
            <div class="img col-12 col-md-4">
                <img src="assets/images/4.jpeg" alt="" class="img-thumbnail">
            </div>
            <div class="'post_text col-12 col-md-8">
                <h3>
                    <a href="#"> happiness </a>
                </h3>
                <i class="far fa-user"> Botia</i>
                <i class="far fa-calendar"> Mar 9,2022 </i>
                <p class="preview-text">
                   remind yourself everytime
                </p>
            </div>
        </div>
        <div class="post row">
            <div class="img col-12 col-md-4">
                <img src="assets/images/88.png" alt="" class="img-thumbnail">
            </div>
            <div class="'post_text col-12 col-md-8">
                <h3>
                    <a href="single.php"> smth </a>
                </h3>
                <i class="far fa-user"> Botia</i>
                <i class="far fa-calendar"> Mar 11,2022 </i>
                <p class="preview-text">
                    just important
                </p>
            </div>
        </div>
    </div>
    <!-- sidebar Content-->
        <div class="sidebar col-md-3 col-12">
<div class="section search">
    <h3> Search</h3>
    <form action="/" method="post">
        <input type="text" name="search-term" class="text-input" placeholder="Search...">
    </form>
</div>


            <div class="section topics">
                <h3> Topics</h3>
                <ul>
                    <li> <a href="#">Poems</a></li>
                    <li> <a href="#">Quotes</a></li>
                    <li> <a href="#">Fictions</a></li>
                    <li> <a href="#">Biography</a></li>
                    <li> <a href="#"> Motivation</a></li>
                    <li> <a href="#"> Happiness</a></li>
                </ul>
            </div>
       </div>
    </div>
</div>
<!-- end main block -->
<!--FOOTER -->

<?php include("app/include/footer.php"); ?>
<!-- footer -->

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
-->
</body>
</html>