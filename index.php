<?php get_header(); ?>

	
<h1>???</h1>

<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
        <div class="page-hero">
            <?php the_post_thumbnail(); ?>
        </div><!-- home-hero -->

        <section class="container trees">   
            <h1><?php the_title(); ?></h1><span class="red-underline-30"></span>

            <?php the_content(); ?>
        </section>
    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>