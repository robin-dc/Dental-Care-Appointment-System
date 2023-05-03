<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DentalCare PH | Log In</title>
    <link rel="shortcut icon" href="images/icon4.png" type="image/x-icon">
    <!-- CSS LINKS -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="material.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- MATERIALIZE ICONS -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body class="login-html">
    <header>
        <nav class="nav-extended login-nav">
            <div class="nav-wrapper transparent container">
              <a href="index.php" class="brand-logo black-text left">
                <img src="images/icon1.png" alt="logo" class="logo-img"></a>
                <ul class="container">
                    <li><a class="login-link black-text" href="index.php" >Home</a></li>
                  </ul>
            </div>
          </nav>
    </header>

    <section class="login">
        <div class="container">
            <a href="index.php" class="brand-logo black-text center">
                <img src="images/icon4.png" alt="logo" class="logo-img">
                Dental<span class="dif">Care.</span></a>
            <form action="">
              <div class="row">
                <div class="col s12">
                    <label for="username">Email</label>
                    <input id="username" type="text">
                </div>
                <div class="col s12">
                    <label for="password">Password</label>
                    <input id="password" type="password">
                    <a href="#" class="right">Forgot Password?</a>
                </div>
                <div class="col s12 submit">
                    <a id="submit" class="btn waves-effect col s12" href="admin.php">Log in</a>
                </div>
              </div>
            </form>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="login-foot grey lighten-3">
        <div class="container">
          <div class="foot">
            <a href="tel:(+63) 910-915-1041" class="center phone">(+63) 910-915-1041</a>
            <ul>
              <li><a href=""><i class="fa-brands fa-square-facebook"></i></a></li>
              <li><a href=""><i class="fa-brands fa-square-instagram"></i></a></li>
              <li><a href=""><i class="fa-brands fa-square-twitter"></i></a></li>
              <li><a href=""><i class="fa-brands fa-linkedin"></i></a></li>
            </ul>
            <p class="center">Dental Care Philippines © 2023. All rights reserved.</p>
          </div>
        </div>
      </footer>

    <!-- JAVASCRIPT SRC -->
    <script src="jquery-3.6.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="material.min.js"></script>
    <script src="app.js"></script>
    <!-- AOS LINK -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</body>
</html>
