<?php 
$_SESSION['county']; 
$county=$_SESSION['county']; 
 ?>
<?php

   include 'config2.php';
   include 'opendb.php';
   
  $result = mysql_query("SELECT * FROM development_budget_piechart where county='$county'");

  if (!$result) {
    echo 'Could not run query: ' . mysql_error();
    exit;
}
$row = mysql_fetch_assoc($result);

$county=$row['county']; 
$percentage=$row['health_spending'];
$percentage1=$row['other_development'];  

//give variables to the labels
$countylabel='county';
$percentagelabel1='percentage1';
$percentagelabel2='percentage2';


$countylabel='"'.$countylabel.'"';
$percentagelabel1='"'.$percentagelabel1.'"';
$percentagelabel2='"'.$percentagelabel2.'"';


$county='"'.$county.'"';

$label='"label"';
$type='"type"';
$string='"string"';
$number='"number"';
$cols='"cols"';
$rows='"rows"';
$c='"c"';
$v='"v"';
$percentagecol1='"Health Spending"';
$percentagecol2='"Other Development"';

//generate json columns
 $group1="{".$label.":".$countylabel.",".$type.":".$string."}".",";
 $group2="{".$label.":".$percentagelabel1.",".$type.":".$number."}".",";
 $group3="{".$label.":".$percentagelabel2.",".$type.":".$number."}";

 
 //generate rows 
 $row1="{".$c.":"."["."{".$v.":".$percentagecol1."}".","."{".$v.":".$percentage."}"."]"."}".",";
 $row2="{".$c.":"."["."{".$v.":".$percentagecol2."}".","."{".$v.":".$percentage1."}"."]"."}";
 
 $myjsonrows='"rows"'.":"."[".$row1.$row2."]";
 $myjsoncols=$cols.":"."[".$group1.$group2.$group3."]".",";
 $jsonTable="{".$myjsoncols.$myjsonrows."}";


// convert data into JSON format
$jsonTable = json_encode($jsonTable);

?>


<html>
  <head>
    <!--Load the Ajax API-->
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script type="text/javascript">

    // Load the Visualization API and the piechart package.
    google.load('visualization', '1', {'packages':['corechart']});

    // Set a callback to run when the Google Visualization API is loaded.
    google.setOnLoadCallback(drawChart);

    function drawChart() {

      // Create our data table out of JSON data loaded from server.
      var data = new google.visualization.DataTable(<?=$jsonTable?>);
      var options = {
           title: 'Development Budget',
          is3D: 'false',
          width: 600,
          height: 300
        };
      // Instantiate and draw our chart, passing in some options.
      // Do not forget to check your div ID
	  var formatter = new google.visualization.NumberFormat({pattern:'###,###'} );
  formatter.format(data,1);
  
  var formatter = new google.visualization.NumberFormat({pattern:'###,###'} );
  formatter.format(data,2);
  
 var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
      chart.draw(data, {chartArea:{left:20,top:60,width:"100%",height:"100%"},title:"Health share of development budget",hAxis: {titleTextStyle: {color: '#000'}},width: 300, height: 300,fontName:'Century Gothic'});
    }
    </script>
  </head>

  <body>
    <!--this is the div that will hold the pie chart-->
    <div id="chart_div"></div>
  </body>
</html>