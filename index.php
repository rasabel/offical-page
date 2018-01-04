<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>my web</title>
  <!-- lib css -->
  <link rel="stylesheet" href="lib/bootstrap/css/bootstrap.css" rel="stylesheet">
  <link rel="stylesheet" href="lib/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">

  <!-- my statyle sheets  -->
  <link rel="stylesheet" href="style/style.css" rel="stylesheet">
  <link rel="stylesheet" href="style/header.css" rel="stylesheet">


</head>

<!-- BODY -->
<body>
  <!-- head info  -->
  <div class="head_info">
    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
    <a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
    <a href="#"><i class="fa fa-google-plus-official" aria-hidden="true"></i></a>
    <div class="phone">
      <i class="fa fa-phone " aria-hidden="ture"></i><span class="phone_num">+251-940-60-92-94</span>
    </div>
  </div>

  <!-- head menu -->
  <nav id="top_navigation" class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-item nav-link" href="#">Home </a>
        <a class="nav-item nav-link" href="#about_us">About us</a>
        <a class="nav-item nav-link" href="#what_we_do">Service</a>
        <a class="nav-item nav-link" href="#contact_us">Contact us</a>
      </div>
    </div>
  </nav>

  <!--bootstrap v3 affix with the new bootstrap have erro -->
  <!--
  <div class="navbar navbar-default navbar-fixed-top" data-spy="affix" data-offset-top="400">
  <div class="container navigation">
  <div class="navbar-header">
  <a href="#" class="navbar-brand">Brand</a>
  <a class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
  <i class="fa fa-bars"></i>
</a>
</div>

