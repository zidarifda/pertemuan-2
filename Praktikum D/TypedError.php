<?php

echo "=== 1. Error karena mengubah readonly property ===\n";

class ProductReadonly {
    public readonly int $id;

    public function __construct(int $id) {
        $this->id = $id;
    }
}

try {
    $p1 = new ProductReadonly(1001);
    $p1->id = 2002; // ❌ Error
} catch (Error $e) {
    echo "Error: " . $e->getMessage() . "\n";
}

echo "\n=== 2. Error karena uninitialized property ===\n";

class ProductUninitialized {
    public string $name;
}

try {
    $p2 = new ProductUninitialized();
    echo $p2->name; // ❌ Error
} catch (Error $e) {
    echo "Error: " . $e->getMessage() . "\n";
}

echo "\n=== 3. Error karena type mismatch ===\n";

class ProductTypeMismatch {
    public string $name;
}

try {
    $p3 = new ProductTypeMismatch();
    $p3->name = 123; // ❌ Error
} catch (TypeError $e) {
    echo "Error: " . $e->getMessage() . "\n";
}

echo "\n=== 4. Error karena constructor tanpa argumen ===\n";

class ProductConstructor {
    public string $name;
    public int $id;

    public function __construct(string $name, int $id) {
        $this->name = $name;
        $this->id = $id;
    }
}

try {
    $p4 = new ProductConstructor(); // ❌ Error
} catch (ArgumentCountError $e) {
    echo "Error: " . $e->getMessage() . "\n";
}
