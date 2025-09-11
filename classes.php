<?php
/*osztály
-osztály:sablon
-objektum:példány
-konstrukció:új objektum létrehozása
-de konstruktor: speciális metódus,ami akkor fut le amikor létrehozunk egy objektumot
-Tulajdonság (public,private,protected)
-Öröklődés(extends)
-Trait (fgv-ek,amiket különböző osztályokban is használhatunk)
*/
//Készíts egy osztályt ami autókat reprezentál (márka,típus,szín tuajdonsággal konstruktorral)
class Car {
    public  $brand;
    public  $type;
    public  $color;

    public function __construct( $brand,  $type,  $color) {
        $this->brand = $brand;
        $this->type = $type;
        $this->color = $color;
    }
    public function info() {
        echo "Márka: " . $this->brand . " Típus: " . $this->type . " Szín: " . $this->color;
    }
}

$car = new Car("Opel", "Astra", "Piros");
echo $car->info();
//Hozz létre a MathHelper osztályt amiben legyen egy statikus változó (PI) és egy statikus metódust square néven
class MathHelper {
    public static $PI = 3.14;
    public static function square($num) {
        return $num * $num;
    }
}echo "<br>";
echo MathHelper::$PI;
echo "<br>";
echo MathHelper::square(5);
//Készíts egy ElectricCar osztályt ami a Car osztályból öröklődik és legyen egy új tulajdonsága (batteryCapacity)
class ElectricCar extends Car 
{
    public $batteryCapacity;

    public function __construct($brand, $type, $color, $batteryCapacity) {
        parent::__construct($brand, $type, $color);
        $this->batteryCapacity = $batteryCapacity;
    }
    public function info() 
    {
        parent::info();
        echo " Akkumulátor kapacitás: " . $this->batteryCapacity . " kWh";
    }
}
echo "<br>";
    $eCar= new ElectricCar("Tesla","Model S","Fehér",10000);
    $eCar->info();

    //Traitek: újrahaszonsítható függvénytároló
    //Hozz létre egy traitet, ami tartalmaz egy methódust, ami kiírja "Szia [név]!"
    trait 
?>