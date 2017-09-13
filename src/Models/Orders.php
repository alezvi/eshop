<?php 

class Order 
{
    use UseTimestamps;
    
    /**
     * Minimum amount by order
     */
    public static $BUY_MINIMUM = 100;
    
    /**
     * Max amount by order
     */
    public static $BUY_LIMIT = 9999.99;
    
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

	/**
	 * Set the customer
	 *
	 * @param int $id
	 *
	 * @return $this
	 */
    public function setCustomerId(int $id) 
    {
        $this->customerId = $id;
        
        return $this;
    }

	/**
	 * Get the customer who generates the order
	 *
	 * @return int
	 */
    public function getCustomerId() : int
    {
        return $this->customerId;
    }

	/**
	 * Add product to the order
	 *
	 * @param Product $product
	 *
	 * @return $this
	 */
    public function addProduct(Product $product) : Order
    {
        $this->products[] = $product;
        
        return $this;
    }

	/**
	 * Get the subtotal
	 *
	 * @return float
	 */
    public function getSubtotal() : float
    {
        $cols = array_column('price', $this->products);
        
        return (float) floor(array_sum($cols), 2);
    }
}
