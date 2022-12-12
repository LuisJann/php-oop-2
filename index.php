<?php
require_once __DIR__ . "/Models/Product.php";
require_once __DIR__ . "/Models/Categories.php";

$croquettes = new Food("crocchette", 10.99, "https://ss-pics.s3.eu-west-1.amazonaws.com/files/1613286/page-98306_pla_naturaltrainer_kitten_chicken_1_5kg_9.jpg?1599816393", new Categories("gatto"), "carne", 200);


$boneToys = new Toy("osso di gomma", 8.99, "https://www.farmacosmo.it/166170-large_default/goodie-bone-large-osso-gomma-cani-112686.jpg", new Categories("cane"), "gomma", "rosso", 25);


$dogBed = new DogBed("cuccia", 50, "https://m.media-amazon.com/images/I/71-tsDiw8iL._AC_SY355_.jpg", new Categories("cane"), "stoffa", "marrone", 500);


$products = [
    $croquettes,
    $boneToys,
    $dogBed
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container d-flex my-5">
        <?php foreach ($products as $product) { ?>
            <div class="card" style="width: 18rem;">
                <img src="<?php echo $product->image ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $product->name ?></h5>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><?php echo $product->price ?> €</li>
                    <li class="list-group-item"><?php echo $product->color ?></li>
                    <li class="list-group-item"><?php echo $product?->material ?></li>
                    <li class="list-group-item"><?php echo $product?->ingridients ?></li>
                    <li class="list-group-item">Dimensioni: <?php echo $product->dimension_cm ?> cm</li>
                    <li class="list-group-item">Peso: <?php echo $product?->weight_grams ?></li>
                </ul>
            </div>
        <?php } ?>
    </div>
</body>

</html>