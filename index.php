<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: /auth/index.php');
}
?>
<?php

require_once '/OpenServer/domains/diplom.loc/includes/db.php';
require_once '/OpenServer/domains/diplom.loc/includes/func_global.php';

$categories = get_categories();
$marks = get_mark();


?>


<!doctype html>
<html lang="en">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <title>Главная страница</title>
</head>


<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="">ЛюксАвто</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/index.php">Главная</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/admin.php">Админ-панель</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">
                        Каталог
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

                        <div class="columns">
                            <?php
                            $categoryRowsCount = 0;
                            $maxColRows = 1;
                            foreach ($categories as $category) {
                                if ($categoryRowsCount == 0) {
                                    echo '<div class="columns__item"><article class="news">';
                                }
                                ?>

                                <li><a class="dropdown-item"
                                       href="catalog.php?catalog_id=<?= $category['id'] ?>"><?= $category['name'] ?></a>
                                </li>

                                <?php
                                $categoryRowsCount++;
                                if ($categoryRowsCount == $maxColRows) {
                                    echo '</article></div>';
                                    $categoryRowsCount = 0;
                                }
                            }
                            if ($categoryRowsCount > 0) {
                                echo '</article></div>';
                            }
                            ?>
                    </ul>
                </li>

            </ul>
            <!-- <form action="signin/sign_in.php" class="d-flex"> -->
            <form action="auth/index.php" class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Поиск" aria-label="Search">

                <button class="btn btn-outline-success"
                        type="submit"><?= $_SESSION['user']['full_name'] ?></h2></button>
            </form>
        </div>
    </div>
</nav>


<div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="10000">
            <img src="img/4.jpg" class="d-block w-50" alt="...">
            <div class="carousel-caption d-none d-md-block">

            </div>
        </div>
        <div class="carousel-item" data-bs-interval="2000">
            <img src="img/4.jpg" class="d-block w-50" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Метка второго слайда</h5>
                <p>Некоторый репрезентативный заполнитель для второго слайда.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="img/4.jpg" class="d-block w-50" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Метка третьего слайда</h5>
                <p>Некоторый репрезентативный заполнитель для третьего слайда.</p>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Предыдущий</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Следующий</span>
    </button>
</div>



<li class="nav-item ">
    <ul class="-menu" aria-labelledby="navbarDropdown">

        <div class="columns">
            <?php
            $markRowsCount = 0;
            $maxmarkColRows = 5;
            foreach ($marks as $mark) {
                if ($markRowsCount == 0) {
                    echo '<div class="columns__item"><article class="news">';
                }
                ?>

                <li><a class="dropdown-item"
                       href="models.php?mark_id=<?= $mark['id'] ?>"><?= $mark['name'] ?></a>
                </li>

                <?php
                $markRowsCount++;
                if ($markRowsCount == $maxmarkColRows) {
                    echo '</article></div>';
                    $markRowsCount = 0;
                }
            }
            if ($markRowsCount > 0) {
                echo '</article></div>';
            }
            ?>
    </ul>
</li>

<div class="columns__item">
    <article class="news news--first">
        <ul>

        </ul>
    </article>






