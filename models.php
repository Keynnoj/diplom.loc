<?php
require_once '/OpenServer/domains/diplom.loc/includes/init.php';

$marks = get_models($_GET['mark_id']);

if (isset($_GET['catalog_id'])) {
    $products = get_products_by_category($_GET['catalog_id']);
}
else if (isset($_GET['mark_id'])) {
    $products = get_products_by_mark($_GET['mark_id']);
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/catalog/Global/Cars/Volkswagen/main.css">
    <title>Hello, world!</title>
</head>
<body>
<?php require_once '/OpenServer/domains/diplom.loc/includes/nav.php'; ?>

<!--<div style="padding: 10px;margin: 10px;background: gray">
    <div style="">
    -->

<div class="wrapper mt-5">
    <div class="container">
        <div class="row">

            <div class="product-cards mb-5">

                <?php if (!empty($marks)): ?>
                    <?php foreach ($marks as $mark): ?>
                        <div class="product-card">
                         <!--   <div class="offer">
                                <?php if ($mark['name']): ?>
                                    <div class="offer-hit">Hit</div>
                                <?php endif; ?>
                                <?php if ($mark['sale']): ?>
                                    <div class="offer-sale">Sale</div>
                                <?php endif; ?>
                            </div> -->
                            <div class="card-thumb">
                                <a href="#"><img src="<?= $mark['img'] ?> " width="200"</a>
                            </div>
                            <div class="card-caption">
                                <div class="card-title">
                                    <a href="q.jpg"></a>
                                    <p><?= $mark['name'] ?></p>
                                </div>


                                <a href="catalog.php?mark_id=<?= $mark['id'] ?>" class="btn btn-info btn-block add-to-cart">
                                    <i class="fas fa-cart-arrow-down">  </i>  Подробнее
                                </a>

                            </div>
                        </div><!-- /product-card -->

                    <?php endforeach; ?>
                <?php endif; ?>

            </div><!-- /product-cards -->

        </div><!-- /row -->

    </div><!-- /container -->
</div><!-- /wrapper -->
</div>
</body>
