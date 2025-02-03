<?php
$host = "dpg-cufmd0jtq21c73f7fddg-a"; // Example: "dpg-abc1234.render.com"
$dbname = "todo_gqwg";
$user = "todo_gqwg_user";
$password = "eYzVGBPmKavrI8V5baxERpWdY10ShW4v";

try {
    $db = new PDO("pgsql:host=$host;dbname=$dbname", $user, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>
