<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activities</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        #fullscreenImage {
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            display: none;
            justify-content: center;
            align-items: center;
            background: black;
            z-index: 1000;
        }
        #fullscreenImage img {
            max-width: 90%;
            max-height: 90%;
        }
        .activity-image{
            width: 100%;
            height: 300px;
        }
    </style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="./style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-green">
        <a class="navbar-brand" href="index.php">
            <img src="./img/logo.jpg" alt="Resort Logo" style="height: 40px;">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-left" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link text-white" href="index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="yurts.php">Yurts</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="activities.php">Activities</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="reservation.php">Reservation</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="comments.php">Comments</a></li>
            </ul>
        </div>
    </nav>
<div class="container mt-4">
    <h1 class="text-center">Activities</h1>
    <div class="row">
        <div class="col-12 col-md-6 mb-4">
            <div class="card">
                <img src="./img/top.jpg" class="card-img-top activity-image" alt="View of the Arena" onclick="showFullscreenImage(this)">
                <div class="card-body">
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 mb-4">
            <div class="card">
                <img src="./img/goku.jpg" class="card-img-top activity-image" alt="View of Goku" onclick="showFullscreenImage(this)">
                <div class="card-body">
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 mb-4">
            <div class="card">
                <img src="./img/cell.jpg" class="card-img-top activity-image" alt="View of Cell" onclick="showFullscreenImage(this)">
                <div class="card-body">
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 mb-4">
            <div class="card">
                <img src="./img/buu.jpg" class="card-img-top activity-image" alt="View of Buu" onclick="showFullscreenImage(this)">
                <div class="card-body">
                </div>
            </div>
        </div>
         
    </div>
</div>

<div id="fullscreenImage" onclick="hideFullscreenImage()">
    <img id="fullscreenImageContent" src="" alt="Fullscreen Activity">
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.4.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    function showFullscreenImage(image) {
        const fullscreenContainer = document.getElementById('fullscreenImage');
        const fullscreenImage = document.getElementById('fullscreenImageContent');
        fullscreenImage.src = image.src;
        fullscreenContainer.style.display = 'flex';
    }

    function hideFullscreenImage() {
        document.getElementById('fullscreenImage').style.display = 'none';
    }
</script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
