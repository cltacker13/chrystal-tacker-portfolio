<?php

include 'includes/includes.php';
include 'includes/header.php';
include 'includes/footer.php';
include 'includes/classes.php';


$pageName = 'Work-related Projects';

$page = new htmlWrap;
echo $page->bodyTitle($pageName);

//project1
$p1Name = 'BigKitchen - Website';
$p1Story = 'I primarily managed a team and created product copy and marketing assets. '
        . '<p> A product page screenshot, then on click a pdf of content for an item I worked on.</p>'
        . '<p> A website homepage banner that I worked on.</p>';
$p1aPdfLink = 'includes/files/BK-572964-MuleMugListing.pdf';
$p1aImage = 'includes/files/bk-moscowmulepage.jpg';
$plaImageName = 'moscow mule mugs';
$p1aImageDesc = 'Moscow Mule Mugs Product Page';
$p1bImage = 'includes/files/BK-homepageBanner.png';
$plbImageName = 'beer banner';
$p1bImageDesc = 'Beer Drinking Website Banner';


//project2
$p2Name = 'BigKitchen - Internal';
$p2Story = 'During my 6 years, I also created internal documents as well. '
        . '<p> I made training files, like guidelines, flowcharts, staff analysis documents, and more.</p>'
        . '<p> I also made a company newsletter for internal updates.</p>';
$p2aPdfLink = 'includes/files/BK-572964-MuleMugListing.pdf';
$p2aImage = 'includes/files/newproduct-flow.jpg';
$p2aImageName = 'new product flow';
$p2aImageDesc = 'Process Flowchart';
$p2bPdfLink = 'includes/files/October2016.pdf';
$p2bImage = 'includes/files/BKdish-header.png';
$p2bImageName = 'newsletter example';
$p2bImageDesc = 'The Dish';


echo '<div class="content">'
        . $page->contentTitle($p1Name)
        . $page->contentText($p1Story)
        . $page->pdfGallery($p1aPdfLink, $p1aImage, $plaImageName, $p1aImageDesc)
        . $page->imageGallery($p1bImage, $plbImageName, $p1bImageDesc)
        . '</div>';

echo '<div class="content">'
        . $page->contentTitle($p2Name)
        . $page->contentText($p2Story)
        . $page->imageGallery($p2aImage, $p2aImageName, $p2aImageDesc)
        . $page->pdfGallery($p2bPdfLink, $p2bImage, $p2bImageName, $p2bImageDesc)
        . '</div>';