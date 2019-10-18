<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css"> 
    <title>Sidebar</title>
</head>
<body>
    <?php include_once "navbar.php"?>
    <div class="container-fluid">
    <div class="row">
        <div class="col-sm-2 sidebar">
            <div id="sidebar-image-wrapper">
                <img src="assets/img/logo.jpg" class="sidebar-img">
            </div>
            <ul class="nav-pills nav-stacked">
                <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-home"></i> Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-address-card"></i> About</a></li>
                <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-user-graduate"></i> Students</a></li>
                <li class="nav-item"><a class="nav-link" href="#"> <i class="fas fa-tasks"></i> Management</a></li>
                <li class="nav-item"><a class="nav-link" href="#"><i class="fas fa-cogs"></i> Sitting</a></li>
            </ul>
        </div>
    </div>
    </div>
</body>
</html>