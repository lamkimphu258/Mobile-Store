<?php include "includes/header.php"; ?>
<?php include "includes/navigation.php"; ?>

<?php
if (!isset($_SESSION) || $_SESSION['user_role'] != "admin") {
    header("Location: ../index.php");
}

$sql_count_users = "SELECT * FROM users";
$users = mysqli_query($connection, $sql_count_users);
$number_of_users = mysqli_num_rows($users);

$sql_count_products = "SELECT * FROM products";
$products = mysqli_query($connection, $sql_count_products);
$number_of_products = mysqli_num_rows($products);

$sql_count_orders = "SELECT * FROM orders";
$orders = mysqli_query($connection, $sql_count_orders);
$number_of_orders = mysqli_num_rows($orders);
?>

<div class="row">
    <?php include "includes/sidebar.php"; ?>
    <main class="col-10 bg-light border-left">
        <h1 class="p-2 mb-4 text-center">Dashboard</h1>
        <div class="row">
            <div class="card p-2 bg-dark col-3 m-auto">
                <div class="card-body d-flex justify-content-between align-items-center text-white">
                    <i class="fas fa-user fa-5x"></i>
                    <div class="d-flex flex-column align-items-center">
                        <h2><?php echo $number_of_users; ?></h2>
                        <a href="users.php" class="text-white">
                            <h2>Users</h2>
                        </a>
                    </div>
                </div>
            </div>
            <div class="card p-2 bg-dark col-3 m-auto">
                <div class="card-body d-flex justify-content-between align-items-center text-white">
                    <i class="fas fa-box-open fa-5x"></i>
                    <div class="d-flex flex-column align-items-center">
                        <h2><?php echo $number_of_products; ?></h2>
                        <a href="products.php" class="text-white">
                            <h2>Products</h2>
                        </a>
                    </div>
                </div>
            </div>
            <div class="card p-2 bg-dark col-3 m-auto">
                <div class="card-body d-flex justify-content-between align-items-center text-white">
                    <i class="fas fa-shopping-cart fa-5x"></i>
                    <div class="d-flex flex-column align-items-center">
                        <h2><?php echo $number_of_orders; ?></h2>
                        <a href="orders.php" class="text-white">
                            <h2>Orders</h2>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div> <?php include "includes/footer.php"; ?>
