<?php
var_dump($_SESSION["auth"]);
// $session = session_start();

// if (isset($_SESSION["client"]) AND $_SESSION["client"] == false) {

//     // setcookie("client", "false", time()-3600);
//     // unset($_COOKIE["client"]);
    
//     header('Location:http://localhost/projets/model-04-2022/dashboard/');

//     echo "je suis le IF";

// }
// // elseif (!isset($_SESSION["client"]) || isset($_COOKIE["client"]) AND $_COOKIE["client"] == 0) {
    
// //         header('Location:http://localhost/projets/model-04-2022/dashboard?msg=vous devait vous logues');

// //         echo "je suis le elseIF";
// // }
// elseif (isset($_COOKIE["client"]) AND $_COOKIE["client"] == 0) {

//     header('Location:http://localhost/projets/model-04-2022/dashboard?msg=vous devait vous logues');

//     echo "je suis le elseIF";
// }
// else {

//     // $_SESSION["client"] = false;
//     setcookie("client", "1", time()+3600);

//     echo "je suis le else";

// }

?>