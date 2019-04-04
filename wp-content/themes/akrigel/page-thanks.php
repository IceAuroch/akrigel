<?php
/*
Template Name: template page thanks
Template Post Type: page
*/

get_header('secondary');

if (have_posts()):

    ?>

    <!-- Thaks-page -->
<section id="thanks-page">
    <div class="container h-100 d-flex align-items-center">
        <div class="row w-100">
            <div class="col-sm-6 col-lg-4 mx-auto">
                <div class="thanks-page-item">
                    <h1 class="thanks-page-item__title text-dark">
                        <?= get_the_title(); ?>
                    </h1>

                    <?php while (have_posts()) : the_post(); ?>

                        <div class="thanks-page-item__text">
                            <?= get_the_content(); ?>
                        </div>

                    <?php endwhile; ?>

                    <a href="<?= site_url(); ?>" class="btn btn-primary">
                        На главную
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
endif;
wp_reset_postdata();
get_footer('secondary');