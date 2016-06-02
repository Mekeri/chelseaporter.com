<!doctype html>
<html>
<head>
<meta charset="utf-8">

<title ><?php wp_title( ' | ', true, 'right' ); ?></title>

<!--<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="flexslider/flexslider.css" rel="stylesheet" type="text/css" />-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src = "<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
<script src = "<?php echo get_template_directory_uri(); ?>/flexslider/jquery.flexslider-min.js"></script>

<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/bootstrap.min.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/flexslider/flexslider.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />

<?php wp_head(); ?>

</head>

<body>

<div id="fb-root"></div>
<script>
(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3&appId=381564488705977";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>

<?php include ("navMenu.php"); ?>
