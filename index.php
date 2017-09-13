<?php
session_start();

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
        require 'src/Repositories/ProductsRepository.php';
        $repo = new ProductsRepository();

        view('products/index', [
            'products' => $repo->all()
        ]);
        break;

    case 'products/add':
        require 'src/Repositories/ProductsRepository.php';
        $repo = new ProductsRepository();
        $product = new Product();

        $product->setName('LCD 24 pulgadas');
        $product->setStock(20);
        $product->setPrice(899);
        $product->setBrand('Phillips');
        $product->setCategoryId(7);
        $product->setPhoto('no-image.jpg');

        $id = $repo->add($product);

        if (is_int($id)) {
            $_SESSION['flash'] = 'El producto ha sido guardado!';
            header('location: route=products');
        }

        view('products/add', [
            'product' => $_POST['product'] ?? []
        ]);
        break;

    case 'products/view':


        break;

    default :
        view('index');

}