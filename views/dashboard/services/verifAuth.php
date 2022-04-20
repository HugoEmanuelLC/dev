<?php

if (isset($_COOKIE["client"]) AND $_COOKIE["client"] == "false") {

    setcookie("client", "false", time()-3600);
    unset($_COOKIE["client"]);
    
    header('Location:http://localhost/projets/model-04-2022/dashboard/');

    echo "je suis le IF";

}
elseif (!isset($_COOKIE["client"])) {

    header('Location:http://localhost/projets/model-04-2022/dashboard?msg=vous devait vous logues');

    echo "je suis le elseIF";
}
else {

    echo "je suis le else";

}

?>