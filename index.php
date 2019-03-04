<?php
if(is_front_page())
{
    get_header('front');
}
else
{
    get_header();
}
wp_head();
?>

<div id="main-page">

        <h3><?php the_title(); ?></h3>

            <?php the_post(); ?>


        <p><?php the_content(); ?></p>

        <hr>
</div><!-- end main -->

<?php get_footer(); ?>