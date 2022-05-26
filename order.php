<?php include('includes/header.php'); ?>



    <!--interface-->
    <section id="interface">
    
    <?php include('includes/navigation.php'); ?>
    
        <!--title-->
        <h3 class="i-name">Orders</h3>


        <!--table-->
        <div class="board">
            <table width="100%">
                <thead>
                    <tr>
                        <td>NAME</td>
                        <td>PRODUCT</td>
                        <td>QUANTITY</td>
                        <td>PRICE</td>
                        <td>DISCOUNT</td>
                        <td>TOTAL</td>
                        <td>DATE</td>
                    </tr>
                </thead>
                <tbody>

                <?php include('get.orders.php'); ?>
                <?php foreach($orders as $orders) { ?>
                    <tr>
                        <td class="people">
                            <div class="people-description">
                                <h5><?php echo $orders['user_name'];?></h5>
                            </div>
                        </td>

                        <td class="people-des">
                            <h5><?php echo $orders['product_name'];?></h5>
                        </td>

                        <td class="active">
                            <p><?php echo $orders['quantity'];?></p>
                        </td>

                        <td class="role">
                            <p><i class="fa fa-inr" aria-hidden="true"></i><?php echo $orders['price'];?></p>
                        </td>

                        <td class="role">
                            <p><?php echo $orders['discount'];?><i class="fa fa-percent" aria-hidden="true"></i></p>
                        </td>

                        <td class="role">
                            <p><i class="fa fa-inr" aria-hidden="true"></i><?php echo $orders['total'];?></p>
                        </td>

                        <td class="role">
                            <p><?php echo $orders['date'];?></p>
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





    <script>
        $('#menu-btn').click(function(){
            $('#menu').toggleClass('active'); })
    </script>
    
</body>
</html>