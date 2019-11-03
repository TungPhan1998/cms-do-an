<?php 
/**
 * Default Header
 *
 * @package WordPress
 * @subpackage Wp_Bootstrap
 * @since Wp Bootstrap 1.0
 *
 */?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php wp_title( '|', true, 'right' ); bloginfo('name'); ?></title>
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/face-icon.png" />
 
  <?php 
  // Fires the 'wp_head' action and gets all the scripts included by wordpress, wordpress plugins or functions.php 
  // using wp_enqueue_script if it has $in_footer set to false (which is the default)
  wp_head(); ?>
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
    <script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/respond.min.js"></script>
  <![endif]-->
</head>
<body <?php body_class(); ?>>
  <div class="container">
 <header class="site-header">
<!--  <h1><a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a></h1>
 <h4><?php bloginfo( 'description' ); ?></h4>
 -->


    <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- <div class="navbar-header">
      <a class="navbar-brand" href="http://localhost:82/cms/wordpress/">Home</a>
    </div> -->
    <ul class="nav navbar-nav">
      <li class="active"><a href="http://localhost:82/cms/wordpress/">Trang Chủ</a></li>
      <li><a href="https://www.facebook.com/tung.av.69.98">Liên Hệ</a></li>
    </ul>
<!-- 
    <form class="navbar-form navbar-left" action="/action_page.php">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Search">
      </div>
      <button type="submit" class="btn btn-default">Submit</button>
    </form>
 -->
    <form class="navbar-form navbar-left" method="get" action="<?php bloginfo('url');?>">
      <div class="form-group">
      <input type="text" class="form-control" placeholder="Tìm kiếm..." value="" name="s" >
    </div>
      <button type="submit" class="btn btn-default">Tìm kiếm</button>
    </form>


  </div>
</nav>

  </header>
  