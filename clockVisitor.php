<?php

require_once("Core/init.php");

if($_POST["nic"]){
    $qr = new QRController();
    if($_POST["action"] == "clockin"){
        if($qr->clockTime(array(
            'clockin' => date("Y-m-d h:i:sa")
        ),$_POST["nic"])){
            echo "success";
        }else{
            echo "failed";
        }
    }
    if($_POST["action"] == "clockout"){
        if($qr->clockTime(array(
            'clockout' => date("Y-m-d h:i:sa")
        ),$_POST["nic"])){
            echo "success";
        }else{
            echo "failed";
        }
    }
}

 ?>
