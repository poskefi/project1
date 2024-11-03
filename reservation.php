<!DOCTYPE html>
<head>
    <title>Reservation - DBZ Resort</title>
    <style>
        body { font-family: Arial, sans-serif; }
        .container { max-width: 100%; margin: auto; padding: 10px;}
        .form-group { display: flex; align-items: center; margin-bottom: 15px; }
        .form-group label { width: 150px; margin-right: 10px; }
        .form-group input, .form-group select, .form-group textarea { flex: 1; padding: 8px; }
        .form-group button { width: 100%; padding: 10px; font-size: 16px; }
        .result { background: #f9f9f9; padding: 15px; margin-top: 20px; border: 1px solid #ccc; }
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
    <div class="container mt-5">
        <h2>Make a Reservation</h2>
        <form action="resv-resp.php" method="post">
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
            <div class="btn-group">
                <button type="submit" class="btn btn-primary mr-2">Reserve a Room</button>
            </div>
            <div class="btn-group">
                <button type="reset" class="btn btn-success mr-2">Clear</button>
            </div>
        </div>
    </form>

    </div>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
