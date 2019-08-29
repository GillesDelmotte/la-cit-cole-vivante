<?php /*Template name: page d'accueil*/ ?>

<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="header__img">
    <?= wp_get_attachment_image( get_field('home__img__header'), 'full' ); ?>
</div>
<div class="container">
    <div class="background">
        <div class="main">
            <h1 class="main__title">
                <?php the_field('title', 'options'); ?>
            </h1>
            <p class="main__desc">
                <?= get_field('home__description__header'); ?>
            </p>
        </div>
        <section class="valeurs">
            <h2 class="hidden">Les valeurs de l'école</h2>
            <?php if (have_rows('home__valeurs')) : while (have_rows('home__valeurs')) : the_row(); ?>
            <div class="valeur">
                <img src="<?= get_sub_field('valeurs__logo'); ?>" alt="" class="valeurs__logo">
                <p class="valeur__name"><?= get_sub_field('valeur__name'); ?></p>
                <p class="valeur__desc"><?= get_sub_field('valeur__desc'); ?></p>
            </div>
            <?php endwhile; endif; ?>
        </section>
        <?php $actu = new WP_Query(array('post_type' => 'actualities', 'posts_per_page' => -1)); ?>
        <?php while($actu->have_posts()) : $actu->the_post(); ?>
        <section class="actu">
            <?= wp_get_attachment_image( get_field('actu__img'), 'full' ); ?>
            <div class="actu__content">
                <h2 class="actu__title">
                    <?php the_title(); ?>
                </h2>
                <p class="actu__date">
                    <?= get_the_date(); ?>
                </p>
                <p class="actu__text"><?= get_field('actu__text'); ?></p>
            </div>
            
        </section>  
        <?php endwhile; wp_reset_query(); ?>
        <section class="partenaires">
        <?php if (have_rows('home__partenaires')) : while (have_rows('home__partenaires')) : the_row(); ?>
            <div class="partenaire">
                <a href="<?= get_sub_field('partenaire__link'); ?>">
                    <img src="<?= get_sub_field('partenaire__logo'); ?>" alt="">
                </a>
            </div>
            <?php endwhile; endif; ?>
    </section>
    <div class="home__redirection redirection">
            <?php $data = get_field('home__redirection'); ?>
            <p><?= $data['redirect__text']; ?></p>
            <a href="<?= $data['redirect__link']; ?>"><?= $data['redirect__label']; ?></a>
        </div>
    </div>
</div>

<?php endwhile; endif; ?>
<?php get_footer(); ?>