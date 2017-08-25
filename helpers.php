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

if (! function_exists('getConnection')) {
    function getConnection($name = 'default') {
        
        try {
            return new PDO('mysql:dbname=ecommerce;host=127.0.0.1', 'root', '');
        } catch (PDOException $e) {
            throw new Exception($e->getMessage(), 1);
        }

    }
}
