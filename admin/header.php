<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Goal Gist Sports Welcome Admin!</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <!-- Custom Styles -->
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #ebe9e9;
        }

        .navbar {
            background-color: #cc610a;
            padding: 3px;
            display:flex;
        }
        .navbar-brand ,h1,span{
            font-weight:600;
            color:#fff;
            cursor:none;
            margin-left:20px;
        }
        .fas{
            color: #fff;
        }
       
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg ">
    <div class="container-fluid">
        <a class="navbar-brand" href=""><h3>Goal Gist</h3><span>Sport Equipment</span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
            <li class="nav-item">
                    <a class="nav-link" href="dashboard.php" title="Home"><i style='font-size:38px' class='fas'>&#8962;</i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php" title="logout"><i style='font-size:18px' class='fas'>&#8665;</i></a>
                </li>
            </ul>
        </div>
    </div>
</nav>


     
<!-- Bootstrap JS, Popper.js, and jQuery -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>  