<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title><?php wp_title('', true); ?> <?php bloginfo('name'); ?> </title>
    
    <?php wp_head();?>
</head>
<body>

<header>
    <div class="header-brand">
        <div class="bg-image">
            <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?>
                    <?php the_post_thumbnail(); ?>
                <?php endwhile; ?>
            <?php endif; ?>
        </div><!-- bg-image -->

        <div class="header-overlay">
            <div class="container">
                <?php $custom_logo_id = get_theme_mod( 'custom_logo' );
                $image = wp_get_attachment_image_src( $custom_logo_id , 'full' ); ?>

                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <img src="<?php echo $image[0]; ?>" alt="Larsen_logo" id="logo">
                </a>
            </div><!-- container -->
        </div><!-- header-overlay -->
    </div><!-- header-brand -->

    <nav class="navbar navbar-expand-lg navbar-dark bg-light" id="brHeader">
        <div class="container toogler-nav-icon">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        
        <div class="collapse navbar-collapse" id="navbarToggler">
            <div class="container">
                <?php wp_nav_menu( array(
                    'theme_location' => 'header-menu' 
                ) ); ?>
            </div> <!-- container -->
        </div><!-- collapse -->
    </nav>
</header>