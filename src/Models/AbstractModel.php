<?php 

abstract class AbstractModel 
{
    
    public function __set($attribute, $value) 
    {
        $setter = 'set' . ucfirst($attribute);
        
        if (method_exists($this, $setter)) {
            return $this->{$setter}($value);
        }
        
        throw new Exception("Method {$setter} does not exist", 1);
    }
    
    public function __get($attribute) 
    {
        $getter = 'get' . ucfirst($attribute);
        
        if (method_exists($this, $getter)) {
            return $this->{$getter}();
        }
        
        throw new Exception("Method {$setter} does not exist", 1);
    }
    
}
