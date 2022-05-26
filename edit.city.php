<?php include('includes/header.php'); ?>



    <!--interface-->
    <section id="interface">
        
    <?php include('includes/navigation.php'); ?>

        <!--title-->
        <h3 class="i-name">Update City</h3>


        <?php
            
            if(!isset($_GET['city_id'])){
                header('location: city.php?error_message=city id was not given');
                exit;
            }
        
        ?>

        <div class="container-fluid w-50 my-5">
            <form method="POST" action="update.city.php">
                <div class="mb-2 form-group">
                    <label>city Id</label>
                    <p class="form-control"><?php echo $_GET['city_id'];?></p>
                    <input type="hidden" name="city_id" value="<?php echo $_GET['city_id'];?>"/>
                </div>
                
                <div class="mb-2 form-group">
                    <label>city Name</label>
                    <input type="text" class="form-control" placeholder="title" name="title" id="title"/>
                </div>

                <div class="mb-2 form-group">
                    <label>Status</label>
                    <select class="form-select mb-2" name="status">
                        <option value="publish">PUBLISH</option>
                        <option value="unpublish">UNPUBLISH</option>
                    </select>
                </div>

                <div class="mb-2 text-center">
                    <input type="submit" class="btn btn-primary mt-3" value="Update" name="update_city_btn" id="update_city_btn"/>
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