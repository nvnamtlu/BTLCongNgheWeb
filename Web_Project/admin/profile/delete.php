<?php
    $id = $_GET['id'];
    require("../../app/database/connect.php");
    include("../../app/controllers/profiles.php");
    if(deleteTS($id)){
        header("Location:index.php");
        exit();
    }else{
        echo "something wrong!";
    }
    mysqli_close($conn);
?>
