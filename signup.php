<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--<title> Responsive Login and Signup Form </title>-->

        <!-- CSS -->
        <link rel="stylesheet" href="style.css">
                
        <!-- Boxicons CSS -->
        <!-- <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'> -->
                        
    </head>
    <body>
        <section class="container forms">
            <div class="form signup">
                <header>Signup</header>
                <form action="registration.php"
                 method="post">
                    
                    <div class="field input-field">
                        <input type="text" placeholder="Enter your Name" class="input" name="user">
                    </div>

                    <div class="field input-field">
                        <input type="email" placeholder="Enter your Email" class="input" name="email">
                    </div>

                    <div class="field input-field">
                        <input type="password" placeholder="Create Password" class="password" name="password">
                    </div>


                    <div class="field button-field">
                        <button type="submit">Signup</button>
                    </div>
                </form>

                <div class="form-link">
                    <span>Already have an account? <a href="login.php" class="link login-link">Login</a></span>
                </div>
            </div>
        </section>

        <!-- JavaScript -->
        <!--<script src="js/script.js"></script>-->
    </body>
</html>