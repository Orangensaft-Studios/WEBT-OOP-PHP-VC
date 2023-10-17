<?php

namespace OrangensaftStudios\WebtOopPhpVc\Classes;

use OrangensaftStudios\WebtOopPhpVc\Interfaces\VideoInterface;

abstract class Video implements VideoInterface
{
    private string $name;
    protected string $origin;
    protected string $source;

    /**
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    abstract function getSource(): string;
    abstract function getCode(): string;

}