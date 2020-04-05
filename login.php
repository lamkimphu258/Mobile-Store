<?php include "includes/header.php"; ?>

<?php include "includes/navigation.php"; ?>

<?php
if (isset($_POST['login'])) {
    $sql = "SELECT * FROM users WHERE user_email = '{$_POST['email']}'";
    $result = mysqli_query($connection, $sql);

    $row = mysqli_fetch_assoc($result);
    if ($row['user_password'] == $_POST['password']) {
        $_SESSION['user_id'] = $row['user_id'];
        $_SESSION['user_lastname'] = $row['user_lastname'];
        $_SESSION['user_firstname'] = $row['user_firstname'];
        $_SESSION['user_email'] = $row['user_email'];
        $_SESSION['user_role'] = $row['user_role'];

        if ($_SESSION['user_role'] == 'admin') {
            header("Location: admin/index.php");
        } else {
            header("Location: index.php");
        }
    } else {
        $alert_danger = true;
    }
}
?>

<div class="container text-dark">
    <h1 class="text-center login">Log In</h1>
    <div class="alert alert-warning mx-auto <?php if (!isset($alert_danger)) echo 'd-none'; ?>" role="alert">
        Invalid email or password
    </div>
    <form action="login.php" method="post" id="login" class="mx-auto">
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" placeholder="Your email" required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" , placeholder="Your password" required>
        </div>
        <input type="submit" class="btn btn-primary form-control" value="Log In" name="login">
    </form>
</div>

<div class="fixed-bottom">
    <?php include "includes/footer.php"; ?>
</div>
