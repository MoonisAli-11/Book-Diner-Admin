<?php include('includes/header.php'); ?>


    <!--interface-->
    <section id="interface">
        
    <?php include('includes/navigation.php'); ?>

        <!--title-->
        <h3 class="i-name">Add New Partner</h3>


        <div class="container-fluid w-50 my-5">

            <form method="POST" enctype="multipart/form-data" action="create.partner.php">
                <div class="mb-2 form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" placeholder="title" name="title" id="title"/>
                </div>
            
                <div class="mb-2 form-group">
                    <label>Email Id</label>
                    <input type="email" class="form-control" placeholder="email id" name="email" id="email"/>
                </div>

                <div class="mb-2 form-group">
                    <label>Mobile No.</label>
                    <input type="text" class="form-control" placeholder="mobile no." name="mobile" id="mobile"/>
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
                        <option value="APPROVED">Approved</option>
                        <option value="UNAPPROVED">UnApproved</option>
                    </select>
                </div>

                <div class="mb-2 text-center">
                    <input type="submit" class="btn btn-primary mt-3" value="Add Partner" name="add_partner_btn" id="add_partner_btn"/>
                </div>

            </form>
        </div>
    </section>





<?php include('includes/script.php'); ?>