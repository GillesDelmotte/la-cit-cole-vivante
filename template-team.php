<?php /*Template name: page de l'équipe*/ ?>

<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="header__img">
    <?= wp_get_attachment_image( get_field('team__img__header'), 'full' ); ?>
</div>
<div class="container">
    <div class="background">
        <div class="main">
            <h1 class="main__title">
                <?php the_title(); ?>
            </h1>
            <p class="main__desc">
                <?= get_field('team__description__header'); ?>
            </p>
        </div>
        <?php $teachers = new WP_Query(array('post_type' => 'teachers', 'posts_per_page' => -1)); ?>
        <section class="profiles">
            <h2 class="profiles__title">
                Nos enseignants
            </h2>
            <div class="wrapper">
                <?php while($teachers->have_posts()) : $teachers->the_post(); ?>
                    <div class="profile">
                        <?= wp_get_attachment_image( get_field('person__img'), 'thumb_250x250' ); ?>
                        <a href="<?php the_permalink(); ?>" class="profile__link"></a>
                        <span class="profile__name"><?php the_title(); ?></span>
                    </div>
                <?php endwhile; wp_reset_query(); ?>
            </div>
        </section>  
        <?php $management = new WP_Query(array('post_type' => 'management', 'posts_per_page' => -1)); ?>
        <section class="profiles">
            <h2 class="profiles__title">
                La direction
            </h2>
            <div class="wrapper">
                <?php while($management->have_posts()) : $management->the_post(); ?>
                    <div class="profile">
                        <?= wp_get_attachment_image( get_field('person__img'), 'thumb_250x250' ); ?>
                        <a href="<?php the_permalink(); ?>" class="profile__link"></a>
                        <span class="profile__name"><?php the_title(); ?></span>
                    </div>
                <?php endwhile; wp_reset_query(); ?>
            </div>
        </section> 
        <?php $pop = new WP_Query(array('post_type' => 'pop', 'posts_per_page' => -1)); ?>
        <section class="profiles">
            <h2 class="profiles__title">
                Le pouvoir organisateur pluriel
            </h2>
            <div class="wrapper">
                <?php while($pop->have_posts()) : $pop->the_post(); ?>
                    <div class="profile">
                        <?= wp_get_attachment_image( get_field('person__img'), 'thumb_250x250' ); ?>
                        <a href="<?php the_permalink(); ?>" class="profile__link"></a>
                        <span class="profile__name"><?php the_title(); ?></span>
                    </div>
                <?php endwhile; wp_reset_query(); ?>
            </div>
        </section> 
        <div class="team__redirection redirection">
            <?php $data = get_field('team__redirection'); ?>
            <p><?= $data['redirect__text']; ?></p>
            <a href="<?= $data['redirect__link']; ?>"><?= $data['redirect__name']; ?></a>
        </div>
    </div>
</div>

<?php endwhile; endif; ?>
<?php get_footer(); ?>