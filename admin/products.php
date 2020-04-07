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
        <h1 class="p-2 mb-4 text-center">Products</h1>

        <a href="add_product.php" class="my-2 btn btn-dark">Add New Product</a>

        <table class="table table-bordered table-hover">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Brand</th>
                    <th scope="col">ROM</th>
                    <th scope="col">RAM</th>
                    <th scope="col">OS</th>
                    <th scope="col">Price</th>
                    <th scope="col">Image</th>
                    <th scope="col">Is Popular</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM products";
                $all_users = mysqli_query($connection, $sql);

                while ($row = mysqli_fetch_assoc($all_users)) {
                    $result = "<tr>";
                    $result .= "<td scope='row'>{$row['prod_id']}</td>";
                    $result .= "<td scope='row'>{$row['prod_name']}</td>";
                    $result .= "<td scope='row'>{$row['prod_brand']}</td>";
                    $result .= "<td scope='row'>{$row['prod_rom']}</td>";
                    $result .= "<td scope='row'>{$row['prod_ram']}</td>";
                    $result .= "<td scope='row'>{$row['prod_os']}</td>";
                    $result .= "<td scope='row'>{$row['prod_price']}</td>";
                    $result .= "<td scope='row'><img class='img-thumbnail' style='width:100px; height:100px;' src='../public/images/products/{$row['prod_image']}'></td>";
                    $result .= "<td scope='row'>{$row['prod_is_popular']}</td>";
                    $result .= "<td scope='row'><a href='edit_product.php?id={$row['prod_id']}'>Edit</a></td>";
                    $result .= "<td scope='row'><a href='delete_product.php?id={$row['prod_id']}'>Delete</a></td>";
                    $result .= "</tr>";

                    echo $result;
                }
                ?>
            </tbody>
        </table>
    </div>
</div> <?php include "includes/footer.php"; ?>
