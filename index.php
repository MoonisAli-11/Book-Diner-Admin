<?php include('includes/header.php'); ?>


    <!--interface-->
    <section id="interface">
        
    <?php include('includes/navigation.php'); ?>

        <!--title-->
        <h3 class="i-name">Dashboard</h3>


        <!--messages-->
        <?php include('messages.php');?>

        <!--stats-->
        <?php include('get.stats.php');?>

        <!--cards-->
        <div class="values">
            <div class="val-box">
                <i class="fa fa-users" aria-hidden="true"></i>
                <div>
                    <h3><?php if($total_users != null){ echo $total_users;}?></h3>
                    <span>Users</span>
                </div>
            </div>

            <div class="val-box">
                <i class="fa fa-product-hunt" aria-hidden="true"></i>
                <div>
                    <h3><?php if($total_products != null){ echo $total_products;}?></h3>
                    <span>Products</span>
                </div>
            </div>

            <div class="val-box">
                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                <div>
                    <h3><?php if($total_quantity != null){ echo $total_quantity;}?></h3>
                    <span>Quantity</span>
                </div>
            </div>

            <div class="val-box">
                <i class="fa fa-inr" aria-hidden="true"></i>
                <div>
                    <h3><?php if($total_money != null){ echo $total_money;}?></h3>
                    <span>Sales</span>
                </div>
            </div>
        </div>

        <div class="values1">
            <div class="val-box1">
                <i class="fa fa-line-chart" aria-hidden="true"></i>
                <div>
                    <h3><?php if($total_orders != null){ echo $total_orders;}?></h3>
                    <span>Orders</span>
                </div>
            </div>

            <div class="val-box1">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <div>
                    <h3><?php if($total_cities != null){ echo $total_cities;}?></h3>
                    <span>Cities</span>
                </div>
            </div>

            <div class="val-box1">
                <i class="fa fa-users" aria-hidden="true"></i>
                <div>
                    <h3><?php if($total_partners != null){ echo $total_partners;}?></h3>
                    <span>Partners</span>
                </div>
            </div>

            <div class="val-box1">
                <i class="fa fa-list-ul" aria-hidden="true"></i>
                <div>
                    <h3><?php if($total_categories != null){ echo $total_categories;}?></h3>
                    <span>Categories</span>
                </div>
            </div>
        </div>

         <!--table-->
         <div class="board">
            <table width="100%">
                <thead>
                    <tr>
                        <td>Name</td>
                        <td>Email</td>
                        <td>Mobile No.</td>
                        <td>Address</td>
                        <td>Status</td>
                        <td>Action</td>
                    </tr>
                </thead>
                <tbody>

                <?php include('get.users.php'); ?>

                <?php foreach($users as $user){ ?>
                    <tr>
                        <td class="people">
                            <div class="people-description">
                                <h5><?php echo $user['name']; ?></h5>
                            </div>
                        </td>

                        <td class="people-des">
                            <p><?php echo $user['email']; ?></p>
                        </td>

                        <td class="role">
                            <p><?php echo $user['mobile']; ?></p>
                        </td>

                        <td class="role">
                            <p><?php echo $user['address']; ?></p>
                        </td>

                        <td class="active">
                            <?php
                            if($user['status']==1){
                                echo '<p><a href="index.status.php?id='.$user['id'].'&status=0" class="btn btn-primary" title="Click to Disable" data-toggle="tooltip">Enable</a></p>';
                            }else{
                                echo '<p><a href="index.status.php?id='.$user['id'].'&status=1" class="btn btn-danger" title="Click to Enable" data-toggle="tooltip">Disable</a></p>';
                            }
                            ?>
                        </td>

                        <td class="edit">
                            <p>
                                <a class="btn btn-danger" title="Click to Delete" data-toggle="tooltip"
                                    onclick="return confirm('Are you sure to delete this data')" href="<?php echo "delete.user.php?user_id=".$user['id'];?>">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                </a>
                            </p>
                        </td>
                        
                    </tr>

                <?php } ?>

                </tbody>
            </table>
        </div>

        
        <nav class="container mx-3" aria-label="Page navigation example">
            <ul class="pagination">


                <li class="page-item <?php if($page_no<=1){echo 'disabled';}?>">
                    <a class="page-link" href="<?php if($page_no<=1){echo'#';}else{echo '?page_no='.($page_no-1);}?>">
                        <i class="fa fa-arrow-left" aria-hidden="true"></i>
                    </a>
                </li>

                <li class="page-item">
                    <a class="page-link" href="?page_no=1">1</a>
                </li>

                <li class="page-item">
                    <a class="page-link" href="?page_no=2">2</a>
                </li>

                <?php if($page_no >= 3){ ?>
                    <li class="page-item">
                        <a class="page-link" href="#">...</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="<?php echo "?page_no=".$page_no;?>"><?php echo $page_no-1;?></a>
                    </li>
                <?php } ?>

                <li class="page-item <?php if($page_no>= $total_no_of_pages){echo 'disabled';}?>">
                    <a class="page-link" href="<?php if($page_no>=$total_no_of_pages){echo'#';}else{echo '?page_no='.($page_no+1);}?>">
                        <i class="fa fa-arrow-right" aria-hidden="true"></i>
                    </a>
                </li>

            </ul>
        </nav>


    </section>





    <?php include('includes/script.php'); ?>