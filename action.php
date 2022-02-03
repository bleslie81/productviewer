<?php
    require_once "model.php";

    if(isset($_GET['remove'])){
        $id=$_GET['remove'];
        echo '<div class="message">Minden oké!'.$id.'</div>';
    }

?>