<div class="hlx-home-about">
    <div class="container">
        <div class="hlx-home-about__wrap">
            <div class="hlx-home-about-content">
                <h2><?= get_field('home_about_title') ?></h2>
                <div class="hlx-home-about-content__desc">
                    <?= get_field('home_about_desc') ?>
                </div>
                <?php $button = get_field('home_about_button'); ?>
                <?php if ($button) { ?>
                    <a class="hlx-home-about-content__button" href="<?= $button['url'] ?>" target="<?= $button['target'] ?>"><?= $button['title'] ?></a>
                <?php } ?>
            </div>

            <div class="hlx-home-about-image">
                <div class="hlx-home-about-image__frame">
                    <?php if (get_field('home_about_image')) { ?>
                        <img src="<?= get_field('home_about_image') ?>" alt="img">
                    <?php } ?>
                </div>
            </div>
        </div>

        <div class="hlx-home-about__criteria">
            <?php if (have_rows('home_about_criteria')) : ?>
                <div class="row hlx-home-about__criteria-wrap">
                    <?php while (have_rows('home_about_criteria')) : the_row(); ?>
                        <div class="col-md-4 hlx-home-about__criteria-item">
                            <img src="<?= get_sub_field('icon') ?>" alt="icon">
                            <h5><?= get_sub_field('title') ?></h5>
                            <div class="desc"><?= get_sub_field('desc') ?></div>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>