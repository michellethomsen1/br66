<?php get_header(); ?>

<section class="container page">
    <div class="row">
        <div class="col-3 side_menu">
            <h3>MENU</h3>
            <?php wpb_list_child_pages(); ?>
        </div><!-- side_menu -->

        <div class="col-9 page_content">
            <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?>
                    <h1><?php the_title(); ?></h1>

                    <?php the_content(); ?>
                <?php endwhile; ?>
            <?php endif; ?>
        </div><!-- page_content -->
    </div><!-- row -->
</section>
	
<?php get_footer(); ?>