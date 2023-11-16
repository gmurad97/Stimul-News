<div id="sidebar" class="app-sidebar">
    <div class="app-sidebar-content" data-scrollbar="true" data-height="100%">
        <div class="menu">
            <!--=====FUNCTION MENU STATE - START=====-->
            <?php
            $segment_name = $this->uri->segment(2);
            function MenuState(string $segmentName, string $pageName, string $className)
            {
                return str_contains($segmentName, $pageName) ? $className : "";
            }
            ?>
            <!--=====FUNCTION MENU STATE - ENDED=====-->

            <div class="menu-header">Detailing</div>

            <!--=====DASHBOARD - START=====-->
            <div class="menu-item <?= MenuState($segment_name, 'dashboard', 'active'); ?>">
                <a href="<?= base_url('admin/dashboard'); ?>" class="menu-link">
                    <span class="menu-icon">
                        <i class="bi bi-cpu <?= MenuState($segment_name, 'dashboard', 'fa-fade'); ?>"></i>
                    </span>
                    <span class="menu-text">Dashboard</span>
                </a>
            </div>
            <!--=====DASHBOARD - ENDED=====-->

            <!--=====PROFILE-LIST - START=====-->
            <div class="menu-item <?= MenuState($segment_name, 'profile-list', 'active'); ?>">
                <a href="<?= base_url('admin/profile-list'); ?>" class="menu-link">
                    <span class="menu-icon">
                        <i class="bi bi-star-half <?= MenuState($segment_name, 'profile-list', 'fa-fade'); ?>"></i>
                    </span>
                    <span class="menu-text">Profile</span>
                </a>
            </div>
            <!--=====PROFILE-LIST - ENDED=====-->

            <div class="menu-header">Content Manager</div>

            <!--=====TOPBAR - START=====-->
            <div class="menu-item <?= MenuState($segment_name, 'topbar', 'active'); ?>">
                <a href="<?= base_url('admin/topbar-create'); ?>" class="menu-link">
                    <span class="menu-icon">
                        <i class="bi bi-distribute-vertical <?= MenuState($segment_name, 'topbar', 'fa-fade'); ?>"></i>
                    </span>
                    <span class="menu-text">Topbar</span>
                </a>
            </div>
            <!--=====TOPBAR - ENDED=====-->

            <!--=====BRANDING - START=====-->
            <div class="menu-item <?= MenuState($segment_name, 'branding', 'active'); ?>">
                <a href="<?= base_url('admin/branding-create'); ?>" class="menu-link">
                    <span class="menu-icon">
                        <i class="bi bi-flower1 <?= MenuState($segment_name, 'branding', 'fa-fade'); ?>"></i>
                    </span>
                    <span class="menu-text">Branding</span>
                </a>
            </div>
            <!--=====BRANDING - ENDED=====-->

            <!--=====PARTNERS - START=====-->
            <div class="menu-item has-sub <?= MenuState($segment_name, 'partners', 'active'); ?>">
                <a href="javascript:void(0);" class="menu-link">
                    <span class="menu-icon">
                        <i class="bi bi-people <?= MenuState($segment_name, 'partners', 'fa-fade'); ?>"></i>
                    </span>
                    <span class="menu-text">Partners</span>
                    <span class="menu-caret">
                        <b class="caret"></b>
                    </span>
                </a>
                <div class="menu-submenu">
                    <div class="menu-item <?= MenuState($segment_name, 'partners-create', 'active'); ?>">
                        <a href="<?= base_url('admin/partners-create'); ?>" class="menu-link">
                            <span class="menu-text">Create</span>
                        </a>
                    </div>
                    <div class="menu-item <?= MenuState($segment_name, 'partners-list', 'active'); ?>">
                        <a href="<?= base_url('admin/partners-list'); ?>" class="menu-link">
                            <span class="menu-text">List</span>
                        </a>
                    </div>
                </div>
            </div>
            <!--=====PARTNERS - ENDED=====-->

            <!--=====CATEGORIES - START=====-->
            <div class="menu-item has-sub <?= MenuState($segment_name, 'categories', 'active'); ?>">
                <a href="javascript:void(0);" class="menu-link">
                    <span class="menu-icon">
                        <i class="bi bi-tags <?= MenuState($segment_name, 'categories', 'fa-fade'); ?>"></i>
                    </span>
                    <span class="menu-text">Categories</span>
                    <span class="menu-caret">
                        <b class="caret"></b>
                    </span>
                </a>
                <div class="menu-submenu">
                    <div class="menu-item <?= MenuState($segment_name, 'categories-create', 'active'); ?>">
                        <a href="<?= base_url('admin/categories-create'); ?>" class="menu-link">
                            <span class="menu-text">Create</span>
                        </a>
                    </div>
                    <div class="menu-item <?= MenuState($segment_name, 'categories-list', 'active'); ?>">
                        <a href="<?= base_url('admin/categories-list'); ?>" class="menu-link">
                            <span class="menu-text">List</span>
                        </a>
                    </div>
                </div>
            </div>
            <!--=====CATEGORIES - ENDED=====-->

            <!--=====NEWS - START=====-->
            <div class="menu-item has-sub <?= MenuState($segment_name, 'news', 'active'); ?>">
                <a href="javascript:void(0);" class="menu-link">
                    <span class="menu-icon">
                        <i class="bi bi-newspaper <?= MenuState($segment_name, 'news', 'fa-fade'); ?>"></i>
                    </span>
                    <span class="menu-text">News</span>
                    <span class="menu-caret">
                        <b class="caret"></b>
                    </span>
                </a>
                <div class="menu-submenu">
                    <div class="menu-item <?= MenuState($segment_name, 'news-create', 'active'); ?>">
                        <a href="<?= base_url('admin/news-create'); ?>" class="menu-link">
                            <span class="menu-text">Create</span>
                        </a>
                    </div>
                    <div class="menu-item <?= MenuState($segment_name, 'news-list', 'active'); ?>">
                        <a href="<?= base_url('admin/news-list'); ?>" class="menu-link">
                            <span class="menu-text">List</span>
                        </a>
                    </div>
                </div>
            </div>
            <!--=====NEWS - ENDED=====-->

            <!--=====SLIDER - START=====-->
            <div class="menu-item has-sub <?= MenuState($segment_name, 'slider', 'active'); ?>">
                <a href="javascript:void(0);" class="menu-link">
                    <span class="menu-icon">
                        <i class="bi bi-bezier <?= MenuState($segment_name, 'slider', 'fa-fade'); ?>"></i>
                    </span>
                    <span class="menu-text">Slider</span>
                    <span class="menu-caret">
                        <b class="caret"></b>
                    </span>
                </a>
                <div class="menu-submenu">
                    <div class="menu-item <?= MenuState($segment_name, 'slider-create', 'active'); ?>">
                        <a href="<?= base_url('admin/slider-create'); ?>" class="menu-link">
                            <span class="menu-text">Create</span>
                        </a>
                    </div>
                    <div class="menu-item <?= MenuState($segment_name, 'slider-list', 'active'); ?>">
                        <a href="<?= base_url('admin/slider-list'); ?>" class="menu-link">
                            <span class="menu-text">List</span>
                        </a>
                    </div>
                </div>
            </div>
            <!--=====SLIDER - ENDED=====-->

            <!--=====SUBSCRIBERS - START=====-->
            <div class="menu-item has-sub <?= MenuState($segment_name, 'subscribers', 'active'); ?>">
                <a href="javascript:void(0);" class="menu-link">
                    <span class="menu-icon">
                        <i class="fa-solid fa-people-group <?= MenuState($segment_name, 'subscribers', 'fa-fade'); ?>"></i>
                    </span>
                    <span class="menu-text">Subscribers</span>
                    <span class="menu-caret">
                        <b class="caret"></b>
                    </span>
                </a>
                <div class="menu-submenu">
                    <div class="menu-item <?= MenuState($segment_name, 'subscribers-create', 'active'); ?>">
                        <a href="<?= base_url('admin/subscribers-create'); ?>" class="menu-link">
                            <span class="menu-text">Create</span>
                        </a>
                    </div>
                    <div class="menu-item <?= MenuState($segment_name, 'subscribers-list', 'active'); ?>">
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
            <div class="menu-item <?= MenuState($segment_name, 'contacts', 'active'); ?>">
                <a href="<?= base_url('admin/contacts-create'); ?>" class="menu-link">
                    <span class="menu-icon">
                        <i class="bi bi-headset <?= MenuState($segment_name, 'contacts', 'fa-fade'); ?>"></i>
                    </span>
                    <span class="menu-text">Contacts</span>
                </a>
            </div>
            <!--=====CONTACTS - ENDED=====-->

            <!--=====GALLERY - START=====-->
            <div class="menu-item has-sub <?= MenuState($segment_name, 'gallery', 'active'); ?>">
                <a href="javascript:void(0);" class="menu-link">
                    <span class="menu-icon">
                        <i class="bi bi-card-image <?= MenuState($segment_name, 'gallery', 'fa-fade'); ?>"></i>
                    </span>
                    <span class="menu-text">Gallery</span>
                    <span class="menu-caret">
                        <b class="caret"></b>
                    </span>
                </a>
                <div class="menu-submenu">
                    <div class="menu-item <?= MenuState($segment_name, 'gallery-create', 'active'); ?>">
                        <a href="<?= base_url('admin/gallery-create'); ?>" class="menu-link">
                            <span class="menu-text">Create</span>
                        </a>
                    </div>
                    <div class="menu-item <?= MenuState($segment_name, 'gallery-list', 'active'); ?>">
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











            <!--=====CHAT GPT 4F - START=====-->
            <div class="menu-item <?= MenuState($segment_name, 'gpt', 'active'); ?>">
                <a href="<?= base_url('admin/gpt'); ?>" class="menu-link">
                    <span class="menu-icon">
                        <i class="bi bi-robot <?= MenuState($segment_name, 'gpt', 'fa-fade'); ?>"></i>
                    </span>
                    <span class="menu-text">AI GPT 3.5</span>
                </a>
            </div>
            <!--=====CHAT GPT 4F - ENDED=====-->
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