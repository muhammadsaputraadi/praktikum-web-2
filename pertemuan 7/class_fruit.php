<?php 

class Fruit {
    // Membuat Property
     public $name;
     public $color;
     public $flavor;

    // Membuat Method
    public function getName(){
        return $this->name;
    }
    public function getInfo(){
        return "Buah = " .$this->name . "<br>Warna = "  . $this->color . "<br>Rasa = " . $this->flavor;
    }
}

// Membuat Objek / Instance
$fruit1 = new fruit();
$fruit1->name = "Semangka";
$fruit1->color = "Hijau";
$fruit1->flavor = "Manis";
echo "Buah = " . $fruit1->getName();
echo "<br>";
echo $fruit1->getInfo();

