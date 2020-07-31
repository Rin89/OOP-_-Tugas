<?php
    require_once 'animal.php';
    require_once 'frog.php';
    require_once 'ape.php';
    

    class Animal extends Animals{
        //Kambing
        public $name = "shaun";
        public function set_name($name){
            $this->name=$name;
        }
        public function get_name(){
            return $this->name;
        }

        //Kera
        public $name1 = "Kera sakti";
        public function set_name1($name1){
            $this->name1=$name1;
        }
        public function get_name1(){
            return $this->name1;
        }

        //Katak
        public $name2 = "Buduk";
        public function set_name2($name2){
            $this->name2=$name2;
        }
        public function get_name2(){
            return $this->name2;
        }

        public $kaki = 2;
        public function set_kaki($kaki){
            $this->kaki = $kaki;
        }
        public function get_kaki(){
            return $this->kaki;
        }

    }

    class Frog extends Katak{

    }

    class Ape extends Kera{

    }

    $sheep = new Animal();
    echo "<h3>Release 01 - Animal</h3>";
    echo "Nama : " . $sheep->get_name() . "<br>";
    echo "Banyak kaki : " . $sheep->get_leg() . "<br>";
    echo "Cold blood : " . $sheep->get_coldblood() . "<br>";
    

    echo "<h3>Release 02 - Frog & Ape</h3>";
    //Katak

    $frog = new Animal();
    $kodok = new Frog();

    echo "Nama : " . $frog->get_name2() . "<br>";
    echo "Banyak kaki : " . $frog->get_kaki() . "<br>";
    echo "Cold blood : " . $frog->get_coldblood() . "<br>" . "Jump : ";
    echo $kodok->jump() . "<br><br>";


    //Kera
    $monkey = new Animal();
    $sungokong = new Ape();

    echo "Nama : " . $monkey->get_name1() . "<br>";
    echo "Banyak kaki : " . $monkey->get_leg() . "<br>";
    echo "Cold blood : " . $monkey->get_coldblood() . "<br>" . "Yell : ";
    echo $sungokong->yell();

    /*echo $sheep->name; // "shaun"
    echo PHP_EOL;
    echo $sheep->leg; // 2
    echo PHP_EOL;
    echo $sheep->cold_blood; // false
    */

?>