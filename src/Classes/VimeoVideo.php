<?php

namespace OrangensaftStudios\WebtOopPhpVc\Classes;

use OrangensaftStudios\WebtOopPhpVc\Classes\Video;

class VimeoVideo extends Video
{
    private $source;

    private $vimeoID;

    /**
     * @param $name
     * @param $vimeoID
     */
    public function __construct($name, $vimeoID)
    {
        parent::__construct($name);
        $this->source = $this->getSource();
        $this->vimeoID = $vimeoID;
    }

    public function getSource(): string
    {
        return 'Vimeo';
    }

    /**
     * @return mixed
     */
    public function getVimeoID()
    {
        return $this->vimeoID;
    }



    function getCode(): string
    {
        return <<<VIMEO
            <p>"{$this->getName()}" <span>via {$this->getSource()}</span></p> 
            <iframe loading="lazy" src="https://player.vimeo.com/video/{$this->getVimeoID()}" allowfullscreen></iframe>
        VIMEO;

    }
}