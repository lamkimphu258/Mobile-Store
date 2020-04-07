<?php include "includes/header.php"; ?>

<?php
$user_id = $_GET['id'];
$sql = "SELECT * FROM users WHERE user_id = {$user_id}";
$result = mysqli_query($connection, $sql);
$current_user = mysqli_fetch_assoc($result);
?>

<?php
if (isset($_POST['edit'])) {
    $email = $_POST['email'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $password = $_POST['password'];
    $retype_password = $_POST['retype-password'];

    if ($password == $retype_password) {
        $sql = "UPDATE users SET user_email = '{$email}', user_firstname = '{$firstname}', user_lastname = '{$lastname}', user_password = '{$password}' WHERE user_id = '{$_GET['id']}'";
        $result = mysqli_query($connection, $sql);

        header("Location: users.php");
    } else {
        $alert_warning = true;
    }
}
?>

<?php include "includes/navigation.php"; ?>

<div class="container">
    <h1 class="text-center signup">Edit User</h1>
    <div class="alert alert-warning mx-auto <?php if (!isset($alert_warning)) echo "d-none"; ?>" role="alert">
        <?php if (isset($alert_warning)) echo "Password and retype password does not match"; ?>
    </div>
    <form action="edit_user.php?id=<?php echo $_GET['id']; ?>" method="post" id="signup" class="mx-auto">
        <div class="form-group">
            <label for="firstname">First Name</label>
            <input type="text" class="form-control" name="firstname" value="<?php echo $current_user['user_firstname']; ?>">
        </div>
        <div class=" form-group">
            <label for="lastname">Last Name</label>
            <input type="text" class="form-control" name="lastname" value="<?php echo $current_user['user_lastname']; ?>">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" value="<?php echo $current_user['user_email']; ?>">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" required>
        </div>
        <div class="form-group">
            <label for="retype-password">Retype Password</label>
            <input type="password" class="form-control" name="retype-password" required>
        </div>
        <input type="submit" class="btn btn-dark form-control mb-4" value="Edit" name="edit">
    </form>
</div>

<?php include "includes/footer.php"; ?>