<?php
// mixed is a pseudo type  equivalent to Union of :
//  string|int|float|bool|null|array|object|callable|resource

class Example {
    public mixed $exampleProperty;
    public function foo(mixed $foo): mixed {}
}

// mixed is assumed when no type is declared
// mixed|void is assumed when no return type is declared
function greet($person)
{
    echo "Hello $person";
}