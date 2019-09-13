<div class="main-menu-content">
            <ul class="navigation navigation-main" id="sidebar" data-menu="menu-navigation">
                <li class="nav-item"><a href="<?= base_url()?>admin"><i class="feather icon-home"></i><span class="menu-title" data-i18n="">Dashboard</span></a>
                </li>
                <!-- Jika ingin menggunakan sidebar sub menu -->
                <li class=" nav-item"><a href="#"><i class="feather icon-zap"></i><span class="menu-title" data-i18n="">Konfigurasi Website</span></a>
                    <ul class="menu-content">
                        <li class="sub-item"><a href="<?= base_url()?>admin/profilweb/edit/4"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="nav.sk_starter_kit.fixed_navigation">General Configurasi</span></a>
                        </li>
                        <li class="sub-item"><a href="<?= base_url()?>admin/alamat_perusahaan"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="nav.sk_starter_kit.fixed_navigation">Alamat Configurasi</span></a>
                        </li>
                        <li class="sub-item"><a href="<?= base_url()?>admin/Profilwebconfig"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="nav.sk_starter_kit.fixed_navigation">Service Configurasi</span></a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item"><a href="<?= base_url()?>admin/admincontroller"><i class="feather icon-home"></i><span class="menu-title" data-i18n="">Konfigurasi admin</span></a>
                </li>

            </ul>
        </div>
