<?php
$json_data = file_get_contents("/Users/desrinaputri/Documents/TrainingLaravel/resources/views/films.json");
$json_array = json_decode($json_data, true); 

  for ( $i=0; $i < count(  $json_array ); $i++ ) 
          { 
           if($json_array[$i]['viewers'] > '500') 
                     { 
                echo $json_array[$i]['id']; 
                echo $json_array[$i]['title'];
                echo $json_array[$i]['viewers'] . PHP_EOL;
                          }
             } 

?>