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
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="DesignMind Mobile is a San Francisco based mobile development and strategy company serving complete application development including Big Data, Business Intelligence and Data Analytics." />
    <meta name="keywords" content="san francisco iPhone development, iPhone developers, iPhone apps, iOS development, iOS developers, iPad development, iPad developers, iPad apps, mobile app design, mobile app development,
          mobile app developers, mobile application development, mobile application developer, product consultants, product design, software consultants, android developers, andriod, swift, java, firebase, azure, aws, aws mobile, azure mobile apps," />
    <title>Sawyer Case Study | San Francisco Mobile Development Agency and Data Experts</title>
    <meta charset="utf-8" />
    <meta name="robots" content="noodp,noydir">

    <link rel="canonical" href="http://designmindmobile.com/sawyer.php" />
    <link rel="publisher" href="https://plus.google.com/103267323369198800190/about" />
    <link rel="Shortcut Icon" href="http://c8zyre51kh-flywheel.netdna-ssl.com/wp-content/themes/designmindRWD/images/favicon.ico" type="image/x-icon" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Contact DesignMind San Francisco App Development | Custom Mobile App Developers" />
    <meta property="og:description" content="DesignMind Mobile is the thought leader in mobile application development, design and strategy." />
    <meta property='og:image' content="http://designmindmobile.com/img/DMMobileLogo.png">


    <meta property='og:url' content="https://designmindmobile.com/" />
    <meta property="og:site_name" content="designmindmobile">
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:description" content="DesignMind Mobile is a San Francisco based mobile development and strategy company serving complete application development including Big Data, Business Intelligence and Data Analytics." />
    <meta name="twitter:title" content="Sawyer Case Study San Francisco App Development | Custom Mobile App Developers" />
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
          <a class="navbar-brand" href="/index.php#top">
            <img src="img/logo.jpg" alt="DesignMind Mobile Enterprise" description="Logo for DesignMind Mobile." />
          </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav pull-right">
            <li><a data-toggle="collapse" data-target=".navbar-collapse" href="/index.php#toolbox">Toolbox</a></li>
            <li><a data-toggle="collapse" data-target=".navbar-collapse" href="/index.php#workshops">Process</a></li>
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

    <section class="sawyer">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <img src="img/sawyer.jpg">
          </div>
          <div class="col-sm-6">
            <div class="row">
              <div class="col-sm-12">
                <div class="title">
                  <h1>Case Study:<br/>Sawyer Brewing</h1>
                  <p>Sawyer is a regional organic brewery located in Northern California. They distribute their products to 378 stores and wholesalers on the West Coast. Competition for shelf space is keen and the delivery and sales teams need to coordinate efficiently to sell more product.</p>
                </div>
              </div>
            </div>
            <div class="row point">
              <div class="col-xs-4">
                <img class="img-rounded icon" src="img/Sawyer_Subpage_challenge.png" alt="Challenge icon">
              </div>
              <div class="col-xs-8">
                <h2>Our Challenge</h2>
                <p>Sawyer management was concerned with their field team’s ability to service clients in a timely fashion. The clients needed faster delivery, and assurance that Sawyer would respond quickly to their inventory needs. The manual process was inefficient and prone to error. The Sawyer field workers needed to relay information to headquarters quickly and accurately.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6">
            <div class="row point">
              <div class="col-xs-4">
                <img class="img-rounded icon" src="img/Sawyer_Subpage_solution.png" alt="Solution icon">
              </div>
              <div class="col-xs-8">
                <h2>Our Solution</h2>
                <p>DesignMind’s mobile team used our Mobile Accelerators to quickly design and build the app which connects to the inventory system. It also provides management with crucial business intelligence capabilities.</p>
              </div>
            </div>
            <div class="row point">
              <div class="col-xs-4">
                <img class="img-rounded icon" src="img/Sawyer_Subpage_result.png" alt="Solution icon">
              </div>
              <div class="col-xs-8">
                <h2>The Results</h2>
                <p>Sawyer’s sales increased 25% after the app had been in use for only two months. Because the delivery team was able to make deliveries faster with fewer mistakes, shelf space was used more effectively, and forecasting was improved.</p>
              </div>
            </div>
            <a class="btn btn-default pull-right" href="#contact" role="button">Get Started <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
          </div>
          <div class="col-sm-6 phone hidden-xs">
            <img src="img/sawyer_android.jpg">
          </div>
        </div>
      </div>
    </section>
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
  </body>
</html>
