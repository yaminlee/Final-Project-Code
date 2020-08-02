<?php session_start();
    include '../general/variables.php';

    //variables
    $serialSubject = $_SESSION['serialSubject'];

    $ranked = (int)$_POST['checkup'];
    $value = (int)$_GET['value']; //randomized value to be ranked
    if(isset($_GET['valueError'])) {
        $valueError = $_GET['valueError'];
    }


    if ($ranked == $value) { //it doesn't matter if it's first/second time if he ranked correctly
        $checkup = true;
        header("Location:../questionnaire/questionnaire.php?checkup=$checkup"); //continue survey
    }
    else if (isset($valueError) && $valueError == true) { //it's his second try and didn't rank correctly again

        //if it's the second time, stop survey and delete all records from DB
        // Step 1: Open Connection
        $con = mysqli_connect($serverName, $userName, $password, $db, $port);

        if($con) {
            // Step 2: Run Query

            //drop all records from 'ranked' TABLE
            $queryDeleteRankedRecords = "DELETE FROM `ranked` WHERE `serialSubject` = $serialSubject";
            $result1 = mysqli_query($con, $queryDeleteRankedRecords);

            //drop all records from 'questionnaires' TABLE
            $queryDeleteQuesRecords = "DELETE FROM `questionnaires` WHERE `serialSubject`= $serialSubject";
            $result2 = mysqli_query($con, $queryDeleteQuesRecords);

            if ($result1 && $result2) {
                //drop record from 'participants' TABLE
                $queryDeleteParticipantRecords = "DELETE FROM `participants` WHERE `serial` = $serialSubject";
                $result3 = mysqli_query($con, $queryDeleteParticipantRecords);

                if ($result3) {
                    header("Location:../index/index.php"); //break()
                    //pop up a message?
                }
            }
            // Step 3:Close Connection
            mysqli_close($con);
        }
        //connection to db failed
        else header('Location:../db-error/db-error.php');
    }
    else { //it's his first try and he didn't rank correctly once
        //give a second chance
        $valueError = true;
        header("Location:checkup.php?valueError=$valueError"); //break()
    }
    ?>