<aside id="menubar" class="menubar light" style="padding-top: 0px;">
    <div class="menubar-scroll">
        <div class="menubar-scroll-inner">
            <ul class="app-menu">
                <li>
                    <a href="<?php echo base_url(); ?>">
                        <i class="menu-icon zmdi zmdi-home zmdi-hc-lg"></i>
                        <span class="menu-text">Ana Sayfa</span>
                    </a>
                </li>

                <li>
                    <a href="<?php echo base_url("departments"); ?>">
                        <i class="menu-icon zmdi zmdi-view-list-alt zmdi-hc-lg"></i>
                        <span class="menu-text">Müdürlük Tanımları</span>
                    </a>
                </li>

                <li class="has-submenu">
                    <a class="submenu-toggle">
                        <i class="menu-icon zmdi zmdi-accounts zmdi-hc-lg"></i>
                        <span class="menu-text">Kullanıcı İşlemleri</span>
                        <i class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right"></i>
                    </a>
                    <ul class="submenu" id="user-submenu">
                        <li><a href="<?php echo base_url("users"); ?>"><span class="menu-text">Kullanıcılar</span></a></li>
                        <li><a href="<?php echo base_url("user-roles"); ?>"><span class="menu-text">Kullanıcı Rolleri</span></a></li>
                    </ul>
                </li>

                <li class="has-submenu">
                    <a class="submenu-toggle">
                        <i class="menu-icon fa fa-database"></i>
                        <span class="menu-text">SQL Sorguları</span>
                        <i class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right"></i>
                    </a>
                    <ul class="submenu" id="department-submenu">
                        <li><a href="<?php echo base_url("tuz-yap"); ?>"><span class="menu-text">TUZ-YAP</span></a></li>
                        <li><a href="<?php echo base_url("sosyal-yardim-isleri-m"); ?>"><span class="menu-text">Sosyal Yardım İşleri M.</span></a></li>
                        <li><a href="<?php echo base_url("insan-kaynaklari-ve-egitim-m"); ?>"><span class="menu-text">İnsan Kaynakları ve Eğitim M.</span></a></li>
                    </ul>
                </li>

                <li class="has-submenu">
                    <a class="submenu-toggle">
                        <i class="menu-icon zmdi zmdi-file-text zmdi-hc-lg"></i>
                        <span class="menu-text">Rapor Şablonları</span>
                        <i class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right"></i>
                    </a>
                    <ul class="submenu" id="report-submenu">
                        <li><a href="<?php echo base_url("tuz-yap"); ?>"><span class="menu-text">TUZ-YAP</span></a></li>
                        <li><a href="<?php echo base_url("sosyal-yardim-isleri-m"); ?>"><span class="menu-text">Sosyal Yardım İşleri M.</span></a></li>
                        <li><a href="<?php echo base_url("insan-kaynaklari-ve-egitim-m"); ?>"><span class="menu-text">İnsan Kaynakları ve Eğitim M.</span></a></li>
                    </ul>
                </li>

            </ul><!-- .app-menu -->
        </div><!-- .menubar-scroll-inner -->
    </div><!-- .menubar-scroll -->
</aside>
