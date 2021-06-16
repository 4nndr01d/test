<?php

$string = "Вот дом,
Который построил Джек.
А это пшеница,
Которая в темном чулане хранится
В доме,
Который построил Джек.
А это веселая птица-синица,
Которая часто ворует пшеницу,
Которая в темном чулане хранится
В доме,
Который построил Джек.";

preg_match_all("/\S+\b/ui", $string, $out);

$arr = [];

foreach ($out[0] as $word){
    $word = mb_strtolower($word);
    if(!key_exists($word, $arr)){
        $arr[$word] = 1;
    }else{
        $arr[$word] = $arr[$word] + 1;
    }
}

asort($arr);
$result = array_slice($arr, -5, count($arr));
print_r($result);