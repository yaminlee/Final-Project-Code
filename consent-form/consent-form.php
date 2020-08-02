<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Weebo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="../general/images/logo.png">
    <link rel="stylesheet" type="text/css" href="consent-form.css">
    <link rel="stylesheet" type="text/css" href="../header/header.css">
    <link rel="stylesheet" type="text/css" href="../footer/footer.css">
</head>
<body>
    <main class="form">
        <div class="form-content">
            <h1>consent form</h1>
            <form method="post" action="handle-consent-form.php">
                <!--type input-->
                <p>
                    You are invited to participate in a research study on drone perception conducted by Lee Yamin and directed by Dr.Jessica Cauchard at <a href="https://in.bgu.ac.il/en/pages/default.aspx" target="_blank">Ben-Gurion University of the Negev</a>, Israel.
                </p>
                <p>
                    The purpose of this research study is to investigate how people perceive drones.
                    If you agree to take part in this study, you will be asked to complete an online questionnaire where you will be asked to rate different drones.
                    It will take you approximately 30 minutes to complete the questionnaire.
                </p>
                <p>
                    There are no risks or benefits of any kind involved in this study.
                    At the end of the study, you will have the option to enter a draw where you can win a <span class="bold">$50 Amazon voucher</span>. Ten participants will receive the voucher.
                </p>
                <p>
                    Your participation in this study is voluntary and you can withdraw at any time.
                    Your email address will not be shared outside of the research team and will be used for the purpose of the draw.
                </p>
                <p>
                    If you have questions about this project, you may contact the researcher: Lee Yamin: <a href="mailto:webmaster@example.com">yaminlee@post.bgu.ac.il</a> or Principal Investigator: Dr. Jessica Cauchard, <a href="tel:+1123-456-7890">+972-99602886</a>, <a href="mailto:webmaster@example.com">cauchard@bgu.ac.il</a>.
                </p>
                <br/>
                <p>
                    By clicking I agree below, you are indicating you are at least 18 years old, have read and understood this consent form and that you agree to participate in this research study.
                </p>
                <p>
                    You can <a href="#" onclick="window.print();">print</a> a copy of this page for your records.
                </p>
                <br/>
                <div class="inputs">
                    <input type="checkbox" id="agree" name="agree"> <!--not required-->
                    <label class="form-input" for="agree" style="margin: 0;">I agree.</label><label class="required">*</label>
                </div>
                <div class="inputs">
                    <input type="checkbox" id="dontAgree" name="dontAgree">
                    <label class="form-input" for="dontAgree" style="margin: 0;">I don't agree.</label>
                </div>
                <div class="content form-button">
                    <button type="submit">Continue</button>
                </div>
            </form>
        </div>
    </main>
</body>
</html>