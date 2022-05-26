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