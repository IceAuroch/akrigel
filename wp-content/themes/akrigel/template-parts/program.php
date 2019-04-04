<?php $program = new WP_Query([
    'post_type' => 'page',
    'post_id' => '29'
]);
if ($program->have_posts()):
    ?>

    <!-- Program -->

<section id="program">
    <div class="container">
        <div class="row">
            <div class="col-sm-10 col-lg-8">
                <h2 class="section-title section-title--right ">
                    <?= get_the_title(29); ?>
                </h2>
                <h1 class="section-subtitle">
                    <?= get_the_title(29); ?>
                </h1>
                <div class="program-tabs">
                    <div class="program-tabs-body">

                            <div class="program-tabs-body-item">
                                <?php while($program->have_posts()): $program->the_post();
                                if (have_rows('plane')): while (have_rows('plane')): the_row(); ?>
                                    <div class="program-tabs-body-item-row">
                                        <div class="text">
                                            <?= get_sub_field('program_desc'); ?>
                                        </div>
                                    </div>
                                <?php endwhile; endif; endwhile; ?>
                            </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="program-footer">
    <div class="container">
    <div class="row align-items-center">

        <div class="col-sm-8 mt-3 mt-sm-0">
            <div class="d-flex align-items-center">
                <div class="program-footer__text mr-2 mr-xl-3 text-white">
                    Стоимость семинара составляет <?= get_post_meta('51', 'price', true); ?> + Ваша СКИДКА.<br>
                    Количество мест ограничено.<br>
                    Приходите, мы ждем именно Вас!!!
                </div>

            </div>
        </div>
        <div class="col-sm-4">
            <div class="program-btn">
                <a href="#" class="btn btn-primary open-singup">Записаться</a>
            </div>

        </div>
    </div>
    </div>
</section>

<?php
endif;
wp_reset_postdata();