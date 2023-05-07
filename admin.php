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

    <style>
      .admin-html .delete-btn{
        margin-top: 1.8rem !important;
        width: 20% !important;
        background: linear-gradient(to right, #CA302D, #BA262B) !important;
      }
    </style>
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
          <!-- ======================== -->
            <div class="search-wrapper">
                  <form action="" method="GET">

                    <div class="search_box">
                      <input type="text" name="search" value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="input" placeholder="Search Information">

                      <button class="btn btn_common">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>

                  </form>
            </div>
          <!-- ======================== -->
            <div class="table-scroll">
                <table class="striped highlight centered responsive-table" style="border:3;">
                  <thead>
                    <tr class="ths">
                      <th>ID</th>
                      <th>Category</th>
                      <th>Full Name</th>
                      <th>Email</th>
                      <th>Phone</th>
                      <th>Address</th>
                      <th>Description</th>
                      <th>Date</th>
                      <th>Time</th>
                    </tr>
                  </thead>
                  <?php
                      include 'newConnection.php';

                      if(isset($_GET['search']))
                      {
                          $filtervalues = $_GET['search'];
                          $query = "SELECT * FROM appointment_tb WHERE CONCAT(ID,category,name,email,phone,address,description,date,time) LIKE '%$filtervalues%' ";
                          $query_run = mysqli_query($conn, $query);

                          if(mysqli_num_rows($query_run) > 0)
                          {
                              foreach($query_run as $row)
                              {
                                echo "<tr>";
                                echo "<td>".$row['id']."</td>";
                                echo "<td>".$row['category']."</td>";
                                echo "<td>".$row['name']."</td>";
                                echo "<td>".$row['email']."</td>";
                                echo "<td>".$row['phone']."</td>";
                                echo "<td>".$row['address']."</td>";
                                echo "<td>".$row['description']."</td>";
                                echo "<td>".$row['date']."</td>";
                                echo "<td>".$row['time']."</td>";
                                echo "</tr>";
                              }
                          }
                          else
                          {
                              ?>
                                  <tr>
                                      <td colspan="9">NO RECORD FOUND</td>
                                  </tr>
                              <?php
                          }
                      }

                      else {
                        $sql1 = "SELECT * FROM appointment_tb";
                        $result1 = mysqli_query($conn,$sql1);
                        while($row = mysqli_fetch_array($result1))
                        {
                            echo "<tr>";
                            echo "<td>".$row['id']."</td>";
                            echo "<td>".$row['category']."</td>";
                            echo "<td>".$row['name']."</td>";
                            echo "<td>".$row['email']."</td>";
                            echo "<td>".$row['phone']."</td>";
                            echo "<td>".$row['address']."</td>";
                            echo "<td>".$row['description']."</td>";
                            echo "<td>".$row['date']."</td>";
                            echo "<td>".$row['time']."</td>";
                            echo "</tr>";
                        }
                      }
                  ?>
                </table>
            </div>
            <button class="btn waves-effect left delete-btn" id="delete-btn1"> DELETE </button>
            <button class="btn waves-effect right aided-btn" id="aided-btn"> AIDED </button>
            <!-- <p id="response">Waiting for response...</p> -->
        </div>
    </div>
    <div class="recent wrapper" id="recent">
        <div class="container">
            <h2 class="black-text">Recently Aided</h2>

          <!-- ======================== -->
          <div class="search-wrapper">
                  <form action="" method="GET">

                    <div class="search_box">
                      <input type="text" name="search2" value="<?php if(isset($_GET['search2'])){echo $_GET['search2']; } ?>" class="input" placeholder="Search Information">

                      <button class="btn btn_common">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>

                  </form>
            </div>
          <!-- ======================== -->

            <div class="table-scroll">
                <table class="striped highlight centered responsive-table" style="border:3;">
                <thead>
                  <tr class="ths">
                      <th>ID</th>
                      <th>Category</th>
                      <th>Full Name</th>
                      <th>Email</th>
                      <th>Phone</th>
                      <th>Address</th>
                      <th>Description</th>
                      <th>Date</th>
                      <th>Time</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                      include 'newConnection.php';

                      if(isset($_GET['search2']))
                      {
                          $filtervalues = $_GET['search2'];
                          $query = "SELECT * FROM aided_tb WHERE CONCAT(ID,category,name,email,phone,address,description,date,time) LIKE '%$filtervalues%' ";
                          $query_run = mysqli_query($conn, $query);

                          if(mysqli_num_rows($query_run) > 0)
                          {
                              foreach($query_run as $row)
                              {
                                echo "<tr>";
                                echo "<td>".$row['id']."</td>";
                                echo "<td>".$row['category']."</td>";
                                echo "<td>".$row['name']."</td>";
                                echo "<td>".$row['email']."</td>";
                                echo "<td>".$row['phone']."</td>";
                                echo "<td>".$row['address']."</td>";
                                echo "<td>".$row['description']."</td>";
                                echo "<td>".$row['date']."</td>";
                                echo "<td>".$row['time']."</td>";
                                echo "</tr>";
                              }
                          }
                          else
                          {
                              ?>
                                  <tr>
                                      <td colspan="9">NO RECORD FOUND</td>
                                  </tr>
                              <?php
                          }
                      }

                      else {
                        $sql1 = "SELECT * FROM aided_tb";
                        $result1 = mysqli_query($conn,$sql1);
                        while($row = mysqli_fetch_array($result1))
                        {
                            echo "<tr>";
                            echo "<td>".$row['id']."</td>";
                            echo "<td>".$row['category']."</td>";
                            echo "<td>".$row['name']."</td>";
                            echo "<td>".$row['email']."</td>";
                            echo "<td>".$row['phone']."</td>";
                            echo "<td>".$row['address']."</td>";
                            echo "<td>".$row['description']."</td>";
                            echo "<td>".$row['date']."</td>";
                            echo "<td>".$row['time']."</td>";
                            echo "</tr>";
                        }
                      }
                  ?>
                </tbody>
              </table>
            </div>
            <button class="btn waves-effect right delete-btn" id="delete-btn2"> DELETE </button>
        </div>
    </div>
    <div class="all wrapper" id="all">
        <div class="container">
            <h2 class="black-text">All Patients</h2>

            <!-- ======================== -->
            <div class="search-wrapper">
                  <form action="" method="GET">

                    <div class="search_box">
                      <input type="text" name="search3" value="<?php if(isset($_GET['search3'])){echo $_GET['search3']; } ?>" class="input " placeholder="Search Information">

                      <button class="btn btn_common">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>

                  </form>
            </div>
          <!-- ======================== -->

            <div class="table-scroll">
                <table class="striped highlight centered responsive-table" style="border:3;">
                  <thead>
                    <tr class="ths">
                      <th>ID</th>
                      <th>Category</th>
                      <th>Full Name</th>
                      <th>Email</th>
                      <th>Phone</th>
                      <th>Address</th>
                      <th>Description</th>
                      <th>Date</th>
                      <th>Time</th>
                    </tr>
                  </thead>
                    <?php
                      include 'newConnection.php';

                      if(isset($_GET['search3']))
                      {
                          $filtervalues = $_GET['search3'];
                          $query = "SELECT * FROM patients_tb WHERE CONCAT(ID,category,name,email,phone,address,description,date,time) LIKE '%$filtervalues%' ";
                          $query_run = mysqli_query($conn, $query);

                          if(mysqli_num_rows($query_run) > 0)
                          {
                              foreach($query_run as $row)
                              {
                                echo "<tr>";
                                echo "<td>".$row['id']."</td>";
                                echo "<td>".$row['category']."</td>";
                                echo "<td>".$row['name']."</td>";
                                echo "<td>".$row['email']."</td>";
                                echo "<td>".$row['phone']."</td>";
                                echo "<td>".$row['address']."</td>";
                                echo "<td>".$row['description']."</td>";
                                echo "<td>".$row['date']."</td>";
                                echo "<td>".$row['time']."</td>";
                                echo "</tr>";
                              }
                          }
                          else
                          {
                              ?>
                                  <tr>
                                      <td colspan="9">NO RECORD FOUND</td>
                                  </tr>
                              <?php
                          }
                      }

                      else {
                        $sql1 = "SELECT * FROM patients_tb";
                        $result1 = mysqli_query($conn,$sql1);
                        while($row = mysqli_fetch_array($result1))
                        {
                            echo "<tr>";
                            echo "<td>".$row['id']."</td>";
                            echo "<td>".$row['category']."</td>";
                            echo "<td>".$row['name']."</td>";
                            echo "<td>".$row['email']."</td>";
                            echo "<td>".$row['phone']."</td>";
                            echo "<td>".$row['address']."</td>";
                            echo "<td>".$row['description']."</td>";
                            echo "<td>".$row['date']."</td>";
                            echo "<td>".$row['time']."</td>";
                            echo "</tr>";
                        }
                      }
                  ?>
              </table>
            </div>
            <button class="btn waves-effect right delete-btn" id="delete-btn3"> DELETE </button>
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

    <!-- MESSENGER : FLOATING BTN
    <div class="fixed-action-btn">
        <a class="btn-floating blue darken-3 btn-large">
          <i class="fa-brands fa-facebook-messenger"></i>
        </a>
    </div> -->

    <!-- JAVASCRIPT SRC -->
    <script src="jquery-3.6.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="material.min.js"></script>
    <script>
      let Aid;
      let Acategory;
      let Aname;
      let Aemail;
      let Aphone;
      let Aaddress;
      let Adesc;
      let Adate;
      let Atime;

      const aidedBtn = document.getElementById('aided-btn');
      const deleteBtn1 = document.getElementById('delete-btn1');
      const deleteBtn2 = document.getElementById('delete-btn2');
      const deleteBtn3 = document.getElementById('delete-btn3');
      // const response = document.getElementById('response');


      aidedBtn.addEventListener('click', function(event) {
        location.reload();
        const xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
          if (this.readyState === 4 && this.status === 200) {
            console.log(this.responseText); // Output the response from the PHP file
            // response.innerHTML = this.responseText;
          }
        };
        xhr.open('POST', 'aidedVariable.php', true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.send('&id=' + Aid + '&category=' + Acategory + '&name=' + Aname + '&email=' + Aemail + '&phone=' + Aphone + '&address=' + Aaddress + '&desc=' + Adesc + '&date=' + Adate + '&time=' + Atime);
      });

      deleteBtn1.addEventListener('click', function(event) {
        location.reload();
        const xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
          if (this.readyState === 4 && this.status === 200) {
            console.log(this.responseText); // Output the response from the PHP file
            // response.innerHTML = this.responseText;
          }
        };
        xhr.open('POST', 'deleteAppointment.php', true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.send('&id=' + Aid + '&category=' + Acategory + '&name=' + Aname + '&email=' + Aemail + '&phone=' + Aphone + '&address=' + Aaddress + '&desc=' + Adesc + '&date=' + Adate + '&time=' + Atime);
      })

      deleteBtn2.addEventListener('click', function(event) {
        location.reload();
        const xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
          if (this.readyState === 4 && this.status === 200) {
            console.log(this.responseText); // Output the response from the PHP file
            // response.innerHTML = this.responseText;
          }
        };
        xhr.open('POST', 'deleteAided.php', true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.send('&id=' + Aid + '&category=' + Acategory + '&name=' + Aname + '&email=' + Aemail + '&phone=' + Aphone + '&address=' + Aaddress + '&desc=' + Adesc + '&date=' + Adate + '&time=' + Atime);
      })

      deleteBtn3.addEventListener('click', function(event) {
        location.reload();
        const xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
          if (this.readyState === 4 && this.status === 200) {
            console.log(this.responseText); // Output the response from the PHP file
            // response.innerHTML = this.responseText;
          }
        };
        xhr.open('POST', 'deletePatients.php', true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.send('&id=' + Aid + '&category=' + Acategory + '&name=' + Aname + '&email=' + Aemail + '&phone=' + Aphone + '&address=' + Aaddress + '&desc=' + Adesc + '&date=' + Adate + '&time=' + Atime);
      })

      // SELECT date, time FROM appointment_tb;




       $('.tabs').tabs({
        swipeable: true,
        draggable: false
      });

      const rows = document.querySelectorAll('tr');
      rows.forEach(row => {
        let id = row.children[0].textContent;
        let category = row.children[1].textContent;
        let name = row.children[2].textContent;
        let email = row.children[3].textContent;
        let phone = row.children[4].textContent;
        let address = row.children[5].textContent;
        let desc = row.children[6].textContent;
        let date = row.children[7].textContent;
        let time = row.children[8].textContent;

        row.addEventListener('click', () => {
            Aid = id
            Acategory = category
            Aname = name
            Aemail = email
            Aphone = phone
            Aaddress = address
            Adesc = desc
            Adate = date
            Atime = time
        });
      });

    </script>

    <!-- <script src="//code.tidio.co/odb33nyszsf4xebjah4lvjxqeaztbt0r.js" async></script> -->
    <script src="app.js"></script>
    <!-- AOS LINK -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</body>
</html>
