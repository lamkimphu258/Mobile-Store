<?php include "includes/header.php"; ?>

<?php include "includes/navigation.php"; ?>

<?php
if (isset($_POST['add-product'])) {
    $product_name = $_POST['product-name'];
    $product_brand = $_POST['product-brand'];
    $product_rom = $_POST['product-rom'];
    $product_ram = $_POST['product-ram'];
    $product_operating_system = $_POST['product-operating-system'];
    $product_price = $_POST['product-price'];
    $product_type = $_POST['product-type'];

    $product_image = $_FILES['image']['name'];
    $product_image_temp = $_FILES['image']['tmp_name'];

    move_uploaded_file($product_image_temp, "../public/images/products/$product_image");

    $sql = "INSERT INTO products (prod_name, prod_brand, prod_rom, prod_ram, prod_os, prod_price, prod_type, prod_image, prod_is_popular) ";
    $sql .= "VALUES ('{$product_name}', '{$product_brand}', '{$product_rom}', '{$product_ram}', '{$product_operating_system}', '{$product_price}', '{$product_type}', '{$product_image}', false)";
    $result = mysqli_query($connection, $sql);

    if ($result) {
        header("Location: products.php");
    } else {
        echo mysqli_error($connection);
    }
}

?>

<div class="container">
    <h1 class="text-center signup mt-3">Add new Product</h1>
    <form action="add_product.php" method="post" class="mx-auto" enctype="multipart/form-data">
        <div class="form-group">
            <label for="product-name">Name</label>
            <input type="text" class="form-control" name="product-name" required>
        </div>
        <div class="form-group">
            <label for="product-brand">Brand</label>
            <input type="text" class="form-control" name="product-brand" required>
        </div>
        <div class="form-group">
            <label for="rom">Rom</label>
            <input type="text" class="form-control" name="product-rom" required>
        </div>
        <div class="form-group">
            <label for="ram">Ram</label>
            <input type="text" class="form-control" name="product-ram" required>
        </div>
        <div class="form-group">
            <label for="operating-system">Operating System</label>
            <input type="text" class="form-control" name="product-operating-system" required>
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input type="number" class="form-control" name="product-price" required>
        </div>
        <div class="form-group">
            <label for="type">Type</label>
            <input type="text" class="form-control" name="product-type" required>
        </div>
        <div class="form-group mt-2">
            <label for="image">Image</label>
            <input name="image" type="file" class="form-control-file">
        </div>
        <input type="submit" name="add-product" class="btn btn-dark form-control my-4" value="Add New Product">
    </form>
</div>

<?php include "includes/footer.php"; ?>