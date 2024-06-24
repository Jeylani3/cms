<?php
// Define DS if not already defined
if (!defined('DS')) {
    define('DS', DIRECTORY_SEPARATOR);
}

// Example $parts array
$parts = ['core', 'cms', 'cms'];
// echo "<h1>" . array_pop($parts) . "</h1>";

// Imploding with DS
$path = strtolower(implode(DS, $parts));

echo '<h3>Path</h3>';
var_dump($path); // Output the resulting path
