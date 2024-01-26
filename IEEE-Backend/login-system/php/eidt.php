<?php

if(isset($_GET["id"]))
{

    // Grabbing the data
    // session_start();
    $id = $_GET['id'];
    $uid=$_SESSION['login'];
    
    // Instantiate ProductsContr class
    include "classes/dbh.class.php";
    include "classes/products.class.php";
    include "classes/products-contr.class.php";
    $product = new ProductsContr($id);

    // Running Error Handlers and Edit product
    $product->get_editProduct();

} 






