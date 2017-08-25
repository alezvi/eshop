<?php 

trait UseTimestamps 
{
    
    public function setCreatedAt() 
    {
        $this->createdAt = new DateTime;
        
        return $this;
    }
    
    public function setUpdatedAt() 
    {
        $this->updatedAt = new DateTime;
        
        return $this;
    }
    
    public function setDeletedAt() 
    {
        $this->updatedAt = new DateTime;
        
        return $this;
    }
    
    public function getCreatedAt() : DateTime
    {
        return $this->createdAt;
    }
    
    public function getUpdatedAt() : DateTime
    {
        return $this->updatedAt;
    }
    
    public function getDeletedAt() : DateTime
    {
        return $this->deletedAt;
    }
    
}
