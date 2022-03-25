<?php
include 'config.php';
session_start();
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="Css/bootstrap.min.css">
  <link rel="stylesheet" href="signin.php">
  <link rel="stylesheet" href="login.php">

  <title>Galaxy</title>
</head>

<body>
  <div class="view"
    style="background-image: url('background.png');background-repeat: no-repeat; background-size: cover ; background-position: center center;">
    <nav class="navbar navbar-expand-xl navbar-light ">

      <div class="container" style=" font-weight: 600;">
        <a class="navbar-brand" href="#">
          <img src="icon.png" class="img-fluid" style="height: 80px;" alt="responsive">

        </a>
        <button class="navbar-toggler" style="border-color: white;" type="button" data-bs-toggle="collapse"
          data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon navbar-light"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <div class="navbar-nav " style="margin-left: 10rem;">
            <ul class="navbar-nav " style="text-align:center">
              <li class="nav-item">
                <a class="nav-link  text-light" aria-current="page" href="#" style="margin-left: 3rem;">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light" href="#" style="margin-left: 3rem;">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light" href="#" style="margin-left: 3rem;">Features</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light" href="#" style="margin-left: 3rem;">Support</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light" href="#" style="margin-left: 3rem;">Blog</a>
              </li>
              <li class="nav-item">
                <form class="form-inline">
                  <button class="btn btn-outline-primary my-1 my-sm-1" name="submit" type="submit" style="margin-left: 3rem;">
                  <a href="login.php"  style="text-decoration: none;color:white">Login</a></button>
                </form>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
    <div class="container" style="margin-top: 5rem;">
      <div class="row">
        <div class="col-md-6" style="margin-top: 5rem;">
          <h2 class="h2-responsive text-light">All time website monitoring to

            achieve brilliant performance</h2>

          <p class="text-light" style="font-size: 15px; margin-top: 2rem;">Never let your website remain down with our
            all-time monitoring tool that

            monitors your website for downtime and performance and alerts you in case

            of any problem so that you can immediately fix the errors and bugs and have

            your website up and running in no time.</p>
        </div>
        <div class="col-md-6">
          <img src="digital-2.png" class="img-fluid" alt="...">
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <br>
          <br>
          <br>
          <br>

        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <br>
          <br>
          <br>
          <br>

        </div>
      </div>

    </div>
  </div>
  <!--container  for card-->
  <div class="container">
    <div class="row">
      <div class="card" style="margin-top:-5rem;">
        <div class="card-body">
          <div class="row" style="margin-top: 2rem;">
            <div class="col-md-4">
              <div class="row">
                <div class="col-3"><img src="time_ico.png" class="img-fluid" alt="..."></div>
                <div class="col-9">
                  <h6><strong> Timely and Detailed Reports</strong></h6>
                  <p class="text-left">Get detailed daily, weekly, or monthly reports on your website's uptime,
                    performance and server response.</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="row">
                <div class="col-3"><img src="time_ico copy.png" class="img-fluid" alt="..."></div>
                <div class="col-9">
                  <h6><strong> Global Monitoring</strong></h6>
                  <p class="text-left">Monitor your website efficiently with different locations all over the world in
                    minute periods so that you stay ensured.</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="row">
                <div class="col-3"><img src="time_ico copy 2.png" class="img-fluid" alt="..."></div>
                <div class="col-9">
                  <h6><strong> Mobile Application Creation</strong></h6>
                  <p class="text-left">Create different mobile applications or customize an app for mobile phones to
                    have better responsiveness.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row" style="margin-top: 9rem;">
      <div class="col-md-6">
        <img src="hero (1).png" class="img-fluid" alt="...">
      </div>
      <div class="col-md-6">
        <h2 class="text-left"><strong>
            Have Your Website Remain Uptime All the Time </strong>
        </h2>
        <p class="text-left" style="font-size: 15px; margin-top: 2rem;">
          Even a few minutes downtime can affect the performance of your website increasing the bounce rates, lowering
          the conversion rates, and costing you clients and customers. You can prevent this situation by keeping your
          website monitored 24*7 and getting updates on its status and performance at minute intervals from different
          locations.
        </p>
        <p class="text-left" style="font-size: 15px;">
          With the alerts that our tool gives via message, phone calls, or e-mails, you get to know when your website is
          down, and you can fix the problem immediately thus reducing the downtime and increasing the functionality.
        </p>
      </div>
    </div>
  </div>
  <!-- container end-->
  <div class="container">
    <div class="row" style="margin-top: 6rem;">
      <div class="col-md-2"></div>
      <div class="col-md-8">
        <h2 class="text-center"><strong>
            Simple Yet Powerful Features </strong>
        </h2>
        <p class="text-center">
          Never let your website remain down with our all-time monitoring tool that monitors
          your website for downtime and performance and alerts you in case of any problem so that you can immediately
          fix the errors and bugs and have your website up and running in no time.
        </p>
      </div>
      <div class="col-md-2"></div>
    </div>
    <div class="row" style="margin-top: 4rem;">

      <div class="col-md-4">
        <div class="container">
          <img src="Bitmap Copy 3.png" class="img-fluid" alt="...">
          <h5 class="text-left" style="margin-top: 15px;"><strong>
              Multiple Types </strong>
          </h5>
          <p class="text-left"> Checl HTTP(s), ping, port,heartbeat and keywords.

          </p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="container">
          <img src="Bitmap Copy 3.png" class="img-fluid" alt="...">
          <h5 class="text-left" style="margin-top: 15px;"><strong>
              Get Alerted </strong>
          </h5>
          <p class="text-left"> Vie e-mail,SMS voice calls, telegram , Slack, Microsoft Teams,push,web-hooks...

          </p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="container">
          <img src="Bitmap Copy 3.png" class="img-fluid" alt="...">
          <h5 class="text-left" style="margin-top: 15px;"><strong>
              Reach The Stats </strong>
          </h5>
          <p class="text-left"> View uptime, downtime and thr response times.

          </p>
        </div>
      </div>

    </div>
    <div class="row" style="margin-top: 4rem;">
      <div class="col-md-4">
        <div class="container">
          <img src="Bitmap Copy 3.png" class="img-fluid" alt="...">
          <h5 class="text-left" style="margin-top: 15px;"><strong>
              Advanced Notifications </strong>
          </h5>
          <p class="text-left"> Ignore minor downtimes by setting "alert once (or every x minutes) if down for y
            minutes"

          </p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="container">
          <img src="Bitmap Copy 3.png" class="img-fluid" alt="...">
          <h5 class="text-left" style="margin-top: 15px;"><strong>
              Maintenance Windowa </strong>
          </h5>
          <p class="text-left"> Define time periods in order to not get monitored.

          </p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="container">
          <img src="Bitmap Copy 3.png" class="img-fluid" alt="...">
          <h5 class="text-left" style="margin-top: 15px;"><strong>
              API </strong>
          </h5>
          <p class="text-left"> Perform almost every task with thr REST API.

          </p>
        </div>
      </div>
    </div>
  </div>
  <!-- container end-->
  <div class="container-fluid" style="background-color: #f7f8fc  ; ">

    <div class="container" style="padding-top: 4rem;">
      <div class="row">
        <div class="col-md-3">
          <div class="container">
            <div class="row">
              <h5 class="text-left">
                <strong> Say hello</strong>
              </h5>
              <p class="text-left" style="font-size: 13px;font-weight: 500;">
                hello@zehntech.com
              </p>
              <p class="text-left" style="font-size: 13px;font-weight: 500; margin-top: -10px;">
                +91 99817-47125
              </p>
            </div>
            <div class="row">
              <h5 class="text-left">
                <strong> Locate us</strong>
              </h5>
              <h6 class="text-left">
                <strong><img src="Flag_of_India.png" class="img-fluid" style="margin-left: -10px;" alt="india">
                  INDIA</strong>
              </h6>
              <p class="text-left" style="font-size: 13px;font-weight: 500; margin-top: -10px;">
                208, MPSEDC STP Building Electronics Complex, Pardeshipura indore, 452010
              </p>
            </div>
            <div class="row">

              <h6 class="text-left">
                <strong><img src="Flag_of_germany.png" class="img-fluid" style="margin-left: -10px;"
                    alt="GERMANY">GERMANY</strong>
              </h6>
              <p class="text-left" style="font-size: 13px;font-weight: 500; margin-top: -10px;">
                Rückertstraße 12, 10627 Berlin Deutschland
              </p>
            </div>

          </div>


        </div>
        <div class="col-md-2">
          <div class="container">
            <div class="row">
              <h5 class="text-left">
                <strong> Quick Links</strong>
              </h5>
            </div>
            <div class="row">
              <p class="text-left" style="font-size: 13px;font-weight: 500;">
                Home
              </p>
            </div>
            <div class="row" style="font-size: 13px;font-weight: 500;">
              <p class="text-left">
                About Us
              </p>
            </div>
            <div class="row" style="font-size: 13px;font-weight: 500;">
              <p class="text-left">
                Features
              </p>
            </div>
            <div class="row" style="font-size: 13px;font-weight: 500;">
              <p class="text-left">
                Support
              </p>
            </div>
            <div class="row" style="font-size: 13px;font-weight: 500;">
              <p class="text-left">
                Blog
              </p>
            </div>
            <div class="row" style="font-size: 13px;font-weight: 500;">
              <p class="text-left">
                Resources
              </p>
            </div>
          </div>

        </div>
        <div class="col-md-3">
          <div class="container" style="margin-left: 3px">
            <h5 class="text-left">
              <strong> Services</strong>
            </h5>
            <p class="text-left" style="font-size: 13px;font-weight: 500;">
              Outsourcing
            </p>
            <p class="text-left" style="font-size: 13px;font-weight: 500;">
              Web Development
            </p>
            <p class="text-left" style="font-size: 13px;font-weight: 500;">
              Mobile App Development
            </p>
            <p class="text-left" style="font-size: 13px;font-weight: 500;">
              Enterprise Solution
            </p>
            <p class="text-left" style="font-size: 13px; font-weight: 500;">
              Data Visualization
            </p>
          </div>
        </div>
        <div class="col-md-4">

          <h5 class="text-left" style="margin-left: 9px;">
            <strong> Create your account in seconds and</strong>
          </h5>
          <h1 class="text-left" style="color: #664efa;margin-left: 9px;">
            <strong> Start Monitoring.</strong>
          </h1>
          <div class="d-grid gap-1 col-11 mx-auto " style="margin-top: 3rem;">
            <button class="btn btn-primary btn-lg" type="button"
              style="background-color:#664efa; border-color: #664efa;"> Sign up</button>
          </div>
          <div class="container" style="margin-top: 3rem;">
            <h5 class="text-left"><strong> Feeling social</strong>
            </h5>
            <!--icons -->
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook"
              viewBox="0 0 16 16">
              <path
                d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter"
              viewBox="0 0 16 16">
              <path
                d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
            </svg>

            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-linkedin"
              viewBox="0 0 16 16">
              <path
                d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z" />
            </svg>

            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-youtube"
              viewBox="0 0 16 16">
              <path
                d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z" />
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-skype"
              viewBox="0 0 16 16">
              <path
                d="M4.671 0c.88 0 1.733.247 2.468.702a7.423 7.423 0 0 1 6.02 2.118 7.372 7.372 0 0 1 2.167 5.215c0 .344-.024.687-.072 1.026a4.662 4.662 0 0 1 .6 2.281 4.645 4.645 0 0 1-1.37 3.294A4.673 4.673 0 0 1 11.18 16c-.84 0-1.658-.226-2.37-.644a7.423 7.423 0 0 1-6.114-2.107A7.374 7.374 0 0 1 .529 8.035c0-.363.026-.724.08-1.081a4.644 4.644 0 0 1 .76-5.59A4.68 4.68 0 0 1 4.67 0zm.447 7.01c.18.309.43.572.729.769a7.07 7.07 0 0 0 1.257.653c.492.205.873.38 1.145.523.229.112.437.264.615.448.135.142.21.331.21.528a.872.872 0 0 1-.335.723c-.291.196-.64.289-.99.264a2.618 2.618 0 0 1-1.048-.206 11.44 11.44 0 0 1-.532-.253 1.284 1.284 0 0 0-.587-.15.717.717 0 0 0-.501.176.63.63 0 0 0-.195.491.796.796 0 0 0 .148.482 1.2 1.2 0 0 0 .456.354 5.113 5.113 0 0 0 2.212.419 4.554 4.554 0 0 0 1.624-.265 2.296 2.296 0 0 0 1.08-.801c.267-.39.402-.855.386-1.327a2.09 2.09 0 0 0-.279-1.101 2.53 2.53 0 0 0-.772-.792A7.198 7.198 0 0 0 8.486 7.3a1.05 1.05 0 0 0-.145-.058 18.182 18.182 0 0 1-1.013-.447 1.827 1.827 0 0 1-.54-.387.727.727 0 0 1-.2-.508.805.805 0 0 1 .385-.723 1.76 1.76 0 0 1 .968-.247c.26-.003.52.03.772.096.274.079.542.177.802.293.105.049.22.075.336.076a.6.6 0 0 0 .453-.19.69.69 0 0 0 .18-.496.717.717 0 0 0-.17-.476 1.374 1.374 0 0 0-.556-.354 3.69 3.69 0 0 0-.708-.183 5.963 5.963 0 0 0-1.022-.078 4.53 4.53 0 0 0-1.536.258 2.71 2.71 0 0 0-1.174.784 1.91 1.91 0 0 0-.45 1.287c-.01.37.076.736.25 1.063z" />
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp"
              viewBox="0 0 16 16">
              <path
                d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
            </svg>
          </div>
        </div>
      </div>
      <hr>
      <div class="container">
        <div class="row">

          <div class="col-12">
            <p class="text-center" style="font-size: 12px; font-weight: 500; margin-top: 1rem;">
              ⓒ-2019 Galaxy. All rights reserved
            </p>
            <p class="text-center text-muted" style="font-size: 12px; font-weight: 500;">
              Made with <img src="icons8-love-48.png" class="img-fluid" alt="..." style="width: 15px;"> by zehntech
            </p>
          </div>

        </div>
      </div>
    </div>
  </div>






  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>