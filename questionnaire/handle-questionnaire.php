<?php session_start();
    include '../general/variables.php';

    //variables
    $serialSubject = $_SESSION['serialSubject'];
    $drone = $_GET['droneNum']; //drone serial number according to picture from DB
    $DTStart = $_GET['DTStart'];
    $time = strtotime('now')+date("Z");
    $DTEnd = date('Y-m-d h:i:s', $time);

    $machine = (int)$_POST['machine-animal'];
    $unfriendly = (int)$_POST['unfriendly-friendly'];
    $unintelligent = (int)$_POST['unintelligent-intelligent'];
    $untrustworthy = (int)$_POST['untrustworthy-trustworthy'];
    $childlike = (int)$_POST['childlike-mature'];
    $masculine = (int)$_POST['masculine-feminine'];
    $interactive = (int)$_POST['interactive'];
    $likability = (int)$_POST['likability'];

    $ability = $_POST['ability'];

    //sanitize values
    $ability = filter_var($ability, FILTER_SANITIZE_STRING);

    //trim spaces if there are
    $ability = trim($ability);

    // Step 1: Open Connection
    $con = mysqli_connect($serverName, $userName, $password, $db, $port);

    if($con) {
        // Step 2: Run Query

        //insert dimensions ranking
        //machine-animal
        $queryInsertMachine = "INSERT INTO ranked VALUES('Machine-like', $serialSubject, $drone, $machine)";
        $result = mysqli_query($con, $queryInsertMachine);
        //unfriendly-friendly
        $queryInsertFriendly = "INSERT INTO ranked VALUES('Unfriendly', $serialSubject, $drone, $unfriendly)";
        $result = mysqli_query($con, $queryInsertFriendly);
        //unintelligent-intelligent
        $queryInsertIntelligent = "INSERT INTO ranked VALUES('Unintelligent', $serialSubject, $drone, $unintelligent)";
        $result = mysqli_query($con, $queryInsertIntelligent);
        //untrustworthy-trustworthy
        $queryInsertTrustworthy = "INSERT INTO ranked VALUES('Untrustworthy', $serialSubject, $drone, $untrustworthy)";
        $result = mysqli_query($con, $queryInsertTrustworthy);
        //childlike-mature
        $queryInsertChildlike = "INSERT INTO ranked VALUES('Childlike', $serialSubject, $drone, $childlike)";
        $result = mysqli_query($con, $queryInsertChildlike);
        //masculine-feminine
        $queryInsertMasculine = "INSERT INTO ranked VALUES('Masculine', $serialSubject, $drone, $masculine)";
        $result = mysqli_query($con, $queryInsertMasculine);

        //interactive
        $queryInsertInteractive = "INSERT INTO ranked VALUES('Not at all interactive', $serialSubject, $drone, $interactive)";
        $result = mysqli_query($con, $queryInsertInteractive);
        //likable
        $queryInsertLikable = "INSERT INTO ranked VALUES('Not at all likable', $serialSubject, $drone, $likability)";
        $result = mysqli_query($con, $queryInsertLikable);

        //drone abilities answer
        $queryInsertOpenAnswer = "INSERT INTO questionnaires VALUES ('$DTStart', $serialSubject, $drone, '$DTEnd', '$ability')";
        $result = mysqli_query($con, $queryInsertOpenAnswer);

        // Step 3:Close Connection
        mysqli_close($con);

        header('Location:questionnaire.php');
    }
    //connection to db failed
    else header('Location:../db-error/db-error.php');
?>






