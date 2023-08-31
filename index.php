<!DOCTYPE html>
<html>
<head>
  <title>Task Manager</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>
<body>
<header class="bg-dark text-white py-4">
    <div class="container text-center">
      <h1>Task Manager</h1>
    </div>
  </header>
<main class="container mt-4">
    <div class="row">
      <div class="col-md-6">
        <div class="bg-white p-4 rounded shadow">
          <h2 class="mb-3">Task List</h2>
          <a class="btn btn-success" href="new_task.php">Insert new Task</a>
<?php
require_once 'conection.php';

$taskobjct = new task ();

$link = $taskobjct->conecta_mysqli();

$sql = "select * FROM taskmanager";

$executa=mysqli_query($link,$sql);

if($executa){
    print "<table class='table table-hover table-striped table-bordered'>";
    print "<tr>";
    print "<th> TASK ID </th>";
    print "<th> TASK NAME </th>";
    print "<th> TASK DATE </th>";
    print "<th> ACTIONS </th>";
    print "</tr>";
    while ($row=mysqli_fetch_assoc($executa)){
      
        print "<tr>";
        print "<td>".$row['task_id']."</td>";
        print "<td>";
        //somente se action estiver definino e se action for igual a detail e se taskid for igual a taskid da consulta
        if (isset($_POST['action']) && $_POST['action'] === 'detail' && $_POST['task_id'] === $row['task_id']) {
            echo  $row['task_name']."<br></br>"."Detalhes - ".$row['task_details'];
        } else {
            echo $row['task_name'];
        }
        print "</td>";        
        print "<td>".$row['task_date']."</td>";
        print "<td>

        <form method='post'>
          <input type='hidden' name='task_id' value='".$row['task_id']."'>
          <input type='hidden' name='task_details' value='".$row['task_details']."'>
          <input type='hidden' name='task_name' value='".$row['task_name']."'>

          <button type='submit' id='btnedit' name='action' value='edit' class='btn btn-primary'>Edit</button>

          <button type='submit' id='btndetail' name='action' value='detail' class='btn btn-primary'>Details</button>
          <input type='hidden' name='actiondetail' value='detail'>

          <button type='submit' id='btndelete' name='action' value='delete' class='btn btn-danger'>
          <input type='hidden' name='actiondelete' value='delete'>

          <i class='fas fa-trash'></i>
          </button>
        </form>

        </td>";
        print "</tr>"; 
    }


    if(isset($_POST['action'])){
      $action = $_POST['action'];
      $task_id = $_POST['task_id'];
      $task_details = $_POST['task_details'];
      $task_name = $_POST['task_name'];
      
      switch($action) {
        case 'edit':
          include 'update_task.php';
          
      
          break;
      
          case 'delete': 
            $sql = "DELETE FROM taskmanager WHERE task_id = '$task_id'";

            $executa = mysqli_query($link,$sql);

            if($executa) {
              //NAO TEM COMO FUGIR DO JAVASCRIPT NE FILHAO
              print "<script>alert('Deleted task successful');</script>";
              print "<script>location.href='?page=index.php';</script>";
            }

            break; 

          case 'detail': 
          break; 
      }
      }
    }
?>
  </main>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

