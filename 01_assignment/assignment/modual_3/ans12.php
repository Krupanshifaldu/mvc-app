<?php
$array = ['Breakfast', 'Lunch', 'Dinner'];
echo implode(', ', $array);
// Breakfast, Lunch, Dinner
?>

<?php
$array = [
    'best' => 'Apple',
    'worst' => 'Pineapple',
    'good' => 'Banana'
];
echo implode('|', $array);
// Apple|Pineapple|Banana
?>