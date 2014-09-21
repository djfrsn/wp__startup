<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <title><?php wp_title( '|', true, 'right' ); ?></title>

    
    <!-- include criticalCSS.html and run 'gulp studio' to add critical css to your project  -->

     <link media="all" rel="stylesheet" type="text/css" rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/scss/bootstrap.css">
 	 <link media="all" rel="stylesheet" type="text/css" rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/scss/normalize.css">
 	 <link media="all" rel="stylesheet" type="text/css" rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
     <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- Analytics -->
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <!-- Add your site or app content here -->

<div class="canvas container">
    <div class="row">
    <div class="container">
    <div class="row">
        <div class="title col-sm-4 col-md-4 col-lg-4 pull-left">
            <h1><a href="<?php echo get_settings('home'); ?>">QuickDraw</a></h1>
        </div>
        <div class="social col-sm-4 col-md-4 col-lg-4 pull-right">
            <a href="https://www.facebook.com"><i class="fa fa-facebook fa-2x"></i><a/>
            <a href="https://twitter.com"><i class="fa fa-twitter fa-2x"></i><a/>
            <a href="http://instagram.com"><i class="fa fa-instagram fa-2x"></i><a/>
        </div> 
</div>
<nav class="navigation row">
<div class='col-sm-12 col-md-12 col-lg-12'>
    <?php wp_page_menu(array(
        'show_home'         => false, // Not sure what this is hiding, maybe if you have blogposts as home??
        'echo'              => true,
        'exclude'           => getPageBySlugname('home'), // change this to your slugname
    )); ?> 
    </div>
</nav>
</div>