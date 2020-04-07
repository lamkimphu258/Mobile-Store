<nav class="navbar navbar-expand-lg navbar-dark bg-dark col-12">
    <a class="navbar-brand ml-4" href="index.php">Admin</a>
    <a href="../logout.php" type="submit" name="logout" class="btn text-white ml-auto <?php if (!isset($_SESSION['user_email'])) echo "d-none"; ?>">Log Out</a>;
</nav>
