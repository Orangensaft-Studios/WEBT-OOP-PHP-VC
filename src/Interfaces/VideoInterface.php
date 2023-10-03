<?php

namespace OrangensaftStudios\WebtOopPhpVc\Interfaces;

/**
 * User Story 5
 * PHP interface for video
 * retrieve name, source and HTML code
 */
interface VideoInterface
{
    public function getName() : string;

    public function getSource() : string;

    public function getCode() : string;

    

}