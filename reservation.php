<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation - Wonderful Resort</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php">Wonderful Resort</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="yurts.php">Yurts</a></li>
                <li class="nav-item"><a class="nav-link" href="activities.php">Activities</a></li>
                <li class="nav-item"><a class="nav-link" href="reservation.php">Reservation</a></li>
                <li class="nav-item"><a class="nav-link" href="comments.php">Comments</a></li>
            </ul>
        </div>
    </nav>
    <div class="container mt-5">
        <h2>Make a Reservation</h2>
        <form action="reservation.php" method="post">
            <div class="form-group">
                <label for="firstName">First Name</label>
                <input type="text" class="form-control" id="firstName" name="firstName" required autofocus>
            </div>
            <!-- Add similar input fields for Last Name, Address, Phone, Email -->
            
            <div class="form-group">
                <label for="roomType">Room Type</label>
                <select class="form-control" id="roomType" name="roomType" required>
                    <option value="King">King - $200</option>
                    <option value="Queen">Queen - $150</option>
                    <option value="Suite">Suite - $300</option>
                </select>
            </div>
            <div class="form-group">
                <label for="nights">Duration of Stay (Nights)</label>
                <input type="number" class="form-control" id="nights" name="nights" required>
            </div>
            <button type="submit" class="btn btn-primary">Calculate Total</button>
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $roomType = $_POST['roomType'];
            $nights = $_POST['nights'];
            $roomRate = $roomType == 'King' ? 200 : ($roomType == 'Queen' ? 150 : 300);
            $totalCost = $roomRate * $nights * 1.07;
            echo "<div class='mt-3 alert alert-success'>Total cost for your stay: $" . number_format($totalCost, 2) . "</div>";
        }
        ?>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
