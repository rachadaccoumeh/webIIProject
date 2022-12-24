<!-- Carousel Start -->
<div class="container-fluid mb-3">
    <div class="row px-xl-5">
        <div class="col-lg-8">
            <div id="header-carousel" class="carousel slide carousel-fade mb-30 mb-lg-0" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#header-carousel" data-slide-to="1"></li>
                    <li data-target="#header-carousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <?php
                    // $query = "select *,image_url AS image from products INNER JOIN images where product_id =id AND sales > 0 AND count>0 order by sales DESC LIMIT 3";
                    $query = "SELECT carts.product_id as id, image_url as image, COUNT(*) as frequency, product_description, product_price, sales FROM carts INNER JOIN products ON carts.product_id = products.id INNER JOIN images ON carts.product_id = images.product_id GROUP BY carts.product_id, image_url, product_description, product_price, sales ORDER BY frequency DESC LIMIT 3;";
                    $salesProducts = $db->query($query)->fetchAll();
                    $index = -1;
                    foreach ($salesProducts as $salesProduct) {
                        $index++;
                        $id = $salesProduct["id"];
                        $product_name = $salesProduct["product_name"];
                        $product_description = $salesProduct["product_description"];
                        $product_price = $salesProduct["product_price"];
                        $sales = $salesProduct["sales"];
                        $product_image = $salesProduct["image"];

                        if ($index == 0)
                            $active = "active";
                        else
                            $active = "";

                        echo "
                        <div class=\"carousel-item position-relative $active\" style=\"height: 430px;\">
                        <img class=\"position-absolute w-100 h-100\" src=\"$product_image\"
                             style=\"object-fit: cover;\">
                        <div class=\"carousel-caption d-flex flex-column align-items-center justify-content-center\">
                            <div class=\"p-3\" style=\"max-width: 700px;\">
                                <h1 class=\"display-4 text-white mb-3 animate__animated animate__fadeInDown\">$product_name</h1>
                                <p class=\"mx-md-5 px-5 animate__animated animate__bounceIn\">$product_description</p>
                                <a class=\"btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp\"
                                   href=\"index.php?product=$id\">Shop Now</a>
                        </div>
                        </div>
                    </div>
                        ";
                    }
                    ?>

                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <?php
            $query = "select *,image_url AS image  from products INNER JOIN images WHERE product_id=id AND sales > 0 AND count>0 order by sales DESC LIMIT 2";
            $salesProducts = $db->query($query)->fetchAll();
            foreach ($salesProducts as $salesProduct) {
                $id = $salesProduct["id"];
                $product_name = $salesProduct["product_name"];
                $product_description = $salesProduct["product_description"];
                $product_price = $salesProduct["product_price"];
                $sales = $salesProduct["sales"];
                $category = $salesProduct["category"];
                $product_image = $salesProduct['image'];
                echo "
                <div class=\"product-offer mb-30\" style=\"height: 200px;\">
                <img class=\"img-fluid\" src=\"$product_image\" alt=\"\">
                <div class=\"offer-text\">
                    <h6 class=\"text-white text-uppercase\">Save $sales%</h6>
                    <h3 class=\"text-white mb-3\">Special Offer</h3>
                    <a href=\"index.php?product=$id\" class=\"btn btn-primary\">Shop Now</a>
                </div>
            </div>
                ";
            }
            ?>
        </div>
    </div>
</div>
<!-- Carousel End -->

