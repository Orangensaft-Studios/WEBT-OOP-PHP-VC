<?php
namespace OrangensaftStudios\WebtOopPhpVc;
use OrangensaftStudios\WebtOopPhpVc\Classes\VimeoVideo;
use OrangensaftStudios\WebtOopPhpVc\Classes\YouTubeVideo;

require 'vendor/autoload.php';

$ytvid1 = new YouTubeVideo('Sollten alle Menschen Veganer werden?', 'XS3z_PEkMMw');
$ytvid2 = new YouTubeVideo('What I Eat in a Day | High Protein Vegan Easy Dinner Recipes', '-_JkDYN_U1c');
$ytvid3 = new YouTubeVideo('Classic French Cuisine BUT It Has To Be VEGAN Cooking Challenge | Top Chef Canada', 'fXNBEhYERW4');
$ytvid4 = new YouTubeVideo('If I could only cook one dish for a vegan skeptic…', 'BHRyfEbhFFU');
$ytvid5 = new YouTubeVideo('CHICKPEA and VEGETABLE CASSEROLE Recipe | Healthy Vegan and Vegetarian Meal Ideas | Chickpea Recipes', 'GSjhVMJtbgo');


$vimeovid1 = new VimeoVideo('The Vegan Muffin', '109105753');
$vimeovid2 = new VimeoVideo('Warum vegan? - kurz und klar', '53978587');
$vimeovid3 = new VimeoVideo('World Vegan Month 2022: What is Veganism?', '761058013');
$vimeovid4 = new VimeoVideo('BUT IT’S VEGAN', '218348745');
$vimeovid5 = new VimeoVideo('Umwelttipp: Vegetarisch oder vegan essen - WWF', '472942228');



$site = <<< SITE
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="/assets/style.css">
    <meta charset="UTF-8">
    <title>VeganVideos</title>
<h1>Vegan Videos</h1>
<div class="container">
    <div class="video">
        <h3>{$ytvid1->getCode()}</h3>
    </div>
    
    <div class="video">
        <h3>{$vimeovid1->getCode()}</h3>
    </div>
    
    <div class = video>
       <h3>{$ytvid2->getCode()}</h3>
    </div>
    
     <div class = video>
       <h3>{$ytvid3->getCode()}</h3>
    </div>
    
     <div class = video>
       <h3>{$vimeovid2->getCode()}</h3>
    </div>
    
     <div class = video>
       <h3>{$ytvid4->getCode()}</h3>
    </div>
    
     <div class = video>
       <h3>{$vimeovid3->getCode()}</h3>
    </div>
    
     <div class = video>
       <h3>{$vimeovid4->getCode()}</h3>
    </div>
    
     <div class = video>
       <h3>{$vimeovid5->getCode()}</h3>
    </div>
    
     <div class = video>
       <h3>{$ytvid5->getCode()}</h3>
    </div>

</div>
SITE;

echo $site;
