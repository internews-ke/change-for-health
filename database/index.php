<html>
<head>
<title>Change for Health</title>
<link href="css/style.css" rel="stylesheet" type="text/css"/>
<link rel="SHORTCUT ICON" href="images/favicon.png"/>

<script type="text/javascript">var switchTo5x=true;</script>
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher: "c2411116-6186-46f0-8c07-6f02ba2cd676", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>

<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/lightbox-2.6.min.js"></script>
<link href="css/lightbox.css" rel="stylesheet" />

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-45600934-1', 'datascribe.co.ke');
  ga('send', 'pageview');

</script>

<script type="text/javascript" src="lightbox/jquery.js"></script>
<script type="text/javascript" src="lightbox/html5lightbox.js"></script>

<script type='text/javascript'>

function updateTxt(lstmap)
  {  
    var lstmap = document.getElementById(lstmap).value;  
	//alert(lstmap);
	document.location = "home.php?selected="+lstmap;
}    
</script>
</head>
<body>
<div id="main_div1">
<div id="regionholder">
<div id="headline"></div>
<div id="banner"><img src="images/changeforhealthbanner.png" alt="Change for Health"/></div>

<span class='st_sharethis_hcount' displayText='ShareThis'></span>
<span class='st_facebook_hcount' displayText='Facebook'></span>
<span class='st_twitter_hcount' displayText='Tweet'></span>
<span class='st_linkedin_hcount' displayText='LinkedIn'></span>
<span class='st_pinterest_hcount' displayText='Pinterest'></span>
<span class='st_email_hcount' displayText='Email'></span>

<div id="maincontainer">

<div id="leftsidebar">
<div id="story1"></div>
<div id="story2"></div>
<div id="story3"></div>
<div id="story4"></div>
<div id="story5"></div>
</div>

<div id="rightsidebar">

<div id="newsapp">
<?php include "indexapp.php" ?>
</div>

<div id="middlediv">
<div id="map">
<?php include "healthspendingmapped/indexformap.php"; ?>
</div>
<div id="maptext"></div>
</div>
</div>
<!--end main container-->
</div>

<div id="bottombanner">
<div id="topheader">Multimedia Videos</div>
<div id="Video1"><div class="image_tn"><a href="http://www.youtube.com/embed/DmZKxivVD5A" class="html5lightbox" title=""><img src="images/privateweight.jpg"></a></div></div>
<div id="Video1"><div class="image_tn"><a href="http://www.youtube.com/embed/1kSOcolpwpk" class="html5lightbox" title=""><img src="images/mydoctor.jpg"></a></div></div>
<div id="Video1"><div class="image_tn"><a href="http://www.youtube.com/embed/IB-oLIizTCE" class="html5lightbox" title=""><img src="images/noamputation.jpg"></a></div></div>
<div id="Video1"><div class="image_tn"><a href="http://www.youtube.com/embed/XJrYEymhYeY" class="html5lightbox" title=""><img src="images/storyliving.jpg"></a></div></div>
<div id="Video1"><div class="image_tn"><a href="http://www.youtube.com/embed/1kSOcolpwpk" class="html5lightbox" title=""><img src="images/mydoctor.jpg"></a></div></div>
<div id="Video1"><div class="image_tn"><a href="http://www.youtube.com/embed/DmZKxivVD5A" class="html5lightbox" title=""><img src="images/privateweight.jpg"></a></div></div>
</div>
<div id="bottomlastbanner">Click to view a bigger image:<a href="images/healthbig.jpg" data-lightbox="image-1" title=""><img src="images/healththumb.jpg"/></a></div>
<span class='st_sharethis_hcount' displayText='ShareThis'></span>
<span class='st_facebook_hcount' displayText='Facebook'></span>
<span class='st_twitter_hcount' displayText='Tweet'></span>
<span class='st_linkedin_hcount' displayText='LinkedIn'></span>
<span class='st_pinterest_hcount' displayText='Pinterest'></span>
<span class='st_email_hcount' displayText='Email'></span>
<div id="builtby">Built by <a href="mailto:paul@datascribe.co.ke?Subject=Data" target="_top">
Paul Wafula</a>,&nbsp;<a href="mailto:dan@datascribe.co.ke?Subject=News%20App" target="_top">Dan Cheseret</a>&nbsp;and <a href="https://www.facebook.com/mike.nyams?fref=ts">#dataJournalismKE/graphics/2013</a></div>
</body>
<html>