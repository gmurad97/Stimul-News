<div class="sidebar-wrapper sidebar-theme">
    <nav id="sidebar">
        <ul class="navbar-nav theme-brand flex-row  text-center">
            <li class="nav-item theme-text">
                <a href="<?= base_url('dashboard'); ?>" class="nav-link">STIMUL NEWS</a>
            </li>
            <li class="nav-item toggle-sidebar">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather sidebarCollapse feather-chevrons-left">
                    <polyline points="11 17 6 12 11 7"></polyline>
                    <polyline points="18 17 13 12 18 7"></polyline>
                </svg>
            </li>
        </ul>
        <div class="shadow-bottom"></div>
        <ul class="list-unstyled menu-categories" id="accordionExample">
            <?php
            $segment_name = $this->uri->segment(1);
            ?>
            <li class="menu">
                <a href="<?= base_url('dashboard'); ?>" aria-expanded="<?= str_contains($segment_name, "dashboard") ? "true" : "false"; ?>" class="dropdown-toggle">
                    <div>
                        <i data-feather="airplay"></i>
                        <span class="icon-name">Dashboard</span>
                    </div>
                </a>
            </li>
            <li class="menu">
                <a href="<?= base_url('topbar_create'); ?>" aria-expanded="<?= str_contains($segment_name, "topbar") ? "true" : "false"; ?>" class="dropdown-toggle">
                    <div>
                        <i data-feather="grid"></i>
                        <span class="icon-name">Topbar</span>
                    </div>
                </a>
            </li>















        </ul>
    </nav>
</div>
<div id="content" class="main-content">
    <div class="layout-px-spacing">