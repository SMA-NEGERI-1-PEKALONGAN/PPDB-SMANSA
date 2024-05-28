<div class="left-side-bar">
    <div class="brand-logo">
        <a href="<?= base_url('Addmin/Dashoard')?>">
            <img src="<?= base_url('Assets/'); ?>vendors/images/deskapp-logo.svg" alt="" class="dark-logo" />
            <img src="<?= base_url('Assets/'); ?>vendors/images/deskapp-logo-white.svg" alt="" class="light-logo" />
        </a>
        <div class="close-sidebar" data-toggle="left-sidebar-close">
            <i class="ion-close-round"></i>
        </div>
    </div>
    <div class="menu-block customscroll">
        <div class="sidebar-menu">
            <ul id="accordion-menu">
                <li>
                    <a href="<?= base_url('Dasboard')?>" class="dropdown-toggle no-arrow">
                        <span class="micon bi bi-house"></span><span class="mtext">Home</span>
                    </a>
                </li>
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
                <li>
                    <a href="<?= base_url('Admin/Antrian')?>"
                        class="dropdown-toggle no-arrow <?= $active == 'Antrian'  ? 'active' : '' ?>">
                        <span class="micon bi bi-card-checklist">

                        </span><span class="mtext">Antrian</span>
                    </a>
                </li>
                <li>
                    <div class="dropdown-divider"></div>
                </li>
                <li>
                    <div class="sidebar-small-cap">Extra</div>
                </li>
                <li>
                    <a href="javascript:;" class="dropdown-toggle">
                        <span class="micon bi bi-file-pdf"></span><span class="mtext">Documentation</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="introduction.html">Introduction</a></li>
                        <li><a href="getting-started.html">Getting Started</a></li>
                        <li><a href="color-settings.html">Color Settings</a></li>
                        <li>
                            <a href="third-party-plugins.html">Third Party Plugins</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="https://dropways.github.io/deskapp-free-single-page-website-template/" target="_blank"
                        class="dropdown-toggle no-arrow">
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