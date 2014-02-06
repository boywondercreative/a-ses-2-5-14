<?php

// Do not edit this file.
// If you need to override this template you can use the 'shoestrap_header_top_navbar_override' hook.
?>
<header class="banner navbar navbar-default topnavbar <?php echo shoestrap_navbar_class(); ?>" role="banner">
  <div class="<?php echo shoestrap_container_class(); ?>">
    <div class="navbar-header clearfix">
<?php /*?>      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-main, .nav-extras">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button><?php */?>
      <div class="row">
      
<?php /*?>      <?php
      if ( shoestrap_getVariable( 'navbar_brand' ) != 0 ) :
        echo '<div class="logo-offset col-md-2"><a class="navbar-brand ' . shoestrap_branding_class( false ) . '" href="' . home_url() . '/">';

        if ( shoestrap_getVariable( 'navbar_logo' ) == 1 )
          shoestrap_logo();
        else
          bloginfo( 'name' );
        echo '</a></div>';
      endif;
      ?><?php */?>


<div class="logo-offset col-md-2">
    <a class="navbar-brand" href="<?php home_url()?>">
        <img alt="ses" src="<?php echo get_stylesheet_directory_uri()?>/i/logo.png" id="site-logo">
    </a>
</div>




<?php /*?>    <div class="nav-extras col-md-8">
      <?php do_action( 'shoestrap_pre_main_nav' ); ?>
    </div><?php */?>
    <div class="nav-offset col-md-9">
    <?php if (is_front_page()) echo "<div class='tagline hidden-sm hidden-xs'>SES Government Solutions, formerly known as Americom Government Services (AGS)</div>"; ?>
    <nav class="nav-main navbar-collapse collapse" role="navigation">
      <?php
        do_action( 'shoestrap_inside_nav_begin' );
        if (has_nav_menu('primary_navigation')) :
          //wp_nav_menu( array( 'theme_location' => 'primary_navigation', 'menu_class' => shoestrap_nav_class_pull() ) );
		      wp_nav_menu( array(
        'menu'              => 'primary',
        'theme_location'    => 'primary',
        'depth'             => 2,
        'container'         => 'div',
        'container_class'   => 'collapse navbar-collapse navbar-ex1-collapse',
        'menu_class'        => 'nav navbar-nav',
        'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
        'walker'            => new wp_bootstrap_navwalker())
    );

        endif;
        do_action( 'shoestrap_inside_nav_end' );
      ?>
    </nav>
    </div><!-- end of nav offset -->
    </div><!-- end of added row-->
    <?php do_action( 'shoestrap_post_main_nav' ); ?>
  </div>
</header>


