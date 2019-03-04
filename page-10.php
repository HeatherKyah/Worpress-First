
<!--page 10 main page  -->
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

        <div id="services">

            <div id="catering">
                <i class="fas fa-glass-cheers "></i></br>
                <h5>Catering</h5>
            </div>

            <div id="wedding">
                <i class="fas fa-bell"></i> </br>
                <h5>Weddings</h5>
            </div>

            <div id="foodtruck">
                <i class="fas fa-truck "></i></br>
                <h5>Foodtruck</h5>

            </div>

        </div>

    </div>

<?php get_footer(); ?>