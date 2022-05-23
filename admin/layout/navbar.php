    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
                            <a href="./index.php"><img src="./brand.png" width="100" alt="Logo" srcset=""></a>
                        </div>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-item <?php if($page == "Dashboard") {echo 'active';}?> ">
                            <a href="./index.php" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>

                        <li class="sidebar-title">Tables</li>
                        <li class="sidebar-item <?php if($page == "Management User" || $page == "Healthcare Pro" || $page == "Med List" || $page == "Med List Details") {echo 'active';}?> has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-people-fill"></i>
                                <span>User</span>
                            </a>
                            <ul class="submenu <?php if($page == "Management User" || $page == "Healthcare Pro" || $page == "Med List" || $page == "Med List Details") {echo 'active';}?>">
                                <li class="submenu-item <?php if($page == "Management User") {echo 'active';}?>">
                                    <a href="./managementUser.php">Management User</a>
                                </li>
                                <li class="submenu-item <?php if($page == "Healthcare Pro") {echo 'active';}?>">
                                    <a href="./healthcarePro.php">Healthcare Pro</a>
                                </li>
                                <li class="submenu-item <?php if($page == "Med List") {echo 'active';}?>">
                                    <a href="./medlist.php">Med List</a>
                                </li>
                                <li class="submenu-item <?php if($page == "Med List Details") {echo 'active';}?>">
                                    <a href="./medlistDetails.php">Med List Details</a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-item <?php if($page == "Drugs" || $page == "Pill Identifier" || $page == "Drug Approval") {echo 'active';}?> has-sub ">
                            <a href="#" class='sidebar-link'>
                                <i class="fa-solid fa-capsules"></i>
                                <span>Drugs</span>
                            </a>
                            <ul class="submenu <?php if($page == "Drugs" || $page == "Pill Identifier" || $page == "Drug Approval") {echo 'active';}?>">
                                <li class="submenu-item <?php if($page == "Drugs") {echo 'active';}?>">
                                    <a href="./drugs.php">Drugs</a>
                                </li>
                                <li class="submenu-item <?php if($page == "Pill Identifier") {echo 'active';}?>">
                                    <a href="./pillident.php">Pill Identifier</a>
                                </li>
                                <li class="submenu-item <?php if($page == "Drug Approval") {echo 'active';}?>">
                                    <a href="./drugApproval.php">New Drug Approval</a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-item <?php if($page == "Treatment") {echo 'active';}?> ">
                            <a href="./treatment.php" class='sidebar-link'>
                                <i class="fa-solid fa-suitcase-medical"></i>
                                <span>Treatment</span>
                            </a>
                        </li>

                        <li class="sidebar-item <?php if($page == "News") {echo 'active';}?> ">
                            <a href="./news.php" class='sidebar-link'>
                                <i class="fa-solid fa-newspaper"></i>
                                <span>News</span>
                            </a>
                        </li>

                        <!-- <li class="sidebar-title">Other</li>

                        <li class="sidebar-item ">
                            <a href="https://zuramai.github.io/mazer/docs" class='sidebar-link'>
                                <i class="fa-solid fa-print"></i>
                                <span>Report</span>
                            </a>
                        </li> -->

                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>
        <div id="main" class='layout-navbar'>
            <header class='mb-3'>
                <nav class="navbar navbar-expand navbar-light ">
                    <div class="container-fluid">
                        <a href="#" class="burger-btn d-block">
                            <i class="bi bi-justify fs-3"></i>
                        </a>

                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                                <li class="nav-item dropdown me-1">
                                    <a class="nav-link active dropdown-toggle" href="#" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <i class='bi bi-envelope bi-sub fs-4 text-gray-600'></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                                        <li>
                                            <h6 class="dropdown-header">Mail</h6>
                                        </li>
                                        <li><a class="dropdown-item" href="#">No new mail</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown me-3">
                                    <a class="nav-link active dropdown-toggle" href="#" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <i class='bi bi-bell bi-sub fs-4 text-gray-600'></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                                        <li>
                                            <h6 class="dropdown-header">Notifications</h6>
                                        </li>
                                        <li><a class="dropdown-item">No notification available</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="dropdown">
                                <a href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                    <div class="user-menu d-flex">
                                        <div class="user-name text-end me-3">
                                            <h6 class="mb-0 text-gray-600"><?=$_SESSION['username']?></h6>
                                            <p class="mb-0 text-sm text-gray-600"><?=$_SESSION['level']?></p>
                                        </div>
                                        <div class="user-img d-flex align-items-center">
                                            <div class="avatar avatar-md">
                                                <img src="assets/images/faces/1.jpg">
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                                    <li>
                                        <h6 class="dropdown-header">Hello, <?=$_SESSION['username']?>!</h6>
                                    </li>
                                    <li><a class="dropdown-item" href="#"><i class="icon-mid bi bi-person me-2"></i> My
                                            Profile</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="icon-mid bi bi-gear me-2"></i>
                                            Settings</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="icon-mid bi bi-wallet me-2"></i>
                                            Wallet</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="./../homepage/logout.php"><i
                                        class="icon-mid bi bi-box-arrow-left me-2"></i> Logout</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </header>

            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/vendors/apexcharts/apexcharts.js"></script>
    <script src="assets/js/pages/dashboard.js"></script>

    <script src="assets/js/main.js"></script>
</body>

</html>