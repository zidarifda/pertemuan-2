<?php
class User {
    public string $name;
}

$a = new User();
$a->name = "Budi";

$b = $a;        // referensi (object sama)
$b->name = "Sinta";

echo $a->name . PHP_EOL; // berubah jadi Sinta

$c = clone $a; // object baru, copy dari $a
$c->name = "Tono";

echo $a->name . PHP_EOL; // tetap Sinta
echo $c->name . PHP_EOL; // Tono
