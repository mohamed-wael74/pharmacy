<?php
session_start();
if (isset($_POST['logout'])) {
    session_unset();
    session_destroy();
    header('LOCATION:/Pharmacy/pharmacistPanel/admin/pages-login.php');
}
?>

<!-- ======= Header ======= -->
<header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
        <a href="/Pharmacy/pharmacistPanel/index.php" class="logo d-flex align-items-center">
            <img src="/Pharmacy/pharmacistPanel/assets/img/logo.png" alt="">
            <span class="d-none d-lg-block">Admin Panel</span>
        </a>
        <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center">
            <?php if (isset($_SESSION['pharmacist'])) : ?>
                <li>
                    <a class="dropdown-item" href="/Pharmacy/pharmacistPanel/admin/add-medicine.php">Medicines</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Pharmacist
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="/Pharmacy/pharmacistPanel/admin/add-pharmacist.php">Add pharmacist</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="/Pharmacy/pharmacistPanel/admin/list-pharmacist.php">View pharmacist</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/Pharmacy/pharmacistPanel/admin/add-branches.php">Branches</a>
                </li>
            <?php endif; ?>
            <?php if (isset($_SESSION['pharmacist'])) : ?>
                <form class="d-flex" method="POST">
                    <button class="btn btn-outline-danger" name="logout">Logout</button>
                </form>
            <?php else : ?>
                <a type="button" href="/Pharmacy/pharmacistPanel/admin/pages-login.php" class="btn btn-outline-primary">LOGIN</a>
            <?php endif; ?>
        </ul>
    </nav><!-- End Icons Navigation -->

</header><!-- End Header -->