@extends("layouts.app")
@section("content")
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Social Media Layout</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <style>
        *{
            padding: 0;
            margin: 0;
        }
         body {
            font-family: Arial, sans-serif;
            background-color: #f0f2f5;
        }
        .sidebar {
            background-color: #f7f7f7;
            height: 100vh;
            padding:  20px;
            position: fixed;
           
            box-shadow: 2px 0 5px rgba(0,0,0,0.1);
        }
        .sidebar .profile {
            text-align: center;
            margin-bottom: 20px;
        }
        .sidebar .profile img {
            border-radius: 50%;
            width: 100px;
        }
        .sidebar .profile h3 {
            margin-top: 10px;
            margin-bottom: 5px;
        }
        .sidebar .profile p {
            margin: 0;
            color: #666;
        }
        .sidebar .stats {
            display: flex;
            justify-content: space-around;
            margin: 20px 0;
        }
        .sidebar .stats div {
            text-align: center;
        }
        .sidebar .stats div p {
            margin: 0;
            font-weight: bold;
        }
        .sidebar .nav-item {
            margin: 15px 0;
        }
        .sidebar .nav-link {
            color: #333;
            font-weight: bold;
            font-size: 18px;
            display: flex;
            align-items: center;
        }
        .sidebar .nav-link i {
            margin-right: 10px;
        }
        .sidebar .nav-link.active {
            color: #007bff;
        }
        .main-content {
            margin-left: 250px;
            padding: 20px;
        }
        .feed {
            margin-top: 20px;
        }
        .feed img {
            width: 100%;
            border-radius: 10px;
        }
        .feed .post {
            margin-bottom: 30px;
        }
        .feed .post .likes {
            font-weight: bold;
            margin: 10px 0;
        }
        .settings {
            position: absolute;
            bottom: 20px;
            left: 20px;
            font-size: 18px;
            display: flex;
            align-items: center;
            cursor: pointer;
        }
        .settings i {
            margin-right: 5px;
        }
  
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav class="col-md-5 col-lg-3 d-md-block sidebar">
                <div class="profile">
                    <img src="https://via.placeholder.com/100" alt="Profile Picture">
                    <h3>Andrew Thomas</h3>
                    <p>nga paw, sayr G</p>
                </div>
                <div class="stats">
                    <div>
                        <p>150</p>
                        <p>Posts</p>
                    </div>
                    <div>
                        <p>1.2m</p>
                        <p>Followers</p>
                    </div>
                    <div>
                        <p>320</p>
                        <p>Following</p>
                    </div>
                </div>
                <ul class="nav flex-column ms-5 mt-5">
                    <li class="nav-item">
                        <a class="nav-link active" href="#"><i class="bx bx-home"></i> Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="bx bx-grid-alt"></i> Feed</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="uil uil-search"></i> Explore</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="uil uil-user"></i> Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="bx bx-envelope"></i> Direct Messages</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="bx bx-tv"></i> IGTV</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="bx bx-bar-chart-alt-2"></i> Stats</a>
                    </li>
                </ul>
                <div class="settings">
                    <i class="uil uil-cog"></i> Settings
                </div>
            </nav>
            <!-- Main Content -->
            <main class="col-md-7 ml-sm-auto col-lg-9 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Feed</h1>
                    <div class="btn-toolbar mb-2 mb-md-0">
                        <div class="btn-group mr-2">
                            <button type="button" class="btn btn-sm btn-outline-secondary">Notifications</button>
                        </div>
                        <input type="text" class="form-control form-control-sm" placeholder="Search" aria-label="Search">
                    </div>
                </div>
                <!-- Stories -->
            
                <!-- Feed -->
                <div class="feed">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="path_to_feed_image.jpg" alt="Feed Image">
                            <p>26.3k likes</p>
                            <p>Tell ya homies we got 10 more shades of #PROFILT... </p>
                        </div>
                        <div class="col-md-6">
                            <img src="path_to_feed_image.jpg" alt="Feed Image">
                            <p>98,433 likes</p>
                            <p>If you're tired of getting denied & need some help fixing your credit or...</p>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
@endsection