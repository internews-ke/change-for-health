<html>
<head>
<title>Change for Health</title>
<link href="../css/style.css" rel="stylesheet" type="text/css"/>
<link rel="SHORTCUT ICON" href="../images/favicon.png"/>

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

<script type="text/javascript" src="../lightbox/jquery.js"></script>
<script type="text/javascript" src="../lightbox/html5lightbox.js"></script>

<script type='text/javascript'>

function updateTxt(lstmap)
  {  
    var lstmap = document.getElementById(lstmap).value;  
	//alert(lstmap);
	document.location = "indexmapped.php?selected="+lstmap;
}    
</script>
</head>
<body>
<div id="main_div1">
<div id="regionholder">
<div id="headline"></div>
<div id="banner"><img src="../images/changeforhealthbanner.png" alt="Change for Health"/></div>

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


<div id="main_div">
<div id="regionholder">
<?php $selected = $_GET['selected']; ?>
<div id="headline">County healthcare mapped</div>
<strong>Select a map:&nbsp;</strong>
<select name="lstmap" id="lstmap"  onChange="updateTxt('lstmap')">
  <option value="health_development" <?php if ($selected=='health_development'){ echo 'selected="selected"';} ?>>Development health spending</option>
  <option value="medical_practitioners" <?php if ($selected=='medical_practitioners'){ echo 'selected="selected"';}?>>Where health professionals are</option>
  <option value="health_facilities" <?php if ($selected=='health_facilities'){ echo 'selected="selected"'; }?>>Where hospitals are</option>
</select>
<br/>
<p></p>
</div>
<?php 
if ($selected=='medical_practitioners'){
?>
<iframe width="990" height="520" scrolling="no" frameborder="no" src="https://www.google.com/fusiontables/embedviz?q=select+col2%3E%3E1+from+1qadz_G0aSUzn4QL2daogs6tu8zfxC5FWiKFauNU&amp;viz=MAP&amp;h=false&amp;lat=0.06115554533769799&amp;lng=38.74256051562497&amp;t=1&amp;z=6&amp;l=col2%3E%3E1&amp;y=3&amp;tmplt=3&amp;hml=GEOCODABLE"></iframe>
<?php
}
?>

<?php
if ($selected=='health_development'){
?>
<iframe width="990" height="520" scrolling="no" frameborder="no" src="https://www.google.com/fusiontables/embedviz?q=select+col2%3E%3E1+from+1qadz_G0aSUzn4QL2daogs6tu8zfxC5FWiKFauNU&amp;viz=MAP&amp;h=false&amp;lat=0.2365966515069964&amp;lng=38.69336617968747&amp;t=1&amp;z=6&amp;l=col2%3E%3E1&amp;y=2&amp;tmplt=2&amp;hml=GEOCODABLE"></iframe>
<?php
}
?>

<?php
if ($selected=='health_facilities'){
?>
<iframe width="990" height="520" scrolling="no" frameborder="no" src="https://www.google.com/fusiontables/embedviz?q=select+col2%3E%3E1+from+1qadz_G0aSUzn4QL2daogs6tu8zfxC5FWiKFauNU&amp;viz=MAP&amp;h=false&amp;lat=0.017210244191001364&amp;lng=38.01868356249997&amp;t=1&amp;z=6&amp;l=col2%3E%3E1&amp;y=5&amp;tmplt=6&amp;hml=GEOCODABLE"></iframe>
<?php
}
?>
</div>


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