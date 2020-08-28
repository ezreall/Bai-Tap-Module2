<?php


class Checker
{
    public $stack;

    public function __construct()
    {
        $this->stack = new SplStack();
    }

    public function check($str){
        for ($i = 0; $i < strlen($str) ;$i++){
            if ($str[$i] == '('){
                $this->stack->push($str[$i]);
            } else if ($str[$i] == ')'){
                if ($this->stack->isEmpty()){
                    return false;
                } else {
                    $this->stack->pop();
                }
            }
        }
        return $this->stack->isEmpty();
    }
}