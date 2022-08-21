<?php
require_once '/OpenServer/domains/diplom.loc/includes/db.php';
require_once '/OpenServer/domains/diplom.loc/includes/func_global.php';

$categories = get_categories();

?>


<!doctype html>
<html lang="en">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/style.css">
    <title>Главная страница</title>
</head>


<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="/index.php">ЛюксАвто</a>
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
                            $maxColRows = 4;
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