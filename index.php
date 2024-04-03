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
// var_dump($products);


?>

<body>
    
    <?php
    include './partials/navbar.php';
    ?>

    <div class="container pt-5">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php 

                foreach($products as $product){
                    echo '
                    <div class="col">
                        <div class="card h-100">
                            <img src="' . $product->productImg . '" class="card-img-top" alt="' . $product->productName . '">
                            <div class="card-body border-top position-relative">
                                <h5 class="card-title">' . $product->productName . '</h5>
                                <h6 class="card-subtitle text-body-secondary">'. $product->getPrice() . '&euro;' . '</h6>
                                <div class="card-text">'; 
                                    if(is_a($product, 'Food')){
                                        echo 'Food <br>' . $product->foodType;
                                    }
                                    if(is_a($product, 'Toy')){
                                        echo 'Toy <br> Battery Powered: ';
                                        if($product->batteryPowered == true){
                                            echo 'yes';
                                        } else{
                                            echo 'no';
                                        }
                                    }
                                    if(is_a($product, 'Bed')){
                                        echo 'Bed <br> Weight: ' . $product->weight . 'kg';
                                    }
                                echo '</div>
                                <div class="position-absolute top-0 end-0 p-2">'. $product->category->icon .'</div>
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