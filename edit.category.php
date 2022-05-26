<?php include('includes/header.php'); ?>



    <!--interface-->
    <section id="interface">
        
    <?php include('includes/navigation.php'); ?>

        <!--title-->
        <h3 class="i-name">Update Category</h3>


        <?php
            
            if(!isset($_GET['category_id'])){
                header('location: category.php?error_message=category id was not given');
                exit;
            }
        
        ?>

        <div class="container-fluid w-50 my-5">
            <form method="POST" action="update.category.php">
                <div class="mb-2 form-group">
                    <label>Category Id</label>
                    <p class="form-control"><?php echo $_GET['category_id'];?></p>
                    <input type="hidden" name="category_id" value="<?php echo $_GET['category_id'];?>"/>
                </div>
                
                <div class="mb-2 form-group">
                    <label>Category Name</label>
                    <input type="text" class="form-control" placeholder="title" name="title" id="title"/>
                </div>
            
                <div class="mb-2 form-group">
                    <label>Description</label>
                    <input type="text" class="form-control" placeholder="description" name="description" id="description"/>
                </div>

                <div class="mb-2 form-group">
                    <label>Status</label>
                    <select class="form-select mb-2" name="status">
                        <option value="publish">PUBLISH</option>
                        <option value="unpublish">UNPUBLISH</option>
                    </select>
                </div>

                <div class="mb-2 text-center">
                    <input type="submit" class="btn btn-primary mt-3" value="Update" name="update_category_btn" id="update_category_btn"/>
                </div>

            </form>
        </div>
    </section>





<?php include('includes/script.php'); ?>