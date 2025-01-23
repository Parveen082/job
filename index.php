<?php

//To Handle Session Variables on This Page
session_start();


//Including Database Connection From db.php file to avoid rewriting in all files
require_once("db.php");
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>form Portal</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="css/AdminLTE.min.css">
  <link rel="stylesheet" href="css/_all-skins.min.css">
  <!-- Custom -->
  <link rel="stylesheet" href="css/custom.css">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-green sidebar-mini">
<div class="wrapper">

  <header class="main-header">

    <!-- Logo -->
    <a href="index.php" class="logo logo-bg">
  <!-- Mini logo for sidebar (50x50 pixels) -->
  <span class="logo-mini">
    <b>J</b>P
  </span>
  <!-- Logo for regular state and mobile devices -->
  <span class="logo-lg">
    <b class="text-primary">Job</b> <span class="text-warning">Portal</span>
  </span>
</a>


    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li>
            <a href="jobs.php">Jobs</a>
          </li>
          <li>
            <a href="#about">About Us</a>
          </li>
          <?php if(empty($_SESSION['id_user']) && empty($_SESSION['id_company'])) { ?>
          <li>
            <a href="login.php">Login</a>
          </li>
          <li>
            <a href="sign-up.php">Sign Up</a>
          </li>  
          <?php } else { 

            if(isset($_SESSION['id_user'])) { 
          ?>        
          <li>
            <a href="user/index.php">Dashboard</a>
          </li>
          <?php
          } else if(isset($_SESSION['id_company'])) { 
          ?>        
          <li>
            <a href="company/index.php">Dashboard</a>
          </li>
          <?php } ?>
          <li>
            <a href="logout.php">Logout</a>
          </li>
          <?php } ?>
        </ul>
      </div>
    </nav>
  </header>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="margin-left: 0px;">

  <!-- Header Section -->
  <section class="content-header bg-main">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center index-head">
          <h1>All <strong>JOBS</strong> In One Place</h1>
          <p>One search, global reach</p>
          <p><a class="btn btn-success btn-lg" href="jobs.php" role="button">Search Jobs</a></p>
        </div>
      </div>
    </div>
  </section>
  <section class="bg-green py-3">
    <div class="container-fluid">
      <div class="grid gap-0 column-gap-3">
        <button class="btn w-100" style="background: transparent; border: none; color: white; font-size: 2rem;">10th Pass Job</button>
        <button class="btn w-100" style="background: transparent; border: none; color: white; font-size: 2rem;">12th Pass Job</button>
        <button class="btn w-100" style="background: transparent; border: none; color: white; font-size: 2rem;">ITI Diploma Job</button>
        <button class="btn w-100" style="background: transparent; border: none; color: white; font-size:2rem;">Graduate Job</button>
        <button class="btn w-100" style="background: transparent; border: none; color: white; font-size:2rem;">CSC Services</button>
      </div>
    </div>
  </section>
  <br><br>
  <!-- Candidates Section -->
  <section id="candidates" class="content-header">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-sm-4 col-md-4 mb-4">
          <a href="#" class="btn btn-primary btn-block">
            <div class="thumbnail candidate-img">
              <div class="caption">
                <h3 class="text-center">Browse Jobs</h3>
              </div>
            </div>
          </a>
        </div>
        <div class="col-sm-4 col-md-4 mb-4">
          <a href="#" class="btn btn-primary btn-block">
            <div class="thumbnail candidate-img">
              <div class="caption">
                <h3 class="text-center">Apply & Get Interviewed</h3>
              </div>
            </div>
          </a>
        </div>
        <div class="col-sm-4 col-md-4 mb-4">
          <a href="#" class="btn btn-primary btn-block">
            <div class="thumbnail candidate-img">
              <div class="caption">
                <h3 class="text-center">Start A Career</h3>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Company Section -->
  <section id="company" class="content-header">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-sm-4 col-md-4 mb-4">
          <a href="#" class="btn btn-info btn-block">
            <div class="thumbnail company-img">
              <div class="caption">
                <h3 class="text-center">Post A Job</h3>
              </div>
            </div>
          </a>
        </div>
        <div class="col-sm-4 col-md-4 mb-4">
          <a href="#" class="btn btn-info btn-block">
            <div class="thumbnail company-img">
              <div class="caption">
                <h3 class="text-center">Manage & Track</h3>
              </div>
            </div>
          </a>
        </div>
        <div class="col-sm-4 col-md-4 mb-4">
          <a href="#" class="btn btn-info btn-block">
            <div class="thumbnail company-img">
              <div class="caption">
                <h3 class="text-center">Hire</h3>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>

</div>
<br><br>

