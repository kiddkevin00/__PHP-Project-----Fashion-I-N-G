<?php
// for debugging: display error or warning on the same page
// btw, it's a good practice to use var_dump($variable) to debug
ini_set('display_errors', 'On');
error_reporting(E_ALL | E_STRICT);

$hint_array[] = "So excited to try this!!";
$hint_array[] = "Let's just give it a try..";
$hint_array[] = "Hope this works..";
$hint_array[] = "Seems pretty cool!!";

$input_text = $_GET["text"];
$hint_text = "";

if ($input_text !== "") {
    $input_text = strtolower($input_text);
    $len = strlen($input_text);
    foreach ($hint_array as $hint) {
        if (stristr($input_text, substr($hint, 0, $len))) {
            if ($hint_text !== "") {
                $hint_text .= " , $hint";
            } else {
                $hint_text = $hint;
            }
        }
    }
}   
echo $hint_text !== "" ? $hint_text : "no suggestion yet..";
?>    