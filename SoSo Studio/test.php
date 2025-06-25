<?php get_header(); ?>
<div class="all">
    <div class="header">
        <h1>welcome to the home of x-men information</h1>
    </div>
    <div class="main">
        <p class="main-text">the x-men are a group founded by professor charles xavier as a response to the emergence of naturally occurring superhumans known as mutants among the rest of human society.</p>
        <?php
        if ( is_active_sidebar( 'more-widgets' ) ) : ?>
            <div class="more-widgets">
                <?php dynamic_sidebar( 'more-widgets' ); ?>
            </div>
             
        <?php endif; ?>
    </div>
</div>
<?php get_footer(); ?>