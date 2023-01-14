<?php
require_once("Product.php");

class Dvd extends Product
{
    public $size;


    public function addProducts($sku, $name, $price, $type, $size = "")
    {

        $database = new Database();

        $validate_form       = mysqli_connect('localhost', 'pooldoctors_assignment', '@$$1GnMent', 'pooldoctors_assignment');

        $sku   = mysqli_real_escape_string($validate_form, $_REQUEST["sku"]);
 	    $name  = mysqli_real_escape_string($validate_form, $_REQUEST["name"]); 
 	    
        $price = mysqli_real_escape_string($validate_form, $_REQUEST["price"]);
        $type  = mysqli_real_escape_string($validate_form, $_REQUEST["productType"]);
        $size  = mysqli_real_escape_string($validate_form, $_REQUEST["size"]);
        
        $created = date("Y-m-d H:i:s");
        
        $database->execute_query(
            "INSERT INTO products 
            (product_sku, product_name, product_price, product_type, created_on) 
            VALUES
            ('$sku', '$name', '$price', '$type', '$created')" );

        $database->execute_query(
            "INSERT INTO product_details 
            (product_sku, product_size) 
            VALUES 
            ('$sku', '$size')" ); 

    }

}





class Book extends Product
{
    public $weight;

    public function addProducts($sku, $name, $price, $type, $weight = "")
    {

        $database = new Database();
         $validate_form       = mysqli_connect('localhost', 'pooldoctors_assignment', '@$$1GnMent', 'pooldoctors_assignment');

        $sku   = mysqli_real_escape_string($validate_form, $_REQUEST["sku"]);
 	    $name  = mysqli_real_escape_string($validate_form, $_REQUEST["name"]);       
        $price = mysqli_real_escape_string($validate_form, $_REQUEST["price"]);
        $type  = mysqli_real_escape_string($validate_form, $_REQUEST["productType"]);
        $weight = mysqli_real_escape_string($validate_form, $_REQUEST["weight"]);
         $created = date("Y-m-d H:i:s");
        
       $database->execute_query(
            "INSERT INTO products 
            (product_sku, product_name, product_price, product_type, created_on) 
            VALUES
            ('$sku', '$name', '$price', '$type', '$created')" );

        $database->execute_query(
            "INSERT INTO product_details 
            (product_sku, product_weight) 
            VALUES 
            ('$sku', '$weight')" ); 

    }



}




class Furniture extends Product
{
    public $height;
    public $width;
    public $lenght;

    public function addProducts( $sku, $name, $price, $type, $height = "", $width = "", $length = "" )
    {

        $database = new Database();

        $validate_form       = mysqli_connect('localhost', 'pooldoctors_assignment', '@$$1GnMent', 'pooldoctors_assignment');

        $sku   = mysqli_real_escape_string($validate_form, $_REQUEST["sku"]);
 	    $name  = mysqli_real_escape_string($validate_form, $_REQUEST["name"]); 
 	    
        $price = mysqli_real_escape_string($validate_form, $_REQUEST["price"]);
        $type  = mysqli_real_escape_string($validate_form, $_REQUEST["productType"]);
        $height = mysqli_real_escape_string($validate_form, $_REQUEST["height"]);
        $width  = mysqli_real_escape_string($validate_form, $_REQUEST["width"]);
        $length = mysqli_real_escape_string($validate_form, $_REQUEST["length"]);
         $created = date("Y-m-d H:i:s");
        
        
        $database->execute_query(
            "INSERT INTO products 
            (product_sku, product_name, product_price, product_type, created_on) 
            VALUES
            ('$sku', '$name', '$price', '$type', '$created')" );


        $database->execute_query(
            "INSERT INTO product_details 
            (product_sku, product_height, product_width, product_length) 
            VALUES 
            ('$sku', '$height', '$width', '$length')"); 

    }



}




?>