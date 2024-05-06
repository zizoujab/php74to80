<?php
trait MyTrait {
     abstract function neededByTrait(): string;
}

class MyClass {
    use MyTrait;

    // Error, because of return type mismatch.
    private function neededByTrait(): int { return 42; }
}




trait Sortable {
    public abstract function sort(): array;
}

class Students {
    use Sortable;

    public function sort($order): array
    {
    }
}
?>
