<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Weebo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="../general/images/logo.png">
    <link rel="stylesheet" type="text/css" href="participate.css">
    <link rel="stylesheet" type="text/css" href="../header/header.css">
    <link rel="stylesheet" type="text/css" href="../footer/footer.css">

    <?php include '../general/variables.php'; ?>

</head>
<body>
    <main class="form">
        <div class="form-content">
            <h1>participation form</h1>
            <h2>Please insert the following details about yourself</h2>
            <h2 class="required">Required*</h2>
            <form method="post" action="handle-participate.php">

                <?php
                if(isset($_GET['irjt4_dj'])) {
                    if (($_GET['irjt4_dj']) == 't3bs7w') {
                        ?>
                        <div class="error">
                            <span class="closebtn" onclick="this.parentElement.style.display='none'; location.href='../index/index.php'">×</span>
                            We're sorry, you've participated already
                        </div>
                        <?php
                    }
                }
                ?>

                <!--age input-->
                <label class="form-input" for="age">Age</label><label class="required">*</label><br/>
                <div class="inputs">
                    <input type="number" id="age" name="age" min="18" max="99" required>
                </div>

                <!--gender input-->
                <label class="form-input" for="gender">Gender</label><label class="required">*</label><br/>
                <div class="inputs">
                    <?php
                    // Step 1: Open Connection
                    $con = mysqli_connect($serverName, $userName, $password, $db, $port);

                    //step 2: Run query
                    $queryListOfGenders = "SELECT * FROM genders";
                    $result = mysqli_query($con, $queryListOfGenders);

                    if($result) {
                        if (mysqli_num_rows($result) != 0) {
                            while ($record = mysqli_fetch_assoc($result)) {
                                ?>
                                <input type="radio" id="gender" name="gender" value="<?php echo $record['gender'];?>" required> <?php echo ' '; echo $record['gender']; ?><br/>
                                <?php
                            }
                        }
                    }
                    ?>
                </div>

                <!--country input-->
                <label class="form-input" for="country">Country</label><label class="required">*</label><br/>
                <div class="inputs">
                    <select id="country" name="country" required>
                        <?php

                        //step 2: Run query
                        $queryListOfCountries = "SELECT * FROM countries";
                        $result = mysqli_query($con, $queryListOfCountries);

                        if($result) {
                            if (mysqli_num_rows($result) != 0) {
                                while ($record = mysqli_fetch_assoc($result)) {
                                    ?>
                                    <option value="<?php echo $record['country'];?>"><?php echo $record['country']; ?></option>
                                    <?php
                                }
                            }
                        }
                        ?>
                    </select>
                </div>

                <!--education level input-->
                <label class="form-input" for="education">Highest educational level completed:</label><label class="required">*</label><br/>
                <div class="inputs">
                    <?php
                        //step 2: Run query
                        $queryListOfEducationLevels = "SELECT education,value FROM education_levels ORDER BY level ";
                        $result = mysqli_query($con, $queryListOfEducationLevels);

                        if($result) {
                            if (mysqli_num_rows($result) != 0) {
                                while ($record = mysqli_fetch_assoc($result)) {
                                    ?>
                                    <input type="radio" id="education" name="education"
                                           value="<?php echo $record['value']; ?>"
                                           required><?php echo ' '; echo $record['education']; ?><br/>
                                    <?php
                                }
                            }
                        }
                        ?>
                </div>

                <div class="content form-button">
                    <button type="submit">Participate</button>
                </div>

                <?php
                    //step 3: Close connection
                    mysqli_close($con);
                ?>
            </form>
        </div>
    </main>
</body>
</html>