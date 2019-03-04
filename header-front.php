<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Awesome Theme</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <?php wp_head(); ?>
</head>
<img src="<?php header_image();?>" height=500px" width="100%" alt="cooking-mess"/>
<?php

if( is_front_page() ):
    $awesome_classes = array( 'awesome-class', 'my-class' );
else:
    $awesome_classes = array( 'no-awesome-class' );
endif;

?>
<body <?php body_class( $awesome_classes ); ?>>

<?php wp_nav_menu(array('theme_location'=>'primary'));


?>
<hr>
