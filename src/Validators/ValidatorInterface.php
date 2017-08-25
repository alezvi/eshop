<?php 

interface ValidatorInterface 
{
    
    public function validate();
    
    public function errors();
    
    public function getError($key);
    
    public function addError();
    
    public function isValid();
    
}
