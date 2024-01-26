<?php

if(!isset($_GET["do"]))
{


    // Instantiate products class
    include "classes/dbh.class.php";
    include "classes/products.class.php";
    // include "classes/products-contr.class.php";
    // $product = new ProductsContr("name","56");

  
    $product = new Products();

 
    $product->viewProducts();
    // echo $_SESSION['login'];



}