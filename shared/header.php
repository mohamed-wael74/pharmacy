 <!-- ======= Header ======= -->
 <header id="header" class="header fixed-top d-flex align-items-center">

     <div class="d-flex align-items-center justify-content-between">
         <a href="/adminPanel/index.php" class="logo d-flex align-items-center">
             <img src="/adminPanel/assets/img/logo.png" alt="">
             <span class="d-none d-lg-block">Admin Panel</span>
         </a>
         <i class="bi bi-list toggle-sidebar-btn"></i>
     </div><!-- End Logo -->

     <nav class="header-nav ms-auto">
         <ul class="d-flex align-items-center">

             <li class="nav-item dropdown pe-3">
             <li class="nav-item">
                 <a class="nav-link" href="/adminPanel/admin/list-customers.php">Customers</a>
             </li>
             <li class="nav-item">
                 <a class="nav-link" href="/adminPanel/admin/pages-login.php">Login</a>
             </li>
             <li class="nav-item">
                 <a class="nav-link" href="/adminPanel/admin/add-category.php">Category</a>
             </li>
             <li class="nav-item">
                 <a class="nav-link" href="/adminPanel/admin/add-branches.php">Branches</a>
             </li>
             <li class="nav-item">
                 <a class="nav-link" href="/adminPanel/admin/add-pharmacist.php">Pharmacist</a>
             </li>
             <li class="nav-item">
                 <a class="nav-link" href="/adminPanel/admin/add-admin.php">Admin</a>
             </li>
             <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                 <img src="/adminPanel/assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
                 <span class="d-none d-md-block dropdown-toggle ps-2">K. Anderson</span>
             </a><!-- End Profile Iamge Icon -->

             <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                 <li class="dropdown-header">
                     <h6>Kevin Anderson</h6>
                     <span>Web Designer</span>
                 </li>
                 <li>
                     <hr class="dropdown-divider">
                 </li>

                 <li>
                     <a class="dropdown-item d-flex align-items-center" href="/adminPanel/admin/users-profile.php">
                         <i class="bi bi-person"></i>
                         <span>My Profile</span>
                     </a>
                 </li>
                 <li>
                     <hr class="dropdown-divider">
                 </li>

                 <li>
                     <a class="dropdown-item d-flex align-items-center" href="#">
                         <i class="bi bi-box-arrow-right"></i>
                         <span>Sign Out</span>
                     </a>
                 </li>

             </ul><!-- End Profile Dropdown Items -->
             </li><!-- End Profile Nav -->

         </ul>
     </nav><!-- End Icons Navigation -->

 </header><!-- End Header -->