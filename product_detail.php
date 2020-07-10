<?php include "includes/header.php"; ?>

<?php include "includes/navigation.php"; ?>

<div class="container">
    <div class="d-flex py-4 mt-3 justify-content-center">
        <?php
        if (isset($_GET['id'])) {
            $sql = "SELECT * FROM products WHERE prod_id='{$_GET['id']}'";
        }
        $result = mysqli_query($connection, $sql);
        $product = mysqli_fetch_assoc($result);
        ?>
        <div class="product-image mr-4">
            <img src="public/images/products/<?php echo $product['prod_image']; ?>" alt="Product image">
        </div>
        <div class="product-detail my-auto">
            <p>Name: <?php echo $product['prod_name']; ?></p>
            <p>Brand: <?php echo $product['prod_brand']; ?></p>
            <p>Rom: <?php echo $product['prod_rom']; ?></p>
            <p>Ram: <?php echo $product['prod_ram']; ?></p>
            <p>Operating System: <?php echo $product['prod_os']; ?></p>
            <a href="buy_product.php?id=<?php echo $product['prod_id']; ?>" class="btn btn-outline-primary d-block mb-2">Buy</a>
        </div>
        
    </div>
</div>

<?php include "includes/footer.php"; ?>
