<?php 

class Lingkaran {
    // Membuat Property
    public $jari_jari;
    public const PHI = 3.14;
    

    // Membuat Mrthod
    public function __construct(){
        $this->jari_jari = 10;
    }

    public function luas(){
        return self::PHI * $this->jari_jari * $this->jari_jari;
    }

    public function kel (){
        return 2 * self::PHI * $this->jari_jari;
    }
}

// Mmebuat Objek / Instance
$lingkaran1 = new Lingkaran(10);
echo "luas lingkaran = " . $lingkaran1->luas();
echo "<br>";
echo "keliling lingkaran = " . $lingkaran1->luas();
echo "<br>";


// keliling = 2 * phi*r
