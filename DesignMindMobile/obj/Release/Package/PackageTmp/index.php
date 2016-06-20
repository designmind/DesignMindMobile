<?php
  if (isset($_POST["submit"])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $from = 'DesignMind Mobile';
    $to = 'mobile@designmind.com';
    $subject = 'Message from Contact';

    $body ="From: $name\n E-Mail: $email\n Message:\n $message";
    // Check if name has been entered
    if (!$_POST['name']) {
      $errName = 'Please enter your name';
    }

    // Check if email has been entered and is valid
    if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
      $errEmail = 'Please enter a valid email address';
    }

    //Check if message has been entered
    if (!$_POST['message']) {
      $errMessage = 'Please enter your message';
    }

    // If there are no errors, send the email
    if (!$errName && !$errEmail && !$errMessage) {
      if (mail ($to, $subject, $body, $from)) {
        $result='<div class="alert alert-success">Thank You! I will be in touch</div>';
      } else {
        $result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later.</div>';
      }
    }
  }
?>
﻿<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="DesignMind Mobile is a San Francisco based mobile development and strategy company serving complete application development including Big Data, Business Intelligence and Data Analytics." />
    <meta name="keywords" content="san francisco iPhone development, iPhone developers, iPhone apps, iOS development, iOS developers, iPad development, iPad developers, iPad apps, mobile app design, mobile app development,
          mobile app developers, mobile application development, mobile application developer, product consultants, product design, software consultants, android developers, android, swift, java, firebase, azure, aws, aws mobile, azure mobile apps,
          html, html5, bootstrap, responsive, angularjs, ionic, xml, json, salesforce, sap, dynamicscrm, sql server, hadoop, mongodb, css, photoshop, indesign, adobe, xcode, android studio, wearable, wearables,
          wearable design, responsive design, sharepoint development, quoting, quality assurance, mobile analytics, jquery, node.js, it outsourcing, iot, internet of things" />
    <meta name="author" content="Kimate Richards">
    <title>Mobile Development | San Francisco Mobile Development Agency and Data Experts</title>
    <link rel="canonical" href="http://designmindmobile.com/" />
    <link rel="publisher" href="https://plus.google.com/103267323369198800190/about" />
    <link rel="Shortcut Icon" href="http://c8zyre51kh-flywheel.netdna-ssl.com/wp-content/themes/designmindRWD/images/favicon.ico" type="image/x-icon" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Contact DesignMind San Francisco App Development | Custom Mobile App Developers" />
    <meta property="og:description" content="DesignMind Mobile is the thought leader in mobile application development, design and strategy." />
    <meta property='og:image' content="http://designmindmobile.com/img/DMMobileLogo.png">
    <meta property='og:url' content="https://designmindmobile.com/" />
    <meta property="og:site_name" content="designmindmobile">
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:description" content="DesignMind Mobile is a San Francisco based mobile development and strategy company serving complete application development including Big Data, Business Intelligence and Data Analytics." />
    <meta name="twitter:title" content="San Francisco App Development | Custom Mobile App Developers" />
    <meta name="twitter:site" content="@designmindmobile" />
    <meta name="twitter:creator" content="@k3street" />
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,700,900|Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/slick.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
  </head>

  <body id="top" data-spy="scroll" data-target="#navbar">
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#top">
            <img src="img/logo.jpg" alt="DesignMind Mobile Enterprise" description="Logo for DesignMind Mobile." />
          </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav pull-right">
            <li><a data-toggle="collapse" data-target=".navbar-collapse" href="#toolbox">Toolbox</a></li>
            <li><a data-toggle="collapse" data-target=".navbar-collapse" href="#workshops">Process</a></li>
            <li><a data-toggle="collapse" data-target=".navbar-collapse" href="/leadership.php">Leadership</a></li>
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Accelerators <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="/sawyer.php">Sawyer Brewing</a></li>
                <li><a href="/upmodel.php">UpModel</a></li>
              </ul>
            </li>
            <li><a data-toggle="collapse" data-target=".navbar-collapse" href="#contact">Contact</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Carousel -->
    <section class="carousel" data-ride="carousel">
      <div class="item">
        <img class="first-slide" src="img/5.jpg" alt="First slide">
        <div class="carousel-caption">
          <h1>Complete Mobile Development.</h1>
          <p>Our team can make your enterprise app a reality. We design, build, and deliver highly effective, data intensive apps.</p>
          <p><a class="btn" href="#workshops" role="button">Get Started <i class="fa fa-chevron-right" aria-hidden="true"></i></a></p>
        </div>
      </div>
      <div class="item">
        <img class="second-slide" src="img/6.jpg" alt="Second slide">
        <div class="carousel-caption">
          <h1>Your Enterprise Partner.</h1>
          <p>Connect to your data from any mobile device. Custom mobile development backed by data experts.</p>
          <p><a class="btn" href="#workshops" role="button">Get Started <i class="fa fa-chevron-right" aria-hidden="true"></i></a></p>
        </div>
      </div>
      <div class="item">
        <img class="third-slide" src="img/3.jpg" alt="Third slide">
        <div class="carousel-caption">
          <h1>Accelerated Mobility.</h1>
          <p>Our Accelerators are pre-built and tested modules that we use to quickly deliver high quality mobile solutions.</p>
          <p><a class="btn" href="#workshops" role="button">Get Started <i class="fa fa-chevron-right" aria-hidden="true"></i></a></p>
        </div>
      </div>
    </section>
    <section class="toolbox" id="toolbox">
      <div class="container">
        <h1>Toolbox</h1>
        <div class="col-sm-4 col-sm-offset-2 tool-col">
          <img class="icon" src="img/Apple-logo.png">
          <h2>iOS</h2>
          <ul>
            <li>Swift</li>
            <li>Objective-C</li>
            <li>Proprietary Function Library</li>
          </ul>
        </div>
        <div class="col-sm-4 tool-col">
          <img class="icon" src="img/Android.png">
          <h2>Android</h2>
          <ul>
            <li>Manufacturer SDKs</li>
            <li>Virtual Displays</li>
            <li>Cloud Testing</li>
          </ul>
        </div>
        <ul class="tools col-md-12">
          <li><img src="img/angular.png"></li>
          <li><img src="img/html.png"></li>
          <li><img src="img/css.png"></li>
          <li><img src="img/js.png"></li>
          <li><img src="img/node.png"></li>
          <li><img src="img/xamarin.png"></li>
          <li><img src="img/aws.png"></li>
          <li><img src="img/azure.png"></li>
          <li><img src="img/firebase.png"></li>
          <li><img src="img/google.png"></li>
          <li><img src="img/salesforce.png"></li>
          <li><img src="img/sap.png"></li>
        </ul>
      </div>
    </section>
    <section class="workshops" id="workshops">
      <div class="container">
        <div class="col-sm-6 col-sm-offset-6 content">
          <h1>Mobile Workshops</h1>
          <p>Strategize, Design, Architect and build your custom solution in only a few days.  Architect and build your custom solutions.</p>
          <p><a class="btn btn-default" href="/mobile-workshops.php" role="button">Learn more <i class="fa fa-chevron-right" aria-hidden="true"></i></a></p>
       </div>
     </div>
    </section>
    <section class="accelerator" id="accelerator">
      <div class="container">
        <div class="col-sm-10 col-sm-offset-1">
          <div class="row">
            <div class="title">
              <h1>Mobile Solution Accelerator</h1>
              <p>We don't have to reinvent the wheel every time we start a new project. Using our field-tested Mobile Accelerators, we work with you to design, assemble, and then refine your mobile product.</p>
            </div>
            <div class="col-sm-6 module">
              <img class="img-rounded icon" src="img/Location_Icon.svg" alt="Location icon">
              <h2>Location</h2>
              <p>GPS &middot; Beacon &middot; Bluetooth &middot; Wifi</p>
            </div>
            <div class="col-sm-6 module">
              <img class="img-rounded icon" src="img/Security_Icon.svg" alt="Security icon">
              <h2>Security</h2>
              <p>Certificate &middot; Encryption &middot; Authentication &middot; Touch ID</p>
            </div>
            <div class="col-sm-6 module">
              <img class="img-rounded icon" src="img/MobileData_Icon.svg" alt="Mobile icon">
              <h2>Mobile Data</h2>
              <p>Offline Storage &middot; Caching &middot; Transactions &middot; Background Data</p>
            </div>
            <div class="col-sm-6 module">
              <img class="img-rounded icon" src="img/Communications_Icon.svg" alt="Communication icon">
              <h2>Communication</h2>
              <p>Push Notifications &middot; Email &middot; In-App &middot; Text Messaging</p>
            </div>
            <div class="col-sm-6 col-sm-offset-3 module">
              <img class="img-rounded icon" src="img/Delivery_Icon.svg" alt="Delivery icon">
              <h2>Delivery</h2>
              <p>Enterprise Mobility Manager &middot; Cloud Testing Application Analytics</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="showcase">
      <div class="container">
        <div class="col-sm-6">
          <img src="img/mockup.jpg">
        </div>
        <div class="col-sm-6">
          <div class="title">
            <h1>Our Accelerators<br/>at Work</h1>
            <p>Our clients need mobile apps to serve their customers accurately and efficiently. The DesignMind Mobile team leverages our existing technology and business acumen to exceed expectations, on budget and on time.</p>
            <p>See how our custom mobile apps increased productivity and sales for a few of our clients.</p>
          </div>
          <a class="btn btn-default pull-left" href="sawyer.php" role="button">Sawyer Brewing</a>
          <a class="btn btn-default pull-right" href="upmodel.php" role="button">UpModel</a>
        </div>
      </div>
    </section>
    <section class="blog">
      <div class="container">
        <h1>What's On Our Mind</h1>
        <div class="col-sm-4 article">
          <div class="img-rounded">
            <img src="img/Mobile_app_development-framework.jpg">
          </div>
          <h2>Mobile App Development Frameworks </h2>
          <p>How they save you time and money</p>
          <p><a class="" target="_blank" href=" http://www.designmind.com/mobile/mobile-app-development-framework/" role="button">Read More <i class="fa fa-chevron-right" aria-hidden="true"></i></a></p>
        </div>
        <div class="col-sm-4 article">
          <div class="img-rounded">
            <img src="img/Android-BusinessEnterpriseSupport.jpg">
          </div>
          <h2>Android Business Enterprise Support</h2>
          <p>Standard business apps are now on Android</p>
          <p><a class="" target="_blank" href="http://www.designmind.com/mobile/android-business-enterprise-support/" role="button">Read More <i class="fa fa-chevron-right" aria-hidden="true"></i></a></p>
       </div>
        <div class="col-sm-4 article">
          <div class="img-rounded">
            <img src="img/ShoppingBeacons.jpg">
          </div>
          <h2>Shopping Beacons</h2>
          <p>How they’re changing retail</p>
          <p><a class="" target="_blank" href="http://www.designmind.com/big-data/shopping-beacon/" role="button">Read More <i class="fa fa-chevron-right" aria-hidden="true"></i></a></p>
        </div>
      </div>
    </section>
    <section id="map"></section>
    <section class="contact" id="contact">
      <div class="container">
        <div class="col-sm-4 social">
          <div class="title">
            <h1>Talk to us:</h1>
            <p>607 Market Street<br/>San Francisco, CA 94105</p>
            <p>(415) 538-8484 &middot; <a href="http://designmind.com">designmind.com</a></p>
            <p><a href="#">mobile@designmind.com</a></p>
          </div>
          <a href="https://www.facebook.com/DesignMindSoftware" target="_blank"><i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i></a>
          <a href="https://twitter.com/DesignMindData" target="_blank"><i class="fa fa-twitter-square fa-2x" aria-hidden="true"></i></a>
          <a href="https://www.linkedin.com/company/designmind?trk=top_nav_home" target="_blank"><i class="fa fa-linkedin-square fa-2x" aria-hidden="true"></i></a>
        </div>
        <form class="col-sm-8" role="form" method="post" action="index.php">
          <div class="row">
            <div class="form-group col-xs-12">
              <?php echo $result; ?>
            </div>
  					<div class="form-group col-sm-6">
  						<label for="name">Name</label>
  						<input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" value="<?php echo htmlspecialchars($_POST['name']); ?>">
  						<?php echo "<p class='text-danger'>$errName</p>";?>
  					</div>
  					<div class="form-group col-sm-6">
  						<label for="email">Email</label>
  						<input type="email" class="form-control" id="email" name="email" placeholder="Enter Email" value="<?php echo htmlspecialchars($_POST['email']); ?>">
  						<?php echo "<p class='text-danger'>$errEmail</p>";?>
  					</div>
  					<div class="form-group col-xs-12">
  						<label for="message">Message</label>
  						<textarea class="form-control" rows="5" name="message"><?php echo htmlspecialchars($_POST['message']);?></textarea>
  						<?php echo "<p class='text-danger'>$errMessage</p>";?>
  					</div>
            <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-info pull-right">
          </div>
				</form>
      </div>
    </section>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <script src="js/map.js"></script>
    <script>
      $('.carousel').slick();

      $('.tools').slick({
        infinite: true,
        slidesToShow: 5,
        slidesToScroll: 5,
        responsive: [
          {
            breakpoint: 900,
            settings: {
              slidesToShow: 4,
              slidesToScroll: 4,
            }
          },
          {
            breakpoint: 600,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 3,
            }
          },
          {
            breakpoint: 480,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 2,
            }
          }
        ]
      });

      $('a[href^="#"]').on('click',function (e) {
        e.preventDefault();

        var target = this.hash;
        var $target = $(target);

        $('html, body').stop().animate({
            'scrollTop': $target.offset().top
        }, 900, 'swing', function () {
            window.location.hash = target;
        });
      });

    </script>
  </body>
</html>
