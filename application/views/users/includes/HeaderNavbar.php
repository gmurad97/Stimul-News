<div class="modal fade lr_popup" id="Login" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered" role="document">
        <div class="modal-content border-0">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <div class="row no-gutters">
                    <div class="col-12">
                        <div class="padding_eight_all">
                            <div class="heading_s2">
                                <h4>Login</h4>
                            </div>
                            <form>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Email or Username">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-default btn-block" name="login">Login</button>
                                </div>
                            </form>
                            <div class="form-note text-center">
                                Don't Have an Account?
                                <a href="javascript:void(0);" data-toggle="modal" data-dismiss="modal" data-target="#SignUp">Sign up now!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade lr_popup" id="SignUp" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-md modal-dialog-centered" role="document">
        <div class="modal-content border-0">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
                <div class="row no-gutters">
                    <div class="col-12">
                        <div class="padding_eight_all">
                            <div class="heading_s2">
                                <h4>Sign Up</h4>
                            </div>
                            <form>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="First Name">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Last Name">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" required="" type="password" name="password" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" required="" type="password" name="password" placeholder="Confirm Password">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-default btn-block" name="register">Register</button>
                                </div>
                            </form>
                            <div class="form-note text-center">
                                Already have an account?
                                <a href="javascript:void(0);" data-toggle="modal" data-dismiss="modal" data-target="#Login">Login Here!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<header class="header_wrap dark_skin fixed-top">



    <?php
    $topbar_options = json_decode($topbar_options_json["t_options"] ?? NULL);
    if (!is_null($topbar_options) && $topbar_options->topbar_self) :
    ?>
        <div class="top-header bg_dark light_skin">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-7">
                        <ul class="header_list text-center text-md-left">
                            <?php if ($topbar_options->topbar_date) : ?>
                                <li>
                                    <i class="far fa-calendar-alt"></i>
                                    <span><?= $topbar_info["date"]; ?></span>
                                </li>
                            <?php endif; ?>

                            <?php if ($topbar_options->topbar_time) : ?>
                                <li>
                                    <i class="far fa-clock"></i>
                                    <span><?= $topbar_info["time"]; ?></span>
                                </li>
                            <?php endif; ?>

                            <?php if ($topbar_options->topbar_weather) : ?>
                                <li>
                                    <i class="fas fa-cloud-sun-rain"></i>
                                    <span><?= $topbar_info["weather"]; ?>℃</span>
                                </li>
                            <?php endif; ?>
                        </ul>
                    </div>
                    <div class="col-md-5">
                        <div class="d-flex align-items-center justify-content-center justify-content-md-end">
                            <ul class="header_list text-center text-md-left">
                                <li>
                                    <a href="javascript:void(0);" data-toggle="modal" data-target="#SignUp">Sign Up</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" data-toggle="modal" data-target="#Login">Login</a>
                                </li>
                            </ul>
                            <div class="lng_dropdown ml-2">
                                <select name="countries" class="custome_select">
                                    <option value="en">EN</option>
                                    <option value="az">AZ</option>
                                    <option value='ru'>RU</option>
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
            <a class="navbar-brand" href="<?= base_url('home'); ?>">
                <img class="logo_dark" src="<?= base_url('public/user/assets/images/logo/logo_dark.png'); ?>" width="200" alt="Logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="ion-android-menu"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li>
                        <a href="<?= base_url('home'); ?>" class="nav-link nav_item active">
                            Home
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href="javascript:void(0);" data-toggle="dropdown" class="nav-link dropdown-toggle">
                            Categories
                        </a>
                        <div class="dropdown-menu">
                            <ul>
                                <li>
                                    <a href="#" class="dropdown-item nav-link nav_item">
                                        Categories #1
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="dropdown-item nav-link nav_item">
                                        Categories #2
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="dropdown-item nav-link nav_item">
                                        Categories #3
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="dropdown-item nav-link nav_item">
                                        Show All Categories
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <a href="#" class="nav-link nav_item">
                            About us
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link nav_item">
                            Contact
                        </a>
                    </li>
                </ul>
            </div>
            <ul class="navbar-nav attr-nav align-items-center">
                <li>
                    <a href="javascript:void(0);" class="nav-link search_trigger">
                        <i class="linearicons-magnifier"></i>
                    </a>
                    <div class="search_wrap">
                        <span class="close-search">
                            <i class="ion-ios-close-empty"></i>
                        </span>
                        <form>
                            <input type="text" class="form-control" id="search_input" placeholder="Search">
                            <button type="submit" class="search_icon">
                                <i class="ion-ios-search-strong"></i>
                            </button>
                        </form>
                    </div>
                </li>
            </ul>
        </nav>
    </div>
</header>