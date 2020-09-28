<?php 

if(isset($_POST)){
    
    //Database connnection
    require_once 'connection.php';

    //Start session
    if(!isset($_SESSION)){
        session_start();
    }

    //Take values from Form  
    $task_name = isset($_POST['task_name']) ? mysqli_real_escape_string($conn, $_POST['task_name']) : false;
    $organization = isset($_POST['organization']) ? mysqli_real_escape_string($conn, $_POST['organization']) : false;
    $hours = isset($_POST['hours']) ? mysqli_real_escape_string($conn, $_POST['hours']) : false;
}
    //Insert values on table record_hours 
        $insert = "INSERT INTO record_hours VALUES(null, '$task_name', '$organization', '$hours');";
        $save = mysqli_query($conn, $insert);
        
        if($save){
            $_SESSION['Save'] = "Your information was saved!";
        }else{
            $_SESSION['Errors']['General'] = "We could not save your";
        }

?>