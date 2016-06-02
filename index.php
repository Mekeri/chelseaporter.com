<?php
if ($_POST["submit"]) {
    $name = $_POST['name'];
    $email = $_POST['email'];
		$message = $_POST['message'];

    $to = 'mekeri@gmail.com';
    $subject = "$name has sent you a message";
    // Check if name has been entered
    if (!$_POST['name']) {
        $errName = 'Please enter your name';
    } else {

    }

    // Check if email has been entered and is valid
    if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $errEmail = 'Please enter a valid email address';
    } else {
        $from = $email;
    }

    // Check if message has been entered
    if (!$_POST['message']) {
        $errMessage = 'Please enter your message';
    } else {

    }

    // set body of message to be sent

    $message = "
        Someone has sent you a message using your contact form:

        Name: $name
        Email: $email
				Message: $message
				";


// If there are no errors, send the email


    if (!$errName && !$errEmail && !$errMessage) {
        if (mail($to, $subject, $message, $from)) {
            $result = '<div class="alert alert-success">Thank You! I will be in touch</div>';
						$resultTop = '<div class="alert alert-success">Your contact form was successfully submitted. Thank you!</div>';
						$focus = "true";
        } else {
            $result = '<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later.</div>';
						$focus = "true";
        }
    } else {
        $result = '<div class="alert alert-danger">Error in checking.</div>';
				$resultTop = '<div class="alert alert-success"><a href="#contact" class="page-scroll">Your form did not submit properly. Click this message to return to the form.</a></div>';
				$focus = "true";
    }
}
?>
<!doctype html>
<html>
<head>
    <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;" />
    <title>Chelsea Porter's Web Portfolio</title>
    <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.3.0/build/cssreset/reset-min.css">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.easing.min.js"></script>
    <script type="text/javascript" src="js/scrolling.nav.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Chelsea Porter's Web Portfolio</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="#intro" class="page-scroll">Home</a></li>
        <li><a href="#portfolio" class="page-scroll">Portfolio</a></li>
        <li><a href="#resume" class="page-scroll">Resume</a></li>
        <li><a href="#about" class="page-scroll">About Me</a></li>
        <li><a href="#contact" class="page-scroll">Contact Me</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Intro -->
<section id="intro" data-speed="6" data-type="background">
    <div class="container">
   	  <!--OLD DIV NEED TO DELETE ONCE CHECKED FOR ERRORS <div class="col-sm-2"><?php echo $resultTop; ?></div>-->
			<div class="col-sm-12 text-center"><?php echo $resultTop; ?>
        <img src="images/name.png" class="nameImg" alt="name">
        <p>Web and Graphic Designer</p>
     		 <a href="https://www.linkedin.com/pub/chelsea-porter/4/bb1/79" target="_blank"><img src="images/Linked_in.png" width="30" height="30" alt="linkedIn"></a>
         <a href="#contact" class="page-scroll"><img src="images/email-icon-md.png" width="40" height="30" alt="emailIcon"></a> </div><!-- /.col -->
    </div>
</section>


<!-- Portfolio -->
<section id="portfolio" data-speed="4" data-type="background">
    <div class="container">
        <div class="row-fluid">
		        <div class="col-sm-3 well wellSmall">
		          <img src="images/apsofpc.jpg" class="portfolioImg" alt="apsofpc">
<p>UNDER CONSTRUCTION! Currently building this site for a local animal rescue group.</p>
		          <p><a class="btn btn-success" href="http://www.chelseaporter.com/APSoPC/" target="_blank">View site &raquo;</a></p>
<p>UNDER SLOW CONSTRUCTION! WordPress conversion of the same site. This one will be making much more progress in late December on into January.</p>
		          <p><a class="btn btn-success" href="http://www.chelseaporter.com/wordpress" target="_blank">View site &raquo;</a></p>
		        </div><!-- /.col -->
		        <div class="col-sm-3 well wellSmall">
		          <img src="images/n4csgaPic.JPG" class="portfolioImg" alt="n4csga">
<p>This site was created for the NC Comprehensive Community College SGA. This was a year long paid contract where they kept me on a second year to make additions and updates after the site was created.</p>
		          <p><a href="http://www.chelseaporter.com/n4csga" target="_blank" class="btn btn-success">View site &raquo;</a></p>
		        </div><!-- /.col -->
		        <div class="col-sm-3 well wellSmall">
		          <img src="images/churchPic.JPG" class="portfolioImg" alt="churchPic">
<p>This site was made for a local church. They wanted something clean, welcoming, and simple. They were very pleased with the site and continue to maintain it monthly.</p>
		          <p><a class="btn btn-success" href="http://www.christchurchdanville.org/" target="_blank">View site &raquo;</a></p>
		        </div><!-- /.col -->
            <div class="col-sm-3 well wellSmall">
		          <img src="images/precision.JPG" class="portfolioImg" alt="machinePic">
