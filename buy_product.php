<?php include "includes/header.php"; ?>
<?php include "includes/navigation.php"; ?>

<?php
$id = $_SESSION['user_id'];
if($_SESSION['user_email']) {
$email = $_SESSION['user_email'];
}
if($_SESSION['user_firstname']) {
$firstname = $_SESSION['user_firstname'];
}
if($_SESSION['user_lastname']) {
$lastname = $_SESSION['user_lastname'];
}
?>

<?php
if ($_POST['buy']) {
    $prod_id = $_GET['id'];
    $quantity = $_POST['quantity'];
    $datetime = date("Y-m-d");

    $sql = "INSERT INTO orders (user_id, prod_id, prod_quantity, order_date) ";
    $sql .= "VALUES ('$id', '$prod_id', '$quantity', '$datetime')";

    $result = mysqli_query($connection, $sql);
    if (!$result) {
        echo mysqli_error($connection);
    }
    header("Location: index.php");
}
?>

<div class="container text-dark">
    <h1 class="text-center signup mt-3">Order</h1>
    <form action="buy_product.php?id=<?php echo $_GET['id']; ?>" method="post" id="signup" class="mx-auto">
        <div class="form-group">
            <label for="firstname">First Name</label>
	    <input type="text" class="form-control" name="firstname" placeholder="<?php echo $firstname; ?>" readonly>
        </div>
        <div class="form-group">
            <label for="lastname">Last Name</label>
            <input type="text" class="form-control" name="lastname" placeholder="<?php echo $lastname; ?>" readonly>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" placeholder="<?php echo $email; ?>" readonly>
        </div>
        <div class="form-group">
            <label for="quantity">Quantity</label>
            <input type="number" class="form-control" name="quantity" placeholder="" required>
        </div>
        <input type="submit" class="btn btn-dark form-control" value="Buy" name="buy">
    </form>
</div>

    <?php include "includes/footer.php"; ?>
