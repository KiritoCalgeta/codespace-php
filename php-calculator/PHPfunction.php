<?php
function replaceVowelsWithX($str) {
    $vowels = array('a', 'A', 'e', 'E', 'i', 'I', 'o', 'O', 'u', 'U');
    return str_replace($vowels, 'X', $str);
}

echo replaceVowelsWithX("Hello world!");

?>