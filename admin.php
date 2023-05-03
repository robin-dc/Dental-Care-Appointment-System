<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DentalCare PH | Admin</title>
    <link rel="shortcut icon" href="images/icon4.png" type="image/x-icon">
    <!-- CSS LINKS -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="material.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- MATERIALIZE ICONS -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body class="admin-html">
    <header>
        <nav class="nav-extended transparent">
            <div class="nav-wrapper transparent container">
              <a href="index.php" class="brand-logo black-text center">
                <img src="images/icon1.png" alt="logo" class="logo-img">
                Dental<span class="dif">Care.</span></a>
            </div>
            <div class="nav-content">
              <ul class="container admin-links tabs transparent">
                <li class="tab col s4"><a class="nav-link black-text" href="#appointments">APPOINTMENTS</a></li>
                <li class="tab col s4"><a class="nav-link black-text" href="#recent">RECENTLY AIDED</a></li>
                <li class="tab col s4"><a class="nav-link black-text" href="#all">ALL PATIENTS</a></li>
              </ul>
            </div>
          </nav>

    </header>

    <div class="appointments wrapper" id="appointments">
        <div class="container appointment-table">
            <h2 class="black-text">Appointments Schedule</h2>
            <div class="table-scroll">
                <table class="striped highlight centered responsive-table" style="border:3;">
                <thead>
                  <tr class="ths">
                    <th>Category</th>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Description</th>
                    <th>Time and Date</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td> Dental Consultation</td>
                    <td> Robin Dela Cruz</td>
                    <td> robindelacruz725@gmail.com</td>
                    <td> 09996742620</td>
                    <td> Brgy. Inarawan Antipolo City</td>
                    <td> Toothache which leads to migraine</td>
                    <td> April 30, 2023, 9:00AM - 10:00AM</td>
                  </tr>
                  <tr>
                    <td> Dental Cleaning</td>
                    <td> Klaudi Mer Pantaleon</td>
                    <td> klodimer@gmail.com</td>
                    <td> 09996742620</td>
                    <td> Lagundi Morong</td>
                    <td> N/A</td>
                    <td> April 27, 2023, 10:00AM - 11:00AM</td>
                  </tr>
                  <tr>
                    <td> Pediatric Dentist</td>
                    <td> Michael Vincent Dacanay</td>
                    <td> michael_26@gmail.com</td>
                    <td> 09996742620</td>
                    <td> Palmera 1 Taytay</td>
                    <td> Toothache which leads to migraine</td>
                    <td> April 26, 2023, 11:00AM - 12:00NN</td>
                  </tr>
                  <tr>
                    <td> Dental Consultation</td>
                    <td> Robin Dela Cruz</td>
                    <td> robindelacruz725@gmail.com</td>
                    <td> 09996742620</td>
                    <td> Brgy. Inarawan Antipolo City</td>
                    <td> Toothache which leads to migraine</td>
                    <td> April 30, 2023, 9:00AM - 10:00AM</td>
                  </tr>
                  <tr>
                    <td> Dental Cleaning</td>
                    <td> Klaudi Mer Pantaleon</td>
                    <td> klodimer@gmail.com</td>
                    <td> 09996742620</td>
                    <td> Lagundi Morong</td>
                    <td> N/A</td>
                    <td> April 27, 2023, 10:00AM - 11:00AM</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <a href="" class="btn waves-effect right aided-btn">AIDED</a>
        </div>
    </div>
    <div class="recent wrapper" id="recent">
        <div class="container">
            <h2 class="black-text">Recently Aided</h2>
            <div class="table-scroll">
                <table class="striped highlight centered responsive-table" style="border:3;">
                <thead>
                  <tr class="ths">
                    <th>Category</th>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Description</th>
                    <th>Time and Date</th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="selected">
                    <td> Dental Consultation</td>
                    <td> Robin Dela Cruz</td>
                    <td> robindelacruz725@gmail.com</td>
                    <td> 09996742620</td>
                    <td> Brgy. Inarawan Antipolo City</td>
                    <td> Toothache which leads to migraine</td>
                    <td> April 30, 2023, 9:00AM - 10:00AM</td>
                  </tr>
                  <tr>
                    <td> Dental Cleaning</td>
                    <td> Klaudi Mer Pantaleon</td>
                    <td> klodimer@gmail.com</td>
                    <td> 09996742620</td>
                    <td> Lagundi Morong</td>
                    <td> N/A</td>
                    <td> April 27, 2023, 10:00AM - 11:00AM</td>
                  </tr>
                  <tr>
                    <td> Pediatric Dentist</td>
                    <td> Michael Vincent Dacanay</td>
                    <td> michael_26@gmail.com</td>
                    <td> 09996742620</td>
                    <td> Palmera 1 Taytay</td>
                    <td> Toothache which leads to migraine</td>
                    <td> April 26, 2023, 11:00AM - 12:00NN</td>
                  </tr>
                  <tr>
                    <td> Dental Consultation</td>
                    <td> Robin Dela Cruz</td>
                    <td> robindelacruz725@gmail.com</td>
                    <td> 09996742620</td>
                    <td> Brgy. Inarawan Antipolo City</td>
                    <td> Toothache which leads to migraine</td>
                    <td> April 30, 2023, 9:00AM - 10:00AM</td>
                  </tr>
                  <tr>
                    <td> Dental Cleaning</td>
                    <td> Klaudi Mer Pantaleon</td>
                    <td> klodimer@gmail.com</td>
                    <td> 09996742620</td>
                    <td> Lagundi Morong</td>
                    <td> N/A</td>
                    <td> April 27, 2023, 10:00AM - 11:00AM</td>
                  </tr>
                </tbody>
              </table>
            </div>
        </div>
    </div>
    <div class="all wrapper" id="all">
        <div class="container">
            <h2 class="black-text">All Patients</h2>
            <div class="table-scroll">
                <table class="striped highlight centered responsive-table" style="border:3;">
                <thead>
                  <tr class="ths">
                    <th>Category</th>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Description</th>
                    <th>Time and Date</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td> Dental Consultation</td>
                    <td> Robin Dela Cruz</td>
                    <td> robindelacruz725@gmail.com</td>
                    <td> 09996742620</td>
                    <td> Brgy. Inarawan Antipolo City</td>
                    <td> Toothache which leads to migraine</td>
                    <td> April 30, 2023, 9:00AM - 10:00AM</td>
                  </tr>
                  <tr>
                    <td> Dental Cleaning</td>
                    <td> Klaudi Mer Pantaleon</td>
                    <td> klodimer@gmail.com</td>
                    <td> 09996742620</td>
                    <td> Lagundi Morong</td>
                    <td> N/A</td>
                    <td> April 27, 2023, 10:00AM - 11:00AM</td>
                  </tr>
                  <tr>
                    <td> Pediatric Dentist</td>
                    <td> Michael Vincent Dacanay</td>
                    <td> michael_26@gmail.com</td>
                    <td> 09996742620</td>
                    <td> Palmera 1 Taytay</td>
                    <td> Toothache which leads to migraine</td>
                    <td> April 26, 2023, 11:00AM - 12:00NN</td>
                  </tr>
                  <tr>
                    <td> Dental Consultation</td>
                    <td> Robin Dela Cruz</td>
                    <td> robindelacruz725@gmail.com</td>
                    <td> 09996742620</td>
                    <td> Brgy. Inarawan Antipolo City</td>
                    <td> Toothache which leads to migraine</td>
                    <td> April 30, 2023, 9:00AM - 10:00AM</td>
                  </tr>
                  <tr>
                    <td> Dental Cleaning</td>
                    <td> Klaudi Mer Pantaleon</td>
                    <td> klodimer@gmail.com</td>
                    <td> 09996742620</td>
                    <td> Lagundi Morong</td>
                    <td> N/A</td>
                    <td> April 27, 2023, 10:00AM - 11:00AM</td>
                  </tr>
                </tbody>
              </table>
            </div>
        </div>
    </div>

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

    <!-- MESSENGER : FLOATING BTN -->
    <div class="fixed-action-btn">
        <a class="btn-floating blue darken-3 btn-large">
          <i class="fa-brands fa-facebook-messenger"></i>
        </a>
    </div>

    <!-- JAVASCRIPT SRC -->
    <script src="jquery-3.6.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="material.min.js"></script>
    <script src="app.js"></script>
    <!-- AOS LINK -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</body>
</html>
