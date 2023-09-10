<?php
$users = [
    "Kaba" => 2007,
    "Azizova" => 2010,
    "Elhova" => 2008,
    "Vinnikov" => 2006
];

ksort($users);
print_r($users);

sort($users);
print_r($users);

asort($users);
print_r($users);

