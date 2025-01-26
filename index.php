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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
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
 
<header class="main-header">

  <!-- Logo -->
  <a href="index.php" class="navbar-brand d-flex align-items-center">
    <!-- Mini logo for sidebar (50x50 pixels) -->
    <span class="d-none d-lg-inline-block logo-mini">
      <b>J</b>P
    </span>
    <!-- Logo for regular state and mobile devices -->
    <span class="logo-lg ms-2">
      <b class="text-primary">Job</b> <span class="text-warning">Portal</span>
    </span>
  </a>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <!-- Toggler for mobile view -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Navbar content -->
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="jobs.php">Jobs</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">About Us</a>
          </li>
          <?php if (empty($_SESSION['id_user']) && empty($_SESSION['id_company'])) { ?>
            <li class="nav-item">
              <a class="nav-link" href="login.php">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="sign-up.php">Sign Up</a>
            </li>
          <?php } else { ?>
            <?php if (isset($_SESSION['id_user'])) { ?>
              <li class="nav-item">
                <a class="nav-link" href="user/index.php">Dashboard</a>
              </li>
            <?php } else if (isset($_SESSION['id_company'])) { ?>
              <li class="nav-item">
                <a class="nav-link" href="company/index.php">Dashboard</a>
              </li>
            <?php } ?>
            <li class="nav-item">
              <a class="nav-link" href="logout.php">Logout</a>
            </li>
          <?php } ?>
        </ul>
      </div>
    </div>
  </nav>

</header>


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" style="margin-left: 0px;">

    <div class="content-wrapper" style="margin-left: 0px;">
    <section class="bg-green py-3">
        <div class="container mt-4">
            <!-- States Section -->
            <div class="row mb-3">
                <?php
                $states = [
                    "Andaman & Nicobar" => "#",
                    "Andhra Pradesh" => "#",
                    "Arunachal Pradesh" => "#",
                    "Assam" => "#",
                    "Bihar" => "#",
                    "Chandigarh" => "#",
                    "Chhattisgarh" => "#",
                    "Dadra & Nagar Haveli" => "#",
                    "Daman & Diu" => "#",
                    "Delhi" => "#",
                    "Goa" => "#",
                    "Gujarat" => "#",
                    "Haryana" => "#",
                    "Himachal Pradesh" => "#",
                    "Jammu & Kashmir" => "#",
                    "Jharkhand" => "#",
                    "Karnataka" => "#",
                    "Kerala" => "#",
                    "Lakshadweep" => "#",
                    "Madhya Pradesh" => "#",
                    "Maharashtra" => "#",
                    "Manipur" => "#",
                    "Meghalaya" => "#",
                    "Mizoram" => "#",
                    "Nagaland" => "#",
                    "Odisha" => "#",
                    "Puducherry" => "#",
                    "Punjab" => "#",
                    "Rajasthan" => "#",
                    "Sikkim" => "#",
                    "Tamil Nadu" => "#",
                    "Telangana" => "#",
                    "Tripura" => "#",
                    "Uttarakhand" => "#",
                    "Uttar Pradesh" => "#",
                    "West Bengal" => "#"
                ];
                foreach ($states as $state => $link) {
                    echo '<div class="col-md-2 mb-2">
                            <a href="' . htmlspecialchars($link) . '" class="btn btn-primary w-100 custom-btn">' . htmlspecialchars($state) . '</a>
                          </div>';
                }
                ?>
            </div>

            <!-- Qualification Section -->
            <div class="row mb-3">
                <?php
                $qualifications = [
                    "10th pass" => "#",
                    "12th pass" => "#",
                    "ITI pass" => "#",
                    "Graduate +" => "#",
                    "Offline job" => "#",
                    "Without exam job" => "#",
                    "Important links" => "#",
                    "Admit card" => "#",
                    "Exam date" => "#"
                ];
                foreach ($qualifications as $qual => $link) {
                    echo '<div class="col-md-3 mb-2">
                            <a href="' . htmlspecialchars($link) . '" class="btn btn-success w-100 custom-btn">' . htmlspecialchars($qual) . '</a>
                          </div>';
                }
                ?>
            </div>

            <!-- Categories Section -->
            <div class="row">
                <?php
                $categories = [
                    "Admission" => "#",
                    "Sarkari schemes" => "#",
                    "Upcoming jobs" => "#",
                    "Latest job" => "#",
                    "Book PDF" => "#",
                    "Result" => "#",
                    "Answer key" => "#",
                    "Police job" => "#",
                    "Medical job" => "#",
                    "Army job" => "#"
                ];
                foreach ($categories as $category => $link) {
                    echo '<div class="col-md-3 mb-2">
                            <a href="' . htmlspecialchars($link) . '" class="btn btn-warning w-100 custom-btn">' . htmlspecialchars($category) . '</a>
                          </div>';
                }
                ?>
            </div>
        </div>

        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    </section>


  </div>

  <section class="content-header">
  <div class="container">
  <div class="col-md-3">
  <br><br><br><br>
  <div class="row">
    <?php
    $qualifications = [
        "10th pass" => "#",
        "12th pass" => "#",
        "ITI pass" => "#",
        "Graduate +" => "#",
        "Offline job" => "#",
        "Without exam job" => "#",
        "Important links" => "#",
        "Admit card" => "#",
        "Exam date" => "#",
        "10th pass." => "#",
        "12th pass." => "#",
        "ITI pass." => "#",
        "Graduate +." => "#",
        "Offline job." => "#",
        "Without exam job." => "#",
        "Important links." => "#",
        "Admit card." => "#",
        "Exam date." => "#"
        
    ];
    foreach ($qualifications as $qual => $link) {
        echo '<div class="col-6 mb-3">
                <a href="' . htmlspecialchars($link) . '" class="btn btn-success w-100 custom-btn py-3">
                  ' . htmlspecialchars($qual) . '
                </a>
              </div>';
    }
    ?>
  </div>
