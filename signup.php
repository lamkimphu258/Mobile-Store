<?php include "includes/header.php"; ?>

<?php include "includes/navigation.php"; ?>

<?php
if (isset($_POST['signup'])) {
    $email = $_POST['email'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $password = $_POST['password'];
    $retype_password = $_POST['retype-password'];

    if ($password == $retype_password) {
        $sql = "INSERT INTO users (user_firstname, user_lastname, user_email, user_password, user_role) ";
        $sql .= "VALUES ('{$firstname}', '{$lastname}', '{$email}', '{$password}', 'customer')";
        $result = mysqli_query($connection, $sql);

        header("Location: login.php");
    } else {
        $alert_warning = true;
    }
}
?>

<div class="container text-dark">
    <h1 class="text-center signup mt-3">Sign Up</h1>
    <div class="alert alert-warning mx-auto <?php if (!isset($alert_warning)) echo "d-none"; ?>" role="alert">
        <?php if (isset($alert_warning)) echo "Password and retype password does not match"; ?>
    </div>
    <form action="signup.php" method="post" id="signup" class="mx-auto">
        <div class="form-group">
            <label for="firstname">First Name</label>
            <input type="text" class="form-control" name="firstname" placeholder="Your first name" required>
        </div>
        <div class="form-group">
            <label for="lastname">Last Name</label>
            <input type="text" class="form-control" name="lastname" placeholder="Your last name" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" placeholder="Your email" required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" , placeholder="Your password" required>
        </div>
        <div class="form-group">
            <label for="retype-password">Retype Password</label>
            <input type="password" class="form-control" name="retype-password" placeholder="Retype your password" required>
        </div>
        <input type="submit" class="btn btn-primary form-control" value="Sign Up" name="signup">
    </form>
</div>

<?php include "includes/footer.php"; ?>
