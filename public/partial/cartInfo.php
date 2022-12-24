<!-- Cart Start -->
<div class="container-fluid">
    <div class="row px-xl-5">
        <div class="col-lg-8 table-responsive mb-5">
            <table class="table table-light table-borderless table-hover text-center mb-0">
                <thead class="thead-dark">
                <tr>
                    <th>Products</th>
                    <th>Price</th>
                    <th>Remove</th>
                </tr>
                </thead>
                <tbody class="align-middle">
                <?php
                $products = $db->query($productQuery)->fetchAll();
                $totalPrice=0;
                foreach ($products as $product) {
                    $id = $product["id"];
                    $product_name = $product["product_name"];
                    $product_price = $product["product_price"];
                    $sales = $product["sales"];
                    $real_price = floatval(str_replace(",", '', trim($product_price, "$"))) - ((floatval(str_replace(",", '', trim($product_price, "$"))) * floatval(trim($sales, "$"))) / 100);
                    $totalPrice+=$real_price;
                    echo "
                
                <tr>
                    <td class=\"align-middle\"><img src=\"\" alt=\"\" style=\"width: 50px;\"> $product_name</td>
                    <td class=\"align-middle\">$real_price$</td>
                    <td class=\"align-middle\"><a href='cart.php?delete=$id'><button class=\"btn btn-sm btn-danger\"><i class=\"fa fa-times\"></a></i></button></td>
                </tr>
                
                 ";
                }
                ?>
                </tbody>
            </table>
        </div>
        <div class="col-lg-4">

            <h5 class="section-title position-relative text-uppercase mb-3"><span
                        class="bg-secondary pr-3">Cart Summary</span></h5>
            <div class="bg-light p-30 mb-5">
                <div class="border-bottom pb-2">
                    <div class="d-flex justify-content-between mb-3">
                        <h6>Subtotal</h6>
                        <h6><?php echo"$$totalPrice"?></h6>
                    </div>
                    <div class="d-flex justify-content-between">
                        <h6 class="font-weight-medium">Shipping</h6>
                        <h6 class="font-weight-medium">$10</h6>
                    </div>
                </div>
                <div class="pt-2">
                    <div class="d-flex justify-content-between mt-2">
                        <h5>Total</h5>
                        <h5><?php $totalPrice+=10; echo"$$totalPrice"?></h5>
                    </div>
                    <button class="btn btn-block btn-primary font-weight-bold my-3 py-3">Proceed To Checkout</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Cart End -->