<?php
$lang = isset($_COOKIE['lang']) ? $_COOKIE['lang'] : 'en';

// Load language file based on selected language
if ($lang === 'de') {
    include 'de.php';
} else {
    include 'en.php';
}

function tr($key)
{
    global $words;
    return isset($words[$key]) ? $words[$key] : $key;
}
