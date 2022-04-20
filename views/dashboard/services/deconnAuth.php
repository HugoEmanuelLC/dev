<?php

if (isset($_COOKIE["client"]) AND $_COOKIE["client"] == "true") {

    setcookie("client", "false", time()+3600,"/","",1);

    echo "je suis le IF";
    
}else {
    echo "je suis le else";
}

?>