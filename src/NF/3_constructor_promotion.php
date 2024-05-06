<?php
namespace php74 {
    class Point {
        protected int $x;
        protected int $y;
        public function __construct(int $x, int $y)
        {
            $this->x = $x;
            $this->y = $y;
        }
    }
}






//=> will be simplified to
namespace php80 {
    class Point {
        public function __construct(protected int $x, protected int $y){}
    }
}