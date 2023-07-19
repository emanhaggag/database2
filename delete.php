<?php

    


if(isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == 'GET'){
    if(isset($_GET['student_id'])){
        delete_with_id('student',$_GET['student_id']);
    }
}

?>



