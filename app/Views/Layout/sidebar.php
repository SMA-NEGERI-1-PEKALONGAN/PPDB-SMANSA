<div class="left-side-bar">
    <div class="brand-logo">
        <a href="<?= base_url('Admin/Dashboard')?>">
            <img src="<?= base_url('Assets/'); ?>LOGO SMANSA.png" alt="" class="dark-logo" />
            <img src="<?= base_url('Assets/'); ?>LOGO SMANSA.png" alt="" class="light-logo" />
            <style>
            .dark-logo {
                width: 50px;
                height: 50px;
            }

            .light-logo {
                width: 50px;
                height: 50px;
            }
            </style>
            PPDB
        </a>
        <div class="close-sidebar" data-toggle="left-sidebar-close">
            <i class="ion-close-round"></i>
        </div>
    </div>
    <div class="menu-block customscroll">
        <div class="sidebar-menu">
            <ul id="accordion-menu">
                <li>
                    <a href="<?= base_url('Admin/Dashboard')?>"
                        class="dropdown-toggle no-arrow <?= $active == 'Dashboard'  ? 'active' : '' ?>">
                        <span class="micon bi bi-house"></span><span class="mtext">Dashboard</span>
                    </a>
                </li>
                <?php 
                if(session()->get('role') == 'Administrator'):
                ?>
                <li class="dropdown <?= $active == 'Referensi' || $active == 'Users' ? 'show' : '' ?>">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon bi bi-gear"></span><span class="mtext">Administrator</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="<?= base_url('Admin/Referensi')?>"
                                class="<?= $active == 'Referensi'  ? 'active' : '' ?>">Master Referensi</a></li>
                        <li><a href="<?= base_url('Admin/User')?>"
                                class="<?= $active == 'Users'  ? 'active' : '' ?>">Users</a></li>
                    </ul>
                </li>
                <?php endif; ?>

                <li class="dropdown <?= $active == 'Antrian' || $active == 'Scan' ? 'show' : '' ?>">
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon bi bi-card-checklist"></span><span class="mtext">Antrian</span>
                    </a>
                    <ul class="submenu">
                        <?php 
                    if(session()->get('role') == 'Administrator'):
                            ?>
                        <li>
                            <a href="<?= base_url('Admin/Antrian')?>"
                                class="<?= $active == 'Antrian'  ? 'active' : '' ?>">Daftar Antrian</a>
                        </li>
                        <?php endif; ?>

                        <li>
                            <a href="<?= base_url('Admin/Antrian/scan')?>"
                                class="<?= $active == 'Scan'  ? 'active' : '' ?>">Scan QR Code</a>
                        </li>
                        <?php 
                             if(session()->get('role') == 'Verifikator' || session()->get('role') == 'Administrator'):
                        ?>
                        <li>
                            <a href="<?= base_url('Admin/Antrian/List')?>"
                                class="<?= $active == 'List'  ? 'active' : '' ?>">List Antrian</a>
                        </li>
                        <?php endif; ?>
                    </ul>
                </li>

                <li>
                    <div class="dropdown-divider"></div>
                </li>
                <li>
                    <a href="https://ppdb.sman1pekalongan.sch.id" target="_blank" class="dropdown-toggle no-arrow">
                        <span class="micon bi bi-layout-text-window-reverse"></span>
                        <span class="mtext">Landing Page
                            <img src="vendors/images/coming-soon.png" alt="" width="25" /></span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="mobile-menu-overlay"></div>