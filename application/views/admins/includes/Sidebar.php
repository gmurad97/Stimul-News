<div id="sidebar" class="app-sidebar">
    <div class="app-sidebar-content" data-scrollbar="true" data-height="100%">
        <div class="menu">
            <?php $segment_name = $this->uri->segment(1); ?>
            <div class="menu-header">Navigation</div>

            <!--DASHBOARD - START-->
            <div class="menu-item <?= str_contains($segment_name, 'dashboard') ? 'active' : ''; ?>">
                <a href="<?= base_url('dashboard'); ?>" class="menu-link">
                    <span class="menu-icon">
                        <i class="bi bi-cpu"></i>
                    </span>
                    <span class="menu-text">Dashboard</span>
                </a>
            </div>
            <!--DASHBOARD - ENDED-->

            <div class="menu-header">Content Manager</div>

            <!--TOPBAR - START-->
            <div class="menu-item <?= str_contains($segment_name, 'topbar') ? 'active' : ''; ?>">
                <a href="<?= base_url('topbar-create'); ?>" class="menu-link">
                    <span class="menu-icon">
                        <i class="bi bi-distribute-vertical"></i>
                    </span>
                    <span class="menu-text">Topbar</span>
                </a>
            </div>
            <!--TOPBAR - ENDED-->

            <!--BRANDING - START-->
            <div class="menu-item <?= str_contains($segment_name, 'branding') ? 'active' : ''; ?>">
                <a href="<?= base_url('branding-create'); ?>" class="menu-link">
                    <span class="menu-icon">
                        <i class="bi bi-flower1"></i>
                    </span>
                    <span class="menu-text">Branding</span>
                </a>
            </div>
            <!--BRANDING - ENDED-->

            <!--PARTNERS - START-->
            <div class="menu-item has-sub <?= str_contains($segment_name, 'partners') ? 'active' : ''; ?>">
                <a href="javascript:void(0);" class="menu-link">
                    <span class="menu-icon">
                        <i class="bi bi-people"></i>
                    </span>
                    <span class="menu-text">Partners</span>
                    <span class="menu-caret">
                        <b class="caret"></b>
                    </span>
                </a>
                <div class="menu-submenu">
                    <div class="menu-item <?= str_contains($segment_name, 'partners-create') ? 'active' : ''; ?>">
                        <a href="<?= base_url('partners-create'); ?>" class="menu-link">
                            <span class="menu-text">Create</span>
                        </a>
                    </div>
                    <div class="menu-item <?= str_contains($segment_name, 'partners-list') ? 'active' : ''; ?>">
                        <a href="<?= base_url('partners-list'); ?>" class="menu-link">
                            <span class="menu-text">Table List</span>
                        </a>
                    </div>
                </div>
            </div>
            <!--PARTNERS - END-->

            <!--CATEGORIES - START-->
            <div class="menu-item has-sub <?= str_contains($segment_name, 'categories') ? 'active' : ''; ?>">
                <a href="javascript:void(0);" class="menu-link">
                    <span class="menu-icon">
                        <i class="bi bi-tags"></i>
                    </span>
                    <span class="menu-text">Categories</span>
                    <span class="menu-caret">
                        <b class="caret"></b>
                    </span>
                </a>
                <div class="menu-submenu">
                    <div class="menu-item <?= str_contains($segment_name, 'categories-create') ? 'active' : ''; ?>">
                        <a href="<?= base_url('categories-create'); ?>" class="menu-link">
                            <span class="menu-text">Create</span>
                        </a>
                    </div>
                    <div class="menu-item <?= str_contains($segment_name, 'categories-list') ? 'active' : ''; ?>">
                        <a href="<?= base_url('categories-list'); ?>" class="menu-link">
                            <span class="menu-text">Table List</span>
                        </a>
                    </div>
                </div>
            </div>
            <!--CATEGORIES - END-->











            <!-- <div class="menu-item has-sub">
                <a href="javascript:void(0);" class="menu-link">
                    <span class="menu-icon">
                        <i class="bi bi-distribute-vertical"></i>
                    </span>
                    <span class="menu-text">Topbar</span>
                    <span class="menu-caret">
                        <b class="caret"></b>
                    </span>
                </a>
                <div class="menu-submenu">
                    <div class="menu-item">
                        <a href="#" class="menu-link">
                            <span class="menu-text">Editing</span>
                        </a>
                    </div>
                </div>
            </div> -->

















            <!-- <div class="menu-header">Navigation</div> -->



            <!-- <div class="menu-item">
                <a href="index.html" class="menu-link">
                    <span class="menu-icon"><i class="bi bi-cpu"></i></span>
                    <span class="menu-text">test</span>
                </a>
            </div> -->




            <!-- <div class="menu-item has-sub">
                <a href="#" class="menu-link">
                    <span class="menu-icon">
                        <i class="bi bi-envelope"></i>
                    </span>
                    <span class="menu-text">test2</span>
                    <span class="menu-caret"><b class="caret"></b></span>
                </a>
                <div class="menu-submenu">
                    <div class="menu-item">
                        <a href="email_inbox.html" class="menu-link">
                            <span class="menu-text">Inbox</span>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="email_compose.html" class="menu-link">
                            <span class="menu-text">Compose</span>
                        </a>
                    </div>
                    <div class="menu-item">
                        <a href="email_detail.html" class="menu-link">
                            <span class="menu-text">Detail</span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="menu-divider"></div> -->

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