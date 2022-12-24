<!-- Categories Start -->
<div class="container-fluid pt-5">
    <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span
                class="bg-secondary pr-3">Categories</span></h2>
    <div class="row px-xl-5 pb-3">
        <?php
        $query = "SELECT c.*, COUNT(p.id) as product_count
FROM categories c
         LEFT JOIN products p ON c.id = p.category
GROUP BY c.id ";
        $categories = $db->query($query)->fetchAll();
        foreach ($categories as $category) {
            $id = $category["id"];
            $category_name = $category["category_name"];
            $product_count = $category['product_count'];
            $category_image = $category['image'];
            echo "
                <div class=\"col-lg-3 col-md-4 col-sm-6 pb-1\">
            <a class=\"text-decoration-none\" href=\"index.php?category=$id\">
                <div class=\"cat-item d-flex align-items-center mb-4\">
                    <div class=\"overflow-hidden\" style=\"width: 100px; height: 100px;\">
                        <img class=\"img-fluid \" style='object-fit: fill; width: 100%; height: 100%;' src=\"$category_image\" alt=\"\">
                    </div>
                    <div class=\"flex-fill pl-3\">
                        <h6>$category_name</h6>
                        <small class=\"text-body\">$product_count Products</small>
                    </div>
                </div>
            </a>
        </div>
                ";
        }
        ?>


    </div>
</div>
<!-- Categories End -->