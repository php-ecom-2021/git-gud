<?php

$content = file_get_contents('https://jsonplaceholder.typicode.com/posts');
$data = json_decode($content, true);
var_dump($data);
$id = array_map(function($item){
    return $item['id'];
}, $data);
var_dump($id);


$totals = [
    'Tax',
    'Freight & Handling',
    'Subtotal',
    'Grand total'
];
array_swap($Totals, 0,1);
$first = time();

sleep(10);
var_dump(time() - $first);

function array_swap(&$array,$swap_a,$swap_b) {
    list(
        $array[$swap_a],
        $array[$swap_b]
        ) = [
        $array[$swap_b],
        $array[$swap_a]
    ];
}