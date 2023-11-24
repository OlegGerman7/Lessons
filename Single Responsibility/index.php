<?php

class WorkWithProduct {
    public function get($name) {}
    public function set($name, $value) {}
}

class ActionsWithProduct {
    public function save(WorkWithProduct $product) {}
    public function update(WorkWithProduct $product) {}
    public function delete(WorkWithProduct $product) {}
    public function show(WorkWithProduct $product) {}
}

class PrintProduct {
    public function print(WorkWithProduct $product) {}
}