<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/6ce5c074be.js" crossorigin="anonymous"></script>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<?php 

require './db.php';
var_dump($products);


?>

<body>
    


    <div class="container">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php 

                foreach($products as $product){
                    echo '
                    <div class="col">
                        <div class="card h-100">
                            <img src="' . $product->productImg . '" class="card-img-top" alt="' . $product->productName . '">
                            <div class="card-body">
                                <h5 class="card-title">' . $product->productName . '</h5>
                                <h6 class="card-subtitle text-body-secondary">'. $product->getPrice() . '&euro;' . '</h6>
                                <h6 class="card-subtitle text-body-secondary"></h6>
                            </div>
                        </div>
                    </div>                
                    ';
                }
            ?>
        </div>
    </div>


    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>