<?php session_start(); 
$_SESSION['county']; 
$county=$_SESSION['county']; 
?>
 <?php
    /* Your Database Name */
    $dbname = 'health_news_apps';

    /* Your Database User Name and Passowrd */
    $username = 'root';
    $password = 'root';

    try {
      /* Establish the database connection */
      $conn = new PDO("mysql:host=localhost;dbname=$dbname", $username, $password);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	  $county=mysql_real_escape_string($county);
      /* select all the weekly tasks from the table googlechart */
      $result = $conn->query("SELECT * FROM recurrent_budget where county='$county'");
	  
      
      $rows = array();
      $table = array();
      $table['cols'] = array(

        // Labels for your chart, these represent the column titles.
        /* 
            note that one column is in "string" format and another one is in "number" format 
            as pie chart only required "numbers" for calculating percentage 
            and string will be used for Slice title
        */

        array('label' => 'County', 'type' => 'string'),
        array('label' => '2010/11', 'type' => 'number'),
		array('label' => '2011/12', 'type' => 'number'),
		array('label' => '2012/13', 'type' => 'number'),
		array('label' => '2013/14', 'type' => 'number')

    );
        /* Extract the information from $result */
        foreach($result as $r) {

          $temp = array();

          // the following line will be used to slice the Pie chart

          $temp[] = array('v' => (string) $r['county']); 

          // Values of each slice

          $temp[] = array('v' => (string) $r['2010_11']); 
		  $temp[] = array('v' => (string) $r['2011_12']); 
		  $temp[] = array('v' => (string) $r['2012_13']); 
		  $temp[] = array('v' => (string) $r['2013_14']); 
          $rows[] = array('c' => $temp);
        }

    $table['rows'] = $rows;

    // convert data into JSON format
    $jsonTable = json_encode($table);
    echo $jsonTable;
    } catch(PDOException $e) {
        echo 'ERROR: ' . $e->getMessage();
    }
    //header("location:columnchart.php");
    ?>