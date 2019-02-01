<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package bootscores
 */

?>
<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>
    <title>Jessica Lewis's Professional Portfolio</title>

    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href='http://fonts.googleapis.com/css?family=Unica+One|Open+Sans:300,400' rel='stylesheet' type='text/css'>
    <?php wp_head(); ?>
</head>
<?php
$classes = (is_front_page()) ? "home" : "interior";
?>
<body <?php body_class($classes); ?>>
<div id="page">

    <header>
        <div class="container full-height">
            <div class="row full-height">
                <div class="header flex-sm flex-row justify-content-start-sm">
                    <div class="header__photo"><img src="<?= get_template_directory_uri(); ?>/_media/portrait.png" /></div>
                    <div class="header__info flex-sm flex-column justify-content-center flex-noshrink">
                        <h1>Jessica Lewis</h1>
                        <h2>WordPress Developer</h2>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <main id="main" class="site-main full-width" role="main">
        <div class="container">
            <div class="row">
                <div class="main flex-sm align-items-center">
