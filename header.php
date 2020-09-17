<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> <?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body class="wrap">
<!--[if lt IE 8]>
<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> to improve your experience.</p>
<![endif]-->
<header>
    <div class="logo-title-div">
        <div class="site-title-div">
            <div class="site-logo">
                <img src="<?php echo get_template_directory_uri();?>/img/face_logo.png">
            </div>
            <h1 class="site-title"><a href="">MICSECS 2019</a></h1>
            <div class="site-title-second-line">
                <h1>The Majorov International Conference on Software Engineering and Computer Systems</h1>
                <h1>«Tochka kipeniya», 3 Medikov pr, Saint Petersburg, Russia</h1>
                <h1><b style="color: #ee6952;">12-13 December 2019</b></h1><br>
            </div>
        </div>
    </div>
    <nav class="main-nav">
        <a href="#" class="opener show-on-mobiles">...</a>
        <div class="clear-opener show-on-mobiles"></div>
        <?php wp_nav_menu( array(
        	'menu'            => 'Main menu',              // (string) Название выводимого меню (указывается в админке при создании меню, приоритетнее
        	'container'       => 'div',           // (string) Контейнер меню. Обворачиватель ul. Указывается тег контейнера (по умолчанию в тег div)
        	'container_class' => 'grid align-center',              // (string) class контейнера (div тега)
        	'container_id'    => '',              // (string) id контейнера (div тега)
        	'menu_class'      => '',          // (string) class самого меню (ul тега)
        	'menu_id'         => '',              // (string) id самого меню (ul тега)
        	'echo'            => true,            // (boolean) Выводить на экран или возвращать для обработки
        	'depth'           => 0,               // (integer) Глубина вложенности (0 - неограничена, 2 - двухуровневое меню)
        ) ); ?>
    </nav>
</header>