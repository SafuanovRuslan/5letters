<?php
$words = file_get_contents('words.json');
$words = json_decode($words);

if (in_array($_GET['word'], $words)) {
    echo '{"result": "OK"}';
} else {
    echo '{"result": null}';
}