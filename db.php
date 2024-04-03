<?php

require './Models/Product.php';
require './Models/Category.php';

// pet categories
$categories = [
    new Category('dog', '<i class="fa-solid fa-dog"></i>'),
    new Category('cat', '<i class="fa-solid fa-cat"></i>'),
];



// products
$products = [
    new Product('Fancy Dry Food', 'https://m.media-amazon.com/images/I/61at57AdCsL.jpg', 27.90, $categories[1], 'food'),
    new Product('Giant Dog Bed', 'https://m.media-amazon.com/images/I/815jGKOeHyL._AC_UF894,1000_QL80_.jpg', 99.21, $categories[0], 'bed'),
    new Product('Feather Wand', 'https://m.media-amazon.com/images/I/61bf1yoHyKL.jpg', 16.42, $categories[1], 'toy')
];

