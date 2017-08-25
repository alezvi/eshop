<?php 

class ProductsRepository 
{
    
    private $collection;
    
    public function __construct() 
    {
        $this->collection = new ProductsCollection;
    }
    
    public function byId($id) 
    {
        return array_filter($this->collection, function ($item) use ($id) {
            if (is_string($id)) {
                return $item->id == $id;
            }
            
            if (is_array($id)) {
                return array_key_exists($item->id, $id);
            }
        });
    }
}