</div>

    <section class="content-header">
  <div class="container">
    <div class="row">
      <div class="col-md-12 latest-job margin-bottom-20">
        <h1 class="text-center">Latest Jobs</h1>
        <div class="row">
          <?php 
          // Fetch job data along with company details in a single query
          $sql = "SELECT job_post.*, company.companyname 
                  FROM job_post 
                  LEFT JOIN company 
                  ON job_post.id_company = company.id_company 
                  ORDER BY RAND() 
                  LIMIT 100";

          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
          ?>
          <div class="col-md-4">
            <div class="attachment-block clearfix">
              <img class="attachment-img" src="img/photo1.png" alt="Attachment Image">
              <div class="attachment-pushed">
                <h4 class="attachment-heading">
                  <a href="view-job-post.php?id=<?php echo $row['id_jobpost']; ?>">
                    <?php echo $row['jobtitle']; ?>
                  </a>
                </h4>
              </div>
            </div>
          </div>
          <?php 
            } // End while loop
          } else {
          ?>
          <div class="col-md-12">
            <p class="text-center">No jobs available at the moment.</p>
          </div>
          <?php 
          } // End if condition
          ?>
        </div>
      </div>
    </div>
  </div>
</section>


    

<section id="statistics" class="content-header">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center latest-job margin-bottom-20">
        <h1>Our Statistics</h1>
      </div>
    </div>
    <div class="row">
      <!-- Job Offers -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
          <div class="inner">
            <?php
            // Get total job offers
            $sql = "SELECT COUNT(*) AS totalno FROM job_post";
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();
            $totalno = $row['totalno'] ?? 0;
            ?>
            <h3><?php echo $totalno; ?></h3>
            <p>Job Offers</p>
          </div>
          <div class="icon">
            <i class="ion ion-ios-paper"></i>
          </div>
        </div>
      </div>
      
      <!-- Registered Companies -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green">
          <div class="inner">
            <?php
            // Get total registered active companies
            $sql = "SELECT COUNT(*) AS totalno FROM company WHERE active='1'";
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();
            $totalno = $row['totalno'] ?? 0;
            ?>
            <h3><?php echo $totalno; ?></h3>
            <p>Registered Companies</p>
          </div>
          <div class="icon">
            <i class="ion ion-briefcase"></i>
          </div>
        </div>
      </div>
      
      <!-- CV/Resumes -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-yellow">
          <div class="inner">
            <?php
            // Get total users with resumes
            $sql = "SELECT COUNT(*) AS totalno FROM users WHERE resume != ''";
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();
            $totalno = $row['totalno'] ?? 0;
            ?>
            <h3><?php echo $totalno; ?></h3>
            <p>CV's/Resumes</p>
          </div>
          <div class="icon">
            <i class="ion ion-ios-list"></i>
          </div>
        </div>
      </div>
      
      <!-- Active Users -->
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-red">
          <div class="inner">
            <?php
            // Get total active users
            $sql = "SELECT COUNT(*) AS totalno FROM users WHERE active='1'";
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();
            $totalno = $row['totalno'] ?? 0;
            ?>
            <h3><?php echo $totalno; ?></h3>
            <p>Active Users</p>
          </div>
          <div class="icon">
            <i class="ion ion-person-stalker"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


    <section id="services" class="content-header">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center latest-job margin-bottom-20">
        <h1>Our Services</h1>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="service-item d-flex align-items-start">
          <img src="img/icon-image-to-pdf.png" alt="Convert images to PDF" class="service-icon">
          <div>
            <b>Image to PDF Converter:</b>
            <p>Quickly convert your images into professional PDF files.</p>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="service-item d-flex align-items-start">
          <img src="img/icon-pdf-to-word.png" alt="Convert PDF to Word" class="service-icon">
          <div>
            <b>PDF to Word Converter:</b>
            <p>Seamlessly transform your PDF files into editable Word documents.</p>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="service-item d-flex align-items-start">
          <img src="img/icon-word-to-pdf.png" alt="Convert Word to PDF" class="service-icon">
          <div>
            <b>Word to PDF Converter:</b>
            <p>Create high-quality PDF files from your Word documents.</p>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="service-item d-flex align-items-start">
          <img src="img/icon-merge-pdf.png" alt="Merge PDFs" class="service-icon">
          <div>
            <b>Merge PDFs:</b>
            <p>Combine multiple PDF files into a single document effortlessly.</p>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="service-item d-flex align-items-start">
          <img src="img/icon-split-pdf.png" alt="Split PDFs" class="service-icon">
          <div>
            <b>Split PDFs:</b>
            <p>Extract specific pages from your PDF or split it into multiple files.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>




  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer" style="margin-left: 0px;">
    <div class="text-center">
      <strong>Copyright &copy; 2024-2025  Job Portal</a>.</strong> All rights
    reserved.
    </div>
  </footer>

  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>

</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="js/adminlte.min.js"></script>
</body>
</html>
