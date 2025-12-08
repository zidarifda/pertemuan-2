<?php
class User {
    public string $name;
    public int $age;   // ← Tambahan properti baru
}

$a = new User();
$a->name = "Budi";
$a->age  = 20;

$b = $a; // referensi ke object yang sama
$b->name = "Sinta";
$b->age = 25;

echo $a->name . " - " . $a->age . PHP_EOL; 
// Output: Sinta - 25  (karena $a dan $b objek yang sama)

$c = clone $a; // membuat object baru, hasil salinan
$c->name = "Tono";
$c->age  = 30;

echo $a->name . " - " . $a->age . PHP_EOL; 
// Output: Sinta - 25 (tetap, tidak ikut berubah)

echo $c->name . " - " . $c->age . PHP_EOL; 
// Output: Tono - 30 (object hasil clone berbeda)