</div>


      <!-- Latest Jobs Section -->
      <div class="col-md-6 text-center">
        <br>
        <h1 class="text-center mb-4">Latest Jobs</h1>
        <div class="row">
          <?php
          // Fetch job data along with company details in a single query
          $sql = "SELECT job_post.*, company.companyname 
                FROM job_post 
                LEFT JOIN company 
                ON job_post.id_company = company.id_company 
                ORDER BY RAND() 
                LIMIT 10";

          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
              ?>
              <div class="col-12 mb-4">
                <div class="card shadow">
                  <div class="card-body">
                    <h5 class="card-title">
                      <a href="view-job-post.php?id=<?php echo $row['id_jobpost']; ?>" class="text-primary">
                        <?php echo htmlspecialchars($row['jobtitle']); ?>
                      </a>
                    </h5>
                    <p class="card-text">
                      Company: <?php echo htmlspecialchars($row['companyname']); ?>
                    </p>
                  </div>
                </div>
              </div>
            <?php
            }
          } else {
            ?>
            <div class="col-12">
              <p class="text-center">No jobs available at the moment.</p>
            </div>
          <?php
          }
          ?>
        </div>
      </div>

      <!-- Right Qualification Buttons -->
      <div class="col-md-3">
  <br><br><br><br>
  <div class="row">
  <div class="row">
    <?php
    $qualifications = [
        "10th pass" => "#",
        "12th pass" => "#",
        "ITI pass" => "#",
        "Graduate +" => "#",
        "Offline job" => "#",
        "Without exam job" => "#",
        "Important links" => "#",
        "Admit card" => "#",
        "Exam date" => "#",
        "10th pass." => "#",
        "12th pass." => "#",
        "ITI pass." => "#",
        "Graduate +." => "#",
        "Offline job." => "#",
        "Without exam job." => "#",
        "Important links." => "#",
        "Admit card." => "#",
        "Exam date." => "#"
        
    ];
    foreach ($qualifications as $qual => $link) {
        echo '<div class="col-6 mb-3">
                <a href="' . htmlspecialchars($link) . '" class="btn btn-success w-100 custom-btn py-3">
                  ' . htmlspecialchars($qual) . '
                </a>
              </div>';
    }
    ?>
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
      <!-- Services List -->
      <?php
      $services = [
          ["https://cdn-icons-png.flaticon.com/128/482/482216.png", "Image to PDF Converter", "Quickly convert your images into professional PDF files.", "image-to-pdf.php"],
          ["https://cdn-icons-png.flaticon.com/128/482/482216.png", "PDF to Word Converter", "Seamlessly transform your PDF files into editable Word documents.", "pdf-to-word.php"],
          ["https://cdn-icons-png.flaticon.com/128/482/482216.png", "Word to PDF Converter", "Create high-quality PDF files from your Word documents.", "word-to-pdf.php"],
          ["https://cdn-icons-png.flaticon.com/128/482/482216.png", "Merge PDFs", "Combine multiple PDF files into a single document effortlessly.", "merge-pdf.php"],
          ["https://cdn-icons-png.flaticon.com/128/482/482216.png", "Split PDFs", "Extract specific pages from your PDF or split it into multiple files.", "split-pdf.php"],
          ["https://cdn-icons-png.flaticon.com/128/482/482216.png", "Compress PDFs", "Reduce the file size of your PDFs without compromising quality.", "compress-pdf.php"],
          ["https://cdn-icons-png.flaticon.com/128/482/482216.png", "Extract Images from PDF", "Extract all images from a PDF file in their original quality.", "extract-images.php"],
          ["https://cdn-icons-png.flaticon.com/128/482/482216.png", "Add Watermarks to PDFs", "Secure your PDFs by adding custom watermarks.", "add-watermark.php"],
          ["https://cdn-icons-png.flaticon.com/128/482/482216.png", "Rotate PDFs", "Easily rotate PDF pages to the desired orientation.", "rotate-pdf.php"],
          ["https://cdn-icons-png.flaticon.com/128/482/482216.png", "Protect PDFs", "Password-protect your PDF files for added security.", "protect-pdf.php"],
          ["https://cdn-icons-png.flaticon.com/128/482/482216.png", "Unlock PDFs", "Remove password protection from PDF files.", "unlock-pdf.php"],
          ["https://cdn-icons-png.flaticon.com/128/482/482216.png", "HTML to PDF Converter", "Convert web pages or HTML files into PDFs.", "html-to-pdf.php"],
          ["https://cdn-icons-png.flaticon.com/128/482/482216.png", "Excel to PDF Converter", "Turn your Excel spreadsheets into PDF documents.", "excel-to-pdf.php"],
          ["https://cdn-icons-png.flaticon.com/128/482/482216.png", "PPT to PDF Converter", "Create PDFs from your PowerPoint presentations.", "ppt-to-pdf.php"],
          ["https://cdn-icons-png.flaticon.com/128/482/482216.png", "PDF to Excel Converter", "Convert PDF files into editable Excel spreadsheets.", "pdf-to-excel.php"],
          ["https://cdn-icons-png.flaticon.com/128/482/482216.png", "PDF to PPT Converter", "Turn PDF documents into PowerPoint presentations.", "pdf-to-ppt.php"],
          ["https://cdn-icons-png.flaticon.com/128/482/482216.png", "Crop PDFs", "Trim unwanted margins from your PDF files.", "crop-pdf.php"],
          ["https://cdn-icons-png.flaticon.com/128/482/482216.png", "Edit PDFs", "Make direct edits to text and images within PDF files.", "edit-pdf.php"],
          ["https://cdn-icons-png.flaticon.com/128/482/482216.png", "Organize PDFs", "Rearrange, delete, or add pages to your PDF.", "organize-pdf.php"],
          ["https://cdn-icons-png.flaticon.com/128/482/482216.png", "PDF to Image Converter", "Convert PDF pages into high-quality images.", "pdf-to-image.php"]
      ];

      foreach ($services as $service) {
          echo '
          <div class="col-md-6 mb-3">
            <a href="' . htmlspecialchars($service[3]) . '" class="service-link">
              <div class="service-item d-flex align-items-start">
                <img src="' . htmlspecialchars($service[0]) . '" alt="' . htmlspecialchars($service[1]) . '" class="service-icon me-3">
                <div>
                  <b>' . htmlspecialchars($service[1]) . ':</b>
                  <p>' . htmlspecialchars($service[2]) . '</p>
                </div>
              </div>
            </a>
          </div>';
      }
      ?>
      <style>
        .service-link {
  text-decoration: none;
  color: inherit;
}

.service-link:hover .service-item {
  background-color: #f8f9fa; /* Add a hover effect */
  border-radius: 8px;
  transition: background-color 0.3s ease;
}

      </style>
    </div>
  </div>
</section>






  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer" style="margin-left: 0px;">
    <div class="text-center">
      <strong>Copyright &copy; 2024-2025 Job Portal</a>.</strong> All rights
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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="js/adminlte.min.js"></script>
</body>

</html>