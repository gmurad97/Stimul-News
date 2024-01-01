<?php if (!empty($slider_list) && !is_null($slider_list)) : ?>
    <div class="banner_section staggered-animation-wrap slide_medium">
        <div class="carousel_slider owl-carousel owl-theme nav_style1" data-animate-in="fadeIn" data-animate-out="fadeOut" data-autoplay="true" data-autoplay-timeout="3072" data-autoplay-hover-pause="true" data-smart-speed="1536" data-loop="true" data-items="1" data-dots="false" data-nav="true">
            <?php foreach ($slider_list as $slider_item) : ?>
                <?php $slider_data = json_decode($slider_item["s_data"], TRUE); ?>
                <?php if ($slider_data["slider_type"] == "slider_custom" && $slider_item["s_status"]) : ?>
                    <div class="item background_bg overlay_bg_60" data-img-src="<?= base_url('file_manager/slider/' . $slider_data['slider_img']); ?>">
                        <div class="banner_slide_content">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xl-6 col-md-8 col-sm-12">
                                        <div class="banner_content">
                                            <h2 class="blog_heading">
                                                <a target="_blank" href="<?= htmlentities(base64_decode($slider_data['slider_text_link'])); ?>" style="color:<?= htmlentities(base64_decode($slider_data['slider_text_color'])); ?>;">
                                                    <?= htmlentities(base64_decode($slider_data['slider_text'][$this->session->userdata("site_lang")])); ?>
                                                </a>
                                            </h2>
                                            <ul class="blog_meta">
                                                <li>
                                                    <a target="_blank" href="<?= htmlentities(base64_decode($slider_data['slider_text_link'])); ?>">
                                                        <button type="button" class="btn btn-default btn-radius btn-sm"><?= $this->lang->line("read_more"); ?></button>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php elseif ($slider_data["slider_type"] == "slider_news" && $slider_item["s_status"]) : ?>
                    <?php
                    $slider_data = json_decode($slider_item["s_data"], TRUE);
                    $news_target = array_filter($news_list, function ($news_item) use ($slider_data) {
                        return $news_item["n_uid"] == $slider_data["slider_uid"] ? $news_item : NULL;
                    });
                    if (!empty($news_target) && !is_null($news_target)) :
                        $flat_news_target = reset($news_target);
                        $flat_news_target_title = json_decode($flat_news_target["n_title"], TRUE);
                        $flat_news_target_full = json_decode($flat_news_target["n_full"], TRUE);
                        $averageReadingSpeed = 250;
                        $wordCount = str_word_count(strip_tags(base64_decode($flat_news_target_full[$this->session->userdata("site_lang")])));
                        $readingTimeMinutes = ceil($wordCount / $averageReadingSpeed);
                        $flat_news_category_name = json_decode($flat_news_target["c_name"], TRUE);
                        if (!empty($news_target) && !is_null($news_target)) :
                    ?>
                            <div class="item background_bg overlay_bg_60" data-img-src="<?= base_url('file_manager/news/' . $flat_news_target['n_preview_img']); ?>">
                                <div class="banner_slide_content">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-xl-6 col-md-8 col-sm-12">
                                                <div class="banner_content">
                                                    <div class="blog_tags">
                                                        <a href="<?= base_url('news/' . strtolower(htmlentities(base64_decode($flat_news_category_name["en"])))); ?>" class="blog_tags_cat" style="background-color: <?= $flat_news_target['c_bg_color'];  ?>;"><?= htmlentities(base64_decode($flat_news_category_name[$this->session->userdata("site_lang")])); ?></a>
                                                    </div>
                                                    <h2 class="blog_heading">
                                                        <a href="<?= base_url('news-detail/' . $flat_news_target['n_uid']); ?>">
                                                            <?= htmlentities(base64_decode($flat_news_target_title[$this->session->userdata("site_lang")])); ?>
                                                        </a>
                                                    </h2>
                                                    <ul class="blog_meta">
                                                        <li>
                                                            <a href="javascript:void(0);">
                                                                <i class="far fa-calendar-alt"></i>
                                                                <span><?= $flat_news_target["n_created_date"]; ?></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);">
                                                                <i class="far fa-clock"></i>
                                                                <span><?= $flat_news_target["n_created_time"]; ?></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);">
                                                                <i class="ion-android-stopwatch"></i>
                                                                <span><?= $readingTimeMinutes . " " . $this->lang->line("minutes"); ?></span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>
                    <?php endif; ?>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>
<?php endif; ?>