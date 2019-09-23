<?php

include 'includes/includes.php';
include 'includes/header.php';
include 'includes/footer.php';
include 'includes/classes.php';


$pageName = 'Freelance Projects';

$page = new htmlWrap;
echo $page->bodyTitle($pageName);

//project1
$p1Name = 'Creative Loafing Journalist';
$p1Story = 'I worked with Creative Loafing Tampa to create news articles. '
        . '<p> Articles were on current events and political topics.</p>'
        . '<p> I conducted on-site interviews and wrote the articles for publishing.</p>';
$p1aPdfLink = 'includes/files/posted-gun-reform-rally.pdf';
$p1aImage = 'includes/files/gun-rally.jpg';
$plaImageName = 'gun rally';
$p1aImageDesc = 'Gun Reform Supporters at Rally';
$p1bPdfLink = 'includes/files/posted-hcc-sustainability-conf.pdf';
$p1bImage = 'includes/files/hcc-conf.jpg';
$plbImageName = 'hcc conf';
$p1bImageDesc = 'Panel Members at HCC Sustainability Conference';


echo '<div class="content">'
        . $page->contentTitle($p1Name)
        . $page->contentText($p1Story)
        . $page->pdfGallery($p1aPdfLink, $p1aImage, $plaImageName, $p1aImageDesc)
        . $page->pdfGallery($p1bPdfLink, $p1bImage, $plbImageName, $p1bImageDesc)
        . '</div>';

/**
echo '<div class="content">'
        . $page->contentTitle($p2Name)
        . $page->contentText($p2Story)
        . $page->imageGallery($p2aImage, $p2aImageName, $p2aImageDesc)
        . $page->pdfGallery($p2bPdfLink, $p2bImage, $p2bImageName, $p2bImageDesc)
        . '</div>';
 * 
 */