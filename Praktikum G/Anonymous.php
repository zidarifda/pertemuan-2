<?php

$logger = new class {
    public function log(string $message) {
        echo "[LOG] $message<br>";
    }
};

$logger->log("Sistem berjalan");

//No 3 dengan property  
$logger2 = new class ("INFO") {
    public function __construct(public string $level) {}

    public function log(string $msg) {
        echo "[$this->level] $msg<br>";
    }
};

$logger2->log("Aplikasi dimulai");

?>
