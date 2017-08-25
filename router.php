<?php 

/**
 * This is very basic router for our application.
 * 
 * It contains an array with GET and POST routes.
 * 
 */

$routes = [
    
    /**
     * Routes for get method
     */
     
    'get' => [
        'customers',
        'products/index',
        'order/:id',
        'order/:id/products',
    ],
    
    /**
     * Routes for post method
     */
     
    'post' => [
        'customers/add',
        'customers/edit/:id',
        'orders',
        'orders/create',
        'orders/edit/:id',
        'products/add' => [ 'Product', 'products/add' ],
        'products/edit/:id',
    ]
    
];

function get_model_and_view()
{
    global $routes;

    $allowedMethods = ['get', 'post'];
    
    $friendlyRoute = str_replace('route=', '', $_SERVER['QUERY_STRING']);
    
    $paths = explode('/', $friendlyRoute);
    
    if ('post' === strtolower($_SERVER['REQUEST_METHOD'])) {
        if (array_key_exists($_GET['route'], $routes['post'])) {
            $modelname = 'Models\\' . $routes['post'][$_GET['route']][0];
            $model = new $modelname;
            require $routes['post'][$_GET['route']][1];
        }
        
        if ($routes['get']) {
            return 'yes';
        }
        
        throw new Exception('The given route does not exists', 1);
    }
}
