<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Weebo</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="../general/images/logo.png">
        <link rel="stylesheet" type="text/css" href="db-error.css">
        <link rel="stylesheet" type="text/css" href="../header/header.css">

        <?php include '../general/variables.php'; ?>
    </head>
    <body>
        <div class="error">
            <div class="center">
                Were sorry, an error has occurred and the DataBase connection failed <br/>
                It is possible that the database is overloaded or otherwise not running properly.<br/>
                If possible, please contact the site administrator, Lee Yamin, at <a href="mailto:webmaster@example.com">yaminlee@post.bgu.ac.il</a> </p>
            </div>
        </div>
        <form method="post" action="../index/index.php">
            <div class="content form-button">
                <button type="submit">Home Page</button>
            </div>
        </form>
    </body>
</html>
