<?php
    /* Your Database Name */
    $dbname = 'chart';

    /* Your Database User Name and Passowrd */
    $username = 'root';
    $password = 'root';

    try {
      /* Establish the database connection */
      $conn = new PDO("mysql:host=localhost;dbname=$dbname", $username, $password);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      /* select all the weekly tasks from the table googlechart */
      $result = $conn->query('SELECT * FROM googlechart');


      $rows = array();
      $table = array();
      $table['cols'] = array(

        // Labels for your chart, these represent the column titles.
        /* 
            note that one column is in "string" format and another one is in "number" format 
            as pie chart only required "numbers" for calculating percentage 
            and string will be used for Slice title
        */

        array('label' => 'Weekly Task', 'type' => 'string'),
        array('label' => 'Percentage', 'type' => 'number')

    );
        /* Extract the information from $result */
        foreach($result as $r) {

          $temp = array();

          // the following line will be used to slice the Pie chart

          $temp[] = array('v' => (string) $r['weekly_task']); 

          // Values of each slice

          $temp[] = array('v' => (int) $r['percentage']); 
          $rows[] = array('c' => $temp);
        }

    $table['rows'] = $rows;

    // convert data into JSON format
    $jsonTable = json_encode($table);
    echo $jsonTable;
    } catch(PDOException $e) {
        echo 'ERROR: ' . $e->getMessage();
    }

    ?>