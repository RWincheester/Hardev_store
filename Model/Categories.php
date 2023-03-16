<?php

class Categories extends Model
{
    protected $id;
    protected $name;
    protected $products;
    protected $className = self::class;

    function __construct($data = [])
    {
        $this->set($data);
    }

}
