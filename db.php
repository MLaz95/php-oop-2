<?php

require_once './Models/Product.php';
require_once './Models/Food.php';
require_once './Models/Toy.php';
require_once './Models/Bed.php';
require_once './Models/Category.php';
require_once './Models/Guest.php';
require_once './Models/Account.php';
require_once './Models/CreditCard.php';
require_once './Models/Cart.php';


// pet categories
$categories = [
    new Category('dog', '<i class="fa-solid fa-dog"></i>'),
    new Category('cat', '<i class="fa-solid fa-cat"></i>'),
];

// products
$products = [
    new Food('Fancy Dry Food', 'https://m.media-amazon.com/images/I/61at57AdCsL.jpg', 27.95, 1.5, $categories[1], 'Dry Food'),
    new Bed('Giant Dog Bed', 'https://m.media-amazon.com/images/I/815jGKOeHyL._AC_UF894,1000_QL80_.jpg', 99.21, $categories[0], 9.84),
    new Toy('Feather Wand', 'https://m.media-amazon.com/images/I/61bf1yoHyKL.jpg', 16.42, $categories[1], false)
];

$cards = [
    new CreditCard('1234567891234567', '123', '01-01-2025'),
    new CreditCard('7777777777777777', '355', '01-01-2023'),
];

$accounts = [
    new Account('Merry Poppins', $cards[0], '17 Cherry Tree Lane, London', 'poppin@gmail.com', '0451'),
    new Guest('Jonny Bravo', $cards[1], 'someplace')
];

$carts = [];

foreach($accounts as $account){
    $carts[] = new Cart($account);
}

$carts[0]->addItem($products[0]);
$carts[0]->addItem($products[1]);
$carts[0]->addItem($products[1]);
$carts[0]->addItem($products[1]);


// var_dump($carts[0]);
