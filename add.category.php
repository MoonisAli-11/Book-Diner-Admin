<?php include('includes/header.php'); ?>


    <!--interface-->
    <section id="interface">
        
    <?php include('includes/navigation.php'); ?>

        <!--title-->
        <h3 class="i-name">Add New Category</h3>


        <div class="container-fluid w-50 my-5">

            <form method="POST" enctype="multipart/form-data" action="create.category.php">
                <div class="mb-2 form-group">
                    <label>Category Name</label>
                    <input type="text" class="form-control" placeholder="title" name="title" id="title"/>
                </div>
            
                <div class="mb-2 form-group">
                    <label>Description</label>
                    <input type="text" class="form-control" placeholder="description" name="description" id="description"/>
                </div>

                <div class="mb-2 form-group">
                    <label>Category Image</label>
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
                    <input type="submit" class="btn btn-primary mt-3" value="Add Category" name="add_category_btn" id="add_category_btn"/>
                </div>

            </form>
        </div>
    </section>





<?php include('includes/script.php'); ?>