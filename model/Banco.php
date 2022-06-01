<?php

abstract class Banco{
    
    abstract public function save();

    abstract public function remove($id);

    abstract public function find();

    abstract public function count();

    abstract public function listAll();
}