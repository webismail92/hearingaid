<!DOCTYPE html>
<html lang="en" id="home">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Hearing Aids India</title>
  <!-- favicon -->
  <link rel="icon" href="assets/images/favicon.png">
  <!-- Google Fonts of Ubuntu-->
  <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700" rel="stylesheet">
  <!-- Bootstrap min-->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <!-- Icon fonts -->
  <link href="assets/css/icofont.css" rel="stylesheet">
  <!-- Slick slider -->
  <link href="assets/css/slick.css" rel="stylesheet">
  <!-- Fancybox light box -->
  <link href="assets/css/jquery.fancybox.min.css" rel="stylesheet">
  <!-- mobile menu custom scrollbar -->
  <link href="assets/css/jquery.mCustomScrollbar.min.css" rel="stylesheet">
  <!-- Custom css compiled from sass -->
  <link href="assets/css/style.css" rel="stylesheet">

  <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
  <main class="ic-main-wrapper">
    <!-- Pre loader -->
    <!-- <div class="ic-preloader">
      <div class="spinner">
        <span>Hearing Aids India</span>
      </div>
    </div> -->
    <!-- nav -->
    <nav class="ic-nav navbar navbar-default navbar-fixed-top">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#home">
            <img src="assets/images/logo/logo.png" alt="Hearing Aids India">
          </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse mCustomScrollbar" id="bs-example-navbar-collapse-1">
          <ul id="mainNav" class="nav navbar-nav navbar-right">
            <li class="">
              <a href="#home">Home</a>
            </li>
            <li>
              <a href="#about">About</a>
            </li>
            <li>
              <a href="#features">Features</a>
            </li>
            <li>
              <a href="#services">Services</a>
            </li>
            <li>
              <a href="#whyus">Why Us</a>
            </li>
            <li>
              <a href="#contact">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- nav end \-->

    <div class="mob-slider">
      <div id="myCarousel" class="carousel slide slider-top" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->

        <div class="carousel-inner">

          <div class="item active">
            <img src="http://hearing-aids.co.in/images/slider/3.jpg" alt="Hearing Aids India" style="width:100%;">
          </div>

          <div class="item">
            <img src="http://hearing-aids.co.in/images/slider/2.jpg" alt="Hearing Aids India" style="width:100%;">
          </div>

          <div class="item">
            <img src="http://hearingaids.in.net/images/slider/1.jpg" alt="Hearing Aids India" style="width:100%;">
          </div>

        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
    <div class="desk-slider">
      <div id="myCarousel1" class="carousel slide slider-top" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel1" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel1" data-slide-to="1"></li>
          <li data-target="#myCarousel1" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner">

          <div class="item active">
            <img src="http://hearing-aids.co.in/images/slider/03.jpg" alt="Hearing Aids India" style="width:100%;">
          </div>

          <div class="item">
            <img src="http://hearing-aids.co.in/images/slider/02.jpg" alt="Hearing Aids India" style="width:100%;">
          </div>

          <div class="item">
            <img src="http://hearing-aids.co.in/images/slider/01.jpg" alt="Hearing Aids India" style="width:100%;">
          </div>

        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel1" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel1" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>

    <div class="box_from" id="contact">

      <div class="enquiry">
        <form action="http://hearing-aids.co.in/herokumail.php" name="form1" method="post" id="form1" onsubmit="
          if(form_being_submitted) {
            alert('The form is being submitted, please wait a moment...');
            myButton.disabled = true;
            return false;
          }
          if(checkForm(this)) {
            myButton.value = 'Submitting form...';
            form_being_submitted = true;
            return true;
          }
          return false;
          ">
          <script src="frm_validation.js" language="javascript" type="text/javascript"></script>

          <div class="group">
            <h3>Get Free Consultation</h3>
          </div>
          <div class="form-group">
            <input name="name" class="form-control" placeholder="Name *" type="text" id="name" maxlength="50" value="" required="" oninvalid="this.setCustomValidity('Please enter name')"
              oninput="setCustomValidity('')">
          </div>
          <div class="form-group">
            <input name="email" class="form-control" placeholder="Email Id *" type="text" id="email" maxlength="100" value="" required=""
              oninvalid="this.setCustomValidity('Please enter email id')" oninput="setCustomValidity('')">
          </div>
          <div class="form-group">
            <input name="contacts" class="form-control" placeholder="Contact Number *" type="text" id="contacts" maxlength="15" value=""
              required="" title="please enter 8 to 15 digits number" pattern="[1-9][0-9]{7,14}" oninvalid="this.setCustomValidity('Please enter contact number')"
              oninput="setCustomValidity('')">
          </div>
          <div class="form-group">
            <input name="city" class="form-control" placeholder="City *" type="text" id="city" maxlength="100" value="" required="" oninvalid="this.setCustomValidity('Please enter city')"
              oninput="setCustomValidity('')">
          </div>
          <div class="form-group">
            <input name="message" class="form-control" placeholder="Message *" type="text" id="message" maxlength="200" value="" required=""
              oninvalid="this.setCustomValidity('Please enter message')" oninput="setCustomValidity('')">
          </div>

          <center>
            <input name="myButton" id="button" type="submit" class="button buttonBlue" value="Submit">
          </center>

        </form>
      </div>
    </div>

    <!-- intro -->
    <section class="ic-app-intro about">
      <div class="container">
        <div class="row padb20">
          <h1 class="text-center head-title">Free Consultation and Hearing Aid Trial worth
            <span style="color:blue;">Rs.1000/-</span>
          </h1>
          <div class="col-sm-6 padl0">
            <div class="col-sm-12 img-thumbnail bg-red">
              <ul class="check-list">
                <li>
                  <i class="far fa-check-square"></i> 100% satisfaction or money back gaurantee</li>
                <li>
                  <i class="far fa-check-square"></i> Hearing aid fitting by certified clinics</li>
                <li>
                  <i class="far fa-check-square"></i> Home visit facility</li>
                <li>
                  <i class="far fa-check-square"></i> EMI facility</li>
                <li>
                  <i class="far fa-check-square"></i> Free wireless accessory with premium hearing aids</li>
              </ul>
            </div>
          </div>
          <div class="col-sm-6">
            <!-- <img src="assets/images/h1.jpg" class="img-responsive img-thumbnail" alt=""> -->
            <div class="col-sm-12 img-thumbnail bg-red">
              <ul class="check-list">
                <li>
                  <i class="far fa-check-square"></i> Our organisation was founded in 1943 </li>
                <li>
                  <i class="far fa-check-square"></i> Our Offices are located in more than 25 countries </li>
                <li>
                  <i class="far fa-check-square"></i> Distributors in more than 80 countries </li>
                <li>
                  <i class="far fa-check-square"></i> There are 4,100 employees worldwide </li>
                <li>
                  <i class="far fa-check-square"></i> Part of Denmark based GN Store Nord </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- counter up -->
    <section class="ic-sec-bg ic-counter">
      <div class="container">
        <div class="row text-center">
          <h2 class="white-text">
            Affordable Price | High Quality Devices | Top Rated Brand
          </h2>
        </div>
      </div>
    </section>
    <!-- counter up \end -->

    <section class="ic-app-intro about" id="about">
      <div class="container">
        <div class="row text-center  pd20">
          <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12">
            <div class="ic-single-intro">
              <span>
                <i class="fas fa-phone"></i>
              </span>
              <h2>Talk to an expert</h2>
              <p>
                One of our experts will speak to you on the phone about your hearing loss and the available solutions.
              </p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12">
            <div class="ic-single-intro">
              <span>
                <i class="fas fa-check"></i>
              </span>
              <h2>Test your hearing</h2>
              <p>
                Our partner audiologist in your area will do a hearing test with you and provide a demo of suitable hearing aids for your
                situation.
              </p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 col-sm-custom">
            <div class="ic-single-intro ic-works-small">
              <span>
                <i class="fas fa-music"></i>
              </span>
              <h2>Hear clearly again</h2>
              <p>
                After finding the suitable hearing solution, you will enjoy a better quality of life with the people you love.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- intro \end -->

    <!-- about app -->
    <section class="ic-about-app-sec bg-light about">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2 text-center">
            <div class="ic-lead">
              <h2>Welcome to Hearing Aids In India</h2>
              <span class="ic-shape"></span>
              <p>
                Hearing Aids India provides excellent sound by offering innovative hearing solutions that combine original thinking and design
                with solid technology - all based on deep audiological insight and understanding of hearing aid users.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- about app \end -->

    <!-- works -->
    <section class="ic-works" id="features">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2 text-center">
            <div class="ic-lead">
              <h2>Features</h2>
              <span class="ic-shape"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="ic-works-col">
              <div class="ic-works-content">
                <span>
                  <i class="fas fa-angle-double-right"></i>
                </span>
                <div class="ic-works-content-col">
                  <p>We Make World's Smartest Hearing Aids that can Perfectly Suit Your requirement</p>
                </div>
              </div>
              <div class="ic-works-content">
                <span>
                  <i class="fas fa-angle-double-right"></i>
                </span>
                <div class="ic-works-content-col">
                  <p>We Provide Smart Wireless accessories</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="ic-works-figure">
              <img class="img-responsive" src="assets/images/hearingaids.png" alt="works figure">
            </div>
          </div>
          <div class="col-md-4">
            <div class="ic-works-col ic-works-small">
              <div class="ic-works-content">
                <span>
                  <i class="fas fa-angle-double-right"></i>
                </span>
                <div class="ic-works-content-col">
                  <p>We Ensure Smooth Functioning of your Device by Extended Counselling & Customer Care.</p>
                </div>
              </div>
              <div class="ic-works-content">
                <span>
                  <i class="fas fa-angle-double-right"></i>
                </span>
                <div class="ic-works-content-col">
                  <p>We Are available At your Slightest Whisper</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- works \end-->

    <section id="services" class="ic-feaures bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2 text-center">
            <div class="ic-lead">
              <h2>Types of Hearing Aids Based on the Individual Need</h2>
              <span class="ic-shape"></span>
            </div>
          </div>
        </div>
        <div class="row text-center">
          <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12">
            <div class="ic-single-feature">
              <span>
                <i class="fas fa-assistive-listening-systems"></i>
              </span>
              <h2>IIC (Invisible-In-Canal)</h2>
              <p>Rest in the second bend of the ear canal where no one can
                <br>see them.</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12">
            <div class="ic-single-feature">
              <span>
                <i class="fas fa-assistive-listening-systems"></i>
              </span>
              <h2>RIC (Receiver-In-Canal)</h2>
              <p>Small, discreet and quick to fit. Perfect for first-time hearing
                <br>aid wearers. </p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12">
            <div class="ic-single-feature ic-works-small">
              <span>
                <i class="fas fa-assistive-listening-systems"></i>
              </span>
              <h2>CIC (Completely-In-Canal)</h2>
              <p>Only the tiny removal handle of the hearing aid shows outside of the
                <br>ear canal.</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12">
            <div class="ic-single-feature">
              <span>
                <i class="fas fa-assistive-listening-systems"></i>
              </span>
              <h2>BTE (Behind-The-Ear)</h2>
              <p>The world’s most common hearing aid style. Available in standard,
                <br>mini or power.</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12">
            <div class="ic-single-feature">
              <span>
                <i class="fas fa-assistive-listening-systems"></i>
              </span>
              <h2>ITC (In-The-Canal)</h2>
              <p>Custom hearing aid that fits in the ear canal. Smaller portion shows in
                <br>outer ear.</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12">
            <div class="ic-single-feature ic-works-small">
              <span>
                <i class="fas fa-assistive-listening-systems"></i>
              </span>
              <h2>ITE (In-The-Ear)</h2>
              <p>Custom hearing aid that fits within the outer portion of
                <br>the ear.</p>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- download apps -->
    <section class="ic-download ic-sec-bg">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2 text-center">
            <div class="ic-lead">
              <h2>Free consultation with hearing aid experts</h2>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- download apps \end -->

    <section id="whyus" class="ic-pricing">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2 text-center">
            <div class="ic-lead">
              <h2>Why Choose Us</h2>
              <span class="ic-shape"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-sm-6 col-xs-6 col-xxs-12">
            <div class="ic-single-price">
              <ul>
                <li class="ic-sub-header">Unique Advantages of Hearing Aids India</li>
                <li>
                  <i class="fas fa-angle-right org-text"></i> Hearing Aids India is first company to use Microsoft Azure Cloud to provide cloud based remote fine
                  tuning of hearing aids.</li>
                <li>
                  <i class="fas fa-angle-right org-text"></i> Hearing Aids India is the only company to partner with Cochlear® for bimodal hearing to help patients
                  with cochlear implants.</li>
                <li>
                  <i class="fas fa-angle-right org-text"></i> Hearing Aids India is first company to partner with Apple for direct streaming of sound to all Apple
                  devices.
                </li>
                <li>
                  <i class="fas fa-angle-right org-text"></i> Hearing Aids India is present in 80 countries worldwide to ensure prompt after sales services*</li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-sm-6 col-xs-6 col-xxs-12">
            <div class="ic-single-price ic-active">
              <ul>
                <li class="ic-sub-header">Unique Benefits</li>
                <li>
                  <i class="fas fa-angle-right org-text"></i> Minimize your visits to hearing clinics with Hearing Aids India LiNX 3D Smart hearing aids that offers
                  cloud based remote fine tuning.</li>
                <li>
                  <i class="fas fa-angle-right org-text"></i> Hearing Aids India LiNX 3D smart hearing aids provide 50% more clarity in speech over your existing
                  hearing aids.</li>
                <li>
                  <i class="fas fa-angle-right org-text"></i> Watch TV with your family without raising the volume of your TV with Hearing Aids India
                  <strong>2.4GHz</strong> wireless hearing aids.</li>
                <li>
                  <i class="fas fa-angle-right org-text"></i> Listen to your phone calls through
                  <strong>2.4GHz</strong> wireless connectivity with Hearing Aids India wireless hearing aids.</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-xs-12 text-center">
            <div class="ic-footer-content">
              Copyright © 2018. All Rights Reserved
              <span>
                <span class="ic-separator">|</span> Hearing Aids India
                <span class="ic-separator">|</span>
                <a href="privacy">Privacy & Policy</a>
              </span>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- footer \end -->
  </main>
  <!-- jQuery min -->
  <script src="assets/js/jquery.min.js"></script>
  <!-- Bootstrap min -->
  <script src="assets/js/bootstrap.min.js"></script>
  <!-- Slick slider min -->
  <script src="assets/js/slick.min.js"></script>
  <!-- Fancy box light box min -->
  <script src="assets/js/jquery.fancybox.min.js"></script>
  <!-- jQuery m custom scrollbar min -->
  <script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
  <!-- Smooth scroll  -->
  <script src="assets/js/smoothscroll.js"></script>
  <!-- mail script -->
  <script src="assets/js/mail.js"></script>
  <!-- Custom script -->
  <script src="assets/js/scripts.js"></script>
</body>

</html>