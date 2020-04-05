<nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top">
    <a class="navbar-brand" href="index.php">Mobile Store</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <form class="form-inline" action="search_results.php?search=<?php echo $_POST['search']; ?>">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search by product name" aria-label="Search" name="search">
                <div class="input-group-append">
                    <span class="input-group-text"><i class="fas fa-search" aria-hidden="true"></i></span>
                </div>
            </div>
        </form>
        <ul class="navbar-nav mr-auto ml-4">
            <li class="nav-item" style="width: 100px;">
                <a class="nav-link d-flex flex-column justify-content-center align-items-center" href="smartphone.php"><i class="fas fa-mobile-alt fa-2x text-center"></i>Smartphone</a>
            </li>
            <li class="nav-item" style="width: 100px;">
                <a class="nav-link d-flex flex-column justify-content-center align-items-center" href="tablet.php"><i class="fas fa-tablet-alt fa-2x text-center"></i>Tablet</a>
            </li>
            <li class="nav-item" style="width: 100px;">
                <a class="nav-link d-flex flex-column justify-content-center align-items-center" href="laptop.php"><i class="fas fa-laptop fa-2x text-center"></i>Laptop</a>
            </li>
        </ul>

        <div class="dropdown mr-2">
            <a class="btn btn-success dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="far fa-user mr-2"></i><?php if($_SESSION['user_id']==0){ echo "Guest";} else {echo "Hello {$_SESSION['user_firstname']}  {$_SESSION['user_lastname']}";} ?>
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
	    <a class="dropdown-item <?php if($_SESSION['user_id']==0) echo "d-none";?>" href="edit_profile.php">Edit Profile</a>
                <a class="dropdown-item" href="my_order.php">My Order</a>
                <div class="dropdown-divider <?php if($_SESSION['user_id']==0) echo "d-none";?>"></div>
                <a class="dropdown-item <?php if($_SESSION['user_id']==0) echo "d-none";?>" href="logout.php">Logout</a>
            </div>
        </div>

        <a href="signup.php" class="btn btn-outline-light mr-2 <?php if (isset($_SESSION['user_email'])) echo "d-none"; ?>">Sign Up</a>
        <a href="login.php" class="btn btn-outline-light mr-2 <?php if (isset($_SESSION['user_email'])) echo "d-none"; ?>">Login</a>
    </div>
</nav>
