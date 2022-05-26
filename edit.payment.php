<?php include('includes/header.php'); ?>



    <!--interface-->
    <section id="interface">
        
    <?php include('includes/navigation.php'); ?>

        <!--title-->
        <h3 class="i-name">Update Payment Gateway</h3>


        <?php
            
            if(!isset($_GET['payment_id'])){
                header('location: payment.php?error_message=payment id was not given');
                exit;
            }
        
        ?>

        <div class="container-fluid w-50 my-5">
            <form method="POST" action="update.payment.php">
                <div class="mb-2 form-group">
                    <label>Payment Gateway Id</label>
                    <p class="form-control"><?php echo $_GET['payment_id'];?></p>
                    <input type="hidden" name="payment_id" value="<?php echo $_GET['payment_id'];?>"/>
                </div>
                
                <div class="mb-2 form-group">
                    <label>Payment Gateway Name</label>
                    <input type="text" class="form-control" placeholder="title" name="title" id="title"/>
                </div>
            
                <div class="mb-2 form-group">
                    <label>Description</label>
                    <input type="text" class="form-control" placeholder="description" name="description" id="description"/>
                </div>

                <div class="mb-2 form-group">
                    <label>Payment Gateway Image</label>
                    <input type="file" class="form-control" placeholder="image" name="image" id="image"/>
                </div>

                <div class="mb-2 form-group">
                    <label>Payment Gateway Attributes</label>
                    <input type="text" class="form-control" placeholder="attribute" name="attribute" id="attribute"/>
                </div>

                <div class="mb-2 form-group">
                    <label>Status</label>
                    <select class="form-select mb-2" name="status">
                        <option value="publish">PUBLISH</option>
                        <option value="unpublish">UNPUBLISH</option>
                    </select>
                </div>

                <div class="mb-2 text-center">
                    <input type="submit" class="btn btn-primary mt-3" value="Update" name="update_payment_btn" id="update_payment_btn"/>
                </div>

            </form>
        </div>
    </section>





<?php include('includes/script.php'); ?>