<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="SCANDIWEB TEST ASSIGNMENT">
    <meta name="author" content="IMURIA BARBRA">
    <meta name="generator" content="">
    <title>Product List</title>
    <link rel="icon" href="../public/assets/multimedia/icons/favicon.svg" >
    
    <!--=========================================== STYLES SECTION =========================================-->
    <link href="https://getbootstrap.com/docs/5.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- <link href="../public/assets/libraries/bootstrap/5.2/bootstrap.min.css" rel="stylesheet" integrity="" crossorigin=""> -->

</head>
<body style="background-color: #eee;" >
    
    <div class="container-fluid py-3">

            <div id="list-product-div" style="display:;">
                <section id="list-product-section">
                    <div class="text-center container py-5">


                        <!--================================= HEADER SECTION ================================-->
                        <div class="row">
                            <div class="col-lg-9 col-md-12 mb-9">
                                <h4 class="mt-4 mb-5" style="text-align:left; line-height:1px; text-transform:capitalize;"><strong>Product List</strong></h4>
                            </div>
                            <div class="col-lg-1 col-md-6 mb-1">
                                <a href="/add-product"><button type="button"  name="add-product-btn" id="add-product-btn" class="btn btn-primary btn-sm">ADD</button></a>
                            </div>
                            <div class="col-lg-2 col-md-6 mb-2">
                                <button type="button" name="delete-product-btn" id="delete-product-btn" class="btn btn-danger btn-sm">MASS DELETE</button>
                            </div>

                            <div class="col-lg-1 col-md-6 mb-1" style="display:none;">
                                <a id="load-products" href="/">#</a>
                            </div>

                        </div>
                        <hr style="border: 1px solid #000; margin-top:-20px;" />
                      

                        <!--================================ BODY SECTION ==================================-->
                        <div class="">
                            <div class="row" id="product-list" > 
                            </div>
                        </div>

                     <!--    <div class="container">
                        <table id="product-table" class="table table-bordered table-striped" style="text-align:left;" >
                            <thead>
                                <tr>
                                <th width="5%">#ID</th>
                                <th width="20%">SKU</th>
                                <th width="20%">NAME</th>
                                <th width="20%">PRICE</th>
                                <th width="20%">TYPE</th>
                                </tr>
                            </thead>
                            <tbody></tbody>
                        </table>
                        </div> -->


                        <!--=============================== FOOTER SECTION =================================-->
                        <hr style="border: 1px solid #000; margin-top:10px;" />

                        <div class="row">
                                    <div class="col-lg-12 col-md-12 mb-12" style="margin-top:-20px;">
                                        <p class="mt-4 mb-5" style="text-align:center; line-height:1px;">
                                        Scandiweb Test Assignment</p>
                                    </div>                  
                        </div>


                    </div>
                </section>
            </div>

  <!--=========================================== SCRIPTS SECTION ========================================-->
 <!--  <script src="../public/assets/libraries/jquery/3.6.1/jquery.min.js"></script>
  <script src="../public/assets/libraries/bootstrap/5.2/bootstrap.min.js"></script>-->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://getbootstrap.com/docs/5.2/dist/js/bootstrap.min.js"></script>
    
    
    <script type="text/javascript">
        $(document).ready(function() 
        {     

            $.ajax({
                url: '/get-products',
                type: 'GET',
                dataType: 'JSON',
                success: function(response)
                {

                    console.log(response);

                    var record_length = response.length;
                    var product_card, table_row, product_property, product_cover;

                    for(var i=0; i<record_length; i++) 
                    {
                        var id    = response[i].id;
                        var sku   = response[i].sku;
                        var name  = response[i].name;
                        var price = response[i].price;
                        var type  = response[i].type;

                        var size    = response[i].size;
                        var weight  = response[i].weight;
                        var height  = response[i].height;
                        var width   = response[i].width;
                        var length  = response[i].length;

                        if(type == 'DVD')
                        {
                            product_property = 'Size: '+ size +' MB';                    
                            product_cover = '<img src="../public/assets/multimedia/discs/disc-cover.png" class="" style="height:120px; margin-top:10px;" />';  
                            
                        }
                        else if(type == 'Book')
                        {   
                            product_property = 'Weight: '+ weight +' KG';
                            product_cover = '<img src="../public/assets/multimedia/books/book-cover.png" class="" style="height:120px; margin-top:10px;" />';  
                            
                        }
                        else if(type == 'Furniture')
                        {   
                            product_property = 'Dimension: '+ height +'x'+ width +'x'+ length +' CM';
                            product_cover = '<img src="../public/assets/multimedia/furniture/furniture-cover.png" class="" style="height:120px; margin-top:10px;" />';  
                            
                        }
                        else
                        {
                            product_property = '';
                            product_cover = '';  
                            
                        }


                        product_card = 
                        '<div class="col-lg-3 col-md-6 mb-3">'+
                            '<div class="card" id="'+ id +'">'+
                                '<div class="form-check" style="margin-left:10px;">'+
                                    '<input type="checkbox" name="delete_product[]" value="'+ id +'" class="form-check-input delete-checkbox">'+
                                '</div>'+
                                '<div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light" data-mdb-ripple-color="light">'+ 
                                    product_cover 
                                 +'</div>'+
                                '<div class="card-body" style="line-height:4px;">'+
                                    '<h5 class="card-title mb-3">'+ sku +'</h5>'+
                                    '<p class="mb-3">'+ name +'</p>'+
                                    '<p class="mb-3">'+ price +' $</p>'+
                                    '<p class="mb-3">'+ product_property +'</p>'+
                                '</div>'+
                            '</div>'+
                        '</div>';
                        
                        $("#product-list").append(product_card); 

                        /* table_row = 
                        "<tr>" +
                        "<td align='center'>" + (i+1) + "</td>" +
                        "<td align='center'>" + sku + "</td>" +
                        "<td align='center'>" + name + "</td>" +
                        "<td align='center'>" + price + "</td>" +
                        "<td align='center'>" + type + "</td>" +
                        "</tr>";
                        $("#product-list tbody").append(table_row); 
                        */
                    }

                }
            });



            
            $('#delete-product-btn').click(function()
            {
  
                //if(confirm("Are you sure you want to delete?"))
                //{

                var id = [];
                
                $(':checkbox:checked').each(function(i)
                {
                    id[i] = $(this).val();
                });
                
                if(id.length === 0) //tell you if the array is empty
                {   
                    
                    alert("Please! Select atleast one product to delete.");
                }
                else
                {
                    $.ajax({
                    url: "/delete-products",
                    method:'POST',
                    data:{id:id},
                    success:function()
                    {    
                       
                        //LOADING PRODUCT LIST PAGE
                        document.getElementById('load-products').click();
                        //$('#form-cancelled').click();

                    }
                    
                    });

                    //console.log( id );
                }
                
                /* }
                else
                {
                return false;
                } */

                });


           
        });


    </script>
    
</body>
</html>
