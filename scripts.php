<?php
    //INCLUDE DATABASE FILE
    require 'database.php';
    //SESSSION IS A WAY TO STORE DATA TO BE USED ACROSS MULTIPLE PAGES
    session_start();

    //ROUTING
    if(isset($_POST['save']))       saveTask();
    if(isset($_POST['update']))      updateTask();
    if(isset($_POST['delete']))      deleteTask();
    

    function getTasks()
    {
        //CODE HERE
        //SQL SELECT
        echo "Fetch all tasks";
    }


    function saveTask()
    {
        //CODE HERE
        //SQL INSERT
        $title = $_POST['title'];
        $type  = $_POST['typeid'] ;
        $priority = $_POST['priorityid'];
        $status = $_POST['statusid'];
        $date = $_POST['date'];
        $description = $_POST['description'];
        // die() ;
        global $con;
        $query = "INSERT INTO task(taskTitle,typeid,priorityid,statusid,taskdate,taskDescription) VALUES ('$title','$type','$priority','$status','$date','$description')";

        if (mysqli_query($con, $query)) {
            $_SESSION['message'] = "Task has been added successfully !";
            header('location: index.php');
          } else {
            echo "Error: here eroor " . $query . "<br>" . mysqli_error($con);
          }
        // $_SESSION['message'] = "Task has been added successfully !";
		// header('location: index.php');
    }

    function updateTask()
    {
        //CODE HERE
        //SQL UPDATE
        $_SESSION['message'] = "Task has been updated successfully !";
		header('location: index.php');
    }

    function deleteTask()
    {
        //CODE HERE
        //SQL DELETE
        $_SESSION['message'] = "Task has been deleted successfully !";
		header('location: index.php');
    }


    function getTasks(){
         
      $result=" SELECT * FROM  task INNER JOIN priority ON( task.priorityid = priority.priorityid)  INNER JOIN  type ON (task.typeid = type.typeid) INNER JOIN  statues ON (task.statusid = statues.statusid) ";

      $query = array();
  

      

      





    }

?>