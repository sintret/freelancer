<?php

/*
 * Function autoload in here for example
 * You just modify if any
 * autoload all
 */

require(__DIR__ . '/vendor/autoload.php');

// Example to auto-load class files from multiple directories using the SPL_AUTOLOAD_REGISTER method.
// It auto-loads any file it finds starting with class.<classname>.php (LOWERCASE), eg: class.from.php, class.db.php
spl_autoload_register(function($class_name) {

    // Define an array of directories in the order of their priority to iterate through.
    $dirs = array(
        'models/', // Project models
        'controllers/', // Controllers if any
        'components/', // Componennt if any
    );

    // Looping through each directory to load all the class files. It will only require a file once.
    // If it finds the same class in a directory later on, IT WILL IGNORE IT! Because of that require once!
    foreach ($dirs as $dir) {
        $filename = $dir . $class_name . '.php';
        if (file_exists($filename)) {
            require_once($filename);
            return;
        }
    }
});
