<?php 

class Product 
{

    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $brand;

    /**
     * @var int
     */
    private $stock;

    /**
     * @var float
     */
    private $price;

    /**
     * @var string
     */
    private $photo;

    /**
     * @var int
     */
    private $categoryId;

    /**
     * @param int $id
     * @return Product
     */
    public function setId(int $id) : Product
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @param string $brand
     * @return Product
     */
    public function setBrand(string $brand) : Product
    {
        $this->brand = $brand;
        return $this;
    }

    /**
     * @param string $name
     * @return Product
     */
    public function setName(string $name) : Product
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @param int $stock
     * @return Product
     */
    public function setStock(int $stock = 0) : Product
    {
        $this->stock = $stock;
        return $this;
    }

    /**
     * @param float $price
     * @return Product
     */
    public function setPrice(float $price = .0) : Product
    {
        $this->price = $price;
        return $this;
    }

    /**
     * @param string $photo
     * @return Product
     */
    public function setPhoto(string $photo) : Product
    {
        $this->photo = $photo;
        return $this;
    }

    /**
     * @param $id
     * @return Product
     */
    public function setCategoryId($id) : Product
    {
        $this->categoryId = $id;
        return $this;
    }

    /**
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getBrand() : string
    {
        return $this->brand;
    }

    /**
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getStock() : int
    {
        return (int) $this->stock;
    }

    /**
     * @return float
     */
    public function getPrice() : float
    {
        return (float) $this->price;
    }

    /**
     * @return string
     */
    public function getPhoto() : string
    {
        return $this->photo ?? '';
    }

    /**
     * @return int
     */
    public function getCategoryId() : int
    {
        return $this->categoryId;
    }
    
}
