<?php

include 'includes/includes.php';
include 'includes/header.php';
include 'includes/footer.php';
include 'includes/classes.php';


$pageName = 'Personal Writing Projects';

$page = new htmlWrap;
echo $page->bodyTitle($pageName);

echo '<div class="content">'
        . $page->contentTitle('Project 1')
        . $page->contentImage('<div> img1 </div>')
        . $page->contentText('block of text. Story of project 1. '
                . '<p> blah blah. more details.</p>')
        . '</div>';

echo '<div class="content">'
        . $page->contentTitle('Project 2')
        . $page->contentImage('<div> img2 </div>')
        . $page->contentText('block of text. Story of project 2. '
                . '<p> blah blah. additional details.</p>')
        . '</div>';