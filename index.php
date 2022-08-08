<?php

// $myfile = fopen("newfile.txt", "w") or die("Unable to open file!");

// $arr = [
//     [
//         "name" => "Amin",
//         "age" => "14",
//     ],
//     [
//         "name" => "Aman",
//         "age" => "16",
//     ],
//     [
//         "name" => "Abu",
//         "age" => "18",
//     ],

// ];

// $data = json_encode($arr);

// fwrite($myfile, $data);
// fclose($myfile);

$myfile = fopen("newfile.txt", "r") ;

$data = json_decode(fread($myfile, filesize("newfile.txt")));


var_dump($data[0]->name);


?>