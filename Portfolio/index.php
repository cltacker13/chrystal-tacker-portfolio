<!DOCTYPE html>
<?php

include 'includes/includes.php';
include 'includes/header.php';
include 'includes/footer.php';
include 'includes/classes.php';

$pageName = 'Welcome to my Portfolio Site!';

$page = new htmlWrap;
echo $page->bodyTitle($pageName);


echo '<div class="content">'
    . $page->contentTitle('About the Site')
    . $page->contentText('<p>This is a small collection of my projects. I have worked on various types of projects.'
        . ' So you will see written work from academic and professional settings.'
        . ' As well as hobby work in photography and even woodwork. </p>'
        . '<p>I am sharing a piece of what I am capable of doing with you.</p>')
    . '</div>';


echo '<div class="content">';
echo bolded('<h3>Thank you for viewing.</h3>');
echo bolded('For contact information:');
echo '<ul>
        <li> Email: cltacker13@gmail.com </li>
        <li> Phone: 813-765-8783 </li>
        <li> LinkedIn: <a href="https://www.linkedin.com/in/chrystal-tacker/">chrystal-tacker</a> </li>
      </ul>';
echo '</div>';


//echo '<script> alert("Welcome!"); </script>';

