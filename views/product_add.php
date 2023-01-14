<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="SCANDIWEB TEST ASSIGNMENT">
    <meta name="author" content="IMURIA BARBRA">
    <meta name="generator" content="">
    <title>Product add</title>
    <link rel="icon" href="../public/assets/multimedia/icons/favicon.svg" >
    
    
    <!--=========================================== STYLES SECTION =========================================-->
    <link href="https://getbootstrap.com/docs/5.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- <link href="../public/assets/libraries/bootstrap/5.2/bootstrap.min.css" rel="stylesheet" integrity="" crossorigin=""> -->

</head>
<body style="background-color: #eee;" >
    
    <div class="container-fluid py-3">

            <div id="list-product-div" style="display:;">
                <section id="list-product-section">
                    <div class=" container py-5">


                <div id="add-product-div" style="display:;">
                    <section id="add-product-section" >
                        <div class="container py-5">

                            <!--================================= HEADER SECTION ================================-->
                            <div class="row">
                                <div class="col-lg-10 col-md-12 mb-10">
                                    <h4 class="mt-4 mb-5" style="text-align:left; line-height:1px; text-transform:capitalize;"><strong>Product Add</strong></h4>
                                </div>         

                                <div class="col-lg-1 col-md-6 mb-1">
                                    <button type="button" name="save-product-btn" id="save-product-btn" class="btn btn-info btn-sm" >Save</button>
                                </div>

                                <div class="col-lg-1 col-md-6 mb-1">
                                <a id="form-cancelled" href="/">
                                    <button type="button" name="cancel-product-btn" id="cancel-product-btn" class="btn btn-danger btn-sm">Cancel</button>
                                </a>
                                </div>
                            </div>
                            <hr style="border: 1px solid #000; margin-top:-20px;" />
                            
                            

                            <!--================================= BODY SECTION =================================-->
                            
                            <div class="row">

                                <form name="product_form" id="product_form" class="needs-validation" novalidate >
                            
                                    <div class="mb-3 mt-3 col-lg-4">
                                        <label for="sku" class="form-label">SKU</label>
                                        <input type="text" class="form-control" name="sku" id="sku" placeholder="SKU" required style="text-transform: uppercase;" onblur="check_products(this.value)" >
                                        <span id="skuavailblty"></span>
                                        <div class="invalid-feedback">Please, submit required data.</div>
                                    </div>

                                    <div class="mb-3 col-lg-4">
                                        <label for="name" class="form-label">Name</label>
                                        <input type="text" class="form-control" name="name" id="name"  placeholder="Product Name" required style="text-transform: capitalize;" >

                                        <div class="invalid-feedback">Please, submit required data.</div>
                                    </div>

                                    <div class="mb-3 col-lg-4">
                                        <label for="price" class="form-label">Price ($)</label>
                                        <input type="number" class="form-control" name="price" id="price" placeholder="Product Price" required >

                                        <div class="invalid-feedback">Please, submit required data.</div>                                
                                    </div>

                                    <div class="mb-3 col-lg-4">
                                        <label for="type-switcher" class="form-label">Type Switcher</label>
                                        <select name="productType" id="productType" class="form-select" onchange="show_product_property()" required>
                                            <option value="">Select Type Switcher</option>
                                            <option value="DVD">DVD</option>
                                            <option value="Book">Book</option>
                                            <option value="Furniture">Furniture</option>                                    
                                        </select>
                                        <div class="invalid-feedback">Please, select required data.</div>
                                    </div>

                                    <div class="mb-3 col-lg-4 product-property" style="display:none;" id="product-dvd">
                                        <label for="size" class="form-label">Size (MB)</label>
                                        <input type="number" class="form-control" name="size" id="size" placeholder="Product Size" >
                                        
                                        <div class="invalid-feedback">Please, provide the data of indicated type.</div>
                                        <div id="sizeHelp" class="form-text">Please, provide size.</div>
                                    </div>

                                    <div class="mb-3 col-lg-4 product-property" style="display:none;" id="product-book">
                                        <label for="weight" class="form-label">Weight (KG)</label>
                                        <input type="number" step="0.01" class="form-control" name="weight" id="weight" placeholder="Product Weight"  >
                                        
                                        <div class="invalid-feedback">Please, provide the data of indicated type.</div>
                                        <div id="weightHelp" class="form-text">Please, provide weight.</div>
                                    </div>

                                    <div class="mb-3 col-lg-4 product-property" style="display:none;" id="product-furniture">
                                        <label for="dimension" class="form-label">Height (CM)</label>
                                        <input type="number" step="0.01" class="form-control" name="height" id="height" placeholder="Product Height"  >
                                        <label for="dimension" class="form-label">Width (CM)</label>
                                        <input type="number" step="0.01" class="form-control" name="width" id="width" placeholder="Product Width"  >
                                        <label for="dimension" class="form-label">Length (CM)</label>
                                        <input type="number" step="0.01" class="form-control" name="length" id="length" placeholder="Product Length"  >
                                        
                                        <div class="invalid-feedback">Please, provide the data of indicated type.</div>
                                        <div id="dimensionHelp" class="form-text">Please, provide dimensions (HxWxL).</div>
                                    </div>

                                    <div class="mb-3 col-lg-4">
                                        <button type="submit" name="submit-product-btn" id="submit-product-btn" class="btn btn-success" style="display:none;">SUBMIT</button>
                                    </div>
                                                                    
                                </form>


                            </div>                        


                            <!--================================= FOOTER SECTION ================================-->
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

            
                    
    

    </div>

    <!--=========================================== SCRIPTS SECTION ========================================-->
   <!--  <script src="../public/assets/libraries/jquery/3.6.1/jquery.min.js"></script>
  <script src="../public/assets/libraries/bootstrap/5.2/bootstrap.min.js"></script>-->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://getbootstrap.com/docs/5.2/dist/js/bootstrap.min.js"></script>
    
    <script type="text/javascript">
        $(document).ready(function() 
        {     

            // PRODUCT ADD FORM VALIDATION
            (function () 
            {
                'use strict'

                // CHHOOSE FORM
                var forms = document.querySelectorAll('.needs-validation');
                

                // PREVENT SUBMISSION
                Array.prototype.slice.call(forms)
                    .forEach(function (form) 
                    {
                        form.addEventListener('submit', function (event) 
                        {
                            if (!form.checkValidity()) 
                            {
                            event.preventDefault()
                            event.stopPropagation()
                            }
                            else
                            {                           

                                
                                var route_type;
                                var product_type      = $("#productType").val();

                                if ( product_type == "DVD")
                                {
                                    route_type = "dvd";
                                }
                                else if ( product_type == "Book")
                                {
                                    route_type = "book";
                                }
                                else if ( product_type == "Furniture")
                                {
                                    route_type = "furniture";
                                }
                                else
                                {

                                }

                              
                                var product_form = $('#product_form').serialize();

                                //console.log(product_form);
                                

                                $.ajax({
                                    type: 'POST',
                                    url: '/post-products?type='+route_type,
                                    data: product_form,
                                    success:function(data)
                                    {   
                                        //console.log(data);
                                        //$('#product_form')[0].reset();                    
                                        //document.getElementById('form-cancelled').click();
                                        
                                        //$('#form-cancelled').click();
                                       /* setTimeout(function() 
                                        {
                                          window.location.href = "/";
                                        }, 2000);
                                        */
                                        
                                        window.location.href = 'http://assignment.pooldoctors.ug/';
                                        window.location.href = 'http://assignment.pooldoctors.ug/';
                                   
                                    },
                                    error: function(data)
                                    {
                                        console.log(data);
                                    }

                                }); 
                                
                            }

                            form.classList.add('was-validated')
                        }, false)
                    })

            })();



            //SETTING REQUIRED TO THE PRODUCT PROPERTY BASED ON PRODUCT TYPE SELECTED
            $('#productType').on('change',function()
            {   
                
                var product_type      = $("#productType").val();

                if ( product_type == "DVD")
                {
                    $("#size").prop('required',true);
                }
                else if ( product_type == "Book")
                {
                    $("#weight").prop('required',true);
                }
                else if ( product_type == "Furniture")
                {
                    $("#height").prop('required',true);
                    $("#width").prop('required',true);
                    $("#length").prop('required',true);
                }
                else
                {

                }
                
            });
           


            // SAVE PRODUCT BUTTON ACTION
            $( "#save-product-btn" ).click(function() 
            {
                $('#submit-product-btn').click();               
             
            });
        

            show_product_property();
                
        });

        

        //DISPLAYING THE PRODUCT PROPERTY BASED ON PRODUCT TYPE SELECTED            
        function show_product_property() 
        {
                var product_type        = document.getElementById("productType");

                var product_dvd         = document.getElementById("product-dvd");
                var product_book        = document.getElementById("product-book");
                var product_furniture   = document.getElementById("product-furniture");

                product_dvd.style.display = product_type.value == "DVD" ? "block" : "none";
                product_book.style.display = product_type.value == "Book" ? "block" : "none";
                product_furniture.style.display = product_type.value == "Furniture" ? "block" : "none";

                
        }

        
        function check_products(sku) 
        {
        $.ajax({

            type: "POST",
            url: "/check-products",
            data:'sku='+sku,
            success: function(data)
            {
                $("#skuavailblty").html(data);
            }

        });


      
      }


    </script>
    
</body>
</html>
