<?php get_header();?>
 <!-- breadcrumb -->
 <div class="site-breadcrumb" style="background: url(<?= get_template_directory_uri()?>/assets/img/taxi/banner-blog.jpg)">
            <div class="container">
                <h2 class="breadcrumb-title"><?= the_title() ?></h2>
                <ul class="breadcrumb-menu">
                    <li><a href="./">Thuis</a></li>
                    <li class="active"><?= the_title() ?></li>
                </ul>
            </div>
        </div>

        <?= the_content() ?>


<?php get_footer();?>