<?php

class Stos{

    private $tab;
    private $lastElement = 0;
    private $capacity = 0;
    public function __construct($_size){
       $this->capacity = $_size;
       $this->tab = array();
    }

    public function push(int $value){
        if(!$this->isFull()){
            $this->tab[$this->lastElement] = $value;
            $this->lastElement++;
        }else{
            return NULL;
        }
    }
    
     public function pop(){      
        if(!$this->isEmpty()){
            $value = $this->tab[$this->lastElement-1];
            unset($this->tab[$this->lastElement-1]);            
            $this->lastElement--;
            return $value;
        }else {
            return NULL;
        }
    }

     public function isEmpty(){
        if($this->lastElement == 0){
            return true;
        }
        return false;
    }

     public function isFull(){
        // echo "\n Last element: ",$this->lastElement,"\n";
        // echo "Next: ", $this->lastElement+1, "\n";
        // echo "Size: ", $this->getSize(),"\n";
        if($this->getSize() >= $this->capacity){
            return true;
        }
        return false;
    }

    public function getSize(){
        return count($this->tab);
    }

    public function printStack(){
        $iteration = $this->getSize();
        for($i=0;$i<$iteration;$i++){
            echo $this->tab[$i],",";
        }
    }

}


// $stos = new Stos(4);
// echo "Stos po inicjalizacji: ", $stos->printStack(), " \n";
// $stos->pop();
// $stos->push(18);
// $stos->push(19);
// $stos->push(26);
// $stos->push(40);
// echo "Stos po dodaniu: ", $stos->printStack(), " \n";
// echo "Usuwany element: ",$stos->pop(), " \n";
// echo "Stos po pop: ", $stos->printStack(), " \n";
// echo "Usuwany element: ",$stos->pop(), " \n";
// echo "Usuwany element: ",$stos->pop(), " \n";
// echo "Usuwany element: ",$stos->pop(), " \n";
// echo "Usuwany element: ",$stos->pop(), " \n";
// echo "Stos po pop: ", $stos->printStack(), " \n";

?>