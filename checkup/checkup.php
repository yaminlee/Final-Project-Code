<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Weebo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="../general/images/logo.png">
    <link rel="stylesheet" type="text/css" href="../questionnaire/questionnaire.css">
    <link rel="stylesheet" type="text/css" href="../header/header.css">

    <?php include '../general/variables.php'; ?>
</head>
<body>
<main class="form">
    <div class="form-content">
        <h1>checkup phase</h1>
        <h2>Great work! Before proceeding...</h2>

        <?php
            $value = rand ( 0 , 100);//randomize the value
        ?>
        <?php
        if(isset($_GET['valueError'])) {
            if (($_GET['valueError']) == true) {
                $valueError = $_GET['valueError'];
                ?>
                <div class="error">
                    <span class="closebtn" onclick="this.parentElement.style.display='none';">×</span>
                    Were sorry, you didn't rate the scale at the required value. You have one last try!
                </div>
                <?php
            }
        }
        else {
            $valueError = false;
        }
        ?>
        <form method="post" action="handle-checkup.php?value=<?php echo $value ?>&valueError=<?php echo $valueError?>">
            <h3>Please choose the value <?php echo $value ?> on this scale:</h3><label class="required">*</label><br/>
            <div class="slides-inputs">
                <!--checkup slider-->
                <div class="slidecontainer">
                    <h4>0</h4>
                    <div class="slide-div">
                        <span class= "demo" id="demo"></span>
                        <input type="range" min="0" max="100" value="50" class="slider" name="checkup">
                    </div>
                    <h4>100</h4>
                </div>
            </div>
            <div class="content form-button">
                <button type="submit">Continue</button>
            </div>
        </form>
    </div>
</main>
<script src="../questionnaire/questionnaire.js"></script>
</body>
</html>
