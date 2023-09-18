<?php
require_once('../connection.php');

$title = 'Kebudayaan';

$id_kebudayaan = $_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM pm_kebudayaan WHERE id = '$id_kebudayaan'");
$kebudayaan = mysqli_fetch_assoc($query);


function getFileIcon($filename) {
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    $iconMapping = [
        'pdf'   => 'far fa-file-pdf',
        'doc'   => 'far fa-file-word',
        'docx'  => 'far fa-file-word',
        'xls'   => 'far fa-file-excel',
        'xlsx'  => 'far fa-file-excel',
        'txt'   => 'far fa-file-alt',
        // Add more file extensions and corresponding icons as needed
    ];

    return isset($iconMapping[$extension]) ? $iconMapping[$extension] : 'far fa-file'; // Default icon for unknown extensions
}
?>

<?php
require_once('../layouts/header.php')
?>

<body>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

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
                    </a>

                    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                        <i class="bx bx-chevron-left bx-sm align-middle"></i>
                    </a>
                </div>

                <div class="menu-inner-shadow"></div>

                <ul class="menu-inner py-1">
                    <!-- Dashboard -->
                    <li class="menu-item">
                        <a href="http://localhost/ppmnew/index.php" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-home-circle"></i>
                            <div data-i18n="Analytics">Dashboard</div>
                        </a>
                    </li>

                    <!-- Pemerintahan -->
                    <li class="menu-header small text-uppercase">
                        <span class="menu-header-text">Pemerintahan</span>
                    </li>
                    <li class="menu-item active">
                        <a href="http://localhost/ppmnew/germas_guest/index.php" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-group"></i>
                            <div data-i18n="Germas">Germas</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="http://localhost/ppmnew/stanting_guest/index.php" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-street-view"></i>
                            <div data-i18n="Stanting">Stanting</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="http://localhost/ppmnew/ATM_guest/index.php" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-laptop"></i>
                            <div data-i18n="ATM">ATM</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="http://localhost/ppmnew/kotasehat_guest/index.php" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-building-house"></i>
                            <div data-i18n="Kota Sehat">Kota Sehat</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="http://localhost/ppmnew/ranham_guest/index.php" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-stats"></i>
                            <div data-i18n="Ranham">Ranham</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="http://localhost/ppmnew/sdg_guest/index.php" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-bar-chart-alt-2"></i>
                            <div data-i18n="SDG">SDG</div>
                        </a>
                    </li>
                    <!-- Components -->
                    <li class="menu-header small text-uppercase"><span class="menu-header-text">Pembangunan Manusia</span></li>

                    <li class="menu-item">
                        <a href="http://localhost/ppmnew/gender_guest/index.php" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-male-sign"></i>
                            <div data-i18n="Gender">Gender</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="http://localhost/ppmnew/ranham_guest/index.php" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-line-chart-down"></i>
                            <div data-i18n="KLA">KLA</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="http://localhost/ppmnew/ipm_guest/index.php" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-map-pin"></i>
                            <div data-i18n="IPM">IPM</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="http://localhost/ppmnew/kebudayaan_guest/index.php" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-bookmark"></i>
                            <div data-i18n="Kebudayaan">Kebudayaan</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="http://localhost/ppmnew/pendidikan_guest/index.php" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-book-reader"></i>
                            <div data-i18n="Pendidikan">Pendidikan</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="http://localhost/ppmnew/kemiskinan_guest/index.php" class="menu-link">
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
                                <input type="text" class="form-control border-0 shadow-none" name="cari" placeholder="Search..." aria-label="Search..." />
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
                        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Kebudayaan / Article /</span> <?= $Kebudayaan['judul']; ?></h4>
                        <div class="card mb-4">
                            <div class="card-body">
                                <h5 class="card-title"><?= $Kebudayaan['judul']; ?></h5>
                                <div class="card-subtitle text-muted mb-3"><?= $kebudayaan['tanggal']; ?>, <?= $kebudayaan['author']; ?></div>
                                <p class="card-text">
                                    <?= $kebudayaan['text']; ?>
                                </p>
                                <p>
                                <a href="download.php?filename=<?= urlencode($kebudayaan['data']); ?>">
                                <i class="<?= getFileIcon($kebudayaan['data']); ?>"></i> <?= $kebudayaan['data']; ?>
                                </p>
                            </div>
                        </div>
                    </div>

                    <?php
                    require_once('../layouts/footer.php')
                    ?>