<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package OneEngine
 */
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 10)|!(IE)]><!--><html <?php language_attributes(); ?>> <!--<![endif]-->
<head>
	<meta charset="utf-8">
    <!-- Title
	================================================== -->
	<title><?php bloginfo('name'); ?><?php if(is_front_page()){ echo ' - ' .get_bloginfo('description');} else echo wp_title(); ?>
    </title>
    <!-- Title / End -->
    
    <!-- Meta
	================================================== -->
	<meta name="description" content="<?php echo oneengine_option( 'meta_description' );?>">
    <meta name="keywords" content="<?php echo oneengine_option( 'meta_keyword' ); ?>">
	<meta name="author" content="<?php echo oneengine_option( 'meta_author' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Meta / End -->

	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="<?php echo oneengine_option('favicon', false, 'url'); ?>">
    <link rel="icon" type="image/png" href="<?php echo oneengine_option('favicon', false, 'url'); ?>" />
	<link rel="apple-touch-icon" href="<?php echo oneengine_option('touch_icon', false, 'url'); ?>">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo oneengine_option('touch_icon_72', false, 'url'); ?>">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo oneengine_option('touch_icon_144', false, 'url'); ?>">
    <!-- Favicons / End -->
    
    <noscript>
    	<style>
        	#portfolio_list div.item a div.hover {
				top: 0px;
				left: -100%;
				-webkit-transition: all 0.3s ease;
				-moz-transition: all 0.3s ease-in-out;
				-o-transition: all 0.3s ease-in-out;
				-ms-transition: all 0.3s ease-in-out;
				transition: all 0.3s ease-in-out;
			}
			#portfolio_list div.item a:hover div.hover{
				left: 0px;
			}
        </style>
    </noscript>
    
	<?php
    //loads comment reply JS on single posts and pages
    if ( is_single()) wp_enqueue_script( 'comment-reply' ); 
    ?>
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
    <?php wp_head(); ?>
    <style>
        .bg-iso-logo{
           fill: #b51a1d;
            fill: -moz-linear-gradient(left,  #b51a1d 0%, #d2711c 79%, #d2711c 100%);
            fill: -webkit-gradient(linear, left top, right top, color-stop(0%,#b51a1d), color-stop(79%,#d2711c), color-stop(100%,#d2711c));
            fill: -webkit-linear-gradient(left,  #b51a1d 0%,#d2711c 79%,#d2711c 100%);
            fill: -o-linear-gradient(left,  #b51a1d 0%,#d2711c 79%,#d2711c 100%);
            fill: -ms-linear-gradient(left,  #b51a1d 0%,#d2711c 79%,#d2711c 100%);
            fill: linear-gradient(to right,  #b51a1d 0%,#d2711c 79%,#d2711c 100%);
            filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#b51a1d', endColorstr='#d2711c',GradientType=1 );

        }
    </style>


    <script>
        jQuery(document).ready(function($){

            $('.link-style:first-child .service-wrapper .title').append('<a href="http://www.sanpedroatacama.com/" target="_blank">San Pedro de Atacama</a>'); 
            $('.link-style:last-child .service-wrapper .title').append('<a href="http://www.hotelescumbres.com/" target="_blank">Hotel & Spa Cumbres</a>');
            $('.link-style:nth-child(2) .service-wrapper .title').attr({
                'data-toggle':'modal',
                'data-target':'#ModalActividades'});
            $('.link-style:nth-child(2)').addClass('hidden-xs');
            $('#afiche .container .row p.animation-wrapper a').attr({
                'data-toggle':'modal', 
                'data-target':'#myModal'});

            var winWidth = $(window).width();
            if(winWidth < 781){
                $('#ModalActividades').remove();
            }else if(winWidth > 782){
                $('#loadExcur').attr({
                    'src':'<?php echo get_template_directory_uri(); ?>/excursiones.pdf#zoom=50'
                })
            }
        });

    </script>
</head>

<body <?php body_class(); ?>>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <div type="button" class="close" data-dismiss="modal" aria-label="Close">x</div>
        <img src="<?php echo get_template_directory_uri(); ?>/afiche.jpg" alt="">
    </div>
  </div>
</div>

<div class="modal fade" id="ModalActividades" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <div type="button" class="close" data-dismiss="modal" aria-label="Close">x</div>
        <div class="content">
                <iframe id="loadExcur" frameborder="0"></iframe>
        </div>
    </div>
  </div>
</div>

   <?php include (TEMPLATEPATH . '/icon_svg.php'); ?>

 	<!-- Preloading
    ======================================================================== -->
	<div class="mask-color">
        <div id="preview-area">
            <div class="spinner">
              <div class="dot1"></div>
              <div class="dot2"></div>
            </div>
        </div>
    </div>
	<!-- Preloading / End -->
    <?php if( is_front_page() ){ ?>
    <!-- Slider
    ======================================================================== -->
    <div class="slider-wrapper">
    	<?php oe_main_slider(); ?>
    </div>
    <!-- Slider / End -->
    
    <!-- Header
    ======================================================================== -->
    <header id="header">
    	<div class="container" >
        	<div class="row">
            	<div class="col-md-3 col-xs-3">
                	<!-- Logo
                    ======================================================================== -->
                    <div class="logo-wrapper1">
                        <div class="logo">
                             <a href="<?php echo home_url(); ?>">
                                <?php 
                                    $top   = '' ;
                                    $left  = '' ;
                                    $width = '' ;
                                    if( oneengine_option('logo_top') != '' )$top    = 'top:'.oneengine_option('logo_top').'px;' ;
                                    if( oneengine_option('logo_left') != '' )$left  = 'left:'.oneengine_option('logo_left').'px;';
                                    if( oneengine_option('logo_width') != '' )$width = 'width:'.oneengine_option('logo_width').'px;';
                                    if( oneengine_option('custom_logo', false, 'url') !== '' ){
                                        echo '<div class="logo-wrapper" style="'.$width.$left.$top.'"><img src="'. oneengine_option('custom_logo', false, 'url') .'" alt="'.get_bloginfo( 'name' ).'" /></div>';
                                    }else{
                                ?>
                                    <div class="logo-img"><span>E</span></div>
                                <?php } ?>
                             </a>
                        </div>  
                    </div>
                    <!-- Logo / End -->
                </div>
                
            	<div class="col-md-9 col-xs-9">
                    <!-- Menu
                    ======================================================================== --> 
                    <nav id="main-menu-top">
                          <?php
                              wp_nav_menu(array( 
                                  'container' => false,
								  'container_class' => 'menu',
								  'menu_class' => 'main-menu',
								  'menu_id'         => 'menu-res',
								  'theme_location' => 'main_nav',
								  'before' => '',
								  'after' => '',
								  'link_before' => '',
								  'link_after' => '',
								  'fallback_cb' => false,
                              ));      
                          ?>
                    </nav>
                    <!-- Menu / End -->
                    
                    <nav class="menu-responsive"> 
                    </nav>
                </div>
        	</div>
        </div>
    </header>
	<!-- Header / End -->

	<?php } ?>
