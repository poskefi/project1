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
<div class="container">
    <h2>Reservation Confirmation</h2>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $firstName = htmlspecialchars($_POST["firstName"]);
        $lastName = htmlspecialchars($_POST["lastName"]);
        $address = htmlspecialchars($_POST["address"]);
        $checkInDate = $_POST["checkInDate"];
        $checkOutDate = $_POST["checkOutDate"];
        $roomType = $_POST["roomType"];
        $phoneNumber = htmlspecialchars($_POST["phoneNumber"]);
        $email = htmlspecialchars($_POST["email"]);
        $numPeople = (int)$_POST["numPeople"];
        $paymentMethod = $_POST["paymentMethod"];
        $cardNumber = htmlspecialchars($_POST["cardNumber"]);
        $specialRequests = htmlspecialchars($_POST["specialRequests"]);

        $checkIn = new DateTime($checkInDate);
        $checkOut = new DateTime($checkOutDate);
        $interval = $checkIn->diff($checkOut);
        $duration = $interval->days;

        $roomRates = ["King" => 200, "Queen" => 150, "Suite" => 300];
        $roomRate = isset($roomRates[$roomType]) ? $roomRates[$roomType] : 0;

        $subtotal = $roomRate * $duration;
        $tax = $subtotal * 0.07;
        $total = $subtotal + $tax;

        echo "<div class='result'>";
        echo "<h3>Thank you, $firstName $lastName, for your reservation</h3>";
        echo "<p><strong>Address:</strong> $address</p>";
        echo "<p><strong>Check-In Date:</strong> $checkInDate</p>";
        echo "<p><strong>Check-Out Date:</strong> $checkOutDate</p>";
        echo "<p><strong>Room Type:</strong> $roomType</p>";
        echo "<p><strong>Number of People:</strong> $numPeople</p>";
        echo "<p><strong>Email:</strong> $email</p>";
        echo "<p><strong>Phone Number:</strong> $phoneNumber</p>";
        echo "<p><strong>Payment Method:</strong> $paymentMethod</p>";
        echo "<p><strong>Total Charge:</strong> $" . number_format($total, 2) . "</p>";
        echo "<p><strong>Special Requests:</strong> " . (!empty($specialRequests) ? $specialRequests : "None") . "</p>";
        echo "</div>";
    } else {
        echo "<p>No reservation data received. Please go back to the <a href='reservation.php'>reservation form</a>.</p>";
    }
    ?>

</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>