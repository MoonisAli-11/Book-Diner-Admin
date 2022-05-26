<?php include('includes/header.php'); ?>



    <!--interface-->
    <section id="interface">
        
    <?php include('includes/navigation.php'); ?>

        <!--title-->
        <h3 class="i-name">Update Products</h3>


        <?php
            
            if(!isset($_GET['product_id'])){
                header('location: products.php?error_message=product id was not given');
                exit;
            }
        
        ?>

        <div class="container-fluid w-50 my-5">
            <form method="POST" action="update.product.php">
                <div class="mb-2 form-group">
                    <label>Product Id</label>
                    <p class="form-control"><?php echo $_GET['product_id'];?></p>
                    <input type="hidden" name="product_id" value="<?php echo $_GET['product_id'];?>"/>
                </div>
                
                <div class="mb-2 form-group">
                    <label>Title</label>
                    <input type="text" class="form-control" placeholder="title" name="title" id="title"/>
                </div>
            
                <div class="mb-2 form-group">
                    <label>Description</label>
                    <input type="text" class="form-control" placeholder="description" name="description" id="description"/>
                </div>

                <?php
                $mysqli = NEW MySQLi('localhost','root','','x2_project');
                
                $resultSet = $mysqli->query("SELECT cat_name FROM category");
                ?>

                <div class="mb-2 form-group">
                    <label>Category</label>
                    <select class="form-select mb-2" name="category">
                    <?php
                        while($rows = $resultSet->fetch_assoc())
                        {
                            $cat_name = $rows['cat_name'];
                            echo "<option value='$cat_name'>$cat_name</option>";
                        }
                        ?>
                    </select>
                </div>

                <div class="mb-2 form-group">
                    <label>Branch</label>
                    <input type="text" class="form-control" placeholder="branch" name="branch" id="branch"/>
                </div>


                <div class="mb-2 text-center">
                    <input type="submit" class="btn btn-primary mt-3" value="Update" name="update_product_btn" id="update_product_btn"/>
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