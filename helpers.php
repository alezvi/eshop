<?php 

/**
 * Basic autoload function
 * 
 * @param string $file
 */
spl_autoload_register(function ($file) {
    
    $filepath = __DIR__ . '/src/' . $file . '.php';
    
    if (is_readable($filepath)) {
        require $filepath;
    }
    
});

/**
 * Try connect to database
 * 
 * @param string $name Connection name or alias
 * 
 * @return PDO Instance of PDO class
 * 
 * @throws PDOException If cannot connect
 */

if (! function_exists('get_connection')) {
    function get_connection($name = 'default') {
        
        try {
            return new PDO('mysql:dbname=eit;host=127.0.0.1', 'root', '');
        } catch (PDOException $e) {
            throw new Exception($e->getMessage(), 1);
        }

    }
}

/**
 * Get the full name for the view
 *
 * @param string $name
 *
 * @return string
 */
if (! function_exists('view')) {
    function view($name, $data = []) {
        $path = 'views/' . $name . '.php';

        if (! is_readable($path)) {
            throw new Exception('The view file does not exists or is not readable.');
        }

        extract($data);

        require $path;
    }
}