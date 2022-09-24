<?php 

    class Cow extends Animal{

      private $owner ; 
     
      public function getOwner(){
        return $this->owner;
      }
      
      public function setOwner($owner){
        $this->owner = $owner;
      }

    
    }

?>