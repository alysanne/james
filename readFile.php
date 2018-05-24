<?php

$filename = 'Movies.xml';

$xmlFile = simplexml_load_file($filename) or die("Error loading XML file.\n");

foreach ($xmlFile->children() as $movie) {

    $movies[] = $movie;
//    foreach ($movie as $key => $value) {
//        echo ucwords($key), ": $value", PHP_EOL;
//         echo ucwords($key), ': ', $movie->$key, PHP_EOL;
//    }
//    echo PHP_EOL;
}

//var_dump($movies);
?>

<!--<html>
    <table>
        <tr>
            <td>Channel</td>
            <td>Hours</td>
        </tr>

        //<?php
//        echo "hello";
//        foreach($movies as $movie) {
//            echo '<tr>';
//            echo '<td>', $movie->actor, '</td>';
//            echo '<td>', $movie->title, '</td>';
//            echo '</tr>';
//        }
//        ?>
    </table>
</html>-->