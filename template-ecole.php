<?php /*Template name: page de l'école*/ ?>

<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="header__img">
    <?= wp_get_attachment_image( get_field('school__img__header'), 'full' ); ?>
</div>
<div class="container">
    <div class="background">
        <div class="main">
            <h1 class="main__title">
                <?php the_title(); ?>
            </h1>
        </div>
        <?php if (have_rows('flexcontent')) : while (have_rows('flexcontent')) : the_row(); ?>

            <?php include 'inc/' . get_row_layout() . '.php'; ?>

        <?php endwhile; endif; ?>
        <div class="school__redirection redirection">
            <?php $data = get_field('school__redirection'); ?>
            <p><?= $data['redirect__text']; ?></p>
            <a href="<?= $data['redirect__link']; ?>"><?= $data['redirect__label']; ?></a>
        </div>
    </div>
    </div>
</div>

<?php endwhile; endif; ?>
<?php get_footer(); ?>