<p>A local manufacturing company contacted me to make a short and simple site to help them market their three products without having to go through a distributor. They wanted it simple, small, and direct.</p>
		          <p><a href="http://theprecisionmachine.com/" target="_blank" class="btn btn-success">View site &raquo;</a></p>
		        </div><!-- /col -->
    </div><!-- /row -->
   </div><!--Container-->
</section>


<!-- Resume -->
<section id="resume" data-speed="2" data-type="background">
    <div class="container">
      <div class="col-sm-2"></div>
      <div class="col-sm-8 well">
          <h3>University of Denver (2014)</h3>
          <p>Master's Certificate in Web Design and Development</p>
          <h3>East Tennessee State University (2006)</h3>
          <p>Bachelor's of Science in Digital Media</p>
          <p>Magna Cum Laude</p>
          <br/>
          <h3>Instructor at Piedmont Community College</h3>
          <p>Instructor of Digital Effects and Animation teaching primarily Maya, After Effects, Dreamweaver and Photoshop to students seeking a two year associate degree. Other duties include participating in various college committees, promotional events for our school and department, advising the department's Animation Club, and maintaining the labs. </p>
          <h3>Webmaster at Averett University</h3>
          <p>Maintained the university's website, e-mailed monthly newsletters, created and updated graphics on the website, and developed new pages as needed.</p>
          <a class="link" href="pdf/ChelseaPorterResume.pdf" target="_blank">Click to download a PDF version of the full resume.</a>
          </div><!-- /col -->
      <div class="col-sm-2"></div>
    </div><!-- /container -->
</section>

<!-- About Me -->
<section id="about" data-speed="5" data-type="background">
    <div class="container">
    	<div class="col-sm-1"></div>
        <div class="col-sm-10 well">
          <h2>Professional History</h2>
          <p>
          My first love was digital animation with the dream of eventually making video games. In search of that dream I went to East Tennessee State University and got my bachelor's in Digital Media. Then it was just the simple matter of jumping into the job market and becoming an animator. As anyone who has tried to break into the industry knows... that was much easier said than done. Luckily I landed a great job at a local community college teaching Digital Effects and Animation for an Associate's Degree program.
          </p>
          <p>
          Nine years later I am looking to expand into something new. I am still interested digital effects and animation but after teaching a couple of web design classes several years ago my interests started to evolve in a different direction. Last spring I completed my Master's Certificate in Web Design and Development. I have been working on several side projects for organizations and businesses in the area to help bolster my portfolio in web design. I hope to continue growing and learning more about this field and am looking for a great job to help facilitate my love for web programming and design.
          </p>
          <h2>Personal History</h2>
          <p>
          I am married with no kids except for the four legged furry variety. I love gaming be it video games, board games, tabletop RPGs, miniature wargamming... I love it all. Just getting together with a group of friends for some friendly competition and goofing off is the best use of free time I can imagine. I am also a huge animal lover, and besides my one dopey dog, my husband and I have been known to foster puppies from time to time.
          <br><br>
          </p>
          <div class="col-sm-1"></div>
      </div><!--closes col-->
    </div><!--closes cointainer-->
</section>

<!-- Contact -->
<section id="contact" data-speed="6" data-type="background">
    <div class="container">
   	  <div class="col-sm-4"></div>
			<div class="col-sm-4 text-center well">
      <p>Feel free to shoot me an email!</p>
        <form class="form-horizontal" role="form" method="post" action="index.php" name="contactForm" id="form"  onSubmit='return valid(contactForm)'>
        <div class="form-group">
            <label for="name" class="col-sm-2 control-label">Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="<?php echo htmlspecialchars($_POST['name']); ?>">
                <?php echo "<p class='text-danger'>$errName</p>"; ?>
            </div>
        </div>
        <div class="form-group">
            <label for="email" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="<?php echo htmlspecialchars($_POST['email']); ?>">
                <?php echo "<p class='text-danger'>$errEmail</p>"; ?>
            </div>
        </div>

        <div class="form-group">
        		<label for="Message" class="col-sm-2 control-label">Message</label>
            <div class="col-sm-10">
                <textarea type="text" class="form-control" rows="3" id="message" name="message" placeholder="Message" value="<?php echo htmlspecialchars($_POST['message']); ?>"></textarea>
            		<?php echo "<p class='text-danger'>$errMessage</p>"; ?>
            </div>
        </div>
			  <div class="form-group">
            <div class="col-sm-10 col-sm-offset-2">
                <input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-10 col-sm-offset-2">
                <?php echo $result; ?>
            </div>
        </div>
    </form>
    </div><!-- /.col -->
      <div class="col-sm-4"></div>
    </div>
</section>

<!-- Footer -->
<section id="footer" data-speed="6" data-type="background">
    <div class="container">
   	  <div class="col-sm-4"></div>
			<div class="col-sm-4 text-center">
        <p>Copyright &copy; 2015 - Chelsea Porter</p>
      </div><!-- /.col -->
      <div class="col-sm-4"></div>
    </div>
</section>
<a href="#" class="crunchify-top">To Top</a>


</body>
</html>
