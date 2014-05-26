    <!--Load the AJAX API-->
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type="text/javascript">
    
    // Load the Visualization API and the piechart package.
    google.load('visualization', '1', {'packages':['corechart']});
      
    // Set a callback to run when the Google Visualization API is loaded.
    google.setOnLoadCallback(drawChart);
      
    function drawChart() {
      var jsonData1 = $.ajax({
          url: "getcolumnchartdata_development.php",
          dataType:"json",
          async: false
          }).responseText;
          
      // Create our data table out of JSON data loaded from server.
      var data1 = new google.visualization.DataTable(jsonData1);
	  
  var formatter = new google.visualization.NumberFormat({pattern:'###,###'} );
  formatter.format(data1,1);
  
  var formatter = new google.visualization.NumberFormat({pattern:'###,###'} );
  formatter.format(data1,2);
  
  var formatter = new google.visualization.NumberFormat({pattern:'###,###'} );
  formatter.format(data1,3);
  
  var formatter = new google.visualization.NumberFormat({pattern:'###,###'} );
  formatter.format(data1,4);
	  
      // Instantiate and draw our chart, passing in some options.
      var chart1 = new google.visualization.ColumnChart(document.getElementById('chart_div1'));
      chart1.draw(data1, {title:"Development health budget 2011-2014",hAxis: {chartArea:{left:20,top:20,width:"100%",height:"100%"},title: "Allocation in shillings",titleTextStyle: {color: '#000'}},vAxis:{title:""},width: 410, height: 300,fontName:'Century Gothic',});
    }

    </script>
  <!--Div that will hold the pie chart-->
    <div id="chart_div1"></div>
  
