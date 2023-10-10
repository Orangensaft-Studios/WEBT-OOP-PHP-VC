<?php

namespace OrangensaftStudios\WebtOopPhpVc\Classes;

class YouTubeVideo extends Video
{

    private string $source;
    private string $youtubeID;

    /**
     * @param string $name
     * @param string $youtubeID
     */
    public function __construct(string $name, string $youtubeID)
    {
        parent::__construct($name);
        $this->source = $this->getSource();
        $this->youtubeID = $youtubeID;
    }

    /**
     * @return mixed
     */
    public function getSource(): string
    {
        return 'YouTube';
    }

    public function getYoutubeID(): string
    {
        return $this->youtubeID;
    }

    /**
     * @return mixed
     */
    public function getCode(): string
    {
        return <<<VIDEO
            <p>"{$this->getName()}" <span>via {$this->getSource()}</span></p> 
            <iframe loading="lazy" src="https://www.youtube.com/embed/{$this->getYoutubeID()}" allowfullscreen></iframe> 
            
        VIDEO;
    }




}