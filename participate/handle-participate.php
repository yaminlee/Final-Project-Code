<?php session_start();
    include '../general/variables.php';

    //IP address
    //whether ip is from share internet
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip_address = $_SERVER['HTTP_CLIENT_IP'];
    } //whether ip is from proxy
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } //whether ip is from remote address
    else {
        $ip_address = $_SERVER['REMOTE_ADDR'];
    }

    if(!isset($ip_address)) {
        //pop up a message that there is a problem (the IP address collection wasn't working)
        header('Location:../db-error/db-error.php');
    }

    //variables
    $age = (int)$_POST['age'];
    $gender = $_POST['gender'];
    $country = $_POST['country'];
    $education = $_POST['education'];

    // Step 1: Open Connection
    $con = mysqli_connect($serverName, $userName, $password, $db, $port);

    if ($con) {
        // Step 2: Run Query
        $queryCheckIP = "SELECT * FROM participants WHERE `IP`='$ip_address'";
        $result = mysqli_query($con, $queryCheckIP);

        if (mysqli_num_rows($result) >= 1) { //a questionnaire has been answered already from the IP address
            //check if only the IP is similar
            $queryCheckParticipant = "SELECT * FROM `participants` WHERE(`IP`='$ip_address' AND `gender`='$gender' AND `country`='$country' AND `age`=$age AND `education`='$education')";
            $result = mysqli_query($con, $queryCheckParticipant);
            if (mysqli_num_rows($result) == 1) { //the participant exists already
                $emailError = true;
                header("Location:participate.php?irjt4_dj=t3bs7w"); //break()
            }
        } //ELSE- if he is a new participant or a participant from the same IP address but different
        //get next serial number of the participant
        $queryAllParticipants = "SELECT * FROM participants";
        $allParticipants = mysqli_query($con, $queryAllParticipants);
        $count = mysqli_num_rows($allParticipants);

        $serial = $count + 1;

        //new participant
        // Step 2: Run Query
        $queryAddNewParticipant = "INSERT INTO participants VALUES($serial, '$ip_address', '$gender', '$country',$age, '$education', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL,NULL )";
        $result = mysqli_query($con, $queryAddNewParticipant);

        if ($result) { //query successful
             $_SESSION['serialSubject'] = $serial;
             //START the survey
             header('Location:../questionnaire/questionnaire.php');
        }
        else header('Location:../db-error/db-error.php');

        // Step 3:Close Connection
       mysqli_close($con);
    }
    //connection to db failed
    else header('Location:../db-error/db-error.php');
?>

