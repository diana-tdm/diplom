<?php
    $path = $_SERVER['DOCUMENT_ROOT'];
    require_once "$path/system/db.php";

    $db -> query("INSERT INTO reviews (name,email,review)
    VALUES('$_POST[name]','$_POST[email]','$_POST[text]')");
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode([
        "error" => "ok"
    ]);
?>