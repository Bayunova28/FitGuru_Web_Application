<?php
    session_start();
    
    if (isset ($_SESSION['username'])) {
        
    $username = $_SESSION['username'];
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Fit Guru </title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body style="background-color: #fdfaf6;">
  
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-transparent">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo"><img src="assets/img/Logo.png" alt="" class="img-fluid"></a>

      <nav id="navbar" class="navbar">
          <ul>
            <li><a class="nav-link scrollto active" href="http://prak11billy2-com.preview-domain.com/backend/indexutama.php">Home</a></li>
            
            <a href="http://prak11billy2-com.preview-domain.com/backend/update.php" class="btn-get-started scrollto">
				<?php echo $username ?>
			</a>

            <a href="\backend\logout.php">
              <button type="button" class="btn btn-outline-warning" style="color: white;">Log Out</button>
            </a>
          </ul>
      </nav>
    </div>
  </header>
  
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="home" class="d-flex align-items-center justify-content-center">
    <div class="container position-relative">
      <h1>Health Consultant</h1>
      <h2><i>- "Your Body Hears Everything Your Mind Says" -</i></h2>
      <a href="#health" class="btn-get-started scrollto">Get Started</a>
    </div>
  </section><!-- End Hero -->


  <!-- Content Section -->

  <!-- Main Content -->
  
<section id="health" class="d-flex align-items-center justify-content-center"></section>
  <div class= "isicontent clearfix">
    <div class="main-content">
      <h1 class="recent-post-title" style="color:grey">Health Consultant</h1>

      <div class= "post">
        <img src="assets\img\publichealth.jpg" alt="" class="post-image">
        <div class="post-preview">
          <h2><a href="single.html" style="color:grey">Public health: Innovation and Intellectual</a></h2>
         <i class="far fa-user"> WHO</i>
         &nbsp;
         <i class="far calendar">April 5, 2006</i>
         <p class="preview-text">
          This publication contains the collective views of an independent international commission and does not neccessarily represent the decisions or the stated policy of the World Health Organization.
         </p>

<a href="health1.php" class="btn-single read-more">Read More</a>

        </div>
      </div>

      <div class= "post">
        <img src="assets\img\fitfit.jpg" alt="" class="post-image">
        <div class="post-preview">
          <h2><ab href="single.html" style="color:grey"><strong>Fitness and Training COVID-19 Requirements</strong></ab></h2>
         <i class="far fa-user">Covid Organization </i>
         &nbsp;
         <i class="far calendar">March 26, 2021</i>
         <p class="preview-text">
          Staffed indoor fitness studios, individual sports and fitness training, group fitness, gyms, and multi-use indoor fitness facilities providing private instruction and access to personal fitness training and/or specialized equipment.
         </p>

<a href="health2.php" class="btn-single read-more">Read More</a>

        </div>
      </div>

      <div class= "post">
        <img src="assets\img\researcher.jpg" alt="" class="post-image">
        <div class="post-preview">
          <h2><ab href="single.html" style="color:grey"><strong>A framework to measure the impact of investments in health research</strong></ab></h2>
         <i class="far fa-user">Alan Bernstein, Vern Hicks, etc. </i>
         &nbsp;
         <i class="far calendar">September 25, 2006</i>
         <p class="preview-text">
           This paper describes the approach taken by the Canadian Institutes of Health Research (CIHR) to develop a framework and indicators to measure the impact of health research.
         </p>

<a href="health3.php" class="btn-single read-more">Read More</a>

        </div>
      </div>

      <div class= "post">
        <img src="assets\img\beneficial.jpg" alt="" class="post-image">
        <div class="post-preview">
          <h2><ab href="single.html" style="color:grey"><strong>PROVIDING SOCIAL SUPPORT MAY BE MORE BENEFICIAL THAN RECEIVING IT</strong></ab></h2>
         <i class="far fa-user">Stephanie L. Brown, etc. </i>
         &nbsp;
         <i class="far calendar">July 4, 2003</i>
         <p class="preview-text">
          This study examines the relative contributions of giving versus receiving support to longevity in a sample of older married adults. Baseline indicators of giving and receiving support were used to predict mortality status over a 5-year period in the Changing Lives of Older Couples sample
         </p>

<a href="health4.php" class="btn-single read-more">Read More</a>

        </div>
      </div>

      <div class= "post">
        <img src="assets\img\healthpsychology.jpg" alt="" class="post-image">
        <div class="post-preview">
          <h2><ab href="single.html" style="color:grey"><strong>HEALTH PSYCHOLOGY</strong></ab></h2>
         <i class="far fa-user">Shelley Taylor </i>
         &nbsp;
         <i class="far calendar">January 2, 2019</i>
         <p class="preview-text">
           When I wrote the first edition of Health Psychology over 30 years ago, the task was simpler than it is now. Health psychology was a new field and was relatively small. 
         </p>

<a href="health5.php" class="btn-single read-more">Read More</a>

        </div>
      </div>


    </div>
 <!-- End Main Content -->

      <div class="sidebars">
        <div class="section search">
          <h2 class="section-title">Search</h2>
          <form action="index.html" method="post">
            <input type="text" name="search-term" class="text-input" placeholder="Search...">
          </form>
        </div>

        <div class="section topics">

        <h2 class="section-title">Topics</h2>
        <ul>
          <li><a href="http://prak11billy2-com.preview-domain.com/backend/health/health.php" style="color:grey"><strong>Health</strong></a></li>
          <li><a href="http://prak11billy2-com.preview-domain.com/backend/nutrition/nutrition.php" style="color:grey"><strong>Nutrition</strong></a></li>
        </ul>

        </div>
      </div>
  </div>
  <!-- End Content Section -->
  
   <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  
  </body>
  </html>
  
  <?php
}else{
	header("Location: \backend\index.php");
	exit();
}
?>