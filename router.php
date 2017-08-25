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
        'products/add',
        'products/edit/:id',
    ]
    
];

function getModelAndView() 
{
    $allowedMethods = ['get', 'post'];
    
    $friendlyRoute = str_replace('route=', '', $_SERVER['QUERY_STRING']);
    
    $paths = explode('/', $friendlyRoute);
    
    if ('post' === $_SERVER['REQUEST_METHOD']) {
        if ($routes['post']) {}
        
        if ($routes['get']) {}
        
        throw new Exception('The given route does not exists', 1);
    }
}
