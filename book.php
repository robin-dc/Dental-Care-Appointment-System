<?php

  include 'connection.php'

?>


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
                            <p id="responsePlaceholder">Waiting for response...</p>
                        </div>
                        <div class="col s12 m3 select-btn">
                          <button id="buttonConsult" class="btn waves-effect col s12 sel-btn"><a class="white-text">Select</a></button>
                        </div>
                    </div>
                </div>
                <div class="col s12">
                    <div class="card white row">
                        <div class="card-content black-text col s12 m9">
                            <span class="card-title left">Pediatric Dentist (for 0-13 years old): Dental Consultation / Dental Cleaning</span>
                            <p class="left-align">1 hour</p>
                            <p id="responsePlaceholder1">Waiting for response...</p>
                        </div>
                        <div class="col s12 m3 select-btn">
                          <button id="buttonPedia" class="btn waves-effect col s12 sel-btn"><a class="white-text">Select</a></button>
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
                                  <label for="email">Email</label>
                                  <input id="email" type="text">
                              </div>
                              <div class="col s12">
                                  <label for="phone">Phone</label>
                                  <input id="phone" type="text" maxlength="12" placeholder="63">
                              </div>
                              <div class="col s12">
                                  <label for="address">Address</label>
                                  <input id="address" type="text">
                              </div>
                              <div class="col s12">
                                  <label for="description">Short Description of Dental Problem</label>
                                  <input id="description" type="text">
                              </div>
                              <div class="col s12">
                                <button type="button" id="submit" class="btn waves-effect next-btn right"><a class="white-text">NEXT</a></button>
                              </div>
                              <p id="response">Waiting for response...</p>
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
                              <input class="with-gap" name="timeRadio" value="10:00-11:00" type="radio"/>
                              <span class="black-text">10:00AM - 11:00AM</span>
                            </label>
                          </p>
                          <p>
                            <label>
                              <input class="with-gap" name="timeRadio" value="11:00-12:00" type="radio"/>
                              <span class="black-text">11:00AM - 12:00NN</span>
                            </label>
                          </p>
                          <p>
                            <label>
                                <input class="with-gap" name="timeRadio" value="13:00-14:00" type="radio" />
                                <span class="black-text">13:00PM - 14:00PM</span>
                              </label>
                          </p>
                          <p>
                            <label>
                                <input class="with-gap" name="timeRadio" value="14:00-15:00" type="radio"  />
                                <span class="black-text">14:00PM - 15:00PM</span>
                              </label>
                          </p>
                        </div>

                        <div class="col s6 center-flex">
                          <p>
                            <label>
                                <input class="with-gap" name="timeRadio" value="15:00-16:00" type="radio"/>
                                <span class="black-text">15:00PM - 16:00PM</span>
                              </label>
                          </p>
                          <p>
                            <label>
                                <input class="with-gap" name="timeRadio" value="16:00-17:00" type="radio"/>
                                <span class="black-text">16:00PM - 17:00PM</span>
                              </label>
                          </p>
                          <p>
                            <label>
                                <input class="with-gap" name="timeRadio" value="17:00-18:00" type="radio"/>
                                <span class="black-text">17:00PM - 18:00PM</span>
                              </label>
                          </p>
                          <p>
                            <label>
                                <input class="with-gap" name="timeRadio" value="18:00-19:00" type="radio"/>
                                <span class="black-text">18:00PM - 19:00PM</span>
                              </label>
                          </p>
                        </div>
                        </form>
                    </div>
                <div class="col s12">
                  <button type="submit" id="confirm" class="btn waves-effect right confirm-btn modal-trigger" href="#modal1" >CONFIRM</button>
                  <p id="response1">Waiting for response...</p>
                </div>
            </div>
        </div>
        </div>
        <!-- modal -->
        <div id="modal1" class="modal">
          <div class="modal-content">
            <h4>New Payment</h4>
            <input type="number" name="cash" id="cash" placeholder="Enter amount">
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
          <p id="response2">Waiting for response...</p>
          <div class="modal-footer">
            <a href="#!" class="modal-close waves-effect cancel-pay">Cancel</a>
            <button id="payButton" class="modal-close waves-effect btn pay-btn">Pay</button>
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

  <!-- Manual Scripting for Variable -->
  <script>
    // Inserting Data of 1st Tab //

    let Consult;

    const buttonConsult = document.getElementById('buttonConsult');
    const responsePlaceholder = document.getElementById('responsePlaceholder');

    buttonConsult.addEventListener('click', function() {
      event.preventDefault();
      Consult = 'Dental Tooth Cleaning';

      const xhr = new XMLHttpRequest();
      xhr.open('POST', 'categoryVariable.php');
      xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
      xhr.onload = function() {
          responsePlaceholder.innerHTML = xhr.responseText;
        };
      xhr.send('my_variable=' + Consult);

    });

    let Pedia;

    const buttonPedia = document.getElementById('buttonPedia');
    const responsePlaceholder1 = document.getElementById('responsePlaceholder1');

    buttonPedia.addEventListener('click', function() {
      event.preventDefault();
      Pedia = 'Pediatric Tooth Cleaning';

      const xhr = new XMLHttpRequest();
      xhr.open('POST', 'categoryVariable.php');
      xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
      xhr.onload = function() {
          responsePlaceholder1.innerHTML = xhr.responseText;
        };
      xhr.send('my_variable=' + Pedia);

    });

    // Inserting data of 2nd Tab //

    const Auser = document.getElementById('username');
    const Aemail = document.getElementById('email');
    const Aphone = document.getElementById('phone');
    const Aaddress = document.getElementById('address');
    const Adesc = document.getElementById('description');
    const button2 = document.getElementById('submit');
    const response = document.getElementById('response');

    button2.addEventListener('click', function(event) {
      event.preventDefault(); // Prevent the webpage from refreshing

      const user = Auser.value;
      const email = Aemail.value;
      const phone = Aphone.value;
      const address = Aaddress.value;
      const desc = Adesc.value;

      const xhr = new XMLHttpRequest();
      xhr.onreadystatechange = function() {
        if (this.readyState === 4 && this.status === 200) {
          console.log(this.responseText); // Output the response from the PHP file
          response.innerHTML = this.responseText;
        }
      };
      xhr.open('POST', 'infoVariable.php', true);
      xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
      xhr.send('user=' + user + '&email=' + email + '&phone=' + phone + '&address=' + address + '&desc=' + desc);
    });

    // Inserting data of 3rd tab //

    const Adate = document.getElementById('date-1');
    const button3 = document.getElementById('confirm');
    const response1 = document.getElementById('response1');

    // Get the radio button element
    let radioButton = document.querySelectorAll('input[name="timeRadio"]');
    let checkedBtn;

    // Add an event listener for the "click" event
    radioButton.forEach(function(button){
      button.addEventListener("click", function() {
        // Add the "checked" attribute to the radio button
        if(button.checked){
          checkedBtn = button.value
        }
      });
    })

    button3.addEventListener('click', function(event) {
        event.preventDefault(); // Prevent the webpage from refreshing

        const date1 = Adate.value;
        const time1 = checkedBtn;

        const xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
          if (this.readyState === 4 && this.status === 200) {
            console.log(this.responseText); // Output the response from the PHP file
            response1.innerHTML = this.responseText;
          }
        };
        xhr.open('POST', 'dateVariable.php', true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.send('date=' + date1 + '&time=' + time1);
      });

      // ===================================== ROBIN ==============================================
      const inputDay = document.getElementById('date-1');

      inputDay.addEventListener('change', function(event) {
        radioButton.forEach(function(button){
            button.removeAttribute("disabled", "");
        })

        let newValue = event.target.value;

        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
          if (xhr.readyState === 4 && xhr.status === 200) {
            var response = xhr.responseText;
            let timeArray = response.split(",")
            timeArray.forEach(function(time){
              radioButton.forEach(function(button){
                if(time === button.value){
                  button.setAttribute("disabled", "");
                }
              })
            })
          }
        };

        xhr.open('POST', 'disable.php', true);
        xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xhr.send('dateInput=' + newValue);
      });
      // ===================================== ROBIN ==============================================
  </script>

  <!-- JAVASCRIPT SRC -->
  <script src="jquery-3.6.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script src="material.min.js"></script>
  <script src="app.js"></script>
  <!-- AOS LINK -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</body>
</html>
