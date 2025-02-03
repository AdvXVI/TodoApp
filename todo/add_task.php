// add_task.php

<?php
require_once 'config.php';
if (isset($_POST['add']) && $_POST['task'] != "") {
    $task = $_POST['task'];
    
    $stmt = $db->prepare("INSERT INTO task (task, status) VALUES (:task, 'Pending')");
    $stmt->bindParam(':task', $task);
    $stmt->execute();
    
    header('location:index.php');
}
?>
