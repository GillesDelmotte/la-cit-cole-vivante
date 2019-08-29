<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


    <div class="single__wrapper">
        <h1 class="profil"><?php the_title(); ?></h1>
        <div>
            <?= wp_get_attachment_image( get_field('person__img'), 'thumb_250x250' ); ?>
            <p><?= get_field('person__desc'); ?></p>
        </div>
    </div>

    

<?php endwhile; endif; ?>
<?php get_footer(); ?>