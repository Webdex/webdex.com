<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Webdex</title>
<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/2.9.0/build/reset/reset-min.css" />
<link rel="stylesheet" type="text/css" href="lib/css/projectcss.css" />
<link media="screen" href="lib/js/jquery.fancybox-1.3.4/fancybox/jquery.fancybox-1.3.4.css" type="text/css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="lib/css/styles_media.css" />

<!--[if lte IE 8]>
<link rel="stylesheet" type="text/css" media="all" href="lib/css/styles.css"/>
<![endif]-->

<link rel="icon" type="image/png" href="lib/img/favicon.png" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript">
</script>
<script type="text/javascript" src="lib/js/jquery.fancybox-1.3.4/fancybox/jquery.fancybox-1.3.4.pack"></script>
<script src="lib/js/scroll.js" type="text/javascript">
</script>
<script src="lib/js/jquery.js" type="text/javascript">
</script>
<!--[if lte IE 8]>
<script src="lib/js/html5.js" type="text/javascript"></script>
<![endif]-->
<!--[if IE]>
<script>
$(document).ready(function() {
$('#maincontent').css({
'background-image':'none',
'background-repeat':'no-repeat'
});
});
</script>
<![endif]-->
<? include_once('lib/inc/google.php'); ?>
<? include_once('lib/inc/meta.php'); ?>
<? 
$msg = $_REQUEST['msg']; 
?>
</head>

<body id="webdexhome">
<div id="navigationicons">
  <ol>
    <li class="icon home hiddentext"><a href="#webdexhome">Home</a></li>
    <li class="icon about hiddentext"><a href="#aboutanchor">About</a></li>
    <li class="icon portfolio hiddentext"><a href="#portfolioanchor">Portfolio</a></li>
    <li class="icon contact hiddentext"><a href="#contactanchor">Contact</a></li>
  </ol>
</div>
<header class="clearfix">
  <div class="container">
    <div id="logo" ><p class="hiddentext">webdex</p><img src="lib/img/webdex_logo_white.png" alt="webdex logo" title="webdex logo" /> </div>
    <div id="slogan">
      <p>Motivated web developer with tons to give</p>
    </div>
  </div>
</header>
<!-- end header -->
<div id="maincontent" class="clearfix">
  <div class="container"> <span id="aboutanchor"></span>
    <ol id="navigation" class="clearfix">
      <li><a href="#aboutanchor">About</a></li>
      <li><a href="#portfolioanchor">Portfolio</a></li>
      <li><a href="#contactanchor">Contact</a></li>
    </ol>
    <!-- end navigation -->
    
    <div class="section">
      <article>
        <div class="backtotop"><a href="#webdexhome">Back To Top</a></div>
        <h1 id="about">About</h1>
        <p class="clearfix"> 
          <!-- <img class="floatedimage" src="lib/img/dexter_bw.jpg" alt="dexter reaves" title="dexter reaves" /> -->Hello nice to meet you. My name is Dexter Reaves and I am an up and coming motivated web developer with experience working in both front and back end development. I graduated from The Art Institute of York PA with a bachelors degree in web development. I also have a background in creating logos as well as digital art which you can see a bit of in my <a href="#portfolioanchor">portfolio</a> section. You can also <a href="lib/files/dexter_reaves_resume_small.pdf" target="_blank">download my resume</a> to see a more detailed explanation of my education and skills. </p>
      </article>
    </div>
    <!-- end section -->
    <div class="section">
      <article> <span id="portfolioanchor"></span>
        <div class="backtotop"><a href="#webdexhome">Back To Top</a></div>
        <h1 id="portfolio">Portfolio</h1>
        <div class="portfoliosection clearfix">
          <div class="square upslide rideordie rightfloat"><a class="lightbox" href="lib/pro/rideordie/rideordie.html"></a></div>
          <div class="square downslide grow rightfloat"><a class="lightbox" href="lib/pro/grow/grow.html"></a></div>
          <div class="verticle rightslide ecommerce  leftfloat"><a class="lightbox" href="lib/pro/tekkit/tekkit.html"></a></div>
          <div class="horizontal upslide recipetincan  rightfloat"><a class="lightbox" href="lib/pro/recipetincan/recipetincan.html"></a></div>
        </div>
        <div class="portfoliosection clearfix"> 
          <div class="verticle rightslide jquery  rightfloat"><a class="lightbox" href="lib/pro/jquery/jquery.html"></a></div>
          <div class="square downslide spiral rightfloat"><a class="lightbox" href="lib/pro/spiral/spiral.html"></a></div>
          <div class="square downslide yorkwater lefttfloat"><a class="lightbox" href="lib/pro/yorkwater/yorkwater.html"></a></div>
          <div class="horizontal upslide cbt2  leftfloat"><a class="lightbox" href="lib/pro/cbt2/cbt2.html"></a></div>
        </div>
        
        <div class="portfoliosection clearfix"> 
			<div class="fullhalf concept">
            <a class="lightbox" href="lib/pro/concept/concept.html"></a>
            </div>
        </div>

      </article>
      <span id="contactanchor"></span> </div>
    <!-- end section -->
    <div class="section last">
      <article>
        <div class="backtotop"><a href="#webdexhome">Back To Top</a></div>
        <h1 id="contact">Contact</h1>
        <p class="clearfix">Feel free to contact me at any time using the form below. You can also contact me at <a class="emailmailto" href="mailto:dexter@web-dex.com">dexter@web-dex.com</a> or <a href="lib/files/dexter_reaves_resume.pdf">download my resume</a> for all of my contact information.</p>
      </article>
    </div>
    <!-- end section --> 
    
  </div>
  <!-- end container --> 
  <span class="clearfix"> </span> </div>
<!-- end maincontent -->
<div class="relativefix"></div>
<footer class="clearfix">
  <div class="container">
    <form id="contactform" action="lib/inc/sendmail.php" class="clearfix" method="post">
      <div class="labels">
        <ol>
          <li>
            <label for="name">Name</label>
          </li>
          <li>
            <label for="email">Email</label>
          </li>
          <li>
            <label for="subject">Subject</label>
          </li>
        </ol>
      </div>
      <div class="fields">
        <ol>
          <li>
            <input type="text" id="name" name="name"  required tabindex="1"/>
          </li>
          <li>
            <input type="text" id="email" name="email"  required tabindex="2"/>
          </li>
          <li>
            <input type="text" id="subject" name="subject" required  tabindex="3" />
          </li>
        </ol>
      </div>
      <div class="message">
        <ol>
          <li>
            <label for="message">Message</label>
          </li>
          <li>
            <textarea id="message" name="message"  required tabindex="4"></textarea>
          </li>
          <li>
            <? if ($msg=="mailsent") { ?>
            <p id="submitconfirm" style="display:block">Thank you. I will contact you soon.</p>
            <? } else { ?>
            <input type="submit" id="submit" name="submit" value="submit" tabindex="5" />
            <? } ?>
            <p id="submitconfirm">Thank you. I will contact you soon.</p>
          </li>
        </ol>
      </div>
      <input type="hidden" name="url" value="url" />
    </form>
    <p class="errortext"></p>
    <span class="clearfix"></span> </div>
</footer>
</body>
</html>