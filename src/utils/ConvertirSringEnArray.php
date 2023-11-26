<?php

function ConvertirSringEnArray($string) {
    // string est sous format {"a","b"}
    // On remplace { par [ et } par ]
    //resultat : ["a","b"]
    $arr = str_replace(['{', '}'], ['[', ']'], $string);

    // Decoder en un tableau (array) PHP et renvoyer le resultat
    return json_decode($arr, true);
}

?>

