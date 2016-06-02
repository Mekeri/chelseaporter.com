<?php $thisPage="home"; ?>
<?php get_header();?>


  <div class="jumbotron border">
      <div class="container">
        <div class="flexslider">
          <ul class="slides">
            <li>
              <img name=image src=<?php bloginfo('template_directory'); ?>/images/dog1.jpg>
            </li>
            <li>
              <img name=image src=<?php bloginfo('template_directory'); ?>/images/dog2.jpg>
            </li>
            <li>
              <img name=image src=<?php bloginfo('template_directory'); ?>/images/dog3.jpg>
            </li>
          </ul>
        </div><!--closes flexslider-->
      </div><!--closes container-->
  </div><!--closes jumbotron-->

<div class="row greenBG"> 
  <div class="container">
    <div class="col-sm-12">
    	
    </div><!-- closes Row
-->
  </div><!--closes container-->
</div><!--closes row-->

<?php get_footer();?>