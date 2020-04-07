<?php
include "includes/init.php";
ob_start();
?>


<?php
if (isset($_GET['id'])) {
    $sql = "DELETE FROM users WHERE user_id='{$_GET['id']}'";
    mysqli_query($connection, $sql);

    header("Location: users.php");
}
?>