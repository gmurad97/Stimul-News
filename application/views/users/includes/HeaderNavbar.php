<header class="header_wrap dark_skin fixed-top">
    <?php if (!is_null($topbar["options"]) && $topbar["options"]->topbar_self) : ?>
        <div class="top-header bg_dark light_skin">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-7">
                        <ul class="header_list text-center text-md-left">
                            <?php if ($topbar["options"]->topbar_date) : ?>
                                <li>
                                    <i class="far fa-calendar-alt"></i>
                                    <span><?= $topbar["data"]->date; ?></span>
                                </li>
                            <?php endif; ?>
                            <?php if ($topbar["options"]->topbar_time) : ?>
                                <li>
                                    <i class="far fa-clock"></i>
                                    <span><?= $topbar["data"]->time; ?></span>
                                </li>
                            <?php endif; ?>
                            <?php if ($topbar["options"]->topbar_weather) : ?>
                                <li>
                                    <i class="fas fa-cloud-sun-rain"></i>
                                    <span><?= $topbar["data"]->weather; ?>℃ Baku</span>
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
            <?php endif; ?>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="ion-android-menu"></span>
            </button>
            <?php $current_segment = $this->uri->segment(1); ?>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li>
                        <a href="<?= base_url('home'); ?>" class="nav-link nav_item <?= $current_segment == 'home' || $current_segment == '' ? 'active' : ''; ?>">
                            <?= $this->lang->line("home_navbar"); ?>
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('news'); ?>" class="nav-link nav_item <?= $current_segment == 'news' && is_null($this->uri->segment(2)) ? 'active' : ''; ?>">
                            <?= $this->lang->line("news_navbar"); ?>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href="javascript:void(0);" data-toggle="dropdown" class="nav-link <?= $current_segment == 'categories' || $this->uri->segment(2) == 'category' ? 'active' : ''; ?>">
                            <?= $this->lang->line("categories_navbar"); ?>
                            <i class="fas fa-angle-down"></i>
                        </a>
                        <div class="dropdown-menu">
                            <ul>
                                <?php foreach ($categories_nav_ul as $category_item) : ?>
                                    <?php $category_name =  htmlentities(base64_decode(json_decode($category_item["c_name"], TRUE)[$this->session->userdata("site_lang")])); ?>
                                    <li>
                                        <a href="<?= base_url('news/' . strtolower(htmlentities(base64_decode(json_decode($category_item["c_name"], TRUE)['en'])))); ?>" class="dropdown-item nav-link nav_item <?= $this->uri->segment(3) == strtolower($category_name) ? 'active' : ''; ?>">
                                            <i class="far fa-circle"></i>
                                            <?= $category_name; ?>
                                        </a>
                                    </li>
                                <?php endforeach; ?>
                                <li>
                                    <a href="<?= base_url('categories'); ?>" class="dropdown-item nav-link nav_item <?= $current_segment == 'categories' ? 'active' : ''; ?>">
                                        <i class="fas fa-circle"></i>
                                        <?= $this->lang->line("categories_navbar_all"); ?>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="<?= base_url('about'); ?>" class="nav-link nav_item <?= $current_segment == 'about' ? 'active' : ''; ?>">
                            <?= $this->lang->line("about_navbar"); ?>
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