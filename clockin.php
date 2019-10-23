<?php
    $visitor = json_decode($_POST["visitor"]);
    $name = $visitor->Name;
    $visitorName = $visitor->visitorName;
    $address = $visitor->address;
    $phone = $visitor->phone;
    $email = $visitor->email;
    $nic = $visitor->nic;

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Clock In</title>
        <link rel = "stylesheet" href="./css/register.css">
        <link rel = "stylesheet" href="./css/reset.css">
        <link rel = "stylesheet" href="./css/global.css">
    </head>
    <body>
        <div class="main-container clockin-container">
            <?php require_once("header.php") ?>
            <div class="field-container">
                <div class="field-name">Host Name</div>
                <div class="field-value">
                    <input type="text" value="<?php echo $name?  $name : "" ?>">
                </div>
            </div>
            <div class="field-container">
                <div class="field-name">Phone No</div>
                <div class="field-value">
                    <input type="text" value="<?php echo $phone?  $phone : ""?>">
                </div>
            </div>
            <div class="field-container">
                <div class="field-name">Visitor Name</div>
                <div class="field-value">
                    <input type="text" value="<?php echo $visitorName?  $visitorName : "" ?>" disabled>
                </div>
            </div>
            <div class="field-container">
                <div class="field-name">NIC</div>
                <div class="field-value">
                    <input id="nic" type="text" value="<?php echo $nic?  $nic: "" ?>">
                </div>
            </div>
            <div class="field-container">
                <div class="field-name">E-mail</div>
                <div class="field-value">
                    <input type="text" value="<?php echo $email?  $email : "" ?>">
                </div>
            </div>
            <div class="clockin-button">
                Clock In
            </div>
        </div>
        <script src="./js/jquery-1.10.2.min.js"></script>
        <script src="./js/jquery-ui.js"></script>
        <script>
            $(".clockin-button").click(function(){
                const nic = $("#nic").val();
                $.ajax({
                    url : "clockVisitor.php",
                    method: "POST",
                    data:{nic:nic},
                    success:function(data){
                        alert(data);
                    }
                })
            });
        </script>
    </body>
</html>
