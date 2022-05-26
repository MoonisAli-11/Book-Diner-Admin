<?php include('includes/header.php'); ?>


    <!--interface-->
    <section id="interface">
        

    <?php include('includes/navigation.php'); ?>





        <!--title-->
        <h3 class="i-name">Payment Gateway</h3>
        

        <div class="text-center">
            <?php include('messages.php');?>
        </div>

        <?php
            include('get.payment.php');
        ?>

        <!--table-->
        <div class="board">
            <table width="100%">
                <thead>
                    <tr>
                        <td>NAME</td>
                        <td>Description</td>
                        <td>Image</td>
                        <td>STATUS</td>
                        <td>ACTION</td>
                    </tr>
                </thead>
                <tbody>

                <?php foreach($payments as $payment){ ?>

                    <tr>
                        <td class="people">
                            <div class="people-description">
                                <h5><?php echo $payment['name']; ?></h5>
                            </div>
                        </td>

                        <td class="people-des">
                            <p><?php echo $payment['description']; ?></p>
                        </td>

                        <td class="role">
                            <p><img src="assets/img/<?php echo $payment['image']; ?>"/></p>
                        </td>

                        <td class="active">
                            <?php
                            if($payment['status']==1){
                                echo '<p><a href="payment.status.php?id='.$payment['id'].'&status=0" class="btn btn-primary" title="Click to Unpublish" data-toggle="tooltip">Publish</a></p>';
                            }else{
                                echo '<p><a href="payment.status.php?id='.$payment['id'].'&status=1" class="btn btn-danger" title="Click to Publish" data-toggle="tooltip">Unpublish</a></p>';
                            }
                            ?>
                        </td>

                        <td class="edit">
                            <p>
                                <a class="btn btn-primary" title="Click to Edit" data-toggle="tooltip" href="<?php echo "edit.payment.php?payment_id=".$payment['id']; ?>">
                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
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