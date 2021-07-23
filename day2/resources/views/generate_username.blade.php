<?php
    $email  = file_get_contents("/Users/desrinaputri/Documents/TrainingLaravel/resources/views/emails.json");
    $json_array = json_decode($email, true);
    for ( $i=0; $i < count(  $json_array ); $i++ ) 
          { 
            $list = $json_array[$i]['email'] . PHP_EOL;
            $username2 = strstr($list, '@', true);
            echo $username2."\n";                
          }
?>