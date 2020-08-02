<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Weebo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="../general/images/logo.png">
    <link rel="stylesheet" type="text/css" href="home-page.css">
    <link rel="stylesheet" type="text/css" href="../header/header.css">
    <link rel="stylesheet" type="text/css" href="../footer/footer.css">

    <link rel="stylesheet" type="text/css" href="../thank-you/thank-you.css">

    <?php include '../general/variables.php'; ?>
</head>
<body>
    <header>
        <?php require_once '../header/header.php' ?>
    </header>
    <main>

        <div class="background">
            <img src="../general/images/background.png" alt="Drones around us" width="100%" height="auto">
        </div>

        <!-------------------------------------------------CHECK IF PARTICIPATED--------------------------------------------------------------->
        <?php
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
        else { //$ip_address isset
            // Step 1: Open Connection
            $con = mysqli_connect($serverName, $userName, $password, $db, $port);

            if ($con) {
                // Step 2: Run Query
                $queryCheckIP = "SELECT * FROM participants WHERE `IP`='$ip_address' AND `finish`=1";
                $result = mysqli_query($con, $queryCheckIP);

                if (mysqli_num_rows($result) >= 1) { //a questionnaire has been answered already from the IP address
                    $styleGallery = "block"; //show gallery
                    $styleParticipate = "none";
                }
                else { //has not participated yet so show modal
                    $styleGallery = "none";
                    $styleParticipate="block";
                }
            }
            else {  //connection to db failed
                header('Location:../db-error/db-error.php');
            }
        }
        ?>
        <!-------------------------------------------------PARTICIPATE--------------------------------------------------------------->
        <main class="content" style="display: <?php echo $styleParticipate ?>">
            <h1>Now, everyone can contribute to<br/>Drone Research</h1>
            <p>
                The Magic Lab goals to study Human-Drone Interaction.<br/>
                Through our platform, drone design is explored and provides an insight into how people perceive drones.<br/>
                Anyone can contribute to our study by performing our online survey.<br/>
            </p>
            <a class="btn" href="../consent-form/consent-form.php" type="button">Participate</a>
        </main>
        <!-------------------------------------------------PARTICIPATE--------------------------------------------------------------->
        <!-------------------------------------------------THANK YOU--------------------------------------------------------------->
        <?php
        if(isset($_GET['ijr7_tej'])) {
            if (($_GET['ijr7_tej']) == '4gd7r2') {
                $style = "block";
            }
            else $style = "none";
        }
        ?>
        <!--Thank-You popup-->

        <!-- The Modal -->
        <div id="ModalThankYou" class="modal" style="display: <?php echo $style ?>">
            <!-- Modal content -->
            <div class="thankYou-content">
                <span class="close">&times;</span>
                <p style="text-align: center; text-transform: uppercase; font-size: 36px; color: var(--main-color); padding-bottom:10px;">Thank you</p>
                <p style="text-align: center; text-transform: uppercase; font-size: 24px;">for participating!</p>
                <p style="width: 80%; padding-left: 40px;">If you would like to enter our draw and have the chance to win one out of ten $50 Amazon vouchers, enter your email address below. You will be updated by the end of August if you were selected.</p>
                <form method="post" action="../thank-you/handle-thank-you.php">
                    <!--email input-->
                    <label class="form-input" for="email">Email</label><br/>
                    <div class="inputs">
                        <input type="email" id="email" name="subject" required style="width:50%; display: block;"><br/>
                    </div>
                    <div class="content form-button">
                        <button type="submit">Submit</button>
                    </div>
                </form>
                <form method="post" action="index.php">
                    <div class="content form-button">
                        <button type="submit" style="background-color:var(--delete-color); display: block;">Not for me</button>
                    </div>
                </form>
                <p style="width: 80%; padding-left: 40px;">For SurveyCircle users (www.surveycircle.com): The Survey Code is: KYTP-8F2F-398T-C44N</p>
            </div>
        </div>
        <!-------------------------------------------------THANK YOU--------------------------------------------------------------->

        <!-------------------------------------------------GALLERY--------------------------------------------------------------->
        <main class="content" style="display: <?php echo $styleGallery ?>">
            <h1>Our Drone Gallery</h1>
            <div class="gallery">
                <?php
                    // Step 1: Open Connection
                    $con = mysqli_connect($serverName, $userName, $password, $db, $port);

                    //step 2: Run query
                    $queryDroneImages = "SELECT * FROM drones";
                    $result = mysqli_query($con, $queryDroneImages);
                    $count = mysqli_num_rows($result);
                    $rand = 63 + rand ( 1 , $count);

                    if($result) {
                            if (mysqli_num_rows($result) != 0) {
                                for($i=$rand; $i<=$rand+2; $i++) {
                                    $queryURL = "SELECT imageURL FROM drones WHERE serialNumber=$i";
                                    $resultDroneURL = mysqli_query($con, $queryURL);
                                    $recordURL = mysqli_fetch_assoc($resultDroneURL)['imageURL'];
                                    ?>
                                    <img class="picture" src="<?php echo $recordURL;?>" alt="drone image">
                                    <?php
                                }
                            }
                        }
                ?>
            </div>
            <a class="btn" href="../gallery/gallery.php" type="button">View all drones</a>
        </main>
    </main>
    <!-------------------------------------------------GALLERY--------------------------------------------------------------->
    <footer>
        <?php require_once '../footer/footer.php' ?>
    </footer>
    <script src="../thank-you/thank-you.js"></script>
</body>
</html>

