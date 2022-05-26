<?php include('includes/header.php'); ?>



    <!--interface-->
    <section id="interface">
        
    <?php include('includes/navigation.php'); ?>

        <!--title-->
        <h3 class="i-name">Update Partner</h3>


        <?php
            
            if(!isset($_GET['partner_id'])){
                header('location: partner.php?error_message=Partner id was not given');
                exit;
            }
        
        ?>

        <div class="container-fluid w-50 my-5">
            <form method="POST" action="update.partner.php">
                <div class="mb-2 form-group">
                    <label>partner Id</label>
                    <p class="form-control"><?php echo $_GET['partner_id'];?></p>
                    <input type="hidden" name="partner_id" value="<?php echo $_GET['partner_id'];?>"/>
                </div>
                
                <div class="mb-2 form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" placeholder="title" name="title" id="title"/>
                </div>
            
                <div class="mb-2 form-group">
                    <label>Email Id</label>
                    <input type="text" class="form-control" placeholder="email id" name="email" id="email"/>
                </div>

                <div class="mb-2 form-group">
                    <label>Mobile No.</label>
                    <input type="text" class="form-control" placeholder="mobile" name="mobile" id="mobile"/>
                </div>

                <div class="mb-2 form-group">
                    <label>Address</label>
                    <input type="text" class="form-control" placeholder="address" name="address" id="address"/>
                </div>

                <div class="mb-2 form-group">
                    <label>Commission</label>
                    <input type="text" class="form-control" placeholder="commission" name="commission" id="commission"/>
                </div>

                <div class="mb-2 form-group">
                    <label>Partner Product</label>
                    <input type="text" class="form-control" placeholder="partner product" name="partner_product" id="partner_product"/>
                </div>

                <div class="mb-2 form-group">
                    <label>Product Seats</label>
                    <input type="number" class="form-control" placeholder="seat" name="seat" id="seat"/>
                </div>

                <div class="mb-2 form-group">
                    <label>Status</label>
                    <select class="form-select mb-2" name="status">
                        <option value="approved">APPROVED</option>
                        <option value="unapproved">UNAPPROVED</option>
                    </select>
                </div>

                <div class="mb-2 text-center">
                    <input type="submit" class="btn btn-primary mt-3" value="Update" name="update_partner_btn" id="update_partner_btn"/>
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