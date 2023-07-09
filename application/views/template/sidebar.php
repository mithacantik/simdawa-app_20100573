<!-- left sidebar -->
<!-- ============================================================== -->
<div class="nav-left-sidebar sidebar-dark">
    <div class="menu-list">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav flex-column">
                    <li class="nav-divider">
                        Menu
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="<?php echo base_url('home') ?>"><i class="fas fa-tv"></i>Dasboard</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link" data-toggle="collapse" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class="fas fa-database"></i>Master Data</a>
                        <div id="submenu-2" class="collapse submenu">
                            <ul class="nav-item">
                                <li class="nav-item">
                                    <a href="<?php echo base_url('beasiswa') ?>" class="nav-link">Beasiswa</a>
                                </li>;/.
                                <?php if ($this->session->userdata('peran') != 'USER') : ?>
                                    <li class="nav-item">
                                        <a href="<?php echo base_url('jenis') ?>" class="nav-link">Jenis Beasiswa</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?php echo base_url('persyaratan') ?>" class="nav-link">Persyaratan</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?php echo base_url('prodi') ?>" class="nav-link">Program Studi</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?php echo base_url('pendaftaran') ?>" class="nav-link">Pendaftaran Akun</a>
                                    </li>
                                <?php endif; ?>
                                <?php if ($this->session->userdata('peran') != 'ADMIN') : ?>
                                    <li class="nav-item">
                                        <a href="<?php echo base_url('pengguna') ?>" class="nav-link">pengguna</a>
                                    </li>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-3" aria-controls="submenu-3"><i class="fa fa-fw fa-rocket"></i>Pengajuan Beasiswa</a>
                        <div id="submenu-3" class="collapse submenu">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo base_url('pengajuan') ?>">Pengajuan Keseluruhan</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo base_url('pengajuan/diusulkan') ?>">Pengajuan Diusulkan</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo base_url('pengajuan/ditetapkan') ?>">Pengajuan Ditetapkan</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
<!-- ============================================================== -->
<!-- end left sidebar -->