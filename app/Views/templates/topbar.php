<nav class="navbar navbar-expand navbar-dark bg-white topbar mb-4 static-top shadow" style="background: #2b3643">

    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars" style="color: #2b3643"></i>
    </button>



    <!-- Topbar  -->
    <form class="d-none d-sm-inline-block mt-2">
        <div class="text-left">
            <?php foreach ($pengaturan as $k) : ?>
                <a class="text-lg text-white text-uppercase">
                    <a class="text-lg text-black text-uppercase"><strong><?= $k['nama_aplikasi']; ?></strong>
                        <a class="text-lg text-success text-uppercase" href="" style="text-decoration: none"><b><?= $k['nama_pt']; ?></b></a>
                        [<?= $k['tahun_akademik']; ?>]
                    </a>
                <?php endforeach; ?>
        </div>
    </form>

    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">

        <div class="topbar-divider d-none d-sm-block"></div>

        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-white small" style="font-size: 12px;"><?= $user['username']; ?></span>
                <img class="img-profile rounded-circle" src="<?= base_url(); ?>/assets/img/default.png" alt=" fotoprofil">
                <i class="fas fa-caret-down ml-2" style="color: white"></i>
            </a>
            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <!-- <a class="dropdown-item" href="dasboard/profil">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    Profile
                </a>
                <a class="dropdown-item" href="/user/editprofil">
                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                    Edit Profil
                </a>
                <a class="dropdown-item" href="/user/changpassword">
                    <i class="fas fa-lock fa-sm fa-fw mr-2 text-gray-400"></i>
                    Change Password
                </a> -->
                <!-- <div class="dropdown-divider"></div> -->
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Logout
                </a>
                <!-- <a class="dropdown-item" href="" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Logout -->
                </a>
            </div>
        </li>
    </ul>
</nav>
<!-- <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in show" aria-labelledby="userDropdown">
    <a class="dropdown-item" href="#">
        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
        Profile
    </a>
    <a class="dropdown-item" href="#">
        <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
        Settings
    </a>
    <a class="dropdown-item" href="#">
        <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
        Activity Log
    </a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
        Logout
    </a>
</div> -->