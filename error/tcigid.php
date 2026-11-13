<?php

$bodyclass       = 'body-page';
$pagetitle       = '404 - Page not found';
$metadescription = '404 - Page not found';
require '../header.php'; ?>


<link rel="canonical" href="<?php echo( SITE ); ?>/error/" />



<section class="section">
  <div class="container">

    <h1 class="-monster -txt-center -top-padding">error 404 </h1>

    <p class="p -large -txt-center">Page not found. </p>

  </div>
</section>



<?php require FILEPATH . '/nav-home.php'; ?>



<?php require FILEPATH . '/footer.php'; ?>
