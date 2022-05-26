<?php include('includes/header.php'); ?>


    <!--interface-->
    <section id="interface">
        
    <?php include('includes/navigation.php'); ?>

        <!--title-->
        <h3 class="i-name">Add New City</h3>


        <div class="container-fluid w-50 my-5">

            <form method="POST" enctype="multipart/form-data" action="create.city.php">
                <div class="mb-2 form-group">
                    <label>City Name</label>
                    <input type="text" class="form-control" placeholder="title" name="title" id="title"/>
                </div>

                <div class="mb-2 form-group">
                    <label>Status</label>
                    <select class="form-select mb-2" name="status">
                        <option value="PUBLISH">Publish</option>
                        <option value="UNPUBLISH">Unpublish</option>
                    </select>
                </div>

                <div class="mb-2 text-center">
                    <input type="submit" class="btn btn-primary mt-3" value="Add City" name="add_city_btn" id="add_city_btn"/>
                </div>

            </form>
        </div>
    </section>




<?php include('includes/script.php'); ?>