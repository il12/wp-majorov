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
        <div class="grid">
            <ul>
                <li><a href="/index.php"><i class="fa fa-home"></i>Home</a></li>
                <li><a href="/call/"><i class="fa"></i>Call For Papers</a></li>
                <li><a href="/publication"><i class="fa"></i>Publication</a></li>
                <!-- <li><a href="/program"><i class="fa"></i>Program</a></li> -->
                <!-- <li><a href="/hackathon"><i class="fa"></i>Hackathon</a></li> -->
                <li><a href="/organization"><i class="fa"></i>Organization</a></li>
                <!-- <li><a href="/registration"><i class="fa"></i>Registration</a></li> -->
                <!-- <li><a href="/for-authors"><i class="fa"></i>For authors</a></li> -->
                <li><a href="/previous-conferences"><i class="fa"></i>Past events</a></li>
                <li><a href="/contacts"><i class="fa"></i>Contacts</a></li>
            </ul>
        </div>
    </nav>
</header>
?>