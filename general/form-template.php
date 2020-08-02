<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Weebo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="../general/images/logo.png">
    <link rel="stylesheet" type="text/css" href="../header/header.css">
    <link rel="stylesheet" type="text/css" href="../footer/footer.css">
</head>
<body>
    <header>
        <?php require_once '../header/header.php' ?>
    </header>
    <main class="form">
        <div class="form-content">
            <h1>main headline</h1>
            <h2>special instructions</h2>
            <h2 class="required">Required*</h2>
            <form method="post" action="###">
                <!--type input-->
                <label class="form-input" for="id">Label</label><label class="required">*</label><br/>
                <div class="inputs">
                    <input type="text" id="id" name="name"><br/>
                </div>
                <div class="content form-button">
                    <button type="submit">Button</button>
                </div>
            </form>
        </div>
    </main>
    <footer>
        <?php require_once '../footer/footer.php' ?>
    </footer>
</body>
</html>
