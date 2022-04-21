<?php

if (isset($_SESSION["client"]) AND $_SESSION["client"] == 0) {

    // setcookie("client", "false", time()-3600);
    // unset($_COOKIE["client"]);
    
    header('Location:http://localhost/projets/model-04-2022/dashboard/');

    echo "je suis le IF";

}
elseif (!isset($_SESSION["client"])) {

    header('Location:http://localhost/projets/model-04-2022/dashboard?msg=vous devait vous logues');

    echo "je suis le elseIF";
}
else {

    echo "je suis le else";

}

?>