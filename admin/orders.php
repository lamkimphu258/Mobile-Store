<?php include "includes/header.php"; ?>
<?php
if (!isset($_SESSION) || $_SESSION['user_role'] != "admin") {
    header("Location: ../index.php");
}
?>
<div class="row">
    <?php include "includes/navigation.php"; ?>

    <?php include "includes/sidebar.php"; ?>

    <div class="col-10 bg-light border-left">
        <h1 class="p-2 mb-4 text-center">Orders</h1>
        <table class="table table-bordered">
            <thead class="">
                <tr>
                    <th scope="col">Order Id</th>
                    <th scope="col">User Email</th>
                    <th scope="col">Product Name</th>
                    <th scope="col">Product Quantity</th>
                    <th scope="col">Order Date</th>
                    <th scope="col">Total Price</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <?php
            $sql = "SELECT * FROM orders";
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

                $user_id = $order['user_id'];
                $sql_user = "SELECT * FROM users WHERE user_id = '$user_id'";
                $user_result = mysqli_query($connection, $sql_user);
                $user = mysqli_fetch_assoc($user_result);
            ?>

                <tbody>
                    <tr>
                        <td><?php echo $order['order_id']; ?></td>
                        <td><?php echo $user['user_email']; ?></td>
                        <td><?php echo $product_name; ?></td>
                        <td><?php echo $order['prod_quantity']; ?></td>
                        <td><?php echo $order['order_date']; ?></td>
                        <td><?php echo $total_price; ?></td>
                        <td><a href="delete_order.php?id=<?php echo $order['order_id']; ?>">Delete</a></td>
                    </tr>
                </tbody>

            <?php } ?>
        </table>
    </div>
</div> <?php include "includes/footer.php"; ?>
