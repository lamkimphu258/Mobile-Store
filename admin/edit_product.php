<?php include "includes/header.php"; ?>

<?php include "includes/navigation.php"; ?>

<?php
$product_id = $_GET['id'];
$sql = "SELECT * FROM products WHERE prod_id = {$product_id}";
$result = mysqli_query($connection, $sql);
$current_product = mysqli_fetch_assoc($result);
?>

<?php
if (isset($_POST['edit-product'])) {
    $product_name = $_POST['product-name'];
    $product_brand = $_POST['product-brand'];
    $product_rom = $_POST['product-rom'];
    $product_ram = $_POST['product-ram'];
    $product_operating_system = $_POST['product-operating-system'];
    $product_price = $_POST['product-price'];
    $product_type = $_POST['product-type'];
    $product_is_popular = $_POST['product-is-popular'];

    $product_image = $_FILES['image']['name'];
    $product_image_temp = $_FILES['image']['tmp_name'];

    move_uploaded_file($product_image_temp, "../public/images/products/{$product_image}");

    if (empty($product_image)) {
        $product_image = $current_product['prod_image'];
    }

    $sql = "UPDATE products ";
    $sql .= "SET prod_name = '{$product_name}', prod_brand = '{$product_brand}', prod_rom = '{$product_rom}', prod_ram = '{$product_ram}', prod_os = '{$product_operating_system}', prod_price = '{$product_price}', prod_type = '{$product_type}', prod_image = '{$product_image}', prod_is_popular= '{$product_is_popular}'";
    $sql .= " WHERE prod_id = '{$product_id}' ";
    $result = mysqli_query($connection, $sql);

    if ($result) {
        header("Location: products.php");
    } else {
        echo mysqli_error($connection);
    }
}

?>

<div class="container">
    <h1 class="text-center signup mt-3">Edit new Product</h1>
    <form action="edit_product.php?id=<?php echo $_GET['id']; ?>" method="post" class="mx-auto" enctype="multipart/form-data">
        <div class="form-group">
            <label for="product-name">Name</label>
            <input type="text" class="form-control" name="product-name" value="<?php echo $current_product['prod_name'] ?>">
        </div>
        <div class=" form-group">
            <label for="product-brand">Brand</label>
            <input type="text" class="form-control" name="product-brand" value="<?php echo $current_product['prod_brand'] ?>">
        </div>
        <div class="form-group">
            <label for="rom">Rom</label>
            <input type="text" class="form-control" name="product-rom" value="<?php echo $current_product['prod_rom'] ?>">
        </div>
        <div class="form-group">
            <label for="ram">Ram</label>
            <input type="text" class="form-control" name="product-ram" value="<?php echo $current_product['prod_ram'] ?>">
        </div>
        <div class="form-group">
            <label for="operating-system">Operating System</label>
            <input type="text" class="form-control" name="product-operating-system" value="<?php echo $current_product['prod_os'] ?>">
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input type="number" class="form-control" name="product-price" value="<?php echo $current_product['prod_price'] ?>">
        </div>
        <div class="form-group">
            <label for="type">Type</label>
            <input type="text" class="form-control" name="product-type" value="<?php echo $current_product['prod_type'] ?>">
        </div>
        <div class="form-group mt-2">
            <img src="<?php echo "../public/images/products/{$current_product['prod_image']}" ?>" alt="">
        </div>
        <div class="form-group mt-2">
            <label for="image">Image</label>
            <input name="image" type="file" class="form-control-file">
        </div>
        <div class="form-group mt-2">
            <label for="product-is-popular">Is Popular</label>
            <input type="number" name="product-is-popular" value="<?php echo $current_product['prod_is_popular']; ?>" class="form-control">
        </div>
        <input type="submit" name="edit-product" class="btn btn-dark form-control my-4" value="Edit New Product">
    </form>
</div>

<?php include "includes/footer.php"; ?>