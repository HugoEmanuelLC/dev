

<?php


//desscendre d un etage dans url
$back = (isset($back)) ? $back : false;

//noms des liens de la navbar
$URLaccueil = "accueil";
$URLtest = "test";
$URLtestID = "test/85";
$URLtestError = "errorTest";
$URLpanel = "my-panel-log";


//pour accionner la coulleur par default quand le bouttom est clique
$id = (isset($id)) ? $id : false;
$accueil0 = (isset($_GET['url']) && $_GET['url'] == '') ? 'active' : false;
$accueil1 = (isset($_GET['url']) && $_GET['url'] == 'accueil') ? 'active' : false;
$test = (isset($_GET['url']) && $_GET['url'] == 'test') ? 'active' : false;
$testid = (isset($_GET['url']) && $_GET['url'] == "test/$id") ? 'active' : false;
$errorTest = (isset($_GET['url']) && $_GET['url'] == "errorTest") ? 'active' : false;  //error test ( pas de route dans l'index )


$navbar = '<div class="navbar">
<ul>
    <li><a class="'.$accueil0. $accueil1.'" href="'.$back.$URLaccueil.'">ACCUEIL</a></li>
    <li><a class="'.$test.'" href="'.$back.$URLtest.'">TEST</a></li>
    <li><a class="'.$testid.'" href="'.$back.$URLtestID.'">ID TEST</a></li>
    <li><a class="'.$errorTest.'" href="'.$back.$URLtestError.'">test error</a></li>
    <li><a class="'.$errorTest.'" href="'.$back.$URLpanel.'">PANEL</a></li>
</ul>
</div>';