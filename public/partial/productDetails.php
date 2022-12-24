<!-- Shop Detail Start -->
<div class="container-fluid pb-5">
    <div class="row px-xl-5">
        <div class="col-lg-5 mb-30">
            <div id="product-carousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner bg-light">
                    <?php
                    $imgs = $db->query($imgQuery)->fetchAll();
                    $index = -1;
                    foreach ($imgs as $img) {
                        $index++;
                        $product_image = $img["image_url"];

                        if ($index == 0)
                            $active = "active";
                        else
                            $active = "";

                        echo "
                         <div style='height: 500px; ' class=\"carousel-item $active\">
                        <img class=\"w-100 h-100\" style='height: 500px; width: 500px;' src=\"$product_image\" alt=\"Image\">
                    </div>
                        ";
                    }
                    $product = $db->query($productQuery)->fetch();
                    $id = $product["id"];
                    $product_name = $product["product_name"];
                    $product_description = $product["product_description"];
                    $product_price = $product["product_price"];
                    $sales = $product["sales"];
                    $category = $product["category"];
                    ?>

                </div>
                <a class="carousel-control-prev" href="#product-carousel" data-slide="prev">
                    <i class="fa fa-2x fa-angle-left text-dark"></i>
                </a>
                <a class="carousel-control-next" href="#product-carousel" data-slide="next">
                    <i class="fa fa-2x fa-angle-right text-dark"></i>
                </a>
            </div>
        </div>

        <div class="col-lg-7 h-auto mb-30">
            <div class="h-100 bg-light p-30">
                <h3><?php echo "$product_name" ?></h3>
                <h3 class="font-weight-semi-bold mb-4"><?php
                    $real_price = floatval(str_replace(",", '', trim($product_price, "$"))) - ((floatval(str_replace(",", '', trim($product_price, "$"))) * floatval(trim($sales, "$"))) / 100);

                    echo "$real_price$" ?></h3>
                <p class="mb-4"><?php echo "$product_description" ?></p>

                <div class="d-flex align-items-center mb-4 pt-2">

                    <a href="cart.php?add=<?php echo "$id" ?>">
                        <button class="btn btn-primary px-3"><i class="fa fa-shopping-cart mr-1"></i> Add To
                            Cart
                        </button>
                    </a>
                </div>
                <div class="d-flex pt-2">
                    <strong class="text-dark mr-2">Share on:</strong>
                    <div class="d-inline-flex">
                        <a class="text-dark px-2" href="">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="text-dark px-2" href="">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a class="text-dark px-2" href="">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a class="text-dark px-2" href="">
                            <i class="fab fa-pinterest"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Shop Detail End -->
