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
    	<h1>Welcome Animal Lovers!</h1>
    	<p>The Animal Protection Society, Inc. (APS) of Person County is a non-profit organization functioning as a county-wide humane society that is independent of Person County government and 
     	funding. We are a group of dedicated volunteers passionate about promoting spay/neuter to reduce the pet over-population, which leads to the untimely death of so many of our beloved 
      companions. We are also very compassionate in rescuing animals in danger, and placing them in to loving homes. We do not have a shelter. Our animals rescued are placed in to our foster 
      program where we provide,medicalcare, love, and nourishment whilethey are waiting for theirforever homes.</p>
      <p>Our objectives include the following:</p>
			<ul>
				<li>promote spay/neuter to reduce the overpopulation of animals, a condition that leads to the neglect, abuse, and abandonment of animals in Person County</li>
				<li>the placement of unwanted animals into responsible, loving homes.</li>
				<li>educate public on reponsible pet ownership</li>
				<li>rescue animals in danger of being euthanized</li>
			</ul>
    </div><!-- closes Row
-->
  </div><!--closes container-->
</div><!--closes row-->

<?php get_footer();?>