<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Weebo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="../general/images/logo.png">
    <link rel="stylesheet" type="text/css" href="gallery.css">
    <link rel="stylesheet" type="text/css" href="../header/header.css">
    <link rel="stylesheet" type="text/css" href="../footer/footer.css">

    <?php include '../general/variables.php'; ?>

</head>
<body>
    <header>
        <?php require_once '../header/header.php' ?>
    </header>
     <main class="content">
        <h1>Drone Gallery</h1>
        <div class="gallery">
            <?php
                    // Step 1: Open Connection
                    $con = mysqli_connect($serverName, $userName, $password, $db, $port);

                    if($con) {
                        //step 2: Run query
                        $queryDroneImages = "SELECT * FROM drones";
                        $result = mysqli_query($con, $queryDroneImages);

                        if($result) {
                            if (mysqli_num_rows($result) != 0) {
                                while ($record = mysqli_fetch_assoc($result)) {
                                    ?>
                                    <div class="image-box">
                                        <img class="picture" src="<?php echo $record['imageURL'];?>" alt="drone image">
                                    </div>
                                    <?php
                                }
                            }
                        }
                    }
                    else { //connection to db failed
                        header('Location:../db-error/db-error.php');
                    }
            ?>
        </div>
    </main>
    <footer>
        <?php require_once '../footer/footer.php'?>
    </footer>
</body>
</html>