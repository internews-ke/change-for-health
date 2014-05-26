<?php session_start(); ?>
<html>
<head>
<title>County Health Spending</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="css/stylenewsapp.css" rel="stylesheet" type="text/css"/>
<link rel="SHORTCUT ICON" href="images/favicon.png"/>

<script type="text/javascript">
<!--
function validate_required(field,alerttxt)
{
with (field)
  {
  if (value==null||value=="")
    {
    alert(alerttxt);return false;
    }
  else
    {
    return true;
    }
  }
}

function validate_form(thisform)
{
with (thisform)
  {
  if (validate_required(lstcounty,"Please select your County!")==false)
  {
  lstcounty.focus();return false;
  }
  }
  }
  </script>

</head>
<body>
<?php

include 'config2.php';
include 'opendb.php'; 

//$county=$_GET['county'];

?>

<div id="main_div">
<form id="frmcounty" name="frmcounty" method="post" action="index.php">
<div id="topdiv">
<div id="countyspending">
<span class="appheading">What is your county investing in your health?</span>
</div>

</div>
<div id="middlediv">
<div id="headericon">
<img src="images/icons/publichealth1.png" alt="Public Health"/><img src="images/icons/coins.png" alt="Coins"/>
</div>
<div id="selectcounty">
<h2>Please select a county:</h2>

     <?php
	 //$county=$_SESSION['county'];
	 if( !isset($_SESSION['county']) )
     {
	  $result = mysql_query("SELECT distinct County FROM health_spending order by County");
	  
      echo '<select name="lstcounty" >';
      while ($row = mysql_fetch_array($result)) {
	    if ($row['County'] == $_SESSION['county']) echo 'selected = "selected"';
      echo '<option value="',$row['County'],'">',$row['County'],'</option>';
	  }
       echo '</select>'; 
	   }
	   else
	   {
	   $result = mysql_query("SELECT distinct County FROM health_spending order by County");
	  
      echo '<select name="lstcounty" >';
      while ($row = mysql_fetch_array($result)) {
	  if ($row['County'] =='Narok') echo 'selected = "selected"';
      echo '<option value="',$row['County'],'">',$row['County'],'</option>';
	  }
       echo '</select>'; 
	   
	   }
	   ?>
	  <input type="submit" class="searchbutton" value="Click to view&nbsp;&raquo;" name="search" id="search" onClick="return validate_form(this)"/>
      </div>
	  </div>
	  <?php
	  
	  if(isset($_POST['search'])) {
	   
      $county=$_POST['lstcounty'];
	  
	  $_SESSION['county']=$county;
	  
	  //check for blank fields
  $empty_fields_message = "<p>Select County!";
  if(empty($county)){
	 echo $empty_fields_message;
	 exit;
	 }
	  
	  $county=mysql_real_escape_string($county);
	  //remove whitespace
	  $result = mysql_query("SELECT * from health_spending  where county ='".$county."'");
	  
	  
	  $numrows=mysql_num_rows($result);
      if ($numrows == 0)
      {
	  echo "<h4>Search result:</h4>";
      echo "<p>Sorry, your search: &quot;" . $county . "&quot; returned zero results</p>";
      exit;
      }
	  //load health spending
	  while($row = mysql_fetch_array($result))
      { 
	  echo "<p>";
	  echo "<p><span class='countyname'>$county&nbsp;County</span></p>";
	  echo "<div id='parentdiv'>";
	  echo "<div id='infodiv'>";
	  $totalpopulation="<img src='images/population.png'/>"."&nbsp;"."Total population June 2013:&nbsp;".$row['population_2013']."</br>";
	  $healthspending="<img src='images/publichealth.png'/>"."&nbsp;"."Development health spending per person: Sh&nbsp;".number_format($row['health_spending_per_person'])."</br>";
	  $percentagehealthspending="<img src='images/percentage.png'/>"."&nbsp;"."Development health spending over total budget:&nbsp;".$row['percentage_health_expenditure']."</br>";
	  echo $totalpopulation.$healthspending.$percentagehealthspending;
	  echo "</p>";
      }
	  
	  //load county allocations
	  echo "<b>Disease Burden:</b>"."<br/>";
	  $allocation = mysql_query("SELECT * from health_spending  where county ='".$county."'");
	  while($row = mysql_fetch_array($allocation))
      { 
	  echo "<p>";
	  $peopleplewithhiv="<img src='images/arvs.png'/>"."&nbsp;"."People living with HIV on ARVs:&nbsp;".number_format($row['people_living_with_hiv_on_arvs_2012'])."</br>";
	  $malariacases="<img src='images/malaria.png'/>"."&nbsp;"."Malaria cases per 100,000 people:&nbsp;".number_format($row['malaria_cases_per_100000_people_2012'])."</br>";
	  $tbprevalence="<img src='images/tuberculosis.png'/>"."TB prevalence per 100,000 people:&nbsp;".number_format($row['TB_prevalence_per_100000 people_2012'])."</br>";
	  echo "</p>";
	  echo $peopleplewithhiv.$malariacases.$tbprevalence;
	  echo "</p>";
	  echo "</div>";
	  echo "<div id='mapholder'>";
	  echo "<img src='images/counties/$county.png' alt='$county' align='center' class='countyimg'/>";
	  echo "</div>";
	  echo "</div>";
      }
	  $_SESSION['county']=$county;
	  echo "<div id=\"chartsdiv\">";
	  include 'piechart_development.php';
	  include 'columnchart_development.php';
	  echo "</div>";
	  ?>
	  <p>
   <div id="footer"><strong>Data Sources:</strong><br>
   <a href="http://www.crakenya.org/wp-content/uploads/2013/07/CRA-Revenue-Divison-Among-County-Governments.pdf" target="_blank">www.crakenya.org</a><br>
   <a href="http://www.crakenya.org/cra-2nd-generation-county-factsheets/" target="_blank">County Factsheets</a></br>	
   <a href="http://www.scribd.com/doc/160251682/CRA-County-Budgets-2013-2014" target="_blank">Commission on Revenue Allocation (CRA) report : County budgets 2013 - 2014</a><br>
   <a href="http://www.knbs.or.ke/detailed_population_results.php" target="_blank">Kenya National Bureau of Statistics, 2009 Census</a><br> 	
   <a href="http://www.measuredhs.com/pubs/pdf/FR229/FR229.pdf" target="_blank">Kenya Health Demographic Survey 2008/2009</a><br> 	
   <a href="http://data.worldbank.org/indicator/SP.POP.GROW" target="_blank">The world bank</a></br>
   <a href="http://internationalbudget.org/wp-content/uploads/brief19.pdf" target="_blank">International Budget Partnership</a>
   </div>
   </p>
	  <?php
	  }
	  ?>
   <?php include 'closedb.php'; ?>
   </form>
</div>
</body>