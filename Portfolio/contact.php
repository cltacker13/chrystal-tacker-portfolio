<?php

include 'includes/includes.php';
include 'includes/header.php';
include 'includes/footer.php';
include 'includes/classes.php';

$pageName = 'Contact Me';

$title = new htmlWrap;
echo $title->bodyTitle($pageName);

echo '<br>';


echo '<div class="content">';
echo bolded('<h3>Thank you for viewing.</h3>');
echo bolded('For contact information:');
echo '<ul>
        <li> Email: cltacker13@gmail.com </li>
        <li> Phone: 813-765-8783 </li>
        <li> LinkedIn: <a href="https://www.linkedin.com/in/chrystal-tacker/">chrystal-tacker</a> </li>
      </ul>';
echo '</div>';