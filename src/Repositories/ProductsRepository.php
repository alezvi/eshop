<?php

require 'src/Models/Product.php';

class ProductsRepository 
{
    
    private $collection;
    
    public function __construct() 
    {
        //$this->collection = new ProductsCollection;
    }

	/**
	 * Store new product.
	 *
	 * @param Product $product
	 *
	 * @return string
	 */
    public function add(Product $product)
    {
	    $fields = ['id', 'name', 'brand', 'price', 'stock', 'category_id'];

	    $columns = implode(',', $fields);

	    $marks = '?' . str_repeat(',?', count($fields)-1);

	    $sql = "INSERT INTO products({$columns}) VALUES({$marks})";

        $connection = get_connection();

        $query = $connection->prepare($sql);

        $query->execute([
            null,
            $product->getName(),
            $product->getBrand(),
            $product->getPrice(),
            $product->getStock(),
            $product->getCategoryId(),
        ]);

        return $connection->lastInsertId();
    }

	/**
	 * Get all products
	 *
	 * @param $options array
	 *
	 * @return array
	 */
    public function all(array $options = ['limit' => '1,10'])
    {
        $sql = "SELECT * FROM products LIMIT " . $options['limit'];
        $connection = get_connection();
        $query = $connection->query($sql, PDO::FETCH_CLASS, 'Product');
        return $query->fetchAll();
    }

	/**
	 * Find product by id attribute.
	 *
	 * @param $id
	 *
	 * @return array
	 */
    public function byId($id) 
    {
        $sql = "SELECT * FROM products WHERE id = :id LIMIT 1";
        $connection = get_connection();
        $query = $connection->prepare($sql);
        $query->bindValue(':id', $id);
        return $query->fetchAll();
    }
}
