<?php

declare(strict_types=1);

function words(string $str){
    $cleanedUp = preg_replace("/,/", "", $str);
    return preg_split("/\s/", $cleanedUp);
}

var_dump(words("This is a sentence")); // ["This", "is", "a", "sentence"]
var_dump(words("Hello, my name is Jessica")); // ["Hello", "my", "name", "is", "Jessica"]