<?php


//desscendre d un etage dans url
$back = (isset($back)) ? $back : false;

//noms des liens de la navbar
$URLogout = "logout";
$URLtest = "test";
$URLtestID = "test/85";
$URLtestPage = "testpage";
$URLtestError = "errorTest";
$URLpanel = "my-panel-log";


//pour accionner la coulleur par default quand le bouttom est clique
$id = (isset($id)) ? $id : false;
$Logoutl0 = (isset($_GET['url']) && $_GET['url'] == '') ? 'active' : false;
$Logoutl1 = (isset($_GET['url']) && $_GET['url'] == 'logout') ? 'active' : false;
$testid = (isset($_GET['url']) && $_GET['url'] == "test/$id") ? 'active' : false;
$testPage = (isset($_GET['url']) && $_GET['url'] == 'test') ? 'active' : false;
$errorTest = (isset($_GET['url']) && $_GET['url'] == "errorTest") ? 'active' : false;  //error test ( pas de route dans l'index )


$navbar = '<div class="navbar blocs">
<ul>
    <li><a class="'.$testid.'" href="'.$back.$URLtestID.'">ID TEST</a></li>
    <li><a class="'.$testPage.'" href="'.$back.$URLtestPage.'">TEST PAGE</a></li>
    <li><a class="'.$errorTest.'" href="'.$back.$URLtestError.'">test error</a></li>
    <li class="linkLogout"><a class="'.$Logoutl0. $Logoutl1.'" href="'.$back.$URLogout.'"><i class="fas fa-sign-out-alt"></i></a></li>
</ul>


</div>';