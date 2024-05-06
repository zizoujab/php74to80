<?php

//class C1 {
//    public function method(array $a) {}
//}
//class C2 extends C1 {
//    public function method(int $a) {}
//}


interface I {
    public function method(array $a);
}
class C implements I {
    public function method(int $a): int {
        return 1;
    }
}
