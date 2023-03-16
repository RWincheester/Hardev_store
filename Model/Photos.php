<?php

class Photos extends Model
{
    protected $id;
    protected $name;
    protected $path;
    protected $className = self::class;

    function __construct($data = [])
    {
        $this->set($data);
    }

}