<div class="navbar-collapse collapse">
<ul class="nav navbar-nav">
<li><a href="#">Link</a></li>
<li><a href="#">Link</a></li>
</ul>
<ul class="nav navbar-right navbar-nav">
<li><a href="#about_us">About us</a></li>
<li><a href="#what_we_do">oper service</a></li>
<li><a href="#contact_us">Contact us</a></li>
</ul>
</div>
</div>
</div> -->
<div style="position: relative;" data-spy="scroll" data-target="#top_navigation" data-offset="0">
  <section class="home">
    <div class="container">
      <h1 class="text-center">Hello.</h1>
    </div>
  </section>
  <section id="about_us">
    <div class="container">
      <h1>About us</h1>
      <p class="disctiption">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sem quam, scelerisque vitae sem non, ornare condimentum leo. Vivamus eros tortor, tincidunt et viverra ac, gravida eu augue. Interdum et malesuada fames ac ante ipsum primis in faucibus. Praesent nibh ex, hendrerit at tellus sed, laoreet suscipit leo
      </p>
    </div>
  </section>
  <section id="what_we_do">
    <div class="container">
      <h1>What we do</h1>
      <div class="row">
        <div class="col-md-3">
          <i class="fa-mobile-phone"></i>
          <h3>Web Development</h3>
          <p class="text-justify" >Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sem quam, scelerisque vitae sem non, ornare condimentum leo. Vivamus eros tortor, tincidunt et viverra ac, gravida eu augue. Interdum et malesuada fames ac ante ipsum primis in faucibus. Praesent nibh ex, hendrerit at tellus sed, laoreet suscipit leo</p>
        </div>
        <div class="col-md-3">
          <i class="fa-mobile-phone"></i>
          <h3>networking</h3>
          <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sem quam, scelerisque vitae sem non, ornare condimentum leo. Vivamus eros tortor, tincidunt et viverra ac, gravida eu augue. Interdum et malesuada fames ac ante ipsum primis in faucibus. Praesent nibh ex, hendrerit at tellus sed, laoreet suscipit leo</p>
        </div>
        <div class="col-md-3">
          <i class="fa-mobile-phone"></i>
          <h3>Desktop applicaton</h3>
          <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sem quam, scelerisque vitae sem non, ornare condimentum leo. Vivamus eros tortor, tincidunt et viverra ac, gravida eu augue. Interdum et malesuada fames ac ante ipsum primis in faucibus. Praesent nibh ex, hendrerit at tellus sed, laoreet suscipit leo</p>
        </div>
        <div class="col-md-3">
          <i class="fa-mobile-phone"></i>
          <h3>mobile application</h3>
          <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sem quam, scelerisque vitae sem non, ornare condimentum leo. Vivamus eros tortor, tincidunt et viverra ac, gravida eu augue. Interdum et malesuada fames ac ante ipsum primis in faucibus. Praesent nibh ex, hendrerit at tellus sed, laoreet suscipit leo</p>
        </div>
      </div>
    </div>
  </section>
  <section id="contact_us">
    <div class="container">
      <h1>contact us</h1>
      <div class="row">
        <div class="col">
          <h3>Stay in touch</h3>
          <p>Subscrib for update use the form below</p>
          <form id="notification_email" action="<?php echo htmlspecialchars("class/validate.php");?>" method="post" novalidate>
            <div class="form-group">
              <label for="notify_email">Example label</label>
              <input type="email" name="notify_email" class="form-control" id="notify_email" placeholder="Email address" required>
              <div class="invalid-feedback">
                Please provide a valid Email.
              </div>
            </div>
            <input type="submit" class="btn " value="notify me">
          </form>
        </div>
        <div class="col">
          <!--left side contact form  -->
          <form id="contact_form" action="<?php echo htmlspecialchars("class/validate.php");?>" method="post" novalidate>
            <div class="form-group">
              <lable for="user_name">Name:</label>
                <input type="text" name="name" class="form-control" id="user_name" placeholder="Name" required>
                <div class="invalid-feedback">
                  Please choose a username.
                </div>
              </div>
              <div class="form-group">
                <lable for="user_email">Email:</label>
                  <input type="email" name="email" class="form-control" id="user_email" placeholder="Email" required>
                  <div class="invalid-feedback">
                    Please provide a valid Email.
                  </div>
                </div>
                <div class="form-group">
                  <label for="user_message">Message:</label>
                  <textarea class="form-control" name="message" id="user_message" rows="3" required></textarea>
                  <div class="invalid-feedback">
                    Please provide a message.
                  </div>
                </div>
                <button type="submit" class="btn btn-primary">Send</button>
              </form>
              <script>
              // Example starter JavaScript for disabling form submissions if there are invalid fields
              (function() {
                'use strict';


                window.addEventListener('load', function() {
                  var contact_form = document.getElementById('contact_form');
                  contact_form.addEventListener('submit', function(event) {
                    if (contact_form.checkValidity() === false) {
                      event.preventDefault();
                      event.stopPropagation();
                    }
                    contact_form.classList.add('was-validated');
                  }, false);
                }, false);

                window.addEventListener('load', function() {
                  var notification_email = document.getElementById('notification_email');
                  notification_email.addEventListener('submit', function(event) {
                    if (notification_email.checkValidity() === false) {
                      event.preventDefault();
                      event.stopPropagation();
                    }
                    notification_email.classList.add('was-validated');
                  }, false);
                }, false);


              })();
              </script>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="card-group">
        <div class="card w-25">
          <img class="card-img-top" src="img/5.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-primary">Button</a>
          </div>
        </div>

        <div class="card w-25">
          <img class="card-img-top" src="img/5.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-primary">Button</a>
          </div>
        </div>
        <div class="card w-25">
          <img class="card-img-top" src="img/5.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-primary">Button</a>
          </div>
        </div>
        <div class="card w-25">
          <img class="card-img-top" src="img/5.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-primary">Button</a>
          </div>
        </div>
      </div>
      <style>
        .card-img-top:hover{
          height: 200px;
        }
      </style>
      <div class="bg-info clearfix">
  <button type="button" class="btn btn-secondary float-left">Example Button floated left</button>
  <button type="button" class="btn btn-secondary float-right">Example Button floated right</button>
</div>
    </section>
  </div>
  <div class="footer">
    &copy; All right reserved. <a href="pages/termANDpolicy.html">Term and policy</a>
  </div>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/popper/popper.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
