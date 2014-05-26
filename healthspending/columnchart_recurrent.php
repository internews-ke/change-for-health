
    <!--Load the AJAX API-->
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type="text/javascript">
    
    // Load the Visualization API and the piechart package.
    google.load('visualization', '1', {'packages':['corechart']});
      
    // Set a callback to run when the Google Visualization API is loaded.
    google.setOnLoadCallback(drawChart);
      
    function drawChart() {
      var jsonData3 = $.ajax({
          url: "getcolumnchartdata_recurrent.php",
          dataType:"json",
          async: false
          }).responseText;
          
      // Create our data table out of JSON data loaded from server.
      var data3 = new google.visualization.DataTable(jsonData3);
	  
  var formatter = new google.visualization.NumberFormat({pattern:'###,###'} );
  formatter.format(data3,1);
  
  var formatter = new google.visualization.NumberFormat({pattern:'###,###'} );
  formatter.format(data3,2);
  
  var formatter = new google.visualization.NumberFormat({pattern:'###,###'} );
  formatter.format(data3,3);
  
  var formatter = new google.visualization.NumberFormat({pattern:'###,###'} );
  formatter.format(data3,4);
	  
      // Instantiate and draw our chart, passing in some options.
      var chart3 = new google.visualization.BarChart(document.getElementById('chart_div3'));
      chart3.draw(data3, {title:"Indicative County Budgetary Allocation - Recurrent",hAxis: {title: "Allocation in Ksh.",titleTextStyle: {color: '#000'}},vAxis:{title:"County"},width: 600, height: 300,fontName:'Century Gothic'});
    }

    </script>
  <!--Div that will hold the pie chart-->
    <div id="chart_div3"></div>
  
