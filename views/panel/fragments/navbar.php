

<?php


//desscendre d un etage dans url
$back = (isset($back)) ? $back : false;

//noms des liens de la navbar
$URLtestError = "errorTest";
$URLpanel = "deconnecte";
$URLtestPanel = "test-panel";


//pour accionner la coulleur par default quand le bouttom est clique
$id = (isset($id)) ? $id : false;
$test = (isset($_GET['url']) && $_GET['url'] == 'test') ? 'active' : false;
$testPanel = (isset($_GET['url']) && $_GET['url'] == "test-panel") ? 'active' : false;
$errorTest = (isset($_GET['url']) && $_GET['url'] == "errorTest") ? 'active' : false;  //error test ( pas de route dans l'index )


$navbar = '<div class="navbar">
<ul>
    <li><a class="'.$testPanel.'" href="'.$back.$URLtestPanel.'">test panel</a></li>
    <li><a class="" href="'.$back.$URLtestError.'">test error</a></li>
    <li><a class="" href="'.$back.$URLpanel.'">DECONECTION</a></li>
</ul>
</div>';