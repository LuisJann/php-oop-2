<?php
require_once __DIR__ . "/Categories.php";

class Product
{
    public $name;
    public $price;
    public $color = "";
    public $dimension_cm = "";

    function __construct($name, $price, Categories $categories, $color, $dimension_cm)
    {
        $this->name = $name;
        $this->price = $price;
        $this->categories = $categories;
        $this->color = $color;
        $this->dimension_cm = $dimension_cm;
    }
}

class Food extends Product
{
    function __construct($name, $price, Categories $categories, $ingridients, $weight_grams)
    {
        parent::__construct($name, $price, $categories, $color = "", $dimension_cm = "");
        $this->ingridients = $ingridients;
        $this->weight_grams = $weight_grams;
    }
}

class Toy extends Product
{
    function __construct($name, $price, Categories $categories, $material, $color, $dimension_cm)
    {
        parent::__construct($name, $price, $categories, $color, $dimension_cm);
        $this->material = $material;
    }
}

class DogBed extends Product
{
    function __construct($name, $price, Categories $categories, $material, $color, $dimension_cm)
    {
        parent::__construct($name, $price, $categories, $material, $color, $dimension_cm);
    }
}
