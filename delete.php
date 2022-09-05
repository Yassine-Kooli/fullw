<?php 
    $title = 'Delete';

    require_once 'includes/header.php';
    require_once 'db/conn.php';

    var_dump($crud);

    if (!isset($_GET['id'])) {
        //echo "error";
        include "includes/errorMessage.php";
        header("location: viewrecords.php");

    } else {
        //get id values
        $id = $_GET['id'];
        //call delete function
        $result = $crud->deleteForm($id);
        //redirect to list
        if ($result) {
            header("location:viewrecords.php");
        } else {
            //echo "error";
            include "includes/errorMessage.php";
            }

    }
?>