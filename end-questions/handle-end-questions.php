<?php session_start();

    include '../general/variables.php';

    //variables
    $serialSubject = $_SESSION['serialSubject'];

    $see = (int)$_POST['see'];
    $whereSee = $_POST['yes-see'];

    $pilot = (int)$_POST['pilot'];

    $own = (int)$_POST['own'];
    $whichOwn = $_POST['yes-own'];

    $pet = (int)$_POST['pet'];
    $whatPet = $_POST['yes-pet'];
    $whenPet = $_POST['yes-when'];

    //sanitize string values
    $whereSee = filter_var($whereSee, FILTER_SANITIZE_STRING);
    $whichOwn = filter_var($whichOwn, FILTER_SANITIZE_STRING);
    $whatPet = filter_var($whatPet, FILTER_SANITIZE_STRING);
    $whenPet = filter_var($whenPet, FILTER_SANITIZE_STRING);

    //trim spaces if there are
    $whereSee = trim($whereSee);
    $whichOwn = trim($whichOwn);
    $whatPet = trim($whatPet);
    $whenPet = trim($whenPet);

    // Step 1: Open Connection
    $con = mysqli_connect($serverName, $userName, $password, $db, $port);

    if ($con) {
        // Step 2: Run Query
        $queryAddEndAnswers = "UPDATE participants SET see=$see, whereSee='$whereSee', pilot=$pilot, own=$own, whichOwn='$whichOwn', pet=$pet, whatPet='$whatPet', whenPet='$whenPet', `finish`=1 WHERE serial = '$serialSubject'";
        $result = mysqli_query($con, $queryAddEndAnswers);

        session_unset();
        session_destroy();

        // Step 3:Close Connection
        mysqli_close($con);
        header('Location:../index/index.php?ijr7_tej=4gd7r2'); //end=true
    }
    //connection to db failed
    else header('Location:../db-error/db-error.php');
?>







