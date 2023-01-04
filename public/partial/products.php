<!-- Products Start -->
<div class="container-fluid pt-5 pb-3">
    <?php

    echo "<h2 class=\"section-title position-relative text-uppercase mx-xl-5 mb-4\"><span class=\"bg-secondary pr-3\">$categoryTitle</span>"
    ?>
    </h2>
    <div class="row px-xl-5">
        <?php
        $products = $db->query($productQuery)->fetchAll();
        foreach ($products as $product) {
            $id = $product["id"];
            $product_name = $product["product_name"];
            $product_description = $product["product_description"];
            $product_price = $product["product_price"];
            $sales = $product["sales"];
            $category = $product["category"];
            $product_image = $product['image'];
            $real_price = floatval(str_replace(",", '', trim($product_price, "$"))) - ((floatval(str_replace(",", '', trim($product_price, "$"))) * floatval(trim($sales, "$"))) / 100);
            echo "
                 <div class=\"col-lg-3 col-md-4 col-sm-6 pb-1\">
            <div class=\"product-item bg-light mb-4\">
                <div class=\"product-img position-relative overflow-hidden\">
                    <img class=\"img-fluid w-100\" style='width: 342px; height: 342px;'  src=\"$product_image\" alt=\"\">
                    <div class=\"product-action\">
                        <a class=\"btn btn-outline-dark btn-square\" href=\"cart.php?add=$id\"><i class=\"fa fa-shopping-cart\"></i></a>
                        <a class=\"btn btn-outline-dark btn-square\" href=\"\"><i class=\"far fa-heart\"></i></a>
                        <a class=\"btn btn-outline-dark btn-square\" href=\"index.php?category=$category\"><i class=\"fa fa-search\"></i></a>
                    </div>
                </div>
                <div class=\"text-center py-4\">
                    <a class=\"h6 text-decoration-none text-truncate\" href=\"index.php?product=$id\">$product_name</a>
                    <div class=\"d-flex align-items-center justify-content-center mt-2\">
                        <h5>$$real_price</h5>
                        <h6 class=\"text-muted ml-2\">
                            <del>$product_price</del>
                        </h6>
                    </div>
              
                </div>
            </div>
        </div>
                ";
        }
        ?>
    </div>
</div>
<!-- Products End -->