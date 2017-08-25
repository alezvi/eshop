<?php 

require 'config/dev.php';
require 'helpers.php';
require 'router.php';

switch ($_GET['route']) {

    case 'customers':
        view('customers/index', [
            'customers' => []
        ]);
        break;

    case 'orders':
        view('orders/index', [
            'orders' => []
        ]);
        break;

    case 'products':
        view('products/index', [
            'products' => []
        ]);
        break;

    case 'products/add':
        view('products/add', [
            'product' => $_POST['product'] ?? []
        ]);
        break;

    default :
        view('index');

}