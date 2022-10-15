<?php

//print
$user_data = $_POST;


//file location
$csv_file = "userdata.csv";

//open file
$handle = fopen($csv_file, 'a');

//write/save into file
fputcsv($handle, $user_data);

//close file
fclose($handle);

//prints data to user
print_r($user_data);


?>