<!-- <div class="columns">
    <div class="columns__item">
        <article class="news news--first">
            <ul>
                <li><span>A </span><a href="/Catalog/Global/Cars/Acura/Acura.php">Acura</a></li>
                <li><span></span><a href="/Catalog/Global/Cars/Alfa_Romeo">Alfa Romeo</a></li>
                <li><span></span><a href="/Catalog/Global/Cars/Audi">Audi</a></li>
                <li><span>B </span><a href="/Catalog/Global/Cars/BMW">BMW</a></li>
                <li><span>C </span><a href="/Catalog/Global/Cars/Cadillac">Cadillac</a></li>
                <li><span></span><a href="/Catalog/Global/Cars/Chery">Chery</a></li>
                <li><span></span><a href="/Catalog/Global/Cars/Chevrolet">Chevrolet</a></li>
                <li><span></span><a href="/Catalog/Global/Cars/Chrysler">Chrysler</a></li>
                <li><span></span><a href="/Catalog/Global/Cars/Citroen">Citroen</a></li>
                <li><span>D </span><a href="/Catalog/Global/Cars/Daewoo">Daewoo</a></li>
            </ul>
        </article>
    </div>
    <div class="columns__item">
        <article class="news news--second">
            <ul>
                <li><span></span><a href="/Catalog/Global/Cars/Dodge">Dodge</a></li>
                <li><span>F </span><a href="/Catalog/Global/Cars/Fiat">Fiat</a></li>
                <li><span></span><a href="/Catalog/Global/Cars/Ford">Ford</a></li>
                <li><span></span><a href="/Catalog/Global/Cars/Ford_USA">Ford USA</a></li>
                <li><span>G </span><a href="/Catalog/Global/Cars/Geely">Geely</a></li>
                <li><span></span><a href="/Catalog/Global/Cars/Great_Wall">Great Wall</a></li>
                <li><span>H </span><a href="/Catalog/Global/Cars/Honda">Honda</a></li>
                <li><span></span><a href="/Catalog/Global/Cars/Hyundai">Hyundai</a></li>
                <li><span>I </span><a href="/Catalog/Global/Cars/Infiniti">Infiniti</a></li>
                <li><span>J </span><a href="/Catalog/Global/Cars/Jaguar">Jaguar</a></li>
            </ul>
        </article>
    </div>
    <div class="columns__item">
        <article class="news news--third">
            <ul>
                <li><span></span><a href="/Catalog/Global/Cars/Jeep">Jeep</a></li>
                <li><span>K </span><a href="/Catalog/Global/Cars/Kia">Kia</a></li>
                <li><span>L </span><a href="/Catalog/Global/Cars/Land_Rover">Land Rover</a></li>
                <li><span></span><a href="/Catalog/Global/Cars/Lexus">Lexus</a></li>
                <li><span></span><a href="/Catalog/Global/Cars/Lifan">Lifan</a></li>
                <li><span>M </span><a href="/Catalog/Global/Cars/Mazda">Mazda</a></li>
                <li><span></span><a href="/Catalog/Global/Cars/Mercedes">Mercedes</a></li>
                <li><span></span><a href="/Catalog/Global/Cars/MINI">MINI</a></li>
                <li><span></span><a href="/Catalog/Global/Cars/Mitsubishi">Mitsubishi</a></li>
                <li><span>N </span><a href="/Catalog/Global/Cars/Nissan">Nissan</a></li>
            </ul>
        </article>
    </div>
    <div class="columns__item">
        <article class="news news--four">
            <ul>
                <li><span>O </span><a href="/Catalog/Global/Cars/Opel">Opel</a></li>
                <li><span>P </span><a href="/Catalog/Global/Cars/Peugeot">Peugeot</a></li>
                <li><span></span><a href="/Catalog/Global/Cars/Pontiac">Pontiac</a></li>
                <li><span></span><a href="/Catalog/Global/Cars/Porsche">Porsche</a></li>
                <li><span>R </span><a href="/Catalog/Global/Cars/Renault">Renault</a></li>
                <li><span></span><a href="/Catalog/Global/Cars/Rover">Rover</a></li>
                <li><span>S </span><a href="/Catalog/Global/Cars/Saab">Saab</a></li>
                <li><span></span><a href="/Catalog/Global/Cars/Seat">Seat</a></li>
                <li><span></span><a href="/Catalog/Global/Cars/Skoda">Skoda</a></li>
                <li><span></span><a href="/Catalog/Global/Cars/Smart">Smart</a></li>
            </ul>
        </article>
    </div>
    <div class="columns__item">
        <article class="news news--five">
            <ul>
                <li><span></span><a href="/Catalog/Global/Cars/Ssangyong">Ssangyong</a></li>
                <li><span></span><a href="/Catalog/Global/Cars/Subaru">Subaru</a></li>
                <li><span></span><a href="/Catalog/Global/Cars/Suzuki">Suzuki</a></li>
                <li><span>T </span><a href="/Catalog/Global/Cars/Toyota">Toyota</a></li>
                <li><span>V </span><a href="/Catalog/Global/Cars/Volkswagen/Volkswagen.php">Volkswagen</a></li>
                <li><span></span><a href="/Catalog/Global/Cars/Volvo">Volvo</a></li>
                <li><span>В </span><a href="/Catalog/Global/Cars/ВАЗ">ВАЗ</a></li>
                <li><span>З </span><a href="/Catalog/Global/Cars/ЗАЗ">ЗАЗ</a></li>
                <li><span>У </span><a href="/Catalog/Global/Cars/УАЗ">УАЗ</a></li>
            </ul>
        </article>
    </div>
</div>

-->

<br>





<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
-->
</body>

</html>