<?php
require 'connection.php';
$results = file_get_contents("txt.html");
$results = preg_split('/<a/', $results);
for($i=1;$i<count($results);$i++){
        preg_match('/class=".*">(.*)<\/a>/',$results[$i],$title);
        preg_match('/class=".*"\shref="(.*)">.*<\/a>/',$results[$i],$link);
        echo 'Title : '.$title[1].'<br>Link : '.$link[1].'<br>';
        $query = 'INSERT INTO `e-resources` (title,link) VALUES (\''.$title[1].'\',\''.$link[1].'\')';
        if(mysqli_query($con,$query)){
                continue;
        }else{
                echo '<br>JaiNumber:'.$i.' - '.mysqli_error($con).' <br>';
        }
}
?>