<?php

$json_data = file_get_contents("/Users/desrinaputri/Documents/TrainingLaravel/resources/views/bill.json");
$json_array = json_decode($json_data, true); 

      $total = 0;
      foreach ($json_array as $key => $value) {
                  
            $total += $value['price'];

            echo "$key: $total\n";
      }
      echo "<br>";
      echo "Total Bill adalah: $total";

?>