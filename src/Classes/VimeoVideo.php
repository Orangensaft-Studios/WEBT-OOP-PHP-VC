<?php

namespace OrangensaftStudios\WebtOopPhpVc\Classes;

class VimeoVideo extends Video
{
    private $source;

    private $origin;

    /**
     * @param $name
     * @param $source
     */
    public function __construct($name, $source)
    {
        parent::__construct($name);
        $this->source = $source;
        $this->origin = 'Vimeo';
    }

    public function getSource(): string
    {
        return $this->source;
    }

    public function getOrigin() : string
    {
        return $this->origin;
    }

    function getCode(): string
    {
        return <<<VIMEO
            <p>"{$this->getName()}" <span>via {$this->getOrigin()}</span></p> 
            <iframe loading="lazy" src="{$this->getSource()}" allowfullscreen></iframe>
        VIMEO;

    }
}