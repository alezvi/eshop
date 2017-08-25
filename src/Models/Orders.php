<?php 

class Order 
{
    use UseTimestamps;
    
    /**
     * Minimum amount by order
     */
    public static BUY_MINIMUM = 100;
    
    /**
     * Max amount by order
     */
    public static BUY_LIMIT = 9999.99;
    
    /**
     * Who created this order
     * 
     * @var int
     */
    private $customerId;
    
    /**
     * Products added to this order
     * 
     * @var int
     */
    private $products;
    
    public function setCustomerId(int $id) 
    {
        $this->customerId = $id;
        
        return $this;
    }
    
    public function getCustomerId() 
    {
        return $this->customerId;
    }
    
    public function addProduct(Product $product) 
    {
        $this->products[] = $product;
        
        return $this;
    }
    
    public function getSubtotal() 
    {
        $cols = array_column('price', $this->products);
        
        return floor(array_sum($cols), 2);
    }
}
