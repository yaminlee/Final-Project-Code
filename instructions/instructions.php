<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Weebo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="../general/images/logo.png">
    <link rel="stylesheet" type="text/css" href="instructions.css">
    <link rel="stylesheet" type="text/css" href="../questionnaire/questionnaire.css">
    <link rel="stylesheet" type="text/css" href="../consent-form/consent-form.css">
    <link rel="stylesheet" type="text/css" href="../header/header.css">
    <link rel="stylesheet" type="text/css" href="../footer/footer.css">
</head>
<body>
    <main class="form">
        <div class="form-content">
            <h1>Instructions</h1>
            <form method="post" action="../participate/participate.php">
                <!--type input-->
                <p style="font-size: 18px;">
                    The survey consists in answering a series of questions about drones.
                    You will be presented with a series of drone images and you will be asked to rate your impression about this drone on different scales.
                    Please pay attention and rate each scale independently.
                    You will see a total of 30 drones.

                </p>
                <p class="bold" style="font-size: 18px;">
                    Here is an example:
                </p>

                <form method="post" action="../participate/participate.php">
                    <div class="expamle">
                        <img  src="../general/images/quadbot-happy.png" alt="test image" class="drone-form">
                        <label class="form-input" for="instr">Please rate your impression on this scale:</label><label class="required">*</label><br/>
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
                    </div>
                    <br/>
                    <p style="font-size: 18px">
                        Upon completion of the 30 drone questionnaires, you will have the option to enter our draw by inserting your email address and have a chance to win a $50 Amazon voucher.                </p>
                    <div class="inputs">
                        <input type="checkbox" id="understand" name="understand" required>
                        <label class="form-input" for="understand" style="margin: 0;">I understand. Let's start!</label><label class="required">*</label>
                    </div>
                    <div class="content form-button">
                        <button type="submit">Start Survey</button>
                    </div>
                </form>
        </div>
    </main>
    <script src="../questionnaire/questionnaire.js"></script>
</body>
</html>