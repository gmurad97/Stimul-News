<div id="sidebar" class="app-sidebar">
    <div class="app-sidebar-content" data-scrollbar="true" data-height="100%">
        <div class="menu">
            <?php $segment_name = $this->uri->segment(2); ?>
            <div class="menu-header">Detailing</div>

            <!--=====DASHBOARD - START=====-->
            <?php
            $isDashboard = str_contains($segment_name, "dashboard");
            $dashboardActive = $isDashboard ? "active" : "";
            $dashboardFade = $isDashboard ? "fa-fade" : "";
            ?>
            <div class="menu-item <?= $dashboardActive; ?>">
                <a href="<?= base_url('admin/dashboard'); ?>" class="menu-link">
                    <span class="menu-icon">
                        <i class="bi bi-cpu <?= $dashboardFade; ?>"></i>
                    </span>
                    <span class="menu-text">Dashboard</span>
                </a>
            </div>
            <!--=====DASHBOARD - ENDED=====-->

            <div class="menu-header">Content Manager</div>

            <!--=====TOPBAR - START=====-->
            <?php
            $isTopbar = str_contains($segment_name, "topbar");
            $topbarActive = $isTopbar ? "active" : "";
            $topbarFade = $isTopbar ? "fa-fade" : "";
            ?>
            <div class="menu-item <?= $topbarActive; ?>">
                <a href="<?= base_url('admin/topbar-create'); ?>" class="menu-link">
                    <span class="menu-icon">
                        <i class="bi bi-distribute-vertical <?= $topbarFade; ?>"></i>
                    </span>
                    <span class="menu-text">Topbar</span>
                </a>
            </div>
            <!--=====TOPBAR - ENDED=====-->

            <!--=====BRANDING - START=====-->
            <?php
            $isBranding = str_contains($segment_name, "branding");
            $brandingActive = $isBranding ? "active" : "";
            $brandingFade = $isBranding ? "fa-fade" : "";
            ?>
            <div class="menu-item <?= $brandingActive; ?>">
                <a href="<?= base_url('admin/branding-create'); ?>" class="menu-link">
                    <span class="menu-icon">
                        <i class="bi bi-flower1 <?= $brandingFade; ?>"></i>
                    </span>
                    <span class="menu-text">Branding</span>
                </a>
            </div>
            <!--=====BRANDING - ENDED=====-->








            <!--=====PARTNERS - START=====-->
            <?php
            $isPartners = str_contains($segment_name, "partners");
            $partnersActive = $isPartners ? "active" : "";
            $partnersFade = $isPartners ? "fa-fade" : "";
            ?>
            <div class="menu-item has-sub <?= str_contains($segment_name, 'partners') ? 'active' : ''; ?>">
                <a href="javascript:void(0);" class="menu-link">
                    <span class="menu-icon">
                        <i class="bi bi-people <?= str_contains($segment_name, 'partners') ? 'fa-fade' : ''; ?>"></i>
                    </span>
                    <span class="menu-text">Partners</span>
                    <span class="menu-caret">
                        <b class="caret"></b>
                    </span>
                </a>
                <div class="menu-submenu">
                    <div class="menu-item <?= str_contains($segment_name, 'partners-create') ? 'active' : ''; ?>">
                        <a href="<?= base_url('admin/partners-create'); ?>" class="menu-link">
                            <span class="menu-text">Create</span>
                        </a>
                    </div>
                    <div class="menu-item <?= str_contains($segment_name, 'partners-list') ? 'active' : ''; ?>">
                        <a href="<?= base_url('admin/partners-list'); ?>" class="menu-link">
                            <span class="menu-text">List</span>
                        </a>
                    </div>
                </div>
            </div>
            <!--=====PARTNERS - ENDED=====-->












            <!--=====CATEGORIES - START=====-->
            <div class="menu-item has-sub <?= str_contains($segment_name, 'categories') ? 'active' : ''; ?>">
                <a href="javascript:void(0);" class="menu-link">
                    <span class="menu-icon">
                        <i class="bi bi-tags"></i>
                    </span>
                    <span class="menu-text">Categories*</span>
                    <span class="menu-caret">
                        <b class="caret"></b>
                    </span>
                </a>
                <div class="menu-submenu">
                    <div class="menu-item <?= str_contains($segment_name, 'categories-create') ? 'active' : ''; ?>">
                        <a href="<?= base_url('admin/categories-create'); ?>" class="menu-link">
                            <span class="menu-text">Create</span>
                        </a>
                    </div>
                    <div class="menu-item <?= str_contains($segment_name, 'categories-list') ? 'active' : ''; ?>">
                        <a href="<?= base_url('admin/categories-list'); ?>" class="menu-link">
                            <span class="menu-text">List</span>
                        </a>
                    </div>
                </div>
            </div>
            <!--=====CATEGORIES - ENDED=====-->

            <!--=====NEWS - START=====-->
            <div class="menu-item has-sub <?= str_contains($segment_name, 'news') ? 'active' : ''; ?>">
                <a href="javascript:void(0);" class="menu-link">
                    <span class="menu-icon">
                        <i class="bi bi-newspaper"></i>
                    </span>
                    <span class="menu-text">News*</span>
                    <span class="menu-caret">
                        <b class="caret"></b>
                    </span>
                </a>
                <div class="menu-submenu">
                    <div class="menu-item <?= str_contains($segment_name, 'news-create') ? 'active' : ''; ?>">
                        <a href="<?= base_url('admin/news-create'); ?>" class="menu-link">
                            <span class="menu-text">Create</span>
                        </a>
                    </div>
                    <div class="menu-item <?= str_contains($segment_name, 'news-list') ? 'active' : ''; ?>">
                        <a href="<?= base_url('admin/news-list'); ?>" class="menu-link">
                            <span class="menu-text">List</span>
                        </a>
                    </div>
                </div>
            </div>
            <!--=====NEWS - ENDED=====-->

            <!--=====SLIDER - START=====-->
            <div class="menu-item has-sub <?= str_contains($segment_name, 'slider') ? 'active' : ''; ?>">
                <a href="javascript:void(0);" class="menu-link">
                    <span class="menu-icon">
                        <i class="bi bi-bezier"></i>
                    </span>
                    <span class="menu-text">Slider*</span>
                    <span class="menu-caret">
                        <b class="caret"></b>
                    </span>
                </a>
                <div class="menu-submenu">
                    <div class="menu-item <?= str_contains($segment_name, 'slider-create') ? 'active' : ''; ?>">
                        <a href="<?= base_url('admin/slider-create'); ?>" class="menu-link">
                            <span class="menu-text">Create</span>
                        </a>
                    </div>
                    <div class="menu-item <?= str_contains($segment_name, 'slider-list') ? 'active' : ''; ?>">
                        <a href="<?= base_url('admin/slider-list'); ?>" class="menu-link">
                            <span class="menu-text">List</span>
                        </a>
                    </div>
                </div>
            </div>
            <!--=====SLIDER - ENDED=====-->

            <!--=====SUBSCRIBERS - START=====-->
            <div class="menu-item has-sub <?= str_contains($segment_name, 'subscribers') ? 'active' : ''; ?>">
                <a href="javascript:void(0);" class="menu-link">
                    <span class="menu-icon">
                        <i class="fa-solid fa-people-group"></i>
                    </span>
                    <span class="menu-text">Subscribers*</span>
                    <span class="menu-caret">
                        <b class="caret"></b>
                    </span>
                </a>
                <div class="menu-submenu">
                    <div class="menu-item <?= str_contains($segment_name, 'subscribers-create') ? 'active' : ''; ?>">
                        <a href="<?= base_url('admin/subscribers-create'); ?>" class="menu-link">
                            <span class="menu-text">Create</span>
                        </a>
                    </div>
                    <div class="menu-item <?= str_contains($segment_name, 'subscribers-list') ? 'active' : ''; ?>">
                        <a href="<?= base_url('admin/subscribers-list'); ?>" class="menu-link">
                            <span class="menu-text">List</span>
                        </a>
                    </div>
                </div>
            </div>
            <!--=====SUBSCRIBERS - ENDED=====-->

            <!--=====ABOUT-US - START=====-->
            <div class="menu-item <?= str_contains($segment_name, 'about-us') ? 'active' : ''; ?>">
                <a href="<?= base_url('admin/about-us-create'); ?>" class="menu-link">
                    <span class="menu-icon">
                        <i class="fa-regular fa-address-card"></i>
                    </span>
                    <span class="menu-text">About Us*</span>
                </a>
            </div>
            <!--=====ABOUT-US - ENDED=====-->

            <!--=====CONTACTS - START=====-->
            <div class="menu-item <?= str_contains($segment_name, 'contacts') ? 'active' : ''; ?>">
                <a href="<?= base_url('admin/contacts-create'); ?>" class="menu-link">
                    <span class="menu-icon">
                        <i class="bi bi-headset"></i>
                    </span>
                    <span class="menu-text">Contacts*</span>
                </a>
            </div>
            <!--=====CONTACTS - ENDED=====-->

            <!--=====GALLERY - START=====-->
            <div class="menu-item has-sub <?= str_contains($segment_name, 'gallery') ? 'active' : ''; ?>">
                <a href="javascript:void(0);" class="menu-link">
                    <span class="menu-icon">
                        <i class="bi bi-card-image"></i>
                    </span>
                    <span class="menu-text">Gallery*</span>
                    <span class="menu-caret">
                        <b class="caret"></b>
                    </span>
                </a>
                <div class="menu-submenu">
                    <div class="menu-item <?= str_contains($segment_name, 'gallery-create') ? 'active' : ''; ?>">
                        <a href="<?= base_url('admin/gallery-create'); ?>" class="menu-link">
                            <span class="menu-text">Create</span>
                        </a>
                    </div>
                    <div class="menu-item <?= str_contains($segment_name, 'gallery-list') ? 'active' : ''; ?>">
                        <a href="<?= base_url('admin/gallery-list'); ?>" class="menu-link">
                            <span class="menu-text">List</span>
                        </a>
                    </div>
                </div>
            </div>
            <!--=====GALLERY - ENDED=====-->

            <!--=====SETTINGS - START=====-->
            <div class="menu-item <?= str_contains($segment_name, 'settings') ? 'active' : ''; ?>">
                <a href="<?= base_url('admin/settings-create'); ?>" class="menu-link">
                    <span class="menu-icon">
                        <i class="bi bi-gear"></i>
                    </span>
                    <span class="menu-text">Settings*</span>
                </a>
            </div>
            <!--=====SETTINGS - ENDED=====-->
        </div>
        <div class="p-3 px-4 mt-auto">
            <a href="https://github.com/gmurad97" target="_blank" class="btn d-block btn-outline-success fw-bold">
                <i class="bi bi-github me-2 ms-n2 opacity-8"></i>
                GMURAD97
            </a>
        </div>
    </div>
</div>
<button class="app-sidebar-mobile-backdrop" data-toggle-target=".app" data-toggle-class="app-sidebar-mobile-toggled"></button>
<div id="content" class="app-content">