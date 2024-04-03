<?php

require './Models/Product.php';
require './Models/Food.php';
require './Models/Toy.php';
require './Models/Bed.php';
require './Models/Category.php';

// pet categories
$categories = [
    new Category('dog', '<i class="fa-solid fa-dog"></i>'),
    new Category('cat', '<i class="fa-solid fa-cat"></i>'),
];



// products
$products = [
    new Food('Fancy Dry Food', 'https://m.media-amazon.com/images/I/61at57AdCsL.jpg', 27.95, $categories[1], 'Dry Food'),
    new Bed('Giant Dog Bed', 'https://m.media-amazon.com/images/I/815jGKOeHyL._AC_UF894,1000_QL80_.jpg', 99.21, $categories[0], 9.84),
    new Toy('Feather Wand', 'https://m.media-amazon.com/images/I/61bf1yoHyKL.jpg', 16.42, $categories[1], false)
];

