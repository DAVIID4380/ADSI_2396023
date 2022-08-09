<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?="Template"?></title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fonts.css">
</head>
<body>

    <!---------------------------------------------->
    
    <main class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <?php echo "<h1 class='text-center my-5'>02 Info</h1>"; ?>
                <hr>
                <?php phpinfo() ?>
            </div>
        </div>
    </main>

    <!---------------------------------------------->

    <script src="js/bootstrap.min.js"></script>
</body>
</html>