
<footer>
    <div class="container">
        <?php if ( is_active_sidebar( 'footer_companyname' ) ) : ?>
            <?php dynamic_sidebar( 'footer_companyname' ); ?> 
        <?php endif; ?>
        <p class="footer-pipe">|</p>
        <?php if ( is_active_sidebar( 'footer_adress' ) ) : ?>
            <?php dynamic_sidebar( 'footer_adress' ); ?> 
        <?php endif; ?>
        <p class="footer-pipe">|</p>
        <?php if ( is_active_sidebar( 'footer_email' ) ) : ?>
            <?php dynamic_sidebar( 'footer_email' ); ?>
        <?php endif; ?>
    </div><!-- container -->
</footer>

<!-- jQuery, Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<?php wp_footer(); ?>
</body>
</html>