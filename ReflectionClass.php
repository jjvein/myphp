<?php
class A {
    public function hhh() {
        echo 'Hello Hey Haha';
    }

    /*comments*/
    private function showNow() {
        echo 'SSS';
    }
} 

$r = new ReflectionClass('A');
$methods = $r->getMethods();
foreach($methods as $method) {
    $methodName = $method->name;
    $method = $r->getMethod($methodName);
    echo $method;
}

