<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>

<body class="bg-dark bg-gradient ">

    <div class="container vh-100 d-flex justify-content-center align-items-center ">
        <div class="card bg-transparent border border-light">
            <div class="card-body ">

                <div class="card-title">
                    <h2 class="text-light">
                        php Strong Password Generator
                    </h2>
                </div>

                <div class="generated-pw text-center text-warning">
                    <?php echo htmlspecialchars($_SESSION['generated_password']); ?>
                </div>

                <a href="./" class="btn btn-outline-success">Back to Home</a>
            </div>
        </div>
    </div>
</body>

</html>