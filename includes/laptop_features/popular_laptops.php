<div class="card border-top-0 my-3 col-12 p-0">
    <div class="card-header bg-primary">
        <h2 class="text-center text-white">Popular Laptops</h2>
    </div>
    <div class="card-body d-flex justify-content-center">
        <?php
        $sql = "SELECT * FROM products WHERE prod_type = 'laptop' AND prod_is_popular = 1 LIMIT 4";
        $result = mysqli_query($connection, $sql);
        while ($product = mysqli_fetch_assoc($result)) {
        ?>
            <div class="card mr-4 border-0" style="max-width: 250px;">
                    <a href="product_detail.php?id=<?php echo $product['prod_id']; ?>"><img class="card-img-top mt-2" src="public/images/products/<?php echo $product['prod_image']; ?>" alt="Card image cap" style="min-height:200px;"></a>
                <div class="card-body">
                    <h5 class="card-title"><?php echo $product['prod_name']; ?></h5>
                    <p class="card-text">Price: <?php echo $product['prod_price']; ?></p>
                </div>
<a type="button" class="btn btn-primary" href="../buy_product.php?id=<?php echo $product['prod_id'];?>">Buy</a>
            </div>
        <?php } ?>
    </div>

</div>
