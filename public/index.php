<?php
// Define the autoloader function
spl_autoload_register(function ($className) {
    // Convert namespace separators to directory separators
    $classFile = str_replace('\\', '/', $className);

    // Specify the base directory for your classes
    $baseDir = dirname(__DIR__);

    // Build the full path to the class file
    $filePath = $baseDir . '/' . $classFile . '.php';

    // Check if the file exists
    if (file_exists($filePath)) {
        // Include the class file
        require_once($filePath);
    }
});
require_once dirname(__DIR__) . '/helpers/helpers.php';
require_once dirname(__DIR__) . '/routes/web.php';

//require_once '../routes/web.php';
//require_once '../helpers/helpers.php';
