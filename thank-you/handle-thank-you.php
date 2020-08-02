<?php
    include '../general/variables.php';

    if(!empty($_POST['subject'])) {

        //variables
        $subject = $_POST['subject'];

        //sanitize values
        $subject = filter_var($subject, FILTER_SANITIZE_EMAIL);

        //validate values
        $subject = filter_var($subject, FILTER_VALIDATE_EMAIL);

        if(empty($subject)) { //the email isn't valid
            header('Location:../index/index.php'); //skip as if empty
        }
        else {
            // Step 1: Open Connection
            $con = mysqli_connect($serverName, $userName, $password, $draw, $port);

            if($con) {
                // Step 2: Run Query
                $queryAddEmailToSubjects = "INSERT INTO `draw`(`email`) VALUES ('$subject')";
                $result = mysqli_query($con, $queryAddEmailToSubjects);

                if($result) { //query successful
                    header('Location:../index/index.php');
                }
                else {
                    header("Location:../index/index.php"); //skip as if empty- the email is already in DB
                }
                // Step 3:Close Connection
                mysqli_close($con);
            }
            //connection to db failed
            else header('Location:../db-error/db-error.php');
        }
    }
    else { //email was submitted empty
        header("Location:../index/index.php"); //skip as if empty
    }


