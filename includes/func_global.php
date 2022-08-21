<?php
function dd($val) {
    echo '<pre>';
    print_r($val);
    echo '</pre>';
    die;
}

function fetch($sql, $params = []): array
{
    global $pdo;
    $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
    $sth->execute($params);
    $response = $sth->fetch();
    if ($response === false) {
        $response = [];
    }

    return $response;
}

function fetchAll($sql, $params = []): array
{
    global $pdo;
    $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
    $sth->execute($params);
    $response = $sth->fetchAll();
    if ($response === false) {
        $response = [];
    }

    return $response;
}

function get_products_by_category($categoryId): array
{
    $sql = 'SELECT * FROM products WHERE category_id = :category_id';
    return fetchAll(
        $sql,
        ['category_id' => $categoryId]
    );
}



function get_models($markId): array
{
    $sql = 'SELECT * FROM model  WHERE mark_id = :mark_id  ORDER BY `model`.`name` ASC ';
    return fetchAll(
        $sql,
        ['mark_id' => $markId]
    );
}


function get_categories(): array
{
    $sql = 'SELECT * FROM category ORDER BY sort';
    return fetchAll($sql);
}

function get_reviews($productId): array
{
    $sql = 'SELECT * FROM review LEFT JOIN users u on review.user_id = u.id WHERE product_id = :id';
    return fetchAll(
        $sql,
        ['id' => $productId]
    );
}

function get_user($usersId): array
{
    $sql = 'SELECT * FROM users WHERE id = :id';
    return fetch(
        $sql,
        ['id' => $usersId]
    );
}

function get_admin($usersId): array
{
    $sql = 'SELECT * FROM users WHERE id = :id and admin = 1';
    return fetch(
        $sql,
        ['id' => $usersId]
    );
}

function get_product($id): array
{
    $sql = 'SELECT * FROM products WHERE id = :id';
    return fetch(
        $sql,
        ['id' => $id]
    );
}

function get_products_by_mark($markId): array
{
    $sql = 'SELECT p.* FROM model_products mp LEFT JOIN products p ON p.id = mp.product_id 
    LEFT JOIN model m ON m.id = mp.model_id WHERE mp.model_id  = :id';
    return fetchAll(
        $sql,
        ['id' => $markId]

    );
}

function get_mark(): array
{
    $sql = 'SELECT * FROM mark ORDER BY `mark`.`name` ASC';
    return fetchAll($sql);
}

function get_id(int $id): array
{

    global $pdo;
    $res = $pdo-> query('SELECT * FROM products WHERE id = ' . $id);
    //$res->execute([':id' => $id]);
    $res->execute();
    $response = $res->fetch();
    if ($response === false) {
        $response = [];
    }

    return $response;
}

function get_carid(int $id): array
{

    global $pdo;
    $res = $pdo-> query('SELECT * FROM cars WHERE id = ' . $id);
    //$res->execute([':id' => $id]);
    $res->execute();
    $response = $res->fetch();
    if ($response === false) {
        $response = [];
    }

    return $response;
}


