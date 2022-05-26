<?php include('includes/header.php'); ?>


    <!--interface-->
    <section id="interface">
        
    <?php include('includes/navigation.php'); ?>

        <!--title-->
        <h3 class="i-name">Add New Products</h3>


        <div class="container-fluid w-50 my-5">

            <form method="POST" enctype="multipart/form-data" action="create.product.php">
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

                <div class="mb-2 form-group">
                    <label>Image</label>
                    <input type="file" class="form-control" placeholder="image" name="image" id="image"/>
                </div>

                <div class="mb-2 form-group">
                    <label>Status</label>
                    <select class="form-select mb-2" name="status">
                        <option value="PUBLISH">Publish</option>
                        <option value="UNPUBLISH">Unpublish</option>
                    </select>
                </div>

                <div class="mb-2 text-center">
                    <input type="submit" class="btn btn-primary mt-3" value="Add Product" name="add_product_btn" id="add_product_btn"/>
                </div>

            </form>
        </div>
    </section>





<?php include('includes/script.php'); ?>