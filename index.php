<?php


$min = 0;
$pw_char = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789:;!<@#$%';
$max = strlen($pw_char);
$generated_password = '';



$has_length = isset($_GET['pw-length']);

if ($has_length) {
    
    $length = (int) $_GET['pw-length'];

    for ($i=0; $i < $length ; $i++) { 
        $picked_char = substr($pw_char, rand($min,$max), 1);
        $generated_password .= $picked_char;
    };


}
var_dump( $generated_password )


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
    <main>

        <div class="wrapper  bg-dark bg-gradient ">

            <div class="container vh-100 d-flex justify-content-center align-items-center ">

                <div class="card bg-transparent border border-light">

                    <div class="card-body ">

                        <div class="card-title">
                            <h2 class="text-light">
                                php Strong Password Generator
                            </h2>
                        </div>
                        <?php if ($generated_password === ''): ?>
                        <form action="">

                            <label for="pw-length" class="my-2 text-light" >Length of the password required</label>
                            <input class="form-control" type="text" placeholder="Please select a length..."
                                aria-label="pw-length" name="pw-length">

                            <div class="card-footer text-center">

                                <button class="btn btn-outline-success">Require password</button>

                            </div>

                        </form>
                        <?php else: ?>
                            <div class="generated-pw text-center text-warning">
                                <?php echo $generated_password ; ?>
                            </div>
                        <?php endif; ?>
                    
                    </div>
                
                </div>
            
            </div>
        
        </div>
    
    </main>
</body>

</html>