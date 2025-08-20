<?php
$array = [10, 5, 20, 15, 30, 25];

$uniqueSorted = array_unique($array);
rsort($uniqueSorted);


$secondMax = $uniqueSorted[1] ?? null;

echo "Second maximum: " . $secondMax; 
?>