<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fitness
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="pt-5 pb-5">
    <div class="flex w-4/5 m-auto justify-between items-center">
        <div>
            <img src="<?php echo get_template_directory_uri(); ?>/logo.png" width="80px" alt="Logo">
        </div>
        <nav class="w-2/5">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'header-menu', // Местоположение меню, которое вы создали в административной панели WordPress
                'container' => false, // Не выводить контейнер div вокруг меню
                'menu_class' => 'flex justify-between text-2xl', // Классы для ul
                'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>', // Шаблон для ul
            ));
            ?>
        </nav>
    </div>
</header>

