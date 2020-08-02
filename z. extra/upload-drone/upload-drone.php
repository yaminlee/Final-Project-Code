<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8">
    <title>Weebo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="../../general/images/logo.png">
    <link rel="stylesheet" type="text/css" href="upload-drone.css">
    <link rel="stylesheet" type="text/css" href="../../header/header.css">
    <link rel="stylesheet" type="text/css" href="../../footer/footer.css">

    <script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

</head>
<body>
    <header>
        <?php require_once '../header/header.php' ?>
    </header>
    <main class="form">
        <div class="form-content">
            <h1>upload a new drone</h1>
            <h2>***special instructions***</h2>
            <h2 class="required">Required*</h2>
            <form method="post" action="../define-new-drone/define-new-drone.php" enctype="multipart/form-data">
                <label class="form-input">Drone Image</label><label class="required">*</label><br/>
                <!------------------------------------------------------------------------------------------------------------>
                <div class="file-upload">
                    <div class="image-upload-wrap">
                        <input class="file-upload-input" type='file' name="drone-file" required onchange="readURL(this);" accept="image/*" />
                        <div class="drag-text">
                            <h3>Drag and drop a file or select add image</h3>
                        </div>
                    </div>
                    <div class="file-upload-content">
                        <img class="file-upload-image" src="#" alt="your drone image" />
                        <div class="image-title-wrap">
                            <button type="button" onclick="removeUpload()" class="remove-image">Remove <span class="image-title">Uploaded Image</span></button>
                        </div>
                    </div>
                    <button class="file-upload-btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )">Add Image</button>
                </div>
                <!------------------------------------------------------------------------------------------------------------->
                <!--Drone URL input-->
                <label class="form-input" for="drone-url">Related URL</label><label class="required">*</label><br/>
                <div class="inputs">
                    <input type="url" id="drone-url" name="drone-url" required><br/>
                </div>

                <div class="content form-button">
                    <button type="submit">Submit</button>
                </div>
            </form>
        </div>
    </main>
    <footer>
        <?php require_once '../footer/footer.php' ?>
    </footer>
    <script src="upload-drone.js"></script>
</body>
</html>