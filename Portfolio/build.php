<?php

include 'includes/includes.php';
include 'includes/header.php';
include 'includes/footer.php';
include 'includes/classes.php';


$pageName = 'Personal Fabrication Projects';

$page = new htmlWrap;
echo $page->bodyTitle($pageName);


//project1
$p1Name = 'Jewelry Box';
$p1Story = 'Hobby project to create a jewelry box for a friend. '
        . '<p> Designed, built, and finished the jewelry cabinet/box for use.</p>';
$p1aImage = 'includes/files/jewbox-front-closed.jpg';
$plaImageName = 'front closed';
$p1aImageDesc = 'Front view of Doors';
$p1bImage = 'includes/files/jewbox-front-open.jpg';
$plbImageName = 'front open';
$p1bImageDesc = 'Inside view of Storage Space';

//project2
$p2Name = 'Pantry Cabinet';
$p2Story = 'Remodeling project to update pantry cabinet. '
        . '<p> Wire racks before and wooden shelves after.</p>';
$p2aImage = 'includes/files/pantry-before.jpg';
$p2aImageName = 'pantry before';
$p2aImageDesc = 'Pantry Space Before';
$p2bImage = 'includes/files/pantry-after.jpg';
$p2bImageName = 'pantry after';
$p2bImageDesc = 'Pantry Space After';


echo '<div class="content">'
        . $page->contentTitle($p1Name)
        . $page->contentText($p1Story)
        . $page->imageGallery($p1aImage, $plaImageName, $p1aImageDesc)
        . $page->imageGallery($p1bImage, $plbImageName, $p1bImageDesc)
        . '</div>';

echo '<div class="content">'
        . $page->contentTitle($p2Name)
        . $page->contentText($p2Story)
        . $page->imageGallery($p2aImage, $p2aImageName, $p2aImageDesc)
        . $page->imageGallery($p2bImage, $p2bImageName, $p2bImageDesc)
        . '</div>';