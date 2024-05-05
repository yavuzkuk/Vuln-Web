<?php

    if(isset($_SESSION["color"]) || isset($_SESSION["message"]))
    {
        $alert = "<div style='margin:0' class='font-weight-bold alert alert-".$_SESSION['color']."'>".$_SESSION["message"]."</div>";
        echo $alert;
        unset($_SESSION["message"]);
        unset($_SESSION["color"]);
    }
?>