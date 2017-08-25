<?php 

require 'config/dev.php';
require 'helpers.php';
require 'router.php';

get_model_and_view();

$products = [];

include view('products/add');