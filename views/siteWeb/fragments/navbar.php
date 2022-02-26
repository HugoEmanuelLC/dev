

<?php

//desscendre d un etage dans url
$back = (isset($back)) ? $back : false;


//pour accionner la coulleur par default quand le bouttom est clique
$id = (isset($id)) ? $id : false;
$accueil0 = (isset($_GET['url']) && $_GET['url'] == '') ? 'active' : false;
$accueil1 = (isset($_GET['url']) && $_GET['url'] == 'accueil') ? 'active' : false;
$test = (isset($_GET['url']) && $_GET['url'] == 'test') ? 'active' : false;
$testid = (isset($_GET['url']) && $_GET['url'] == "test/$id") ? 'active' : false;
$errorTest = (isset($_GET['url']) && $_GET['url'] == "errorTest") ? 'active' : false;  //error test ( pas de route dans l'index )

$navbar = '<div class="navbar">
<ul>
    <li><a class="'.$accueil0. $accueil1.'" href="'.$back.'accueil">ACCUEIL</a></li>
    <li><a class="'.$test.'" href="'.$back.'test">TEST</a></li>
    <li><a class="'.$testid.'" href="'.$back.'test/85">ID TEST</a></li>
    <li><a class="'.$errorTest.'" href="'.$back.'errorTest">ID TEST</a></li>
</ul>
</div>';