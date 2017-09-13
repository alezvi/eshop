<?php 

trait ValidatesModelTrait
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
    
    public function addError($key, $message) 
    {
        $this->errors[$key][] = $message;
        
        return $this;
    }
    
    public function errors() 
    {
        return $this->errors;
    }
    
}
