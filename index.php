<?php

// headers. automatically load libraries
require 'PHPMailer/PHPMailerAutoload.php'; // PHPMailer for mail
require 'recaptcha/src/autoload.php';      // ReCaptcha for spam protection

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Swagger &mdash; Davis Branch">
    <meta name="author" content="Swagger App, LLC">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Swagger @ UC Davis</title>

    <!-- Make the site preety -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="//oss.maxcdn.com/jquery.formvalidation/0.6.1/css/formValidation.min.css">
    <link href="static/sticky-footer-navbar.css" rel="stylesheet">
    <link href="static/style.css" rel="stylesheet">
    <script src='https://www.google.com/recaptcha/api.js'></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
<!-- navigation bar. list of links for specific points-of-interest -->
  <div class="container">
    <nav class="navbar navbar-swagger navbar-fixed-top">
      <div class="container-fluid">
        <!-- logo. be sure it is aligned properly with the links. -->
        <div class="navbar-header">
          <a class="navbar-brand" href="index.php"><img alt="logo" src="static/logo.png"></a>
        </div> <!-- navbar-header -->
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="https://itunes.apple.com/us/app/swagger/id875158536?mt=8">Download</a></li>
            <li><a href="#about"> About</a></li>
            <li><a href="#faq"> FAQ</a></li>
            <li><a href="#contact"> Contact</a></li>
            <li><a href="#feedback"><button type="button" class="btn btn-feedback">Feedback</button></a></li>
          </ul> <!-- nav -->
        </div> <!-- navbar-collapse -->
      </div> <!-- container-fluid -->
    </nav> <!-- navbar -->
  </div>
<!-- intro image on how to use swagger. replace with demo or an exciting media addition -->
  <div class="container">
    <div class="fill">
      <img alt="ten steps to swagger" src="static/tenstep.png">
    </div>
  </div>
<!-- list of social media points-of-contact. Google will help immensely if you are stuck -->
  <div class="container">
    <div class="row">
    <div class="centre">
      <span class="fa-stack fa-lg">
        <a href="mailto:ucdswagger@gmail.com"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-envelope fa-stack-1x fa-inverse"></i></a>
      </span>
      <div class="social">
        <span class="fa-stack fa-lg">
          <i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
        </span>
      <div class="facebook">
