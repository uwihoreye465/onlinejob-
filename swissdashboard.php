<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SWISS CONTACT - Admin Dashboard</title>
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/all.min.css">
    
    <!-- Internal CSS -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }
        
        .container {
            margin-top: 50px;
        }
        
        .card {
            margin-bottom: 20px;
        }
        
        .card-header {
            background-color: #007bff;
            color: #fff;
        }
        
        .card-body ul {
            list-style-type: none;
            padding: 0;
        }
        
        .card-body ul li {
            margin-bottom: 10px;
        }
        
        .card-body ul li a {
            color: #007bff;
            text-decoration: none;
        }
        
        .card-body ul li a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Admin Dashboard</h3>
                    </div>
                    <div class="card-body">
                        <p>Welcome, <?php echo $_SESSION["username"]; ?>!</p>
                        <p>Number of Registered Schools: <?php echo $total_schools; ?></p>
                        <p>Number of Submitted Projects: <?php echo $total_projects; ?></p>
                        <p>Current Date: <?php echo $current_date; ?></p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Manage Schools</h4>
                    </div>
                    <div class="card-body">
                        <ul>
                            <li><a href="#"><i class="fas fa-plus"></i> Add New School</a></li>
                            <li><a href="#"><i class="fas fa-edit"></i> Edit School Information</a></li>
                            <li><a href="#"><i class="fas fa-trash"></i> Delete School</a></li>
                            <li><a href="#"><i class="fas fa-lock"></i> Revoke/Grant Schools</a></li>
                            <li><a href="#"><i class="fas fa-print"></i> Print List of Schools</a></li>
                            <li><a href="#"><i class="fas fa-search"></i> Search School</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Manage Projects</h4>
                    </div>
                    <div class="card-body">
                        <ul>
                            <li><a href="#"><i class="fas fa-list"></i> View List of Projects</a></li>
                            <li><a href="#"><i class="fas fa-search"></i> Search Project</a></li>
                            <li><a href="#"><i class="fas fa-download"></i> Download Project Proposal</a></li>
                            <li><a href="#"><i class="fas fa-check-circle"></i> Set Project Status</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4>Manage Settings</h4>
                    </div>
                    <div class="card-body">
                        <ul>
                            <li><a href="#"><i class="fas fa-user"></i> Change Profile</a></li>
                            <li><a href="#"><i class="fas fa-user-edit"></i> Change Username</a></li>
                            <li><a href="#"><i class="fas fa-key"></i> Change Password</a></li>
                            <li><a href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Bootstrap JS -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>