<?php
    $email  = file_get_contents("/Users/desrinaputri/Documents/TrainingLaravel/resources/views/emails.json");

    $username = strstr($email, '@', true);
    echo $username."\n";
?>