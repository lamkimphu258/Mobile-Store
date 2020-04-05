<?php include "includes/header.php"; ?>
<?php include "includes/navigation.php"; ?>

<div class="container mt-4">
    <table class="table table-bordered">
        <thead class="text-white bg-success">
            <tr>
                <th scope="col">Order Id</th>
                <th scope="col">Product Name</th>
                <th scope="col">Product Quantity</th>
                <th scope="col">Order Date</th>
                <th scope="col">Total Price</th>
            </tr>
        </thead>
        <?php
        $user_id = $_SESSION['user_id'];
        $sql = "SELECT * FROM orders WHERE user_id = '$user_id'";
        $result = mysqli_query($connection, $sql);
        if (!$result) {
            echo mysqli_error($connection);
        }

        while ($order = mysqli_fetch_assoc($result)) {
            $product_id = $order['prod_id'];
            $sql_product = "SELECT * FROM products WHERE prod_id = '$product_id'";
            $product_result = mysqli_query($connection, $sql_product);
            $product = mysqli_fetch_assoc($product_result);
            $product_name = $product['prod_name'];
            $total_price = $product['prod_price'] * $order['prod_quantity'];
        ?>

            <tbody>
                <tr>
                    <td><?php echo $order['order_id']; ?></td>
                    <td><?php echo $product_name; ?></td>
                    <td><?php echo $order['prod_quantity']; ?></td>
                    <td><?php echo $order['order_date']; ?></td>
                    <td><?php echo $total_price; ?></td>
                </tr>
            </tbody>

        <?php } ?>
    </table>
</div>


<?php include "includes/footer.php"; ?>
