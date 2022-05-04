<?php
    
if (!isset($_SESSION["AUTH"])) {
        
    header('Location:http://localhost/projets/model-04-2022/dashboard/?msg=Vous devez vous connecter avant!');  

    // echo "je suis dans l' IF";
}
elseif (isset($_SESSION["AUTH"]) && $_SESSION["AUTH"] == "false") {
        
    header('Location:http://localhost/projets/model-04-2022/dashboard/?msg=Vous devez vous connecter à nouveau!');
}
else{
    // echo "je suis dans l' ELSE";
}
    
?>