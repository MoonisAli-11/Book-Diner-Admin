<?php include('includes/header.php'); ?>



    <!--interface-->
    <section id="interface">
        
    <?php include('includes/navigation.php'); ?>
    
        <!--title-->
        <h3 class="i-name">Update Product Image</h3>


        <?php
            
            if(!isset($_GET['product_id'])){
                header('location: products.php?error_message=product id was not given');
                exit;
            }
        
        ?>


        <div class="container-fluid w-50 my-5">
            <form method="POST" enctype="multipart/form-data" action="update.product.image.php">

                <div class="mb-2 form-group">
                    <label>User Id</label>
                    <p class="form-control"><?php echo $_GET['product_id'];?></p>
                    <input type="hidden" name="product_id" value="<?php echo $_GET['product_id'];?>"/>
                </div>

                <div class="mb-2 form-group">
                    <label>Image</label>
                    <input type="file" class="form-control" placeholder="image" name="image" id="image"/>
                </div>

                <div class="mb-2 text-center">
                    <input type="submit" class="btn btn-primary mt-3" value="Update" name="update_product_image_btn" id="update_product_image_btn"/>
                </div>

            </form>
        </div>
    </section>





    <script>
        $('#menu-btn').click(function(){
            $('#menu').toggleClass('active');
        })
    </script>
    
</body>
</html>