<?php
require_once 'src/controllers/N_reciptController.php';
?>

<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="../css/main_page.css">
    <script src="https://kit.fontawesome.com/593c86938a.js" crossorigin="anonymous"></script>
<title>BREWMAST-MY_Recipt</title>
<BODY>
    <div class="nav_part">
<nav>
    <img src="../img/name.svg">
    <ul>
    <li><i class="fas fa-file"></i>
    My recipts</li>
    <li> <i class="fas fa-folder-plus"></i>
    New recipt</li>
    <li> <i class="fas fa-database"></i>
    Warehouse</li>
    <li><i class="fas fa-shopping-cart"></i>
    Market</li>
    
    <div class="logo_nav">
    <img src="../img/logo2.svg">
    </div>
    <li><i class="fas fa-sign-out-alt"></i>
        Logout</li>
        

</ul>
</nav>
</div>
<div class="space_work">
<div class="top_bar">
<header>
<a>wiki beer</a>
<a>style beer</a>
<img src="../img/user.jpg">
Hi,Jo<?php
require_once 'src/controllers/N_reciptController.php';
?>

<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="../css/main_page.css">
    <script src="https://kit.fontawesome.com/593c86938a.js" crossorigin="anonymous"></script>
<title>BREWMAST-MY_Recipt</title>
<BODY>
    <div class="nav_part">
<nav>
    <img src="../img/name.svg">
    <ul>
    <li><i class="fas fa-file"></i>
    My recipts</li>
    <li> <i class="fas fa-folder-plus"></i>
    New recipt</li>
    <li> <i class="fas fa-database"></i>
    Warehouse</li>
    <li><i class="fas fa-shopping-cart"></i>
    Market</li>
    
    <div class="logo_nav">
    <img src="../img/logo2.svg">
    </div>
    <li><i class="fas fa-sign-out-alt"></i>
        Logout</li>
        

</ul>
</nav>
</div>
<div class="space_work">
<div class="top_bar">
<header>
<a>wiki beer</a>
<a>style beer</a>
<img src="../img/user.jpg">
Hi,Johe
<img src="../img/seting.svg">
</header>
</div>

<div class="recipt">
    <?php


    if(isset($recipts))

        foreach ($recipts as $recipt):;
    ?>

    <p>NAME
        <?= $recipt->getName();?>

    <br>
        STYLE <?= $recipt->getNameStyle(); ?> <br>
        ALK % <?= $recipt->getalk(); ?><br>
        IBU <?= $recipt->getIbu(); ?> <br>
        SRV <?= $recipt->getSrv(); ?> <br>
    </p>
        <?php endforeach; ?>

</div>
</div>
</BODY>
>