<?php 

class CategoryValidator extends Validator 
{
    
    private $category;
    
    public function __construct(Category $category) 
    {
        $this->category = $category;
    }
    
    public function validate() 
    {
        if (empty($this->category->getName())) {
            $this->addError('name', 'The name is required');
        }
        
        return $this;
    }
    
}
