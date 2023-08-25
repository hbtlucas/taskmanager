<?php
require_once 'conection.php';

$taskobj = new task ();

$link = $taskobj->conecta_mysqli();

$taskName = $_POST['taskName'];
$taskDetails = $_POST['taskDetails'];

if (isset($taskName) && (isset($taskDetails))){
    $sql = "INSERT INTO taskmanager (task_name, task_details) VALUES ('$taskName', '$taskDetails')";
    mysqli_query($link,$sql);
    header("location: index.php");

}



?>