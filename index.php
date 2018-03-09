
<!DOCCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8" />
        <title>Registration Login Logout</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
    </head>
    <body>
        <div class="big_wrapper">
            <header>
                <h1><a href="/registration_login_logout/">RLL</a></h1>
            </header>
            <nav class="">
                <ul class="menu">
                    <li><a href="signup.php">Signup</a></li>
                    <li><a href="login.php">Login</a></li>
                    <li><a href="logout.php">Logout</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </nav>
            <section class="dashboard">
                <?php 
                    require_once('inc/connect.php');
                    require_once('inc/core.php');
                ?>
            </section>
            <footer>
                <p>Copyright</p>
            </footer>
        </div>
    </body>
</html>
