<?php
namespace OrangensaftStudios\WebtOopPhpVc;
use OrangensaftStudios\WebtOopPhpVc\Classes\VimeoVideo;
use OrangensaftStudios\WebtOopPhpVc\Classes\YouTubeVideo;

require 'vendor/autoload.php';

$ytvid1 = new YouTubeVideo('Sollten alle Menschen Veganer werden?', 'XS3z_PEkMMw');


$vimeovid1 = new VimeoVideo('The Vegan Muffin', '109105753');



$site = <<< SITE
<link rel="stylesheet" href="/assets/style.css">
<div>
    <div>
        <h3>{$ytvid1->getCode()}</h3>
    </div>
    
    <div>
        <h3>{$vimeovid1->getCode()}</h3>
    </div>

</div>
SITE;

echo $site;
