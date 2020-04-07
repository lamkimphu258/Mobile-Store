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
        <h1 class="p-2 mb-4 text-center">Users</h1>

        <a href="add_user.php" class="my-2 btn btn-dark">Add New User</a>

        <table class="table table-bordered table-hover">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Email</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Role</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM users";
                $all_users = mysqli_query($connection, $sql);

                while ($row = mysqli_fetch_assoc($all_users)) {
                    $result = "<tr>";
                    $result .= "<td scope='row'>{$row['user_id']}</td>";
                    $result .= "<td scope='row'>{$row['user_email']}</td>";
                    $result .= "<td scope='row'>{$row['user_firstname']}</td>";
                    $result .= "<td scope='row'>{$row['user_lastname']}</td>";
                    $result .= "<td scope='row'>{$row['user_role']}</td>";
                    $result .= "<td scope='row'><a href='edit_user.php?id={$row['user_id']}'>Edit</a></td>";
                    $result .= "<td scope='row'><a href='delete_user.php?id={$row['user_id']}'>Delete</a></td>";
                    $result .= "</tr>";

                    echo $result;
                }
                ?>
            </tbody>
        </table>
    </div>
</div> <?php include "includes/footer.php"; ?>
