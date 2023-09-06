<?php
// session_start();
// if (isset($_SESSION['user'])) {
// 	return header('Location: admin_index.php');
// }

$title = 'Home';

?>

<?php
require_once('layouts/header.php')
?>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->

            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
                <div class="app-brand demo">
                    <a href="http://localhost/ppmnew/index.php" class="app-brand-link">
                        <span class="app-brand-logo demo">
                            <img src="http://localhost/ppmnew/assets/img/favicon/ppm-new.png" width="70">
                        </span>
                        <!-- <span class="app-brand-text demo menu-text fw-bolder ms-2">PPM</span> -->
                    </a>

                    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                        <i class="bx bx-chevron-left bx-sm align-middle"></i>
                    </a>
                </div>

                <div class="menu-inner-shadow"></div>

                <ul class="menu-inner py-1">
                    <!-- Dashboard -->
                    <li class="menu-item active">
                        <a href="http://localhost/ppmnew/index.php" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-home-circle"></i>
                            <div data-i18n="Analytics">Dashboard</div>
                        </a>
                    </li>

                    <!-- Pemerintahan -->
                    <li class="menu-header small text-uppercase">
                        <span class="menu-header-text">Pemerintahan</span>
                    </li>
                    <li class="menu-item">
                        <a href="http://localhost/ppmnew/germas_guest/index.php" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-group"></i>
                            <div data-i18n="Germas">Germas</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="cards-basic.html" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-street-view"></i>
                            <div data-i18n="Stanting">Stanting</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="cards-basic.html" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-laptop"></i>
                            <div data-i18n="ATM">ATM</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="cards-basic.html" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-building-house"></i>
                            <div data-i18n="Kota Sehat">Kota Sehat</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="cards-basic.html" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-stats"></i>
                            <div data-i18n="Ranham">Ranham</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="cards-basic.html" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-bar-chart-alt-2"></i>
                            <div data-i18n="SDG">SDG</div>
                        </a>
                    </li>
                    <!-- Components -->
                    <li class="menu-header small text-uppercase"><span class="menu-header-text">Pembangunan Manusia</span></li>

                    <li class="menu-item">
                        <a href="cards-basic.html" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-male-sign"></i>
                            <div data-i18n="Gender">Gender</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="cards-basic.html" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-line-chart-down"></i>
                            <div data-i18n="KLA">KLA</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="cards-basic.html" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-map-pin"></i>
                            <div data-i18n="IPM">IPM</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="cards-basic.html" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-bookmark"></i>
                            <div data-i18n="Kebudayaan">Kebudayaan</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="cards-basic.html" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-book-reader"></i>
                            <div data-i18n="Pendidikan">Pendidikan</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="cards-basic.html" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-pie-chart-alt"></i>
                            <div data-i18n="Kemiskinan">Kemiskinan</div>
                        </a>
                    </li>
                </ul>
            </aside>
            <!-- / Menu --!>

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->

                <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
                    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                            <i class="bx bx-menu bx-sm"></i>
                        </a>
                    </div>

                    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                        <!-- Search -->
                        <div class="navbar-nav align-items-center">
                            <div class="nav-item d-flex align-items-center">
                                <i class="bx bx-search fs-4 lh-0"></i>
                                <input type="text" class="form-control border-0 shadow-none" placeholder="Search..." aria-label="Search..." />
                            </div>
                        </div>
                        <!-- /Search -->

                        <ul class="navbar-nav flex-row align-items-center ms-auto">
                            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                            <li>
                                <a class="dropdown-item" href="http://localhost/ppmnew/login.php">
                                    <i class="bx bx-log-in-circle"></i>
                                    <span class="align-middle">Log in</span>
                                </a>
                            </li>
                            </li>
                            <!--/ User -->
                        </ul>
                    </div>
                </nav>

                <!-- / Navbar -->

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <div class="row">
                            <div class="col-lg-12 mb-4 order-0">
                                <div class="card">
                                    <div class="d-flex align-items-end row">
                                        <div class="col-sm-8">
                                            <div class="card-body">
                                                <h5 class="card-title text-primary">Welcome To PPM!</h5>
                                                <p class="mb-0 text-justify">
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Et malesuada fames ac turpis egestas. Elementum tempus egestas sed sed risus. Vulputate eu scelerisque felis imperdiet. Arcu risus quis varius quam quisque id diam vel. Ipsum dolor sit amet consectetur adipiscing elit pellentesque habitant. Vitae justo eget magna fermentum iaculis eu. Tempus imperdiet nulla malesuada pellentesque elit eget gravida cum sociis. Massa massa ultricies mi quis hendrerit dolor magna eget est. Sed augue lacus viverra vitae. Adipiscing diam donec adipiscing tristique risus nec feugiat. Leo vel fringilla est ullamcorper eget nulla. Amet mauris commodo quis imperdiet massa tincidunt nunc pulvinar. Laoreet non curabitur gravida arcu.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="text-center mb-4">
                                                <img src="http://localhost/ppmnew/assets/img/illustrations/man-with-laptop-light.png" height="200" alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png" data-app-light-img="illustrations/man-with-laptop-light.png" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--/ Transactions -->
                        </div>
                    </div>
                    <!-- / Content -->

                    <?php
                    require_once('layouts/footer.php')
                    ?>