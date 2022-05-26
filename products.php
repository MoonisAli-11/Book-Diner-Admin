<?php include('includes/header.php'); ?>


    <!--interface-->
    <section id="interface">
        
<div class="navigation">
    <!--search-->
    <div class="n1">
        <div>
            <i id="menu-btn" class="fa fa-bars" aria-hidden="true"></i>
        </div>
        <div class="search">
           
            <form method="POST" action="search.products.php">
            <input type="text" name="search_input" placeholder="search products"/>    
                <button type="submit" name="search_btn" class="btn">
                    <i class="fa fa-search" aria-hidden="true"></i>
                </button>
                
            </form>
        </div>
    </div>

    <!--profile-->
    <div class="profile">
        <a href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i></a>
        <a href="account.php"><img src="assets/img/logo.jpeg"/></a>
    </div>
</div>

        <!--title-->
        <h3 class="i-name">Products</h3>
        

        <?php include('messages.php'); ?>

        <?php
            include('get.products.php');
        ?>

        <!--table-->
        <div class="board">
            <table width="100%">
                <thead>
                    <tr>
                        <td>TITLE</td>
                        <td>DESCRIPTION</td>
                        <td>CATEGORY</td>
                        <td>Branch</td>
                        <td>STATUS</td>
                        <td>EDIT IMAGE</td>
                        <td>ACTION</td>
                    </tr>
                </thead>
                <tbody>

                <?php foreach($products as $product){ ?>

                    <tr>
                        <td class="people">
                            <p><img src="assets/img/<?php echo $product['image']; ?>"/></p>
                            <div class="people-description">
                                <h5><?php echo $product['name']; ?></h5>
                            </div>
                        </td>

                        <td class="people-des">
                            <p><?php echo $product['description']; ?></p>
                        </td>

                        <td class="role">
                            <p><?php echo $product['category']; ?></p>
                        </td>

                        <td class="role">
                            <p><?php echo $product['branch']; ?></p>
                        </td>

                        <td class="active">
                            <?php
                            if($product['status']==1){
                                echo '<p><a href="product.status.php?id='.$product['id'].'&status=0" class="btn btn-primary" title="Click to Unpublish" data-toggle="tooltip">Publish</a></p>';
                            }else{
                                echo '<p><a href="product.status.php?id='.$product['id'].'&status=1" class="btn btn-danger" title="Click to Publish" data-toggle="tooltip">Unpublish</a></p>';
                            }
                            ?>
                        </td>

                        <td class="edit">
                            <p>
                                <a class="btn btn-primary" title="Click to Edit Image" data-toggle="tooltip" href="<?php echo "edit.product.image.php?product_id=".$product['id'];?>">
                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                </a>
                            </p>
                        </td>

                        <td class="edit">
                            <p> 
                                <a class="btn btn-primary" title="Click to Edit" data-toggle="tooltip" href="<?php echo "edit.product.php?product_id=".$product['id'];?>">
                                    <i class="fa fa-pencil" aria-hidden="true"></i>
                                </a>
                                <a class="btn btn-danger" title="Click to Delete" data-toggle="tooltip"
                                    onclick="return confirm('Are you sure to delete this data')" href="<?php echo "delete.product.php?product_id=".$product['id'];?>">
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