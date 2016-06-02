<nav class="navbar navbar-inverse">
  <div class="container">
    <div>
	
      <?php
            wp_nav_menu( array(
                'menu'              => 'primary',
                'theme_location'    => 'primary',
                'depth'             => 2,
                'menu_class'        => 'nav navbar-nav navbar-right',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
        ?>
		
    </div>
  </div>
</nav>

<div class="container">
  <div class="row">
    <div class="col-sm-4"><img name=image alt="Logo" class="headerLogo" src=<?php bloginfo('template_directory'); ?>/images/vectorLogo.svg></div>
    <div class="col-sm-4"></div>
    <div class="col-sm-4"><p class="center-block">Want to help support our cause?</p>
    <img class="center-block" src=<?php bloginfo('template_directory'); ?>/images/paypal-donate-button.jpg width="284" height="136" alt="donate" /></p>    
    </div>
  </div><!--closes Row-->
	<?php
            wp_nav_menu( array(
                'menu'              => 'tabNav',
                'theme_location'    => 'tabNav',
                'depth'             => 2,
                'menu_class'        => 'nav nav-tabs',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
    ?>
	<?php if ($thisPage=="news") echo "active"; ?>

</div><!--closes container-->