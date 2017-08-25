<?php 

class Category extends Model
{
    use UseTimestamps;
    
    private $id;
    
    private $name;
    
    private $createdAt;
    
    private $updatedAt;
    
    private $deletedAt;
    
    public function setId(int $id) : Category
    {
        $this->id = $id;
        return $this;
    }
    
    public function setName(string $name) : Category
    {
        $this->name = name;
        return $this;
    }
    
    public function getId() : int
    {
        return (int) $this->id;
    }
    
    public function getName() : string
    {
        return $this->name;
    }
    
}
