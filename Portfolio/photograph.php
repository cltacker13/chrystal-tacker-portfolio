<?php

include 'includes/includes.php';
include 'includes/header.php';
include 'includes/footer.php';
include 'includes/classes.php';


$pageName = 'Personal Photography Projects';

$page = new htmlWrap;
echo $page->bodyTitle($pageName);

//project1
$p1Name = 'Moon Shoot';
$p1Story = 'The Moon is a beautiful thing. I have always found it to be inspiring. '
        . '<p> I started by taking some bad pictures during an eclipse, then started to regularly take full moon shots.</p>';
$p1aImage = 'includes/files/full-clear.jpg';
$plaImageName = 'first full';
$p1aImageDesc = 'Beautiful Full Moon, Florida';
$p1bImage = 'includes/files/full-cloudy.jpg';
$plbImageName = 'cloudy full';
$p1bImageDesc = 'Omnious Full Moon, Florida';


//project2
$p2Name = 'Cambodia Shoot';
$p2Story = 'Cambodia was beautiful; specifically Angkor Wat at sunrise and Ta Prohm trees over growing the ancient ruins. '
        . '<p> During a family vacation, I captured thousands of photos of southeast Asia and these were my favorite parts.</p>';
$p2aImage = 'includes/files/angkor-sunrise.jpg';
$p2aImageName = 'angkor sunrise';
$p2aImageDesc = 'Inspiring Sunrise, Cambodia';
$p2bImage = 'includes/files/taprohm-tree.jpg';
$p2bImageName = 'ta prohm tree';
$p2bImageDesc = 'Sneak peak of the tree, Cambodia';


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