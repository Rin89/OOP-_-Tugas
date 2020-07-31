<?php
    class Animals{
        public $leg;
        public $coldblood;

        public function __construct($leg = 4, $coldblood="false"){
            $this->leg = $leg;
            $this->coldblood=$coldblood;
        }

        public function set_leg($leg){
            $this->leg=$leg;
        }
        public function get_leg(){
            return $this->leg;
        }

        public function set_coldblood($coldblood){
            $this->coldblood=$coldblood;
        }
        public function get_coldblood(){
            return $this->coldblood;
        }
    }


?>