<?php 

class Customer 
{
    private $id;
    private $firstName;
    private $lastName;
    
    public function setId(int $id) : Customer
    {
        $this->id = $id;
        return $this;
    }
    
    public function setFirstName(string $firstName) : Customer
    {
        $this->firstName = $firstName;
        return $this;
    }
    
    public function setLastName(string $lastName) : Customer
    {
        $this->lastName = $lastName;
        return $this;
    }
    
    public function getId() : int
    {
        return (int) $this->id;
    }
    
    public function getFirstName() : string
    {
        return $this->firstName;
    }
    
    public function geLastName() : string
    {
        return $this->lastName;
    }
}
