<?php

include 'includes/includes.php';
include 'includes/header.php';
include 'includes/footer.php';
include 'includes/classes.php';


$pageName = 'My Favorites';

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
$p2Name = 'History Classes';
$p2Story = 'I focused on Ancient Greco-Roman History. '
        . '<p> I enjoyed the art and cultural aspects.</p>'
        . '<p> As well as tried to contribute to interpreting the history.</p>';
$p2aPdfLink = 'includes/files/venus-statue-essay.pdf';
$p2aImage = 'includes/files/venus-statue.png';
$p2aImageName = 'venus statue';
$p2aImageDesc = 'Museum Research Project on Displayed Venus Statue';
$p2bPdfLink = 'includes/files/submitted-herodotus-final.pdf';
$p2bImage = 'includes/files/herodotus-book.jpg';
$p2bImageName = 'herotodus book';
$p2bImageDesc = 'Seminar Thesis Paper on Histories by Herodotus';


echo '<div class="content">'
        . $page->contentTitle($p1Name)
        . $page->contentText($p1Story)
        . $page->pdfGallery($p1aPdfLink, $p1aImage, $plaImageName, $p1aImageDesc)
        . $page->imageGallery($p1bImage, $plbImageName, $p1bImageDesc)
        . '</div>';

echo '<div class="content">'
        . $page->contentTitle($p2Name)
        . $page->contentText($p2Story)
        . $page->pdfGallery($p2aPdfLink, $p2aImage, $p2aImageName, $p2aImageDesc)
        . $page->pdfGallery($p2bPdfLink, $p2bImage, $p2bImageName, $p2bImageDesc)
        . '</div>';