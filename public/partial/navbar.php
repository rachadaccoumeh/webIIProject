<!-- Navbar Start -->
<div class="container-fluid bg-dark mb-30">
    <div class="row px-xl-5">
        <div class="col-lg-3 d-none d-lg-block">
            <a class="btn d-flex align-items-center justify-content-between bg-primary w-100" data-toggle="collapse"
               href="#navbar-vertical" style="height: 65px; padding: 0 30px;">
                <h6 class="text-dark m-0"><i class="fa fa-bars mr-2"></i>Categories</h6>
                <i class="fa fa-angle-down text-dark"></i>
            </a>
            <nav class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 bg-light"
                 id="navbar-vertical" style="width: calc(100% - 30px); z-index: 999;">
                <div class="navbar-nav w-100">

                    <?php
                    $query = "select * from categories";
                    $categories = $db->query($query)->fetchAll();
                    foreach ($categories as $category) {
                        $id = $category["id"];
                        $name = $category["category_name"];
                        echo "<a href='index.php?category=$id' class='nav-item nav-link'>$name</a>";
                    }
                    ?>
                </div>
            </nav>
        </div>
        <div class="col-lg-9">
            <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-0">
                <a href="" class="text-decoration-none d-block d-lg-none">
                    <span class="h1 text-uppercase text-dark bg-light px-2">Multi</span>
                    <span class="h1 text-uppercase text-light bg-primary px-2 ml-n1">Shop</span>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav mr-auto py-0">
                        <a href="index.php" class="nav-item nav-link active">Home</a>
                        <a href="cart.php" class="nav-item nav-link">Cart</a>
                        <a href="register.php" class="nav-item nav-link">create an account</a>
                    </div>
                    <div class="navbar-nav ml-auto py-0 d-none d-lg-block">
                        <a <?php if (!isset($_COOKIE["user_id"])) echo 'href="login.php"' ?> class="btn px-0">
                            <i class="fas fa-user text-primary"></i>

                            <span class="badge text-secondary border border-secondary rounded-circle"
                                  style="padding-bottom: 2px;">
                                <?php
                                if (isset($_COOKIE["user_id"])) {
                                    $query = "select user_name from users WHERE id=:id";
                                    $username = $db->query($query, [':id' => $_COOKIE["user_id"]])->fetch();
                                    echo $username['user_name'];
                                } else
                                    echo "Login";
                                ?>
                            </span>
                        </a>
                        <a href="cart.php" class="btn px-0 ml-3">
                            <i class="fas fa-shopping-cart text-primary"></i>
                            <span class="badge text-secondary border border-secondary rounded-circle"
                                  style="padding-bottom: 2px;">
                                <?php

                                if (isset($_COOKIE["user_id"])) {
                                    $query = "select COUNT(*) from carts WHERE user_id=:id";
                                    $cartCount = $db->query($query, [':id' => $_COOKIE["user_id"]])->fetch();
                                    echo $cartCount['COUNT(*)'];
                                } else
                                    echo 0;
                                ?>
                            </span>
                        </a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
<!-- Navbar End -->
