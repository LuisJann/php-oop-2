<?php
require_once __DIR__ . "/Categories.php";

class Product
{
    public $name;
    public $price;
    public $image;
    public $color = "";
    public $dimension_cm = "";

    function __construct($name, $price, $image, Categories $categories, $color, $dimension_cm)
    {
        $this->name = $name;
        $this->price = $price;
        $this->image = $image;
        $this->categories = $categories;
        $this->color = $color;
        $this->dimension_cm = $dimension_cm;
    }
}

class Food extends Product
{
    function __construct($name, $price, $image, Categories $categories, $ingridients, $weight_grams)
    {
        parent::__construct($name, $price, $image, $categories, $color = "", $dimension_cm = "");
        $this->ingridients = $ingridients;
        $this->weight_grams = $weight_grams;
    }
}

class Toy extends Product
{
    function __construct($name, $price, $image, Categories $categories, $material, $color, $dimension_cm)
    {
        parent::__construct($name, $price, $image, $categories, $color, $dimension_cm);
        $this->material = $material;
    }
}

class DogBed extends Product
{
    function __construct($name, $price, $image, Categories $categories, $material, $color, $dimension_cm)
    {
        parent::__construct($name, $price, $image, $categories, $material, $color, $dimension_cm);
    }
}
