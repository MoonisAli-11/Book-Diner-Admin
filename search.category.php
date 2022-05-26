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
           
            <form method="POST" action="search.category.php">
            <input type="text" name="search_input" placeholder="search categories"/>    
                <button type="submit" name="search_btn" class="btn">
                    <i class="fa fa-search" aria-hidden="true"></i>
                </button>
                
            </form>
        </div>
    </div>

    <!--profile-->
    <div class="profile">
        <a href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i></a>
        <a href="account.php"><i class="fa fa-user" aria-hidden="true"></i></a>
    </div>
</div>

        <!--title-->
        <h3 class="i-name">Categories</h3>
        

    <?php include('messages.php'); ?>

        
<?php

include('connection.php');

if(isset($_POST['search_input'])){
    $_SESSION['search_input'] = $_POST['search_input'];
    $search_input = $_SESSION['search_input'];
}else{
    $search_input = $_SESSION['search_input'];
}

//determine page no
if(isset($_GET['page_no']) && $_GET['page_no'] != ""){
    $page_no = $_GET['page_no'];

}
else{
    $page_no = 1;
}

//return no of categories
$stmt1 = $conn->prepare("select count(*) as total_categories from category");
$stmt1->execute();
$stmt1->bind_result($total_categories);
$stmt1->store_result();
$stmt1->fetch();

//categories per page
$total_categories_per_page = 5;

$offset = ($page_no-1) * $total_categories_per_page;

$total_no_of_pages = ceil($total_categories/$total_categories_per_page);

//get categories

$stmt2 = $conn->prepare("select * from category where cat_name like ? limit $offset,$total_categories_per_page");
$stmt2->bind_param("s",$search_input);
$stmt2->execute();
$categories = $stmt2->get_result();



?>



        <!--table-->
        <div class="board">
            <table width="100%">
                <thead>
                    <tr>
                        <td>CATEGORY NAME</td>
                        <td>DESCRIPTION</td>
                        <td>CATEGORY IMAGE</td>
                        <td>STATUS</td>
                        <td>ACTION</td>
                    </tr>
                </thead>
                <tbody>

                <?php foreach($categories as $category){ ?>

                    <tr>
                        <td class="people">
                            <div class="people-description">
                                <h5><?php echo $category['cat_name']; ?></h5>
                            </div>
                        </td>

                        <td class="people-des">
                            <p><?php echo $category['description']; ?></p>
                        </td>

                        <td class="role">
                            <p><img src="assets/img/<?php echo $category['image']; ?>"/></p>
                        </td>

                        <td class="active">
                            <?php
                            if($category['status']==1){
                                echo '<p><a href="category.status.php?id='.$category['id'].'&status=0" class="btn btn-primary" title="Click to Unpublish" data-toggle="tooltip">Publish</a></p>';
                            }else{
                                echo '<p><a href="category.status.php?id='.$category['id'].'&status=1" class="btn btn-danger" title="Click to Publish" data-toggle="tooltip">Unpublish</a></p>';
                            }
                            ?>
                        </td>

                        <td class="edit">
                            <p>
                                <a class="btn btn-primary" title="Click to Edit" data-toggle="tooltip" href="<?php echo "edit.category.php?category_id=".$category['id']; ?>">
                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                </a>
                                <a class="btn btn-danger" title="Click to Delete" data-toggle="tooltip"
                                    onclick="return confirm('Are you sure to delete this data')" href="<?php echo "delete.category.php?category_id=".$category['id'];?>">
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