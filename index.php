<?php
// Get the browser language from the HTTP_ACCEPT_LANGUAGE header
$browser_language = $_SERVER['HTTP_ACCEPT_LANGUAGE'];

echo($browser_language);

// Split the language string into an array of language codes
$languages = explode(',', $browser_language);

// Check if the user prefers Hebrew or Russian
if (in_array('he', $languages)) {
    // Redirect to the Hebrew dictionary
    header('Location: https://photoartisrael.com/he');
    exit;
} else if (in_array('ru', $languages)) {
    // Redirect to the Russian dictionary
    header('Location: https://photoartisrael.com/ru');
    exit;
} else {
    // Default to Hebrew if no preferred language is detected
    header('Location: https://photoartisrael.com/he');
    exit;
}
?>
