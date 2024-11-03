<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comments - DBZ Resort</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 100%;
            background: white;
            padding: 20px;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input, textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .submit-btn {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .submit-btn:hover {
            background-color: #45a049;
        }
        .error {
            color: red;
            margin-bottom: 10px;
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
        <div class="container">
        <h2>We treasure your comments</h2>
        <form action="comm-resp.php" method="POST">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" id="name">
            </div>
            <div class="form-group">
                <label for="email">E-mail Address:</label>
                <input type="email" name="email" id="email" placeholder="name@domain.com">
            </div>
            <div class="form-group">
                <label for="comments">Your Comments:</label>
                <textarea required name="comments" id="comments" rows="4"></textarea>
            </div>
            <button type="submit" name="submit" class="submit-btn btn-primary">Submit Comments</button>
        </form>
    </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
