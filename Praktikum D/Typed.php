<?php 
class Product { 
    public string $name; 
    public readonly int $id; 

    public function __construct(string $name, int $id) { 
        $this->name = $name; 
        $this->id = $id; 
    } 
} 

$p = new Product("Laptop", 1001); 
echo $p->name;  // Output: Laptop
echo $p->id;    // Output: 1001
