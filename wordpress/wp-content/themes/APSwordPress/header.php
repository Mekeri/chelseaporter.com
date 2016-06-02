<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width">

	<title ><?php bloginfo('name'); ?></title>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="container">
  <div class="row">
    <div class="col-sm-4"><a href="index.php"><img src="images/vectorLogo.svg" width="255" height="168" alt="logo" /></a></div>
    <div class="col-sm-4"></div>
    <div class="col-sm-4">
        <p class="center-block"><strong>Want to help support the paws?</strong></p>
        <a href="donate.php"><img class="center-block" src="images/paypal-donate-button.jpg" width="235" height="102" alt="donate" /></a>
        <p class="center-block"> Your donation will help fund vetting and foster expenses!</p>    
    </div>
  </div><!--closes Row-->
</div>