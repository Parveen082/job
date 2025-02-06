<?php

//To Handle Session Variables on This Page
session_start();


//Including Database Connection From db.php file to avoid rewriting in all files
require_once("db.php");
require_once("header.php");
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
  <style>
    /* Custom Styles for Job Titles */
   /* Make job cards equal height */
.job-card {
  display: flex;
  flex-direction: column; /* Ensures content is stacked vertically */
  border: 1px solid #ddd;
  border-radius: 8px;
  padding: 20px;
  background-color: #f9f9f9;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  transition: box-shadow 0.3s ease;
  height: 100px; /* Makes all job cards take equal height */
  min-height: 100px; /* Optional: You can adjust this for better aesthetics */
}

.job-card:hover {
  box-shadow: 0 6px 10px rgba(0, 0, 0, 0.15);
}

.job-card .card-body {
  flex-grow: 1; /* Makes sure the body stretches to take available space */
}

.job-title {
  font-size: 16px;
  font-weight: 600;
  color: #007bff;
  transition: color 0.3s ease;
}

.job-title:hover {
  color: #0056b3;
}

.job-card h5 {
  margin-bottom: 10px;
}

.pagination {
  margin-top: 20px;
}


  </style>
  <!-- Google Font -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-green sidebar-mini">

 


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="margin-left: 0px;">
  <div class="wrapper">

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" style="margin-left: 0px;">

  <section class="content-header">
    <div class="container">
      <div class="row">
        <div class="col-md-12 latest-job margin-top-50 margin-bottom-20">
        <h1 class="text-center">Latest Jobs</h1>  
          <div class="input-group input-group-lg">
              <input type="text" id="searchBar" class="form-control" placeholder="Search job">
              <span class="input-group-btn">
                <button id="searchBtn" type="button" class="btn btn-info btn-flat">Go!</button>
              </span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="candidates" class="content-header">
    <div class="container">
      <div class="row">
        <div class="col-md-12">

        <?php

// Get the search query
$search = isset($_GET['search']) ? $_GET['search'] : '';

// SQL query to fetch jobs without LIMIT and OFFSET
$sql = "SELECT * FROM jobs WHERE job_title LIKE '%$search%'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // Initialize counter
  $counter = 0;
  // Start the first row
  echo '<div class="row">';

  while ($row = $result->fetch_assoc()) {
      // Every 4 jobs, close and open a new row
      if ($counter > 0 && $counter % 4 == 0) {
          echo '</div><div class="row">'; // Close and open a new row
      }

      // Display job card with col-md-3 (4 jobs in one row)
      echo '<div class="col-md-3 mb-3">
              <div class="card job-card shadow">
                  <div class="card-body">
                      <h5 class="card-title">
                          <a href="' . htmlspecialchars($row['job_link']) . '" class="job-title" target="_blank">' . htmlspecialchars($row['job_title']) . '</a>
                      </h5>
                  </div>
              </div>
          </div>';

      $counter++;
  }

  // Close the last row if it contains fewer than 4 items
  if ($counter % 4 != 0) {
      echo '</div>';
  }
} else {
  echo '<div class="col-12">
          <p class="text-center">No jobs found matching your search criteria.</p>
        </div>';
}
?>

          <div id="target-content"></div>
          <div class="text-center">
            <ul class="pagination text-center" id="pagination"></ul>
          </div> 

        </div>
      </div>
    </div>
  </section>

</div>
<!-- /.content-wrapper -->

<!-- Footer removed -->
<!-- <footer class="main-footer" style="margin-left: 0px;">
  <div class="text-center">
    <h3>Thank you for visiting!</h3>
  </div>
</footer> -->

<!-- /.control-sidebar -->
<!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
<div class="control-sidebar-bg"></div>

</div>
    


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