<div id="fb-root"></div> <script>(function(d, s, id) {var js, fjs = d.getElementsByTagName(s)[0]; if (d.getElementById(id)) return; js = d.createElement(s); js.id = id; js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.3"; fjs.parentNode.insertBefore(js, fjs);}(document, 'script', 'facebook-jssdk'));</script>
<div class="fb-page" data-href="https://www.facebook.com/UCDSwagger" data-width="500" data-hide-cover="false" data-show-facepile="true" data-show-posts="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/UCDSwagger"><a href="https://www.facebook.com/UCDSwagger">Swagger at UC Davis</a></blockquote></div></div>
        </div> <!-- facebook -->
      </div> <!-- social -->
      <div class="social">
        <span class="fa-stack fa-lg">
          <i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-instagram fa-stack-1x fa-inverse"></i>
        </span>
        <div class="instagram">
<blockquote class="instagram-media" data-instgrm-version="4" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:658px; padding:0;"><div style="padding:8px;"> <div style=" background:#F8F8F8; line-height:0; margin-top:40px; padding:50% 0; text-align:center; width:100%;"> <div style=" background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAsCAMAAAApWqozAAAAGFBMVEUiIiI9PT0eHh4gIB4hIBkcHBwcHBwcHBydr+JQAAAACHRSTlMABA4YHyQsM5jtaMwAAADfSURBVDjL7ZVBEgMhCAQBAf//42xcNbpAqakcM0ftUmFAAIBE81IqBJdS3lS6zs3bIpB9WED3YYXFPmHRfT8sgyrCP1x8uEUxLMzNWElFOYCV6mHWWwMzdPEKHlhLw7NWJqkHc4uIZphavDzA2JPzUDsBZziNae2S6owH8xPmX8G7zzgKEOPUoYHvGz1TBCxMkd3kwNVbU0gKHkx+iZILf77IofhrY1nYFnB/lQPb79drWOyJVa/DAvg9B/rLB4cC+Nqgdz/TvBbBnr6GBReqn/nRmDgaQEej7WhonozjF+Y2I/fZou/qAAAAAElFTkSuQmCC); display:block; height:44px; margin:0 auto -44px; position:relative; top:-22px; width:44px;"></div></div><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;"><a href="https://instagram.com/p/3NdlUFHEIB/" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_top">A photo posted by UC Davis Swagger (@ucdswagger)</a> on <time style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;" datetime="2015-05-28T03:22:19+00:00">May 27, 2015 at 8:22pm PDT</time></p></div></blockquote>
<script async defer src="//platform.instagram.com/en_US/embeds.js"></script>
        </div> <!-- instagram -->
      </div> <!-- social -->
      <span class="fa-stack fa-lg">
        <a href="https://www.youtube.com/channel/UC5rQUWTOfrJtZlZd7ADcJJA"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-youtube fa-stack-1x fa-inverse"></i></a>
      </span>
      <div class="social">
        <span class="fa-stack fa-lg">
          <i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
        </span>
        <div class="twitter">
<a class="twitter-timeline" href="https://twitter.com/UCDSwagger" data-widget-id="604070004611407872">Tweets by @UCDSwagger</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
        </div> <!-- twitter -->
      </div> <!-- social -->
      <span class="fa-stack fa-lg">
        <a href="https://www.snapchat.com"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-camera fa-stack-1x fa-inverse"></i></a>
      </span>
    </div> <!-- centre -->
    </div>
  </div>
<!-- list of people. change name, picture, and descriptions as needed. -->
  <div class="container" id="about">
    <h2 class="text-center">About. <small>Who we are.</small></h2>
    <p class="lead">Swagger is an application available to download from the <a href="https://itunes.apple.com/us/app/swagger/id875158536?mt=8">App Store</a>. Challenge your friends (or rivals) to anything you want, set the stakes, and track your progress! We represent the <a href="http://en.wikipedia.org/wiki/Davis,_California">student body</a> of <a href="http://ucdavis.edu"> UC Davis</a> and our aim is to serve the Davis community.</p>
    <div class="row">
      <div class="col-xs-6 col-md-4">
        <img src="static/IMG_9173.jpg" alt="Sahill Kabani" class="img-circle center-block">
        <div class="text-center">
          <h3>Sahill Kabani</h3>
          <h4>Director of Operations</h4>
          <p>I am a senior studying Managerial Economics. I love playing sports and love to compete! Challenge me on Swagger, it's on!</p>
        </div> <!-- text-center -->
      </div> <!-- col-xs-6 col-md-4 -->
      <div class="col-xs-6 col-md-4">
        <img src="static/IMG_5019.jpg" alt="Gary Duong" class="img-circle center-block">
        <div class="text-center">
          <h3>Gary Duong</h3>
          <h4>Web Developer Intern</h4>
          <p>I am the web developer intern for the Davis Swagger team. I graduated from the University of California, Davis in December 2014 with a Bachelor of Science in Computer Science. I like to make slightly unreasonable bets on Swagger and gloat over my <s>friends'</s> rivals' losses. I have never gone sky-diving nor scuba-diving.</p>
        </div> <!-- text-center -->
      </div> <!-- col-xs-6 col-md-4 -->
      <div class="col-xs-6 col-md-4">
        <img src="static/IMG_2015.jpg" alt="Gregory Dibs" class="img-circle center-block">
        <div class="text-center">
          <h3>Gregory Dibs</h3>
          <h4>Social Media Intern</h4>
          <p>I am a fourth-year music major at UC Davis. I am the social media/marketing intern for the Davis Swagger team. My favorite aspect of the app is the way it keeps track of stats and your record and allows you to rank up as you win more challenges. I enjoy DJing and producing music, working out, and Ultimate Frisbee.</p>
        </div> <!-- text-center -->
      </div> <!-- col-xs-6 col-md-4 -->
    </div>
  </div>
  <div class="container" id="faq">
  <h2 class="text-center">FAQ. <small>Ask us anything.</small></h2>
    <h3>Questions from Users</h3>
    <dl>
      <dt>What is Swagger?</dt>
      <dd>Swagger is a social network based on competition! The application will let you challenge your friends to anything you want. It will track and record your challenges, and will update your record and statistics accordingly. Think of this as the next-generation measurement of street cred!</dd>
      <dt>How may I change my rank?</dt>
      <dd>Your rank will change depending on your wins and losses. You will be ranked based on where you stand in the Swagger community, and the ranking will be updated every day. </dd>
      <dt>How have you made sure that challenge results are accurate?</dt>
      <dd>Once you have finished a challenge and the result is logged in the app, your opponent must verify the result. If he/she hasn't verified the result, it will not count.</dd>
      <dt>My challenge wasn't sent, or my response to a notification isn't shown in my app. What has happened?</dt>
      <dd>Swagger will save all challenges and responses to the cloud. If your Internet is particularly horrible, Swagger will wait until the Internet has resolved itself to push your challenges and responses. Try again at a later time.</dd>
      <dt>May I delete a challenge?</dt>
      <dd>If it isn't finished. Active challenges may be cancelled, and sent challenges may be withdrawn. However, once a challenge is recorded, it will stay recorded. That is final.</dd>
      <dt>What privacy settings have I got?</dt>
      <dd>Users may choose their followers, challengers, and viewers.</dd>
      <dt>I've found someone's challenge or comments offensive or hurtful.</dt>
      <dd>We are sorry that this has happened. Please flag the challenge or the comment. We will take a look.</dd>
      <dt>I have Android &mdash; what's the deal?</dt>
      <dd>We are working on compatibility for Android. It's coming very soon! Stay tuned!</dd>
    </dl>
<!-- faqs. loads of questions. use your product reviews as a reference. -->
    <h3>Questions from Aggies</h3>
    <dl>
      <dt>How may I connect with fellow Aggies through Swagger?</dt>
      <dd>In the Swagger application, press <strong>Topics</strong>, then enter a hashtag into the search-bar: <kbd>#</kbd>, and start typing. Your university location will be recorded and fellow Aggies will see what challengers are near you, and what challenges are trending around Davis!</dd>
    </dl>
  </div>
  <div class="container" id="contact">
<!-- list of useful links to contact the davis swagger team -->
  <h2 class="text-center">Contact. <small>Keep in touch.</small></h2>
    <p class="lead">If you have any questions, comments, or concerns, please email us at <a href="mailto:ucdswagger@gmail.com">ucdswagger@gmail.com</a>. We will respond to you within 1&ndash;3 business days. Don't forget to follow us on our social networks!</p>
    <div class="table-responsive">
      <table class="table table-striped">
        <tr><td><i class="fa fa-envelope fa-fw"></i> Email</td><td><a href="mailto:ucdswagger@gmail.com">ucdswagger@gmail.com</a></td></tr>
        <tr><td><i class="fa fa-facebook fa-fw"></i> Facebook</td><td><a href="https://www.facebook.com/UCDSwagger">Swagger at UC Davis</a></td></tr>
        <tr><td><i class="fa fa-instagram fa-fw"></i> Instagram</td><td><a href="https://instagram.com/ucdswagger">@ucdswagger</a></td></tr>
        <tr><td><i class="fa fa-twitter fa-fw"></i> Twitter</td><td><a href="https://twitter.com/UCDSwagger">@UCDSwagger</a></td></tr>
        <tr><td><i class="fa fa-youtube fa-fw"></i> YouTube</td><td><a href="https://www.youtube.com/channel/UC5rQUWTOfrJtZlZd7ADcJJA">Swagger at UC Davis</a></td></tr>
        <tr><td><i class="fa fa-camera fa-fw"></i> Snapchat</td><td><a href="https://www.snapchat.com">UCDSwagger</a></td></tr>
      </table> <!-- table -->
    </div> <!-- table-responsive -->
  </div>
<-- pay attention here. feedback-form. small part but very important -->
  <div class="container" id="feedback">
  <h2 class="text-center">Feedback. <small>What do you think?</small></h2>
  <form class="form" id="fillme" role="form" method="POST">
    <div class="form-group">
      <label for="name" class="col-sm-2 control-label">Name</label>
      <input type="text" class="form-control" name="name" id="name" placeholder="Bart Simpson" required>
    </div>
    <div class="form-group">
      <label for="email" class="col-sm-2 control-label">Email</label>
      <input type="email" class="form-control" name="email" id="email" placeholder="user@example.com" required>
    </div>
    <div class="form-group">
      <label for="subject" class="col-sm-2 control-label">Subject</label>
      <input type="text" class="form-control" name="subject" id="subject" placeholder="Doughnuts" required>
    </div>
    <div class="form-group">
      <label for="message" class="col-sm-2 control-label">Message</label>
      <textarea class="form-control" rows="5" name="message" required></textarea>
    </div>
    <div class="form-group">
<?php

/*
 * User will do one of two things.
 * 1. Complete a challenge where s/he is asked to select all images containing 'string'
 * 2. Verify that s/he is a human by clicking on the 'I am not a robot' icon.
 */

// parse key-value pairs from file
$array = parse_ini_file('config.ini');
$siteKey = array_pop(array_values($array));

// captcha to prove that user is a human
// try to submit response to challenge
if( isset($_POST['g-recaptcha-response']) ) {
  $secret = array_shift(array_values($array));
  $recaptcha = new \ReCaptcha\ReCaptcha($secret);
  $resp = $recaptcha->verify($_POST['g-recaptcha-response'],$_SERVER['REMOTE_ADDR']);
  // response isn't successful, try again
  if (!$resp->isSuccess()) { ?>
      <p class="bg-danger">You shall not pass! Try again.</p>
<?php foreach( $resp->getErrorCodes() as $code ) { ?>
      <samp><?php echo $code; ?></samp>
<?php } ?>
      <div class="g-recaptcha" data-sitekey="<?php echo $siteKey ?>"</div>
<?php }}
/* default. generate new challenge */
else { ?>
      <div class="g-recaptcha" data-sitekey="<?php echo $siteKey ?>"</div>
<?php } ?>
    </div>
    <button type="submit" class="btn btn-submit" name="done">Submit</button>
    <div class="pull-right">
<?php

/*
 * Wait for user to submit the feedback-form.
 * User MUST have completed CAPTCHA and filled-in all fields.
 * Otherwise, will have to complete it again.
 */

// send message
// must have finished captcha before submission
if( isset($_POST['done']) && $resp->isSuccess() ) {

  $mail = new PHPMailer;
  $mail->From = $_POST['email'];
  $mail->FromName = $_POST['name'];
  $mail->addAddress('garyduong.1@gmail.com', 'Gary Duong');
  $mail->Subject = $_POST['subject'];
  $mail->Body = $_POST['message'];

  // cannot submit the form
  if( !$mail->send() ) {

?>
      <div class="alert alert-danger fade in" role="alert">We were unable to send your message. Try again.
<?php echo $mail->ErrorInfo; ?>
      </div>
<?php }
 /* form submit successful */
  else { ?>
      <div class="alert alert-success fade in" role="alert">Thank you. We will contact you soon!'</div>
<?php }} ?>
    </div>
  </form>
  </div>

  <footer class="footer">
    <div class="container">
    <p class="text-muted">&copy; <?php echo date('Y'); ?>. Swagger App, LLC. All rights reserved.</p>
    </div>
  </footer> <!-- footer -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <script src="//oss.maxcdn.com/jquery.formvalidation/0.6.1/js/formValidation.min.js"></script>
    <script src="//oss.maxcdn.com/jquery.formvalidation/0.6.1/js/framework/bootstrap.min.js"></script>
    <script type="text/javascript" src="static/feedback.js"></script>
  </body>
</html>
