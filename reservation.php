<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation - DBZ Resort</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body { font-family: Arial, sans-serif; }
        .container { max-width: 600px; margin: auto; padding: 20px; border: 1px solid #ccc; border-radius: 5px; }
        .form-group { margin-bottom: 15px; }
        .form-group label { display: block; margin-bottom: 5px; }
        .form-group input, .form-group select, .form-group textarea { width: 100%; padding: 8px; }
        .form-group button { width: 100%; padding: 10px; font-size: 16px; }
        .result { background: #f9f9f9; padding: 15px; margin-top: 20px; border: 1px solid #ccc; }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php">DBZ Resort</a>
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
            <label for="firstName">First Name:</label>
            <input type="text" id="firstName" name="firstName" required autofocus>
        </div>
        
        <div class="form-group">
            <label for="lastName">Last Name:</label>
            <input type="text" id="lastName" name="lastName" required>
        </div>
        
        <div class="form-group">
            <label for="address">Address:</label>
            <input type="text" id="address" name="address" placeholder="Number & Street, City, State, Zip" required>
        </div>
        
        <div class="form-group">
            <label for="checkInDate">Check-In Date:</label>
            <input type="date" id="checkInDate" name="checkInDate" required>
        </div>
        
        <div class="form-group">
            <label for="checkOutDate">Check-Out Date:</label>
            <input type="date" id="checkOutDate" name="checkOutDate" required>
        </div>
        
        <div class="form-group">
            <label for="roomType">Room Type:</label>
            <select id="roomType" name="roomType" required>
                <option value="King">King ($200/night)</option>
                <option value="Queen">Queen ($150/night)</option>
                <option value="Suite">Suite ($300/night)</option>
            </select>
        </div>
        
        <div class="form-group">
            <label for="phoneNumber">Phone Number:</label>
            <input type="tel" id="phoneNumber" name="phoneNumber" pattern="^\(\d{3}\) \d{3}-\d{4}$" placeholder="(123) 456-7890" required>
        </div>
        
        <div class="form-group">
            <label for="email">Email Address:</label>
            <input type="email" id="email" name="email" placeholder="someone@abc.com" required>
        </div>
        
        <div class="form-group">
            <label for="numPeople">Number of People:</label>
            <input type="number" id="numPeople" name="numPeople" min="1" required>
        </div>
        
        <div class="form-group">
            <label for="paymentMethod">Payment Method:</label>
            <select id="paymentMethod" name="paymentMethod" required>
                <option value="MC">MasterCard</option>
                <option value="VISA">VISA</option>
                <option value="AMEX">American Express</option>
                <option value="Discover">Discover</option>
            </select>
        </div>
        
        <div class="form-group">
            <label for="cardNumber">Card Number:</label>
            <input type="text" id="cardNumber" name="cardNumber" pattern="\d{4} \d{4} \d{4} \d{4}" placeholder="1234 5678 9012 3456" required>
        </div>
        
        <div class="form-group">
            <label for="specialRequests">Special Requests (optional):</label>
            <textarea id="specialRequests" name="specialRequests" rows="3"></textarea>
        </div>
        
        <div class="form-group">
            <button type="submit">Submit Reservation</button>
        </div>
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
