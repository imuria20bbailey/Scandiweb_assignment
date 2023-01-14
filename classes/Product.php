<?php 
require_once("Database.php");

abstract class Product 
{   

     // CLASS PROPERTIES
    //public $id;
    public $sku;
    public $name;
    public $price;
    public $type;


    // CLASS METHODS
    abstract function addProducts($sku, $name, $price, $type);
    

    public static function getProducts()
    {
        $product_lists = array();

        $database         = new Database();
        /*$product_query    = $database->execute_query
        (
        "SELECT * FROM products P JOIN product_details PD ON P.product_sku = PD.product_sku 
         WHERE P.product_status != 1 ORDER BY P.product_id ASC"    
        );*/
        
        $product_query    = $database->execute_query
        (
        "SELECT * FROM products P JOIN product_details PD ON P.product_sku = PD.product_sku WHERE P.product_status != 1 ORDER BY P.product_id ASC"    
        );

        
        //while($row = mysqli_fetch_array($product_query))
        while( $row = $product_query->fetch_assoc() ) 
        {
            $id     = $row['product_id'];
            $sku    = $row['product_sku'];
            $name   = $row['product_name'];
            $price  = $row['product_price'];
            $type   = $row['product_type'];

            $size    = $row['product_size'];
            $weight  = $row['product_weight'];
            $height  = $row['product_height'];
            $width   = $row['product_width'];
            $length  = $row['product_length'];

            $product_lists[] = array(
                            "id"     => $id,
                            "sku"    => $sku,
                            "name"   => $name,
                            "price"  => number_format($price,2),
                            "type"   => $type,

                            "size"   => $size,
                            "weight" => $weight,
                            "height" => $height,
                            "width"  => $width,
                            "length" => $length
                        );
        }

       
        // Encoding array in JSON format
        //header('Content-type: application/json');
        echo json_encode($product_lists);


       
    /*     if ( $product_query->num_rows > 0 ) 
        {
            while( $row = $product_query->fetch_assoc() ) 
            {
                array_push($product_lists, $row);
            }
        }
        else
        {
            array_push($product_lists, "No records found.");
        }

        header('Content-type: application/json');
        return  json_encode($product_lists); 
    */

    }



    public static function checkProducts($sku)
    {   

        $database         = new Database();
        $sku              = $_REQUEST["sku"];
        $output           = "";

        $product_query    = $database->execute_query
        (
        "SELECT product_sku FROM products WHERE product_sku = '".$sku."'"   
        );

        $num = mysqli_num_rows($product_query);

        if($num > 0)
        {
            $output .= "<span style='color:red; font-size:.8em;'> SKU already associated with another product.</span>";
            $output .= "<script>$('#save-product-btn').prop('disabled',true);</script>";
        } 
        else
        {
            $output .= "<script>$('#save-product-btn').prop('disabled',false);</script>";
        }

        $output .=  "";
                
        echo $output; 

    }




    public static function deleteProducts($id)
    {   

        $database        = new Database();
        $ids             = $_REQUEST["id"];
        $output          = "";


        foreach($ids as $id)
        {   
            /*
            $product_query    = $database->execute_query( 
            "UPDATE products SET product_status = '1' WHERE product_id = '".$id."'"
            );*/
            
            $product_query    = $database->execute_query( 
            "DELETE FROM products WHERE product_id = '".$id."'"
            );
                   
        }

                
        echo $output; 

    }



}




?>