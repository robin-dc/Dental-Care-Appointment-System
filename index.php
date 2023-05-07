<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DentalCare PH</title>
    <link rel="shortcut icon" href="images/icon4.png" type="image/x-icon">
    <!-- CSS LINKS -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="material.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- MATERIALIZE ICONS -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>
<body class="index-html">
   <!-- NAVIGATION BAR -->
   <!-- class="navbar-fixed" -->
   <header>
    <nav class="nav-extended transparent">
        <div class="nav-wrapper transparent container">
          <a href="index.php" class="brand-logo black-text left">
            <img src="images/icon1.png" alt="logo" class="logo-img">
            Dental<span class="dif">Care.</span></a>
          <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="login.php" class="btn waves-effect">Sign In</a></li>
          </ul>
        </div>
        <div class="nav-content">
          <ul class="hide-on-med-and-down container">
            <a href="index.php" class="brand-logo black-text left">
              <img src="images/icon1.png" alt="logo" class="logo-img sticky-logo"></a>
            <li><a class="nav-link black-text" onclick="home()">HOME</a></li>
            <li><a class="nav-link black-text" onclick="about()">ABOUT</a></li>
            <li><a class="nav-link black-text" onclick="services()">SERVICES</a></li>
            <li><a class="nav-link black-text" href="book.php">APPOINTMENT</a></li>
            <li><a class="nav-link black-text" onclick="contact()">CONTACT</a></li>
          </ul>
        </div>
      </nav>

      <ul class="sidenav" id="mobile-demo">
        <li><a class="nav-link black-text" onclick="home()">HOME</a></li>
        <li><a class="nav-link black-text" onclick="about()">ABOUT</a></li>
        <li><a class="nav-link black-text" onclick="services()">SERVICES</a></li>
        <li><a class="nav-link black-text" href="book.php">APPOINTMENT</a></li>
        <li><a class="nav-link black-text" onclick="contact()">CONTACT</a></li>
        <li><a href="login.php" class="btn waves-effect">Sign In</a></li>
      </ul>
    </header>

    <!-- HOME -->
    <section class="scrollspy home" id="home">
      <div class="container">
        <div class="row tagline">
          <div class="col s12 m6">
            <h1>LET US BRIGHTEN YOUR SMILE</h1>
            <p>Put your best smile everywhere you go! Dental Care specializes in providing all types of dental services for kids to adults. We have a team of experienced dentists and highly trained staff to give our patients the best care they need.</p>
            <li><a class="btn waves-effect appointment" onclick="appointment()">Make an Appointment</a></li>
          </div>
        </div>
      </div>
    </section>

    <!-- ABOUT US -->
    <section class="about scrollspy" id="about">
      <div class="container">
        <div class="row">
          <div class="col s12 m5">
            <img src="images/about-img.jpg" alt="">
          </div>
          <div class="col s12 m7">
            <h2>ABOUT US</h2>
            <h4>True Healthcare For Your Family</h4>
            <p>Our clinic aims to provide the best dental care for our patients together with excellent customer service to cater to your needs. In line with the events of the COVID-19 pandemic, our clinic has taken extra measures to ensure the safety of our patients and our team. Please be informed of the procedures & guidelines that our clinic has implemented in our practice.</p>
            <li><a class="btn waves-effect appointment" onclick="contact()">Contact Us</a></li>
          </div>
        </div>
      </div>
    </section>

    <!-- SERVICES -->
    <section class="grey lighten-3 services scrollspy" id="services">
      <div class="container">
        <h3 class="center-align">OUR DENTAL SERVICES</h3>
        <div class="row">
        <div class="col s12 m4">
            <div class="card white">
              <div class="card-image">
                <img src="images/icon-1.svg" alt="">
              </div>
              <div class="card-content black-text">
                <span class="card-title center">Alignment Specialist</span>
                <p class="center-align">Dental Cleaning / Oral Prophylaxis,
                  Permanent Tooth Filling,
                  Pit & Fissure Sealants and more.</p>
              </div>
            </div>
          </div>
        <div class="col s12 m4">
            <div class="card white">
              <div class="card-image">
                <img src="images/icon-2.svg" alt="">
              </div>
              <div class="card-content black-text">
                <span class="card-title center">Cosmetic Dentistry</span>
                <p class="center-align">Missing a tooth? Restore those gaps
                  with teeth that feel and look like your
                  own.</p>
              </div>
            </div>
          </div>
        <div class="col s12 m4">
            <div class="card white">
              <div class="card-image">
                <img src="images/icon-3.svg" alt="">
              </div>
              <div class="card-content black-text">
                <span class="card-title center">Oral Hygiene Experts</span>
                <p class="center-align">Know more about your
                  oral health. We also offer diagnostics such as
                  X-rays and 3D scans.</p>
              </div>
            </div>
          </div>
        <div class="col s12 m4">
            <div class="card white">
              <div class="card-image">
                <img src="images/icon-4.svg" alt="">
              </div>
              <div class="card-content black-text">
                <span class="card-title center">Root Canal Specialist</span>
                <p class="center-align">Book an appointment with our proffessional
                  dentists that will take care of your little one.</p>
              </div>
            </div>
          </div>
        <div class="col s12 m4">
            <div class="card white">
              <div class="card-image">
                <img src="images/icon-5.svg" alt="">
              </div>
              <div class="card-content black-text">
                <span class="card-title center">Live Dental Advisory</span>
                <p class="center-align">A whole new you! We have solutions to
                  give you a brand new smile with veneers,
                  dental crowns or bridges.</p>
              </div>
            </div>
          </div>
        <div class="col s12 m4">
            <div class="card white">
              <div class="card-image">
                <img src="images/icon-6.svg" alt="">
              </div>
              <div class="card-content black-text">
                <span class="card-title center">Cavity Inspection</span>
                <p class="center-align">Can’t sleep due to a toothache? Medications don’t seem to work? Come over
                  to our clinic.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- OPERATING HOURS -->
    <section class="time">
      <div class="row">
        <div class="col s12 m4">
          <div class="card card1">
            <div class="card-content black-text">
              <i class="material-icons prefix white-text">access_time</i>
              <div class="card-con">
                <span class="card-title white-text">Operating Hours</span>
                <p class="white-text">11:00 AM to 8:00 PM<br>
                  Mondays to Sundays</p>
              </div>
            </div>
          </div>
        </div>

        <div class="col s12 m4">
          <a href="book.php">
            <div class="card card2">
              <div class="card-content black-text">
                <i class="material-icons prefix white-text">date_range</i>
                <div class="card-con">
                  <span class="card-title white-text">Book an Appointment</span>
                  <p class="white-text">Click here and book an appointment at your earliest convenience.</p>
                </div>
              </div>
            </div>
          </a>
        </div>

        <div class="col s12 m4">
          <div class="card card3">
            <div class="card-content black-text">
              <i class="material-icons prefix white-text">location_on</i>
              <div class="card-con">
                <span class="card-title white-text">Our Locations</span>
                <p class="white-text">University of Rizal System, Brgy. San Roque, Antipolo City</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- WHY CHOOSE US -->
    <section class="texts">
      <div class="container">
        <h3 class="center-align">WHY CHOOSE US?</h3>
        <p class="center">We at Dental Care Philippines take pride in the level of treatments and services we’re offering. Aside from the state-of-the-art equipment, our dental team is fully equipped with knowledge and experience in the field.
        </p><br>
        <p class="center">All of our staff and dentists have been trained extensively to ensure that you’ll receive the best care and treatment. From consultation to the actual dental procedure, our team will assist you in every step of the way.</p><br>
        <p class="center">Our services also cover after care services to ensure you’ll heal properly and recover quickly.</p><br>
        <p class="center">Here at Dental Care PH, you’ll expect nothing less. Our mission is to help you get the smile you always wanted.</p>
      </div>
    </section>

    <!-- FOOTER -->
    <footer class="index-foot grey lighten-3" id="contact">
      <div class="container">
        <div class="foot">
          <a href="#" class="brand-logo black-text center">
            <img src="images/icon4.png" alt="logo" class="logo-img">
            Dental<span class="dif">Care.</span></a>
            <div class="foot-links">
              <ul>
                <li><a href=""><i class="fa-brands fa-square-facebook"></i></a></li>
                <li><a href=""><i class="fa-brands fa-square-instagram"></i></a></li>
                <li><a href=""><i class="fa-brands fa-square-twitter"></i></a></li>
                <li><a href=""><i class="fa-brands fa-linkedin"></i></a></li>
              </ul>
              <a href="tel:(+63) 910-915-1041" class="center phone">(+63) 910-915-1041</a>
            </div>
          <p class="center">Dental Care Philippines © 2023. All rights reserved.</p>
        </div>
      </div>
    </footer>

    <!-- MESSENGER : FLOATING BTN
    <div class="fixed-action-btn">
        <a class="btn-floating blue darken-3 btn-large">
          <i class="fa-brands fa-facebook-messenger"></i>
        </a>
    </div> -->

    <script src="//code.tidio.co/npl6ypi8ci5pimh9ch0xjjg7ixowk7k8.js" async></script>

    <!-- JAVASCRIPT SRC -->
    <script src="jquery-3.6.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="material.min.js"></script>
    <script src="app.js"></script>
    <!-- AOS LINK -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</body>
</html>
