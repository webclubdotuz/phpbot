<?php

$res = file_get_contents('https://jsonplaceholder.typicode.com/photos');

$res = json_decode($res);
//print_r($res);
//echo '<h1>_________________</h1>';
echo '<h3>'.$res[0]->title.'</h3>';
echo "<img src=". $res[0]->thumbnailUrl .">";
//foreach ($res as $re){
//    echo '<h1>_________________</h1>';
//    echo '<h1>'.$re->title.'</h1>';
//}
