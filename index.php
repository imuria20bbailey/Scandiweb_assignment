<?php  
    

    require_once("helper.php");

    $route = $_SERVER["REQUEST_URI"];
    //echo $route;
    //echo __DIR__;
    
    switch($route)
    {

        case "/":
            loadClass("Product");
            require __DIR__."/views/product_list.php";
            break;

            
        case "/list-products":
            loadClass("Product");
            require __DIR__."/views/product_list.php";
            break;
       

        case "/get-products":
            loadClass("Product");
            Product::getProducts();
            break;


        case "/delete-products":
            loadClass("Product");
            Product::deleteProducts($_REQUEST);
            break;

        

        //=============================================================================================//

        case "/add-product":            
            loadClass("Product");
            require __DIR__."/views/product_add.php";
            break;

        
        case "/check-products":
            loadClass("Product");
            Product::checkProducts($_REQUEST);
            break;
      

        case "/post-products?type=dvd":
            //loadClass("Product");
            require_once("classes/ProductTypes.php");
            $Dvd = new Dvd();
            $Dvd->addProducts($_REQUEST['sku'], $_REQUEST['name'], $_REQUEST['price'], $_REQUEST['size']);
            break;


        case "/post-products?type=book":
            //loadClass("Product");
            require_once("classes/ProductTypes.php");
            $Book = new Book();
            $Book->addProducts($_REQUEST['sku'], $_REQUEST['name'], $_REQUEST['price'], $_REQUEST['weight']);
            break;


        case "/post-products?type=furniture":
            //loadClass("Product");
            require_once("classes/ProductTypes.php");
            $Furniture = new Furniture();
            $Furniture->addProducts($_REQUEST['sku'], $_REQUEST['name'], $_REQUEST['price'], $_REQUEST['height'], $_REQUEST['width'], $_REQUEST['length']);
            break;



        /* default:
            loadClass("Product");
            require __DIR__."/views/product_list.php"; */
    }


 ?> 
