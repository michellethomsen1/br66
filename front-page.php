<?php get_header(); ?>

<section class="container front-page">
    <div class="row">
        <div class="col-6 frontpage_content">
            <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?> 
                    <?php the_content(); ?>
                <?php endwhile; ?>
            <?php endif; ?>
        </div><!-- frontpage_content -->

        <div class="col-6 frontpage_branch">
            <div class="row">    
                <a href="<?php echo esc_url( home_url( '/haandbold' ) ); ?>" class="col-4">
                    <div class="branch_single">
                        <img src="<?php echo esc_url( home_url( '/wp-content/themes/br66/images/haandbold.png' ) ); ?>" alt="haandbold">
                        <h4>Håndbold</h4>
                    </div><!-- branch_single -->
                </a><!-- col-4 -->

                <a href="<?php echo esc_url( home_url( '/gymnastik' ) ); ?>" class="col-4">
                    <div class="branch_single">
                        <img src="<?php echo esc_url( home_url( '/wp-content/themes/br66/images/gymnastik.png' ) ); ?>" alt="gymnastik">
                        <h4>Gymnastik</h4>
                    </div><!-- branch_single -->
                </a><!-- col-4 -->

                <a href="<?php echo esc_url( home_url( '/esport' ) ); ?>" class="col-4">
                    <div class="branch_single">
                        <img src="<?php echo esc_url( home_url( '/wp-content/themes/br66/images/esport.png' ) ); ?>" alt="esport">
                        <h4>E-sport</h4>
                    </div><!-- branch_single -->
                </a><!-- col-4 -->
            </div><!-- row -->
            <p>Her kan du Læse mere om vores 3 afdelinger i BR66.</p>
        </div><!-- frontpage_branch -->
    </div><!-- row -->
</section>
	
<?php get_footer(); ?>