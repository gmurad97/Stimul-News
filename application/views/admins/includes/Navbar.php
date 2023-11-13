<div class="desktop-toggler">
    <button type="button" class="menu-toggler" data-toggle-class="app-sidebar-collapsed" data-dismiss-class="app-sidebar-toggled" data-toggle-target=".app">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
    </button>
</div>
<div class="mobile-toggler">
    <button type="button" class="menu-toggler" data-toggle-class="app-sidebar-mobile-toggled" data-toggle-target=".app">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
    </button>
</div>
<div class="brand">
    <a href="<?= base_url('admin/dashboard'); ?>" class="brand-logo">
        <span class="brand-img">
            <span class="brand-img-text text-theme">
                <i class="fa-solid fa-layer-group fa-xs fa-bounce" style="animation-iteration-count: <?= (int)rand(1, 3); ?>;"></i>
            </span>
        </span>
        <span class="brand-text text-uppercase">Stimul News CMS</span>
    </a>
</div>
<div class="menu">
    <div class="menu-item dropdown dropdown-mobile-full">
        <a href="javascript:void(0);" data-bs-toggle="dropdown" data-bs-display="static" class="menu-link">
            <div class="menu-img online">
                <img src="<?= base_url('public/admin/assets/img/user/profile.jpg'); ?>" width="32" height="32" alt="Profile Image">
            </div>
            <div class="menu-text d-sm-block d-none w-170px">
                <span>Murad Gazymagomedov</span>
            </div>
        </a>
        <div class="dropdown-menu dropdown-menu-end me-lg-3 fs-11px mt-1">
            <a href="profile.html" class="dropdown-item d-flex align-items-center">
                PROFILE
                <i class="bi bi-person-circle ms-auto text-theme fs-16px my-n1"></i>
            </a>
            <a href="settings.html" class="dropdown-item d-flex align-items-center">
                SETTINGS
                <i class="bi bi-gear ms-auto text-theme fs-16px my-n1"></i>
            </a>
            <div class="dropdown-divider"></div>
            <a href="<?= base_url('admin/logout-action'); ?>" class="dropdown-item d-flex align-items-center">
                LOGOUT
                <i class="bi bi-toggle-off ms-auto text-theme fs-16px my-n1"></i>
            </a>
        </div>
    </div>
</div>
</div>