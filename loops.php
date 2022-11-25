<?php

$charToDisplay = "#";

/** Drawing half of a tree */
for($i = 0; $i < 13; $i++) {
    for($j = 0; $j < ($i + 1); $j++) {
        echo $charToDisplay;
    }
    echo PHP_EOL;
}

$i = 0;

while($i < 15) {
    echo $i.PHP_EOL;
    $i++;
}