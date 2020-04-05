<?php include "includes/header.php"; ?>

<?php include "includes/navigation.php"; ?>

<div class="container">
    <div class="products">
        <div class="row mt-3">
            <div class="col-12 my-2 <?php if ($_GET['id']) echo "d-none"; ?>">
                <form action="tablet.php">
                    <div class="d-flex justify-content-end">
                        <select class="custom-select mr-2" style="max-width: 170px;" name="filter-brand">
                            <option value="all">All</option>
                            <?php
                            $sql = "SELECT DISTINCT prod_brand FROM products WHERE prod_type = 'tablet'";
                            $result = mysqli_query($connection, $sql);
                            while ($row = mysqli_fetch_assoc($result)) {
                                $brand = $row['prod_brand'];
                            ?>
                                <option value="<?php echo $brand; ?>"><?php echo $brand; ?></option>
                            <?php } ?>
                        </select>
                        <select class="custom-select mr-2" style="max-width: 180px;" name="sort-option">
                            <option value="low-high" selected>Price: Low to High</option>
                            <option value="high-low">Price: High to Low</option>
                        </select>
                        <input type="submit" value="Filter" class="btn btn-primary" name="filter">
                    </div>
                </form>
            </div>

            <?php

            $sql = "";
            $sql = "SELECT * FROM products WHERE prod_type = 'tablet'";
            if (isset($_GET['filter-brand']) && $_GET['filter-brand'] != 'all') {
                $filter_brand = $_GET['filter-brand'];
                $sql .= " AND prod_brand = '{$filter_brand}'";
            }
            if (isset($_GET['sort-option'])) {
                $sort_option = $_GET['sort-option'];
                if ($sort_option == 'low-high') {
                    $sql .= " ORDER BY prod_price ASC";
                } else {
                    $sql .= " ORDER BY prod_price DESC";
                }
            }

            $result = mysqli_query($connection, $sql);

            while ($row = mysqli_fetch_assoc($result)) {
            ?>
                <div class="card col-3 rounded-0">
                        <a href="product_detail.php?id=<?php echo $row['prod_id']; ?>"><img class="card-img-top mt-4" src="public/images/products/<?php echo $row['prod_image']; ?>" alt="Card image cap"></a>
                    <div class="card-body">
                        <h5 class="card-title text-primary"><?php echo $row['prod_name']; ?></h5>
                        <p class="card-text">Brand: <?php echo $row['prod_brand']; ?></p>
                        <p class="card-text">Operating System: <?php echo $row['prod_os']; ?></p>
                        <p class="card-text">Price: <?php echo $row['prod_price']; ?></p>
                    </div>
                            <a href="buy_product.php?id=<?php echo $row['prod_id']; ?>" class="btn btn-outline-primary d-block mb-2">Buy</a>
                </div>
            <?php }
            ?>

        </div>
    </div>
</div>

<?php include "includes/footer.php"; ?>
