<?php 

    class Animal{

      private $family ; 
      private $food ; 

     public function __construct(string $family , string $food)
      {
            $this->family = $family ;
            $this->food = $food ;
      }


      public function getFamily(){
         return $this->family;
      }
      
      public function getFood(){
         return $this->food;
      }
      
      public function setFamily($family){
        $this->family = $family;
      }

      public function setFood($food){
        $this->food = $food;
      }
      
    }

?>