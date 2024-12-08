<?php
session_start();

// Define constants
// define("PROOT", dirname(__DIR__)); // Points to the project root directory
define("DS", DIRECTORY_SEPARATOR);
define("PROOT", dirname(__DIR__). DS . 'cms' );
echo "PROOT: " . PROOT . "<br>";



// Autoloader
spl_autoload_register(function($classname) {
    $parts = explode('\\', $classname);

    var_dump($parts);
  
    $class = end($parts);
    
    echo '<h1> file name ' . array_pop($parts) . '</h1>';
    $path = strtolower(implode(DS, $parts)); 
  // $path = strtolower(array_pop($parts));
    echo '<h3>Path one</h3>' ;
    var_dump($path);
    $path = PROOT . DS . $path . DS . $class . '.php';
    echo '<h3>Full Path</h3>' ;
    var_dump($path);   
    // Include the file if it exists
    if (file_exists($path)) {
     //  require_once $path;
        include($path);
    } else {
        echo "Class file not found: " . $path . "<br>";
    }
});

use Core\Config;

// Access configuration settings
$dbHost = Config::get('db_host');
// Access configuration settings
$dbName = Config::get('db_name');

// Output the configuration to verify
echo "</br>Database Host: <br>";
echo "Database Host: " . $dbHost . "<br>";

echo "</br>Database Name: <br>";
echo "Database Name: " . $dbName. "<br>";
