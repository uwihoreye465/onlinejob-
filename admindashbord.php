<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>

    <link href="fontawesome/css/all.min.css" rel="stylesheet">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="path/to/bootstrap.min.css">
  <link href="bootstrap-5.0.2-dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="path/to/fontawesome.min.css">
  <!-- Internal CSS -->
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f8f9fa;
    }

    .sidebar {
      background-color: #343a40;
      color: #fff;
      min-height: 100vh;
      padding: 1rem;
    }

    .sidebar .nav-link {
      color: #fff;
    }

    .sidebar .nav-link:hover {
      color: #007bff;
    }

    .sidebar .nav-link i {
      margin-right: 0.5rem;
    }

    .main-content {
      padding: 2rem;
    }

    .card {
      border-radius: 0;
    }

    .card-header {
      background-color: #007bff;
      color: #fff;
    }
  </style>
</head>
<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-3 sidebar">
        <div class="nav flex-column nav-pills">
          <a href="#" class="nav-link active">
            <i class="fas fa-tachometer-alt"></i>
            Dashboard
          </a>
          <a href="#" class="nav-link">
            <i class="fas fa-users"></i>
            Applicants
          </a>
          <a href="#" class="nav-link">
            <i class="fas fa-briefcase"></i>
            Jobs
          </a>
          <a href="#" class="nav-link">
            <i class="fas fa-cog"></i>
            Settings
          </a>
        </div>
      </div>
      <div class="col-md-9 main-content">
        <div class="card">
          <div class="card-header">
            <h5>Dashboard</h5>
          </div>
          <div class="card-body">
            <!-- Add your dashboard content here -->
            <p>Welcome to the admin dashboard for the online job application.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="path/to/bootstrap.bundle.min.js"></script>
</body>
</html>