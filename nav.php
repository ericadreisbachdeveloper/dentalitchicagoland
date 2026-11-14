<?php
require $_SERVER['DOCUMENT_ROOT'] . '/config/config.php';

if ( $_SERVER['REQUEST_METHOD'] == 'GET' && realpath(__FILE__) == realpath($_SERVER['SCRIPT_FILENAME']) ) {
    header('HTTP/1.0 403 Forbidden', true, 403);
    die(header('location: ' . SITE . 'error/'));
}
?>

<nav class="navbar" aria-label="Main menu">

    <span aria-hidden="true" class="navbar-toggle-label tiny sans-serif laptop-hide">MENU </span>

    <button class="navbar-toggle" id="navbar-toggle" type="button" aria-label="Toggle mobile menu" data-target="#navmenu" aria-controls="navmenu" aria-expanded="false">
        <span class="bar -top"></span>
        <span class="bar -middle"></span>
        <span class="bar -bottom"></span>
    </button> 

    <div class="collapse navbar-div" id="navmenu">

        <ul class="navbar-ul">

            <li class="nav-li">
                <a class="nav-item" href="<?php echo( SITE ); ?>/services" data-target="contact">Contact</a>
            </li>

        </ul>


    </div><?php /* #navmenu.collpase.navbar-div */ ?>

</nav>
