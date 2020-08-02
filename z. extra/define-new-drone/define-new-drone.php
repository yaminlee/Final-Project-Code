<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Weebo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="../../general/images/logo.png">
    <link rel="stylesheet" type="text/css" href="define-new-drone.css">
    <link rel="stylesheet" type="text/css" href="../../header/header.css">
    <link rel="stylesheet" type="text/css" href="../../footer/footer.css">
</head>
<body>
    <header>
        <?php require_once '../header/header.php' ?>
    </header>
    <?php
        //variables from upload-drone.php
        //$file = $_POST['drone-file'];
        //$url = $_POST['drone-url'];

        //sanitize values
        //$url = filter_var($email, FILTER_SANITIZE_URL);

        //validate values
        //$url = filter_var($email, FILTER_VALIDATE_URL);
        //var_dump($_POST);
    ?>
    <main class="form">
        <div class="form-content">
            <h1>define a new drone</h1>
            <h2>***special instructions***</h2>
            <h2 class="required">Required*</h2>
            <form method="post" action="##">
                <!--drone-->
                <div class="picture">
                    <img  src="<?php //$file ?>" alt="drone image" style="float: right">
                    <a href="<?php //$url ?>"><?php //$url ?></a>
                </div>
                <!--eyes-->
                <label class="form-input" for="eyes">Does the drone have eyes?</label><label class="required">*</label><br/>
                <div class="inputs">
                    <input type="radio" id="eyes" name="eyes" value="yes-eyes" required> Yes<br/>
                    <input type="radio" id="eyes" name="eyes" value="no-eyes"> No<br/>
                </div>
                <!--if eyes yes-->
                <div class="if-yes-show">
                    <label class="form-input" for="colorful">Are the eyes colorful?</label><label class="required">*</label><img class="input-help" src="../../general/images/question-mark.svg" alt="Help"><br/>
                    <div class="inputs">
                        <input type="radio" id="colorful" name="colorful" value="yes-colorful" required> Yes<br/>
                        <input type="radio" id="colorful" name="colorful" value="no-colorful"> No<br/>
                    </div>
                </div>
                <!--mouth-->
                <label class="form-input" for="mouth">Does the drone have a mouth?</label><label class="required">*</label><br/>
                <div class="inputs">
                    <input type="radio" id="mouth" name="mouth" value="yes-mouth" required> Yes<br/>
                    <input type="radio" id="mouth" name="mouth" value="no-mouth"> No<br/>
                </div>
                <!--camera-->
                <label class="form-input" for="camera">Does the drone have a camera?</label><label class="required">*</label><br/>
                <div class="inputs">
                    <input type="radio" id="camera" name="camera" value="yes-camera" required> Yes<br/>
                    <input type="radio" id="camera" name="camera" value="no-camera"> No<br/>
                </div>
                <!--propeller guards-->
                <label class="form-input" for="guards">Does the drone have propeller guards?</label><label class="required">*</label><br/>
                <div class="inputs">
                    <input type="radio" id="guards" name="guards" value="yes-guards" required> Yes<br/>
                    <input type="radio" id="guards" name="guards" value="no-guards"> No<br/>
                </div>
                <!--shape-->
                <label class="form-input" for="shape">Is the drone round or straight?</label><label class="required">*</label><img class="input-help" src="../../general/images/question-mark.svg" alt="Help"><br/>
                <div class="inputs">
                    <input type="radio" id="shape" name="shpae" value="round" required> Round<br/>
                    <input type="radio" id="shape" name="shape" value="straight"> Straight<br/>
                </div>

                <div class="content form-button">
                    <button type="submit">Upload</button>
                </div>
            </form>
        </div>
    </main>
    <footer>
        <?php require_once '../footer/footer.php' ?>
    </footer>
</body>
</html>