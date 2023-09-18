<?php
$title = 'Stunting Admin';
?>

<?php
require_once('../layouts/admin/header.php')
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
                    <li class="menu-item">
                        <a href="http://localhost/ppmnew/index_admin.php" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-home-circle"></i>
                            <div data-i18n="Analytics">Dashboard</div>
                        </a>
                    </li>

                    <!-- Pemerintahan -->
                    <li class="menu-header small text-uppercase">
                        <span class="menu-header-text">Pemerintahan</span>
                    </li>
                    <li class="menu-item">
                        <a href="http://localhost/ppmnew/germas_admin/index.php" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-group"></i>
                            <div data-i18n="Germas">Germas</div>
                        </a>
                    </li>
                    <li class="menu-item active">
                        <a href="http://localhost/ppmnew/stanting_admin/index.php" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-street-view"></i>
                            <div data-i18n="Stanting">Stanting</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="http://localhost/ppmnew/atm_admin/index.php" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-laptop"></i>
                            <div data-i18n="ATM">ATM</div>
                        </a>
                    </li>
                    <li class="menu-item">
                       <a href="http://localhost/ppmnew/kotasehat_admin/index.php" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-building-house"></i>
                            <div data-i18n="Kota Sehat">Kota Sehat</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="http://localhost/ppmnew/ranham_admin/index.php" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-stats"></i>
                            <div data-i18n="Ranham">Ranham</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="http://localhost/ppmnew/sdg_admin/index.php" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-bar-chart-alt-2"></i>
                            <div data-i18n="SDG">SDG</div>
                        </a>
                    </li>
                    <!-- Components -->
                    <li class="menu-header small text-uppercase"><span class="menu-header-text">Pembangunan
                            Manusia</span></li>

                    <li class="menu-item">
                        <a href="http://localhost/ppmnew/gender_admin/index.php" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-male-sign"></i>
                            <div data-i18n="Gender">Gender</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="http://localhost/ppmnew/kla_admin/index.php" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-line-chart-down"></i>
                            <div data-i18n="KLA">KLA</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="http://localhost/ppmnew/ipm_admin/index.php" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-map-pin"></i>
                            <div data-i18n="IPM">IPM</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="http://localhost/ppmnew/kebudayaan_admin/index.php" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-bookmark"></i>
                            <div data-i18n="Kebudayaan">Kebudayaan</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="http://localhost/ppmnew/pendidikan_admin/index.php" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-book-reader"></i>
                            <div data-i18n="Pendidikan">Pendidikan</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="http://localhost/ppmnew/kemiskinan_admin/index.php" class="menu-link">
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
                                <form action="" method="GET">
                                    <input type="text" name="query" placeholder="Search..."
                                        style="border: none; padding: 0; background: none; font-size: inherit;">
                                </form>
                            </div>
                        </div>
                        <!-- /Search -->

                        <ul class="navbar-nav flex-row align-items-center ms-auto">
                            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                            <li>
                                <a class="dropdown-item" href="http://localhost/ppmnew/logout.php">
                                    <i class="bx bx-power-off me-2"></i>
                                    <span class="align-middle">Log Out</span>
                                </a>
                            </li>
                            </li>
                            <!--/ User -->
                        </ul>
                    </div>
                </nav>

                <div class="content-wrapper">
                    <!-- Content -->

                    <div class="container-xxl flex-grow-1 container-p-y">
                        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Stunting /</span> Table Stunting</h4>
                        <div class="card-body">
                            <a href="http://localhost/ppmnew/stanting_admin/tambah.php">
                                <button type="button" class="btn rounded-pill btn-primary">Add Data</button>
                            </a>
                        </div>
                        <!-- Basic Table -->
                        <div class="card">
                            <h5 class="card-header">Stunting</h5>
                            <div class="table-responsive text-nowrap">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>Author</th>
                                            <th>Description</th>
                                            <th>Date</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody class="table-border-bottom-0">
                                        <?php
                                        include('../connection.php');

                                        $no = 1;
                                        if (isset($_GET['query'])) {
                                            $search_query = mysqli_real_escape_string($conn, $_GET['query']);
                                            $get_data = mysqli_query($conn, "SELECT * FROM p_stunting WHERE judul LIKE '%$search_query%' OR data LIKE '%$search_query%'");
                                        } else {
                                            $get_data = mysqli_query($conn, "SELECT * FROM p_stunting ORDER BY tanggal DESC;");
                                        }
                                        while ($data = mysqli_fetch_array($get_data)) {
                                        ?>
                                            <tr>
                                                <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong><?= $data['judul']; ?></strong></td>
                                                <td><?= $data['author']; ?></td>
                                                <td><?= $data['text']; ?></td>
                                                <td><?= $data['tanggal']; ?></td>
                                                <td>
                                                    <a href="edit.php?id=<?= $data['id']; ?>" class="btn btn-sm rounded-pill btn-warning mr-1">Edit</a>
                                                    <a href="detail.php?id=<?= $data['id']; ?>" class="btn btn-sm rounded-pill btn-info mr-1">Detail</a>
                                                    <a href="delete.php?id=<?= $data['id']; ?>" class="btn btn-sm rounded-pill btn-danger mr-1" onclick="return confirm('Yakin ingin menghapus?');">Hapus</a>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    
                    <?php
                    require_once('../layouts/admin/footer.php')
                    ?>