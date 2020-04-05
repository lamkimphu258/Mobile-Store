<?php include "includes/header.php"; ?>

<?php include "includes/navigation.php"; ?>

<div class="container">
    <div class="row mt-4">
        <?php
        if (isset($_GET['search'])) {
            $search_keyword = $_GET['search'];
            $sql = "SELECT * FROM products WHERE prod_name LIKE '%$search_keyword%'";;
            $result = mysqli_query($connection, $sql);
            while ($row = mysqli_fetch_assoc($result)) {

        ?>

                <div class="card col-3 rounded-0">
                    <div class="card-header">
                        <a href="smartphone.php?id=<?php echo $row['prod_id']; ?>"><img class="card-img-top mt-4" src="public/images/products/<?php echo $row['prod_image']; ?>" alt="Card image cap"></a>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row['prod_name']; ?></h5>
                        <p class="card-text">Brand: <?php echo $row['prod_brand']; ?></p>
                        <p class="card-text">Operating System: <?php echo $row['prod_os']; ?></p>
                        <p class="card-text">Price: <?php echo $row['prod_price']; ?></p>
                    </div>
                    <div class="card-footer">
                        <a href="smartphone.php?id=<?php echo $row['prod_id']; ?>" class="btn btn-outline-primary d-block">View Details</a>
                    </div>
                </div>

        <?php }
        } ?>
    </div>
</div>

<?php include "includes/footer.php"; ?>