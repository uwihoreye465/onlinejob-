<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Job Application Dashboard</title>
    <!-- Include Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <!-- Internal CSS -->
    <style>
        /* General Styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .dashboard {
            display: grid;
            grid-template-columns: 1fr 3fr;
            height: 100vh;
        }

        /* Header Styles */
        header {
            grid-column: 1 / -1;
            background-image: url(milky.JPG);
            color: white;
            padding: 10px;
        }

        header nav ul {
            list-style-type: none;
            padding: 0;
        }

        header nav ul li {
            display: inline-block;
            margin-right: 15px;
        }

        header nav ul li a {
            color: white;
            text-decoration: none;
        }

        /* Main Content Styles */
        .main-content {
            display: flex;
        }

        .sidebar {
            background-color: #f4f4f4;
            padding: 20px;
        }

        .applications {
            padding: 20px;
        }

        .application {
            border-bottom: 1px solid #ccc;
            padding-bottom: 10px;
            margin-bottom: 10px;
        }

        /* Footer Styles */
        footer {
            grid-column: 1 / -1;
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px;
        }
    </style>
</head>

<body>
    <div class="dashboard">
        <header>
            <div class="header-content">
                <h1>Job Application Dashboard</h1>
                <nav>
                    <ul>
                        <li><a href="index.php"><i class="fas fa-home"></i> Home</a></li>
                        <li><a href="#"><i class="fas fa-briefcase"></i> Jobs</a></li>
                        <li><a href="#"><i class="fas fa-user"></i> Profile</a></li>
                        <li><a href="#"><i class="fas fa-cog"></i> Settings</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        
        <section class="main-content">
            <aside class="sidebar">
                <h2><i class="fas fa-search"></i> Job Listings</h2>
                <ul>
                    <li><a href="#">Job 1</a></li>
                    <li><a href="#">Job 2</a></li>
                    <li><a href="#">Job 3</a></li>
                </ul>
            </aside>
            
            <article class="applications">
                <h2><i class="fas fa-file-alt"></i> Job Applications</h2>
                <div class="application">
                    <h3>Application 1</h3>
                    <p>Job Title: Software Engineer</p>
                    <p>Status: Under Review</p>
                </div>
                <div class="application">
                    <h3>Application 2</h3>
                    <p>Job Title: Data Analyst</p>
                    <p>Status: Accepted</p>
                </div>
            </article>
        </section>
        
        <footer>
            <p>&copy; 2024 Job Application Dashboard</p>
        </footer>
    </div>
</body>

</html>