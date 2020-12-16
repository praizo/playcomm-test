<?php


    if (isset($_POST) and !empty($_POST)) {
        
        // print_r($_POST);
        // die();

        $fname = trim(htmlentities($_POST['fname']));
        $lname = trim(htmlentities($_POST['lname']));
        $email = trim(htmlentities($_POST['email']));
        $event_id = trim(htmlentities($_POST['event']));

        require("attend.php");

        $obj = new Guest;

        $obj->attendance($fname,$lname,$email, $event_id);


    } else {
        header("location: index.php?status='loginfail'");
    }

    


?>