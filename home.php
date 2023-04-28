<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" type="text/css" href="bootstrap.css">
</head>
<body>
<section class="container forms">
        <div class="form signup">
            <header>Send Some Message <?php echo $_SESSION['useremail']; ?> </header>
                <form action="send.php" method="post">

                    <div class="field input-field">
                        <input type="name" placeholder="Enter your Name" class="input" name="name">
                    </div>

                    <!-- <div class="field input-field">
                        <input type="name" placeholder="Enter your Last Name" class="input" name="lname">
                    </div> -->
                    
                    <div class="field input-field">
                        <input type="email" placeholder="Enter your Email" class="input" name="email">
                    </div>

                    <!-- <div class="field input-field">
                        <input type="text" placeholder="Enter your Subject" class="input" name="email">
                    </div> -->

                    <div class="field input-field">
                        <input type="text" placeholder="Enter your Message Here..." cols="30" rows="10" class="input" name="message">
                    </div>

                    <div class="field button-field">
                    <button type="submit" name="send">Send</button>
                    </div>
                </form>

                <div class="field button-field">
                    <a href="logout.php">Logout</button>
                </div>
        </div>
</body>
</html>