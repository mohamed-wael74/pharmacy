<?php
session_start();
?>

<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link " href="/Pharmacy/pharmacistPanel/index.php">
                <i class="bi bi-grid"></i>
                <span>Home</span>
            </a>
        </li><!-- End Dashboard Nav -->
        <?php if (isset($_SESSION['pharmacist'])) : ?>
            <li class="nav-heading">Pages</li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="/Pharmacy/pharmacistPanel/admin/list-medicine.php">
                    <i class="bi bi-envelope"></i>
                    <span>Medicine</span>
                </a>
            </li><!-- End Medicine Page Nav -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="/Pharmacy/pharmacistPanel/admin/add-pharmacist.php">
                    <i class="bi bi-envelope"></i>
                    <span>Pharmacists</span>
                </a>
            </li><!-- End Pharmacists Page Nav -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="/Pharmacy/pharmacistPanel/admin/add-branches.php">
                    <i class="bi bi-envelope"></i>
                    <span>Branches</span>
                </a>
            </li><!-- End Branches Page Nav -->
        <?php endif; ?>
            <li class="nav-item">
            <a class="nav-link collapsed" href="/Pharmacy/pharmacistPanel/admin/pages-login.php">
                <i class="bi bi-box-arrow-in-right"></i>
                <span>Login</span>
            </a>
            </li><!-- End Login Page Nav -->
    </ul>

</aside><!-- End Sidebar-->