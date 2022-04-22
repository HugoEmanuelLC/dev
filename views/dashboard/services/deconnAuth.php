<?php 
if (isset($_SESSION["AUTH"]) && $_SESSION["AUTH"] == "auth" ) {
    
    $_SESSION["AUTH"] = "false";
    echo "vous avez etais deconnecter";
} 
?>