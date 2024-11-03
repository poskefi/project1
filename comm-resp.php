<!DOCTYPE html>
<head>
    <title>Reservation Confirmation - DBZ Resort</title>
    <style>
        body { font-family: Arial, sans-serif; }
        .container { max-width: 600px; margin: auto; padding: 20px; border: 1px solid #ccc; border-radius: 5px; }
        .result { background: #f9f9f9; padding: 15px; border: 1px solid #ccc; }
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
<?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = htmlspecialchars(trim($_POST["name"]));
            $email = htmlspecialchars(trim($_POST["email"]));
            $comments = htmlspecialchars(trim($_POST["comments"]));

            if (empty($comments)) {
                echo "<h1 class='error'>Dear guest, please enter your comments.</h1>";
            } else if (!empty($name) && !empty($email)) {
                echo "<h1 class='success'>Dear $name, thank you for your comments.</h1>";
            } else if (!empty($comments) && !empty($name)) {
                echo "<h1 class='success'>Dear $name, thank you for your comments.</h1>";
            } else if (!empty($comments) && !empty($email)) {
                echo "<h1 class='success'>Dear $email, thank you for your comments.</h1>";
            } else {
                echo "<h1 class='success'>Dear guest, thank you for your comments.</h1>";
            }
        }
    ?>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>