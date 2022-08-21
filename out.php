<?php

require_once '/OpenServer/domains/diplom.loc/includes/init.php';

include('/OpenServer/domains/diplom.loc/includes/nav.php');


$productId = $_GET['id'];
$product = get_product($productId);

$reviews = get_reviews($productId);

$user = get_user($_SESSION['user_id'])
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/product.css">
</head>

<body>

<div class="container">
    <div class="row">
        <div class="col-3">
            <div class="image-0">
                <a><img src="<?= $product['img'] ?> " width="200" "></a>
            </div>
        </div>
        <div class="col-9">
            <div class="row">
                <div class="title-0 h2">
                    <?= $product['title'] ?>
                </div>
            </div>
            <div class="row">
                <a><?= $product['content'] ?></a>
                <br>
                <a><?= $product['price'] ?> руб.</a>
                <a>
                    <del><?= $product['oldprice'] ?> руб.</del>
                </a>
            </div>
        </div>
    </div>


    <div class="row mt-3">
        <div class="col">
            <div class="mb-3">

                <h1>Ваше имя: <?= $_SESSION['user']['full_name'] ?></h1>
            </div>
            <div class="mb-3">

                <form action="review_sumbit.php?id=<?= $product['id'] ?>" method="post" enctype="multipart/form-data">
                    <label>Отзыв</label>
                    <input class="form-control" type="text" name="text" placeholder="">
                    <label>Оценка</label>
                    <input class="form-control" type="text" name="rank" placeholder="">

                    <button type="submit">Отправить</button>
                </form>
                <!-- <form action="review_sumbit.php" method="post" enctype="multipart/form-data">
                <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea> -->
            </div>
        </div>
    </div>


    <div class="row mt-3">
        <h3>Отзывы</h3>
        <div class="col">
            <?php foreach ($reviews as $review) { ?>


            <div class="row">
                <div class="col-9">
                    <a><?= $review['full_name'] ?>  </a>
                </div>
                <div class="col-3">
                    <a><?= $review['created_at'] ?></a>
                </div>
            </div>
                <div class="row">
                    <div class="col">
                        <p><?= $review['text'] ?> </p>
                    </div>

                </div>
                <div class="row">
                    <div class="col">
                        <p>Оценка: <?= $review['rank'] ?> </p>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>

</body>
</html>


































