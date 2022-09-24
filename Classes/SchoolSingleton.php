<?php

    class SchoolSingleton{
        static private $singleInstance;
        static private $schoolName;
        static private $schoolAdd;

        private function __construct($name , $add){

            self::$schoolName = $name;
            self::$schoolAdd = $add;

        }

        public static function getInstance($name, $add){

            if(!(self::$singleInstance instanceof self))
                    self::$singleInstance = new self($name,$add) ;
                
            return self::$singleInstance ;
                
        }

        public function getSchoolName(){
            return self::$schoolName;
        }

        public function getSchoolAdd(){
            return self::$schoolAdd;
        }

        private function __clone(){}

        
    }


?>