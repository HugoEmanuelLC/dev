<?php
    
if (!isset($_SESSION["AUTH"])) {
        
    header('Location:http://localhost/projets/model-04-2022/dashboard?msg=je suis passé par l IF...');  

    echo "je suis dans l' IF";
}
elseif (isset($_SESSION["AUTH"]) && $_SESSION["AUTH"] == "false") {
        
    header('Location:http://localhost/projets/model-04-2022/dashboard?msg=je suis passé par l ELSE IF...');
}
else{
    echo "je suis dans l' ELSE";
}
    
?>