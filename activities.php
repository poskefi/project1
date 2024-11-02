<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activities</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Additional styling for fullscreen image display */
        #fullscreenImage {
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            display: none;
            justify-content: center;
            align-items: center;
            background: rgba(0, 0, 0, 0.8);
            z-index: 1000;
        }
        #fullscreenImage img {
            max-width: 90%;
            max-height: 90%;
        }
    </style>
</head>
<body>

<?php include 'navbar.php'; ?>

<div class="container mt-4">
    <h1 class="text-center">Activities</h1>
    <div class="row">
        <!-- Activity 1 -->
        <div class="col-12 col-md-6 mb-4">
            <div class="card">
                <img src="path/to/hiking.jpg" class="card-img-top activity-image" alt="Hiking" onclick="showFullscreenImage(this)">
                <div class="card-body">
                    <h5 class="card-title">Hiking</h5>
                    <p class="card-text">Enjoy scenic hikes through nature trails.</p>
                </div>
            </div>
        </div>
        <!-- Activity 2 -->
        <div class="col-12 col-md-6 mb-4">
            <div class="card">
                <img src="path/to/pool.jpg" class="card-img-top activity-image" alt="Pool" onclick="showFullscreenImage(this)">
                <div class="card-body">
                    <h5 class="card-title">Pool</h5>
                    <p class="card-text">Relax by the pool or take a refreshing swim.</p>
                </div>
            </div>
        </div>
        <!-- Add more activities as needed -->
    </div>
</div>

<!-- Fullscreen Image Display -->
<div id="fullscreenImage" onclick="hideFullscreenImage()">
    <img id="fullscreenImageContent" src="" alt="Fullscreen Activity">
</div>

<!-- Bootstrap JS and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.4.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    // JavaScript for fullscreen image display
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

</body>
</html>
