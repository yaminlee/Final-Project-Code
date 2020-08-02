<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Weebo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="../general/images/logo.png">
    <link rel="stylesheet" type="text/css" href="questionnaire.css">
    <link rel="stylesheet" type="text/css" href="../header/header.css">
    <link rel="stylesheet" type="text/css" href="../footer/footer.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <?php include '../general/variables.php'; ?>
</head>
<body>
<main class="form">
    <div class="form-content">
        <!--check on all questionnaires if the email completed a questionnaire on a drone, if not show the drone-->

        <?php
        if(!isset($_SESSION['serialSubject'])) {
            header('Location:../consent-form/consent-form.php');
        }
        else {
            // Step 1: Open Connection
            $con = mysqli_connect($serverName, $userName, $password, $db, $port);

            //variables
            $serialSubject = $_SESSION['serialSubject'];
            $time = strtotime('now')+date("Z");
            $DTStart = date('Y-m-d h:i:s', $time);

            if($con) {
                // Step 2: Run Query

                // fetch all answered questionnaires
                $queryAnswered = "SELECT droneNumber FROM questionnaires WHERE serialSubject='$serialSubject'";
                $dronesQuested = mysqli_query($con, $queryAnswered);

                // store all answered question on array 
                $all_answered_questions = array();
                while($row = mysqli_fetch_assoc($dronesQuested)){
                    array_push($all_answered_questions, $row['droneNumber']);
                }


                //fetch all drones in DB
                $queryAllDrones = "SELECT serialNumber FROM drones";
                $allDrones = mysqli_query($con, $queryAllDrones);

                // store all drones questions on array
                $all_drones_questions = array();
                while($row = mysqli_fetch_assoc($allDrones)){
                    array_push($all_drones_questions, $row['serialNumber']);
                }



                if($dronesQuested && $allDrones){ //if both queries worked- true
                    if (mysqli_num_rows($dronesQuested) != 0) { //check only if the participant participated already

                        if(mysqli_num_rows($dronesQuested) == $countCheckup && !isset($_GET['checkup'])) { //checkup phase
                            header('Location:../checkup/checkup.php');
                        }
                        else if(mysqli_num_rows($dronesQuested) == $countFinishSurvey) { //number of drones to be tested per survey
                            header('Location:../end-questions/end-questions.php');
                        }
                        else { // <15 or 15< <30 - continue

                            // fetch the random drone record from the database which is not yet answered
                            $not_yet_answered_questions = array_diff($all_drones_questions, $all_answered_questions);
                            $random_question_key = array_rand($not_yet_answered_questions);
                            $queryURL = "SELECT imageURL FROM drones WHERE serialNumber=".$not_yet_answered_questions[$random_question_key];
                            $resultDroneURL = mysqli_query($con, $queryURL);
                            $recordURL = mysqli_fetch_assoc($resultDroneURL)['imageURL'];

                        }
                    }
                    else { //first questionnaire
                        //fetch all drones in DB
                        $queryAllDrones = "SELECT * FROM drones";
                        $allDrones = mysqli_query($con, $queryAllDrones);
                        $count = mysqli_num_rows($allDrones);

                        $rand = 63 + rand ( 1 , $count);//randomize the drone number to be questioned

                        $nextDroneQuery = "SELECT imageURL FROM drones WHERE serialNumber=$rand";
                        $resultNext = mysqli_query($con, $nextDroneQuery);
                        $recordURL = mysqli_fetch_assoc($resultNext)['imageURL'];

                        $random_question_key = "temp";
                        $not_yet_answered_questions[$random_question_key] = $rand;

                    }
                }
            }
            else { //connection to DB failed
                header('Location:../db-error/db-error.php');
            }
            ?>
            <?php
                $num = mysqli_num_rows($dronesQuested);
                $rate = (($num / 30)*100).'%' ; //rate to finish survey in percentage
            ?>
            <div class="w3-light-grey w3-round-xlarge">
                <div class="w3-container w3-blue w3-round-xlarge" style="padding-bottom:10px;width:<?php echo $rate?>; height:25px;"></div>
            </div>
            <img  src="<?php echo $recordURL?>" alt="drone image" class="drone-form">
            <!--get a drone from DB and keep it as a variable to save current data-->
            <?php
            // Step 3:Close Connection
            mysqli_close($con);
        }
        ?>
        <form method="post" action="handle-questionnaire.php?droneNum=<?php echo $not_yet_answered_questions[$random_question_key]; ?>&DTStart=<?php echo $DTStart ?>">
            <h3>Please rate your impression on this scale:</h3><label class="required">*</label><br/>
            <div class="slides-inputs">
                <!--machine-animal slider-->
                <div class="slidecontainer">
                    <h4>Machine-like</h4>
                    <div class="slide-div">
                        <span class= "demo" id="demo"></span>
                        <input type="range" min="0" max="100" value="50" class="slider" name="machine-animal">
                    </div>
                    <h4>Animal-like</h4>
                </div>
                <!--unfriendly-friendly slider-->
                <div class="slidecontainer">
                    <h4>Unfriendly</h4>
                    <div class="slide-div">
                        <span class= "demo" id="demo"></span>
                        <input type="range" min="0" max="100" value="50" class="slider" name="unfriendly-friendly">
                    </div>
                    <h4>Friendly</h4>
                </div>
                <!--unintelligent-intelligent slider-->
                <div class="slidecontainer">
                    <h4>Unintelligent</h4>
                    <div class="slide-div">
                        <span class= "demo" id="demo"></span>
                        <input type="range" min="0" max="100" value="50" class="slider" name="unintelligent-intelligent">
                    </div>
                    <h4>Intelligent</h4>
                </div>
                <!--untrustworthy-trustworthy slider-->
                <div class="slidecontainer">
                    <h4>Untrustworthy</h4>
                    <div class="slide-div">
                        <span class= "demo" id="demo"></span>
                        <input type="range" min="0" max="100" value="50" class="slider" name="untrustworthy-trustworthy">
                    </div>
                    <h4>Trustworthy</h4>
                </div>
                <!--childlike-mature slider-->
                <div class="slidecontainer">
                    <h4>Childlike</h4>
                    <div class="slide-div">
                        <span class= "demo" id="demo"></span>
                        <input type="range" min="0" max="100" value="50" class="slider" name="childlike-mature">
                    </div>
                    <h4>Mature</h4>
                </div>
                <!--masculine-feminine slider-->
                <div class="slidecontainer">
                    <h4>Masculine</h4>
                    <div class="slide-div">
                        <span class= "demo" id="demo"></span>
                        <input type="range" min="0" max="100" value="50" class="slider" name="masculine-feminine">
                    </div>
                    <h4>Feminine</h4>
                </div>
            </div>
            <label class="form-input" for="interactive">How much would you like to interact with this drone?</label><label class="required">*</label><br/>
            <div class="slides-inputs">
                <!--interactive slider-->
                <div class="slidecontainer">
                    <h4>Not at all</h4>
                    <div class="slide-div">
                        <span class= "demo" id="demo"></span>
                        <input type="range" min="0" max="100" value="50" class="slider" id="interactive" name="interactive">
                    </div>
                    <h4>Extremely</h4>
                </div>
            </div>
            <label class="form-input" for="likability">How much do you like this drone?</label><label class="required">*</label><br/>
            <div class="slides-inputs">
                <!--likable slider-->
                <div class="slidecontainer">
                    <h4>Not at all</h4>
                    <div class="slide-div">
                        <span class= "demo" id="demo"></span>
                        <input type="range" min="0" max="100" value="50" class="slider" id="likability" name="likability">
                    </div>
                    <h4>Extremely</h4>
                </div>
            </div>
            <!--ability input-->
            <label class="form-input" for="ability">What do you think this drone can do?</label><br/>
            <div class="inputs">
                <textarea rows="3" type="text" id="ability" name="ability"></textarea><br/>
            </div>

            <div class="content form-button">
                <button id="count" type="submit">Submit</button>
            </div>
        </form>
    </div>
</main>
<script src="questionnaire.js"></script>
</body>
</html>