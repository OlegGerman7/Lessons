<?php

require_once 'traits/Trait1.php';
require_once 'traits/Trait2.php';
require_once 'traits/Trait3.php';

class Test {
    use Trait1, Trait2, Trait3 {
        Trait1::test insteadof Trait2;
        Trait1::test insteadof Trait3;
        Trait2::test as Trait2Test;
        Trait3::test as Trait3Test;
    }

    public function getSum(){
       return $this->test() + $this->Trait2Test() + $this->Trait3Test();
    }
}

$talker = new Test();
echo $talker->getSum();