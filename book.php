<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DentalCare PH | Appointment</title>
    <link rel="shortcut icon" href="images/icon4.png" type="image/x-icon">
    <!-- CSS LINKS -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="material.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- MATERIALIZE ICONS -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body class="book-html">
    <header>
        <nav class="nav-extended transparent">
            <div class="nav-wrapper transparent container">
              <a href="index.php" class="brand-logo black-text center">
                <img src="images/icon1.png" alt="logo" class="logo-img">
                Dental<span class="dif">Care.</span></a>
              <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            </div>
            <div class="nav-content">
              <ul class="hide-on-med-and-down container book-links">
                <li><a class="nav-link black-text" href="index.php#home">HOME</a></li>
                <li><a class="nav-link black-text" href="index.php#about">ABOUT</a></li>
                <li><a class="nav-link black-text" href="index.php#services">SERVICES</a></li>
                <li><a class="nav-link black-text" href="index.php#contact">CONTACT</a></li>
              </ul>
            </div>
          </nav>

          <ul class="sidenav" id="mobile-demo">
            <li><a class="nav-link black-text" href="index.php#home">HOME</a></li>
            <li><a class="nav-link black-text" href="index.php#about">ABOUT</a></li>
            <li><a class="nav-link black-text" href="index.php#services">SERVICES</a></li>
            <li><a class="nav-link black-text" href="index.php#contact">CONTACT</a></li>
          </ul>
    </header>

    <!-- BOOKING DESCRIPTION -->
    <section class="book" >
        <div class="container">
            <p class="location">University of Rizal System Antipolo</p>
            <div class="logo-book">
                <div class="brand-logo black-text left"><p class="black-text">
                Dental<span class="dif">Care</span> Appointment System</p></div>
            </div>

            <p>Looking for a trustworthy dentist around Antipolo? Look no further than at Dental Care Philippines clinic. Our branch offers a range of services, from general dentistry procedures to invisalign and dental surgery.</p><br>
            <p>As soon as you step into our clinic, you’ll be entertained by our friendly staff to get you comfortable. You’ll get assisted from start to finish. Our clients truly appreciate how hands on we are  when it comes to providing the dental care they need.</p><br>
            <p>Whether it’s a routine cleaning session or dental implants you need, trust that you’ll receive the highest quality of service. Our dentists and staff have a significant years of experience to put your mind at ease whenever you visit for a treatment.</p><br>
            <p>Here at Dental Care PH, we value the health and safety of our patients. That is why as an extra precautionary measure as we continue to battle the COVID-19 pandemic, we make sure that every surface and corner in our clinic are sanitized and disinfected. This is also to show our commitment to serve and provide you the best dental care even during these challenging times.</p><br>
            <p>Visit the Dental Care PH website to book your appointment in our clinic. Contact us today and let us schedule you for a consultation or checkup.</p>
        </div>
    </section>


    <!-- PROCESS -->
    <section class="row container section section-tabs grey lighten-3" id="book">
        <div class="col s12">
            <ul class="tabs grey lighten-3">
                <li class="tab col s4 disabled"><a href="#cat" class="tab1 active"><span class="black-text"> CHOOSE A CATEGORY </span></a></li>
                <li class="tab col s4 disabled"><a href="#info" class="tab2"><span class="black-text"> YOUR INFO </span></a></li>
                <li class="tab col s4 disabled"><a href="#time" class="tab3"><span class="black-text"> TIME AND DATE </span></a></li>
            </ul>
        </div>

        <div class="back"><i class="fa-solid fa-arrow-left"></i></div>
        <div class="back2"><i class="fa-solid fa-arrow-left"></i></div>
        <div class="category wrapper" id="cat">
            <div class="row container">
                <div class="col s12">
                    <div class="card white row">
                        <div class="card-content black-text col s12 m9">
                            <span class="card-title left">Dental Consultation / Dental Cleaning / Tooth Fillings / Other Procedures</span>
                            <p class="left-align">1 hour</p>
                        </div>
                        <div class="col s12 m3 select-btn">
                            <a class="btn waves-effect col s12 sel-btn">Select</a>
                        </div>
                    </div>
                </div>
                <div class="col s12">
                    <div class="card white row">
                        <div class="card-content black-text col s12 m9">
                            <span class="card-title left">Pediatric Dentist (for 0-13 years old): Dental Consultation / Dental Cleaning</span>
                            <p class="left-align">1 hour</p>
                        </div>
                        <div class="col s12 m3 select-btn">
                            <a class="btn waves-effect col s12 sel-btn">Select</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="info wrapper" id="info">
            <div class="row container">
                <div class="col s12">
                        <form action="" class="white appoint-form z-depth-1">
                            <div class="row">
                              <div class="col s12">
                                  <label for="username">Full name</label>
                                  <input id="username" type="text">
                              </div>
                              <div class="col s12">
                                  <label for="password">Email</label>
                                  <input id="password" type="text">
                              </div>
                              <div class="col s12">
                                  <label for="phone">Phone</label>
                                  <input id="phone" type="text">
                              </div>
                              <div class="col s12">
                                  <label for="address">Address</label>
                                  <input id="address" type="text">
                              </div>
                              <div class="col s12">
                                  <label for="problem">Short Description of Dental Problem</label>
                                  <input id="problem" type="text">
                              </div>
                              <div class="col s12">
                                <a class="btn waves-effect next-btn right">NEXT</a>
                              </div>
                            </div>
                        </form>
                </div>
            </div>
        </div>

        <div class="time wrapper active" id="time">
          <div class="row container">
              <div class="col s12">
                    <!-- <div class="container-cal">
                      <div class="calendar">
                        <div class="month">
                          <i class="fas fa-angle-left prev"></i>
                          <div class="date">
                            <h1></h1>
                            <p></p>
                          </div>
                          <i class="fas fa-angle-right next"></i>
                        </div>
                        <div class="weekdays">
                          <div>Sun</div>
                          <div>Mon</div>
                          <div>Tue</div>
                          <div>Wed</div>
                          <div>Thu</div>
                          <div>Fri</div>
                          <div>Sat</div>
                        </div>
                        <div class="days"></div>
                      </div>
                    </div> -->
                    <input type="text" class="black-text datepicker" id="date-1" placeholder="Enter Date Here.">
                </div>

                <div class="col s12">
                    <div class="time-picker">
                        <form action="#" class="row center-flex-wrapper">
                        <div class="col s6 center-flex">
                          <p>
                            <label>
                              <input class="with-gap" name="group1" type="radio" checked/>
                              <span class="black-text">09:00AM - 10:00AM</span>
                            </label>
                          </p>
                          <p>
                            <label>
                              <input class="with-gap" name="group1" type="radio"/>
                              <span class="black-text">10:00AM - 11:00AM</span>
                            </label>
                          </p>
                          <p>
                            <label>
                              <input class="with-gap" name="group1" type="radio"/>
                              <span class="black-text">11:00AM - 12:00NN</span>
                            </label>
                          </p>
                          <p>
                            <label>
                                <input class="with-gap" name="group1" type="radio" />
                                <span class="black-text">1:00PM - 2:00PM</span>
                              </label>
                          </p>
                          <p>
                            <label>
                                <input class="with-gap" name="group1" type="radio"  />
                                <span class="black-text">2:00PM - 3:00PM</span>
                              </label>
                          </p>
                        </div>
                        <div class="col s6 center-flex">
                          <p>
                            <label>
                                <input class="with-gap" name="group1" type="radio"/>
                                <span class="black-text">3:00PM - 4:00PM</span>
                              </label>
                          </p>
                          <p>
                            <label>
                                <input class="with-gap" name="group1" type="radio"/>
                                <span class="black-text">4:00PM - 5:00PM</span>
                              </label>
                          </p>
                          <p>
                            <label>
                                <input class="with-gap" name="group1" type="radio"/>
                                <span class="black-text">5:00PM - 6:00PM</span>
                              </label>
                          </p>
                          <p>
                            <label>
                                <input class="with-gap" name="group1" type="radio"/>
                                <span class="black-text">6:00PM - 7:00PM</span>
                              </label>
                          </p>
                          <p>
                            <label>
                                <input class="with-gap" name="group1" type="radio" disabled="disabled" />
                                <span class="black-text">7:00PM - 8:00PM</span>
                              </label>
                          </p>
                        </div>
                        </form>
                    </div>
                <div class="col s12">
                  <button type="submit" class="btn waves-effect right confirm-btn modal-trigger" href="#modal1" >CONFIRM</button>
                </div>
            </div>
        </div>
        </div>
        <!-- modal -->
        <div id="modal1" class="modal">
          <div class="modal-content">
            <h4>New Payment</h4>
            <input type="text" name="cash" id="cash" placeholder="Enter amount">
            <div class="pay-text">
              <p>Amount to Pay</p>
              <span>500</span>
            </div>
            <div class="pay-text">
              <p>Service Fee</p>
              <span>10</span>
            </div>
            <div class="gcash">
              <!-- <img src="images/QR.png" alt="qr" class="qr"> -->
              <img src="images/gcash-logo.png" alt="" class="gcash-logo">
            </div>
          </div>
          <div class="modal-footer">
            <a href="#!" class="modal-close waves-effect cancel-pay">Cancel</a>
            <a href="#!" class="modal-close waves-effect btn pay-btn" onclick="M.toast({html: 'You already secured your appointment.'})">Pay</a>
          </div>
      </div>
    </section>

    <!-- FOOTER -->
    <footer class="grey lighten-3">
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
                <p class="center at">Dental Care Philippines © 2023. All rights reserved.</p>
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
