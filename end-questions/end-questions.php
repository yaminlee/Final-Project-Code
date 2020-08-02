<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Weebo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="../general/images/logo.png">
    <link rel="stylesheet" type="text/css" href="end-questions.css">
    <link rel="stylesheet" type="text/css" href="../header/header.css">
    <link rel="stylesheet" type="text/css" href="../footer/footer.css">
</head>
<body>
    <main class="form">
        <div class="form-content">
            <h1>last questions</h1>
            <h2>Please answer the following questions</h2>
            <h2 class="required">Required*</h2>
            <form method="post" action="handle-end-questions.php"">
                <!--drone experience-->
                <label class="form-input" for="see">Have you seen a drone before?</label><label class="required">*</label><br/>
                <div class="inputs">
                    <input type="radio" id="see" name="see" value="1" onclick="showSee()" required> Yes<br/>
                    <input type="radio" id="see" name="see" value="0" onclick="hideSee()"> No<br/>
                    <!--if yes, show-->
                    <div id="yes-see" style="display: none">
                        <label class="form-input" for="yes-see">Where?</label>
                        <input type="text" id="yes-see" name="yes-see"><br/>
                    </div>
                </div>
                <!--drone experience-->
                <label class="form-input" for="pilot">Have you piloted a drone before?</label><label class="required">*</label><br/>
                <div class="inputs">
                    <input type="radio" id="pilot" name="pilot" value="1" required> Yes<br/>
                    <input type="radio" id="pilot" name="pilot" value="0"> No<br/>
                </div>
                <!--drone experience-->
                <label class="form-input" for="own">Do you own a drone?</label><label class="required">*</label><br/>
                <div class="inputs">
                    <input type="radio" id="own" name="own" value="1" onclick="showOwn()" required> Yes<br/>
                    <input type="radio" id="own" name="own" value="0" onclick="hideOwn()"> No<br/>
                    <!--if yes, show-->
                    <div id="yes-own" style="display: none">
                        <label class="form-input" for="yes-own">Which model(s)?</label>
                        <input type="text" id="yes-own" name="yes-own"><br/>
                    </div>
                </div>
                <!--drone experience-->
                <label class="form-input" for="pet">Do you have a pet or had one in the past?</label><label class="required">*</label><br/>
                <div class="inputs">
                    <input type="radio" id="pet" name="pet" value="1" required onclick="showPet()" > Yes<br/>
                    <input type="radio" id="pet" name="pet" value="0" onclick="hidePet()"> No<br/>
                    <!--if yes, show-->
                    <div id="yes-pet" style="display: none">
                        <label class="form-input" for="yes-pet">What pet?</label>
                        <input type="text" id="yes-pet" name="yes-pet"><br/>

                        <label class="form-input" for="yes-when">When?</label>
                        <input type="text" id="yes-when" name="yes-when"><br/>
                    </div>
                </div>
                <div class="content form-button">
                    <button type="submit">Submit</button>
                </div>
            </form>
        </div>
    </main>
    <script src="end-questions.js"></script>
</body>
</html>
