
<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Contacts</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
	integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">

	<link rel="stylesheet" href="https://cdn.rawgit.com/konpa/devicon/df6431e323547add1b4cf45992913f15286456d3/devicon.min.css">

<?php include("form_process.php"); ?>
<link href="contacts_style.css" rel="stylesheet" type="text/css">

</head>
<body>


<nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.html"><img src="img/stanev2.png"></a>

    <button class="navbar-toggler" type="button" data-toggle="collapse"
    data-target="#navbarResponsive">
         <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class = "navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.html">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about_me.html">About Me</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="contacts.php">Contacts</a>
        </li>
      </ul>
    </div>

</div>
</nav>

<div style="width:350px; margin:0 auto; padding-top: 25px;">
<div class="row">
	<div class="col-12">
		<img class="image-resize" src="img/contact-me.png" alt="Contact me">
	</div>
</div>
</div>



<div class="container">
  <form id="contact" action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
    <h3>Quick Contact</h3>
    <h4>Contact me today, and get reply with in 24 hours!</h4>
    <fieldset>
      <input placeholder="Your name" type="text" tabindex="1" name="name" value="<?= $name ?>" autofocus>
			<span class="error"><?= $name_error ?> </span>
		</fieldset>
    <fieldset>
      <input placeholder="Your Email Address" type="text" name="email" value="<?= $email ?>" tabindex="2" >
			<span class="error"><?= $email_error ?> </span>
    </fieldset>
    <fieldset>
      <input placeholder="Your Phone Number" type="text" name="phone" value="<?= $phone ?>" tabindex="3" >
			<span class="error"><?= $phone_error ?> </span>
    </fieldset>
    <fieldset>
      <input placeholder="Your Web Site starts with http://" type="text" name="url" value="<?= $url ?>" tabindex="4" >
			<span class="error"><?= $url_error ?> </span>
    </fieldset>
    <fieldset>
      <textarea placeholder="Type your Message Here...." type="text" name="message" value="<?= $message ?>" tabindex="5" ></textarea>
		</fieldset>

    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
		<div class = "success"> <?= $success; ?> </div>
  </form>
</div>

<div class = "container-fluid">
	<div class= "row text-center connect">
		<div class = "col-md-4 col-xs-12">
			<h1 class="display-4">Connect</h1>
			</div>
			<div class = "col-md-4 col-xs-12">
				<h1 class="display-4">Via</h1>
				</div>
				<div class = "col-md-4 col-xs-12">
					<h1 class="display-4">Socials</h1>
					</div>

			<hr>
		</div>

		<div class= "row text-center connect">
		<div class = "col-12 social">
			<a href="https://www.facebook.com/ivan.stanev.716"><i class="fab fa-facebook"></i></a>
			<a href="https://twitter.com/staneeev1"><i class="fab fa-twitter"></i></a>
			<a href="https://www.instagram.com/stan_lpfc/"><i class="fab fa-instagram"></i></a>
			<a href="https://www.youtube.com/user/stanev123"><i class="fab fa-youtube"></i></a>
		</div>
	</div>

</div>


<footer>
	<div class="container-fluid">
		<div class="row text-center">
			<div class="col-md-4">
				<img src="img/stanev2.png">
				<hr class="light">
				<p>+359-0890-53-52-33</p>
				<p>zirow0000@gmail.com</p>
				<p>Montevideo</p>
				<p>Sofia, Bulgaria, 1000</p>
			</div>
			<div class="col-md-4">
				<hr class="light">
				<h5>Working Time</h5>
				<hr class="light">
				<p><em>Monday-Friday: 9am - 5pm</em></p>
				<hr class="light">
				<h5>Free Time</h5>
				<hr class="light">
				<p><em>Saturday-Sunday</em></p>
			</div>
			<div class="col-md-4">
				<hr class="light">
				<h5>Service Area</h5>
				<hr class="light">
				<p><em>Povdiv, Bulgaria, 4000</em></p>
				<p><em>Sofia, Bulgaria, 1000</em></p>
				<p><em>Varna, Bulgaria, 9000</em></p>
				<p><em>Veliko Tarnovo, Bulgaria, 5000</em></p>
			</div>

			<div class="col-12">
				<hr class="light-100">
				<h5>&copy; Ivan Stanev 2018</h5>
			</div>
		</div>
	</div>
</footer>

 </body>
 </html>
