<?php
$json_data = file_get_contents("/Users/desrinaputri/Documents/TrainingLaravel/resources/views/films.json");
$json_array = json_decode($json_data, true); 

  for ( $i=0; $i < count(  $json_array ); $i++ ) 
          { 
                echo $json_array[$i]['viewers'] . PHP_EOL;                
          } 

?>