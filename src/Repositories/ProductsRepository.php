<?php

require 'src/Models/Product.php';

class ProductsRepository 
{
    
    private $collection;
    
    public function __construct() 
    {
        //$this->collection = new ProductsCollection;
    }

    public function add(Product $product)
    {
        $sql = "INSERT INTO products(`id`, `name`, `brand`, `price`, `stock`, `category_id`)";
        $sql .= "VALUES(?, ?, ?, ?, ?, ?)";

        $connection = get_connection();
        $query = $connection->prepare($sql);

        $result = $query->execute([
            null,
            $product->getName(),
            $product->getBrand(),
            $product->getPrice(),
            $product->getStock(),
            $product->getCategoryId(),
        ]);

        return $connection->lastInsertId();
    }

    public function all()
    {
        $sql = "SELECT * FROM products LIMIT 1,10";
        $connection = get_connection();
        $query = $connection->query($sql, PDO::FETCH_CLASS, 'Product');
        return $query->fetchAll();
    }
    
    public function byId($id) 
    {
        $sql = "SELECT * FROM products WHERE id = :id LIMIT 1";
        $connection = get_connection();
        $query = $connection->prepare($sql);
        $query->bindValue(':id', $id);
        return $query->fetchAll();
    }
}
