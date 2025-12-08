<?php
require_once "Account.php"; // kalau class Account di file lain

// Subclass untuk uji akses protected
class PremiumAccount extends Account {
    public function debugBalance() {
        return $this->balance; //  boleh karena protected bisa diakses subclass
    }
}

// Buat objek subclass
$prem = new PremiumAccount("Rani", 10000, "5678");
echo $prem->debugBalance(); // berhasil

