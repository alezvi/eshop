<?php 

trait ValidatesModelTrait implements ValidatorInterface
{
    
    public function hasError($key) 
    {
        return array_key_exists($key, $this->errors);
    }
    
    public function isValid() 
    {
        return (bool) empty($this->errors);
    }
    
    
    public function getError($key) 
    {
        return $this->errors[$key] ?? null;
    }
    
}
