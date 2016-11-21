<?php
$citiess = ['Tokyo', 'Mexico City', 'New York City', 'Mumbai', 'Seoul', 'Shanghai', 'Lagos', 'Buenos Aires', 'Cairo', 'London'];
$cities = sort($citiess);
$arryLenght = count($citiess);

for ($i = 0; $i < $arryLenght;$i++){
 $upper = $citiess[$i];
    $print = strtoupper($upper);
    echo $print;
    echo "</br>";

};
?>