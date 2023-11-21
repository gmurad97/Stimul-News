<header class="header_wrap dark_skin fixed-top">
    <?php if (!is_null($topbar_data["options"]) && $topbar_data["options"]->topbar_self) : ?>
        <div class="top-header bg_dark light_skin">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-7">
                        <ul class="header_list text-center text-md-left">
                            <?php if ($topbar_data["options"]->topbar_date) : ?>
                                <li>
                                    <i class="far fa-calendar-alt"></i>
                                    <span><?= $topbar_data["info"]->date; ?></span>
                                </li>
                            <?php endif; ?>
                            <?php if ($topbar_data["options"]->topbar_time) : ?>
                                <li>
                                    <i class="far fa-clock"></i>
                                    <span><?= $topbar_data["info"]->time; ?></span>
                                </li>
                            <?php endif; ?>
                            <?php if ($topbar_data["options"]->topbar_weather) : ?>
                                <li>
                                    <i class="fas fa-cloud-sun-rain"></i>
                                    <span><?= $topbar_data["info"]->weather; ?>℃</span>
                                </li>
                            <?php endif; ?>
                        </ul>
                    </div>
                    <div class="col-md-5">
                        <div class="d-flex align-items-center justify-content-center justify-content-md-end">
                            <div class="lng_dropdown ml-2">
                                <select onchange="javascript:window.location.href = '<?= base_url(); ?>switch-lang/' + this.value;" name="countries" class="custome_select">
                                    <option value="en" <?= $this->session->userdata("site_lang") == "en" ? "selected" : ""; ?>>English</option>
                                    <option value="az" <?= $this->session->userdata("site_lang") == "az" ? "selected" : ""; ?>>Azerbaijan</option>
                                    <option value="ru" <?= $this->session->userdata("site_lang") == "ru" ? "selected" : ""; ?>>Russian</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <div class="container">
        <nav class="navbar navbar-expand-lg">
            <?php if (!is_null($branding_data) && $branding_data->logo_dark->visibility) : ?>
                <a class="navbar-brand" href="<?= base_url('home'); ?>">
                    <img class="logo_dark" src="<?= base_url('file_manager/branding/') . $branding_data->logo_dark->file_name; ?>" width="200" alt="Logo">
                </a>
            <?php elseif (is_null($branding_data)) : ?>
                <a class="navbar-brand" href="<?= base_url('home'); ?>">
                    <img class="logo_dark" src="<?= base_url('public/user/assets/images/logo/logo_dark.png'); ?>" width="200" alt="Logo">
                </a>
            <?php endif; ?>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="ion-android-menu"></span>
            </button>
            <?php $current_segment = $this->uri->segment(1); ?>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li>
                        <a href="<?= base_url('home'); ?>" class="nav-link nav_item <?= $current_segment == 'home' ? 'active' : ''; ?>">
                            <?= $this->lang->line("home_navbar"); ?>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href="javascript:void(0);" data-toggle="dropdown" class="nav-link">
                            <?= $this->lang->line("categories_navbar"); ?>
                            <i class="fas fa-angle-down"></i>
                        </a>
                        <div class="dropdown-menu">
                            <ul>
                                <?php foreach ($categories_navbar as $category_data) : ?>
                                    <?php $category_name =  base64_decode(json_decode($category_data["c_name"], TRUE)[$this->session->userdata("site_lang")]); ?>
                                    <li>
                                        <a href="#" class="dropdown-item nav-link nav_item">
                                            <i class="far fa-circle"></i>
                                            <?= $category_name; ?>
                                        </a>
                                    </li>
                                <?php endforeach; ?>
                                <li>
                                    <a href="#" class="dropdown-item nav-link nav_item">
                                        <i class="fas fa-circle"></i>
                                        <?= $this->lang->line("categories_navbar_all"); ?>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="<?= base_url('about-us'); ?>" class="nav-link nav_item <?= $current_segment == 'about-us' ? 'active' : ''; ?>">
                            <?= $this->lang->line("about_us_navbar"); ?>
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('contacts'); ?>" class="nav-link nav_item <?= $current_segment == 'contacts' ? 'active' : ''; ?>">
                            <?= $this->lang->line("contacts_navbar"); ?>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>