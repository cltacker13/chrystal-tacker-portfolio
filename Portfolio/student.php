<?php

include 'includes/includes.php';
include 'includes/header.php';
include 'includes/footer.php';
include 'includes/classes.php';


$pageName = 'Academic Projects';

$page = new htmlWrap;
echo $page->bodyTitle($pageName);

//project1
$p1Name = 'History Classes';
$p1Story = 'I focused on Ancient Greco-Roman History. '
        . '<p> I enjoyed the art and cultural aspects.</p>'
        . '<p> As well as tried to contribute to interpreting the history.</p>';
$p1aPdfLink = 'includes/files/venus-statue-essay.pdf';
$p1aImage = 'includes/files/venus-statue.png';
$plaImageName = 'venus statue';
$p1aImageDesc = 'Museum Research Project on Displayed Venus Statue';
$p1bPdfLink = 'includes/files/submitted-herodotus-final.pdf';
$p1bImage = 'includes/files/herodotus-book.jpg';
$plbImageName = 'herotodus book';
$p1bImageDesc = 'Seminar Thesis Paper on Histories by Herodotus';


//project2
$p2Name = 'BigKitchen - Internal';
$p2Story = 'During my 6 years, I also created internal documents as well. '
        . '<p> I made training files, like guidelines, flowcharts, staff analysis documents, and more.</p>'
        . '<p> I also made a company newsletter for internal updates.</p>';
$p2aPdfLink = 'includes/files/BK-572964-MuleMugListing.pdf';
$p2aImage = 'includes/files/###.jpg';
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