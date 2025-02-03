// update_task.php

<?php
require_once 'config.php';

if ($_GET['task_id'] != "") {
    $task_id = $_GET['task_id'];

    $stmt = $db->prepare("UPDATE task SET status = 'Done' WHERE task_id = :task_id");
    $stmt->bindParam(':task_id', $task_id, PDO::PARAM_INT);
    $stmt->execute();
    
    header('location: index.php');
}
?>
