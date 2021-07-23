<?php
    $email  = file_get_contents("/Users/desrinaputri/Documents/TrainingLaravel/resources/views/names.json");
    $json_array = json_decode($email, true);
    for ( $i=0; $i < count(  $json_array ); $i++ ) 
          { 
            $list = $json_array[$i]['name'] . PHP_EOL;
            preg_match_all('/\b\w/', $list, $match);
            print_r($match);                
          }
?>
