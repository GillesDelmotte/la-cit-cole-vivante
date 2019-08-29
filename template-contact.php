<?php /*Template name: page de contact*/ ?>

<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="header__img">
    <?= wp_get_attachment_image( get_field('contact__img__header'), 'full' ); ?>
</div>
<div class="container">
    <div class="background">
    <div class="main">
            <h1 class="main__title">
                <?php the_title(); ?>
            </h1>
            <p class="main__desc">
                <?= get_field('contact__description__header'); ?>
            </p>
        </div>
        <?= get_field('test'); ?>
    </div>

    </div>
</div>

<?php endwhile; endif; ?>
<?php get_footer(); ?>