<?php 

class Product 
{
    
    private $id;
    private $name;
    private $brand;
    private $stock;
    private $price;
    private $photo;
    private $categoryId;
    
    public function setId(int $id) : Product 
    {
        $this->id = $id;
        return $this;
    }
    
    public function setBrand(string $name) : Product 
    {
        $this->brand = $brand;
        return $this;
    }
    
    public function setName(string $name) : Product 
    {
        $this->name = $name;
        return $this;
    }
    
    public function setStock(int $stock = 0) : Product 
    {
        $this->stock = $stock;
        return $this;
    }
    
    public function setPrice(float $price = .0) : Product 
    {
        $this->price = $price;
        return $this;
    }
    
    public function setPhoto(string $photo) : Product 
    {
        $this->photo = $photo;
        return $this;
    }
    
    public function setCategoryId($id) : Product
    {
        $this->categoryId = $id;
        return $this;
    }
    
    public function getId() : int 
    {
        return $this->id;
    }
    
    public function getBrand() : string
    {
        return $this->brand;
    }
    
    public function getName() : string
    {
        return $this->name;
    }
    
    public function getStock() : int
    {
        return (int) $this->stock;
    }
    
    public function getPrice() : float
    {
        return (float) $this->price;
    }
    
    public function getPhoto() : string
    {
        return $this->photo;
    }
    
    public function getCategoryId() : int
    {
        return $this->categoryId;
    }
    
}
