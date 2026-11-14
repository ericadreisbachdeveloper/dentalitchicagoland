<?php

$bodyclass       = 'body-home';
$metadescription = 'This is a test';
require 'header.php';
$ogimg             = SITE . '/public/og-img.jpg';
$ogimg_description = ''; ?>


<section class="section-hero">
    <div class="container">
        <div class="div-flex">

            <div class="div-flex-box -text">
                <div>
                    <p>
                        <span class="h1">Technology that keeps your practice <span class="span-h1-hilite">smiling.</span> <br>
                        <span class="subhead">Secure, responsive IT support that understands your software, your team, and the pace of patient&nbsp;care. </span>
                    </p>
                    <p><a href="tel:+13127253628" rel="noopener" target="_blank">Get your free IT assessment</a> </p>
                </div>
            </div>


            <div class="div-flex-box">
            <?php require './dash-image.php'; ?>
            </div>

        </div><?php /* /.div-flex */ ?>
    </div><?php /* /.container */ ?>
</section>







<?php require './footer.php';
