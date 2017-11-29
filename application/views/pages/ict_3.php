<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>USTHhub</title>
        <link href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/scrolling-nav.css" rel="stylesheet">
    <link rel="icon" href="https://image.flaticon.com/icons/svg/580/580855.svg">
  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
      <div class="container-fluid">
        <a class="navbar-brand js-scroll-trigger ml-auto" href="<?php echo base_url() ?>home">USTHhub</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="container collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-left">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#firstyear">1st year</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#ict">I.C.T<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="<?php echo base_url(); ?>ict_2">2nd year</a></li>
                <div class="dropdown-divider"></div>
                <li><a class="dropdown-item" href="<?php echo base_url(); ?>ict_3">3th year</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#sa">S.A<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">2nd year</a></li>
                <div class="dropdown-divider"></div>
                <li><a class="dropdown-item" href="#">3th year</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#en">E.N<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">2nd year</a></li>
                <div class="dropdown-divider"></div>
                <li><a class="dropdown-item" href="#">3th year</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#pmab">P.M.A.B<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">2nd year</a></li>
                <div class="dropdown-divider"></div>
                <li><a class="dropdown-item" href="#">3th year</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#weo">W.E.O<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">2nd year</a></li>
                <div class="dropdown-divider"></div>
                <li><a class="dropdown-item" href="#">3th year</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
            </li>
          </ul>
          <ul class="navbar-nav ml-auto" id="abc">
            <li class="nav-item"><a href="signup.html" class="nav-link">Sign Up</a></li>
            <li class="nav-item"><a onclick="document.getElementById('id01').style.display='block'" href="#" class="nav-link">Login</a></li>

            <!-- popuplogin -->
            <div id="id01" class="modal">
              <form class="modal-content animate" action="/action_page.php">
                <div class="imgcontainer">
                  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                  <img src="image/user.png" alt="Avatar" class="avatar">
                </div>

                <div id="popuplogin" class="container">
                  <label><b>Username</b></label>
                  <input type="text" placeholder="Enter Username" name="uname" required>

                  <label><b>Password</b></label>
                  <input type="password" placeholder="Enter Password" name="psw" required>

                  <button type="submit">Login</button>
                  <input type="checkbox" checked="checked"> Remember me
                </div>

                <div class="container" style="background-color:#f1f1f1">
                  <button id="cancelbtn" type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                  <span class="psw">Forgot <a href="#">password?</a></span>
                </div>
              </form>
            </div>
            <script>
            // Get the modal
            var modal = document.getElementById('id01');

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
            </script>
            <!-- /popuplogin -->
          </ul>
        </div>
      </div>
    </nav>

    <header class="bg-light text-black">
      <div class="container text-left">
        <h1>Information and Communication Technology: Third Year</h1>
        <p class="lead">The ting goes skrrrahh, pap, pap, ka-ka-ka. Skidiki-pap-pap, and a pu-pu-pudrrrr-boom. Skya, du-du-ku-ku-dun-dun. Poom, poom, you don' know.</p>
      </div>
    </header>

    <!-- table -->
    <div class="container">
      <table class="table table-bordered table-primary">
        <thead>
          <tr class="table-secondary text-center">
            <th colspan="7">27 thg 11 – 3 thg 12, 2017</th>
          </tr>
          <tr class="table-danger text-center">
            <th scope="col"></th>
            <th class="col-md-2" scope="col">Mon, 27/11</th>
            <th class="col-md-2" scope="col">Tue, 28/11</th>
            <th class="col-md-2" scope="col">Wed, 29/11</th>
            <th class="col-md-2" scope="col">Thus, 30/11</th>
            <th class="col-md-2" scope="col">Fri, 1/12</th>
            <th class="col-md-2" scope="col">Sat, 2/12</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th class="table-danger" scope="row">1</th>
            <td></td>
            <td>08:30 – 12:00<br>Mobile apps application - Dr. Tran Giang Son - 604/USTH</td>
            <td>08:30 – 11:30<br>Image Processing - Dr. Nghiem Thi Phuong - 710/USTH</td>
            <td></td>
            <td>08:30 – 11:30<br>Image Processing - Dr. Nghiem Thi Phuong - 710/USTH</td>
            <td></td>
          </tr>
          <tr>
            <th class="table-danger" scope="row">2</th>
            <td>14:00 – 16:00<br>Final exam: Object-Oriented System Analysis and Design, 710/USTH</td>
            <td>16:00 – 18:00<br>Future Tech Talents - USTH Auditorium</td>
            <td>13:30 – 16:30<br>Advanced Database - Dr. Nguyen Hoang Ha - 710/USTH</td>
            <td>14:00 – 16:00<br>Final exam: Web apps development, 710/USTH</td>
            <td></td>
            <td></td>
          </tr>
          <tr>
            <th class="table-danger" scope="row">3</th>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
          </tr>
        </tbody>
      </table>
    </div>

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; USTHhub 2017</p>
      </div>
      <!-- /.container -->
    </footer>


    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url() ?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Plugin JavaScript -->
    <script src="<?php echo base_url() ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom JavaScript for this theme -->
    <script src="<?php echo base_url() ?>assets/js/scrolling-nav.js"></script>
  </body>
</html>