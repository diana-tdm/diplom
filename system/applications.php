<?php
    $path = $_SERVER['DOCUMENT_ROOT'];
    require_once "$path/system/db.php";

    $db -> query("INSERT INTO applications (name,email,phone,type,location)
    VALUES('$_POST[name]','$_POST[email]','$_POST[phone]','$_POST[type]','$_POST[location]')");
    echo $_POST[name],$_POST[email],$_POST[phone],$_POST[type],$_POST[location];
    echo "ok";
?>