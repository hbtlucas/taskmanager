<?php 
      require_once 'conection.php';

      $taskobj = new task ();
      
      $link = $taskobj->conecta_mysqli();
      
    $newtaskdetail = $_POST['newtaskDetail'];
    $newtaskname = $_POST['newtaskName'];
    $task_id = $_POST['task_id'];    

    if (isset($newtaskdetail)) {
      $sql = "UPDATE taskmanager SET task_details = '$newtaskdetail' WHERE task_id = '$task_id'";
      $update = mysqli_query($link, $sql);
      if ($update) {
        header('location: index.php');
      }
    } else {
    echo mysqli_error($link);
    }
    if(isset($newtaskname)){
      $sql = "UPDATE taskmanager SET task_name = '$newtaskname' WHERE task_id = '$task_id'";
      $update = mysqli_query($link, $sql);
      if ($update) {
        header('location: index.php');
      }
    } else {
    echo mysqli_error($link);
    } 
    
  ?>