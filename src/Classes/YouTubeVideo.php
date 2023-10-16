<?php

namespace OrangensaftStudios\WebtOopPhpVc\Classes;

class YouTubeVideo extends Video
{

    private string $source;
    private string $origin;

    /**
     * @param string $name
     * @param string $source
     */
    public function __construct(string $name, string $source)
    {
        parent::__construct($name);
        $this->source = $source;
        $this->origin = 'YouTube';
    }

    /**
     * @return mixed
     */
    public function getSource(): string
    {
        return $this->source;
    }

    public function getOrigin(): string
    {
        return $this->origin;
    }

    /**
     * @return mixed
     */
    public function getCode(): string
    {
        return <<<VIDEO
            <p>"{$this->getName()}" <span>via {$this->getOrigin()}</span></p> 
            <iframe loading="lazy" src="{$this->getSource()}" allowfullscreen></iframe> 
            
        VIDEO;
    }




}