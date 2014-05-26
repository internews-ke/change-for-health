<html>
<head>
<title>Health Spending in Kenya mapped</title>
<link href="css/stylemap.css" rel="stylesheet" type="text/css"/>
<link rel="SHORTCUT ICON" href="images/favicon.png"/>
<script type='text/javascript'>

function updateTxt(lstmap)
  {  
    var lstmap = document.getElementById(lstmap).value;  
	//alert(lstmap);
	document.location = "healthspendingmapped/indexmapped.php?selected="+lstmap;
}    
</script>
</head>
<body>
<div id="main_div">
<div id="regionholder">
<div id="headline">County healthcare mapped</div>
<strong>Select a map:&nbsp;</strong><select name="lstmap" id="lstmap" onChange="updateTxt('lstmap')">
  <option value="health_development" selected="selected">Development health spending</option>
  <option value="medical_practitioners">Where health professionals are</option>
  <option value="health_facilities">Where hospitals are</option>
</select>
<br/>
<p></p>
</div>
<iframe width="990" height="520px" scrolling="no" frameborder="no" src="https://www.google.com/fusiontables/embedviz?q=select+col2%3E%3E1+from+1qadz_G0aSUzn4QL2daogs6tu8zfxC5FWiKFauNU&amp;viz=MAP&amp;h=false&amp;lat=0.2365966515069964&amp;lng=38.69336617968747&amp;t=1&amp;z=6&amp;l=col2%3E%3E1&amp;y=2&amp;tmplt=2&amp;hml=GEOCODABLE"></iframe>
</div>
</body>
<html>