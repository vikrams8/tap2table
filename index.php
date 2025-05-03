<?php include 'db_config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tap 2 Table - Instant Orders, Zero Wait</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            margin: 0;
            background: url('https://images.unsplash.com/photo-1600891964599-f61ba0e24092?auto=format&fit=crop&w=1350&q=80') no-repeat center center fixed;
            background-size: cover;
            font-family: 'Segoe UI', sans-serif;
            color: white;
        }
        .overlay {
            background-color: rgba(0, 0, 0, 0.7);
            min-height: 100vh;
            padding: 40px 20px;
        }
        .header {
            text-align: center;
            padding: 30px 0;
        }
        .header h1 {
            font-size: 50px;
            margin-bottom: 10px;
            color: #ffcc70;
        }
        .header p {
            font-size: 20px;
        }
        .nav-buttons {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 20px;
            margin-top: 20px;
        }
        .nav-buttons a {
            text-decoration: none;
            background: #ff7043;
            color: white;
            padding: 15px 25px;
            border-radius: 10px;
            font-size: 18px;
            font-weight: bold;
            transition: 0.3s;
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
        }
        .nav-buttons a:hover {
            background: #e64a19;
        }
        .section {
            max-width: 900px;
            margin: 40px auto;
            background: rgba(255, 255, 255, 0.1);
            padding: 25px 30px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.3);
        }
        .section h2 {
            text-align: center;
            color: #ffd166;
        }
        .section p {
            font-size: 16px;
            line-height: 1.6;
            color: #f8f8f8;
            text-align: justify;
        }
        footer {
            text-align: center;
            padding: 15px;
            margin-top: 40px;
            color: white;
            background: rgba(0, 0, 0, 0.3);
        }
    </style>
    <script>
        // Function to track the order
        function trackOrder() {
            var id = prompt("Enter your Order ID to track:");
            if (id && id.trim() !== "") {
                window.location.href = "track_order.php?order_id=" + encodeURIComponent(id.trim());
            } else {
                alert("Please enter a valid Order ID!");
            }
        }

        // Function to open the admin panel with a password prompt
        function openAdminPanel() {
            var pass = prompt("Enter Admin Password:");
            if (pass === "admin123") {
                window.location.href = "admin.php";
            } else if (pass !== null) {
                alert("Incorrect Password!");
            }
        }
    </script>
</head>
<body>

<div class="overlay">

    <div class="header">
        <h1>TAP 2 TABLE</h1>
        <p>Instant Orders; Zero Wait</p>
    </div>

    <div class="nav-buttons">
        <a href="index.php">Home</a>
        <a href="menu.php">View Menu & Order</a>
        <a href="#" onclick="trackOrder()">Track Order</a>
        <a href="#" onclick="openAdminPanel()">Admin Panel</a>
    </div>

    <div class="section">
        <h2>About Us</h2>
        <p>
            Welcome to Tap 2 Table – a smart restaurant experience built for speed, simplicity, and satisfaction.
            Whether you're craving hot South Indian breakfasts or a spicy biryani, we bring the menu to your screen and the food to your table with zero wait.
            We believe in merging traditional flavors with modern tech to enhance your dining experience.
        </p>
    </div>

    <div class="section">
        <h2>Contact Us</h2>
        <p>
            <strong>Email:</strong> support@tap2table.com<br>
            <strong>Phone:</strong> 8217582320<br>
            <strong>Location:</strong> Shivamogga, Karnataka, India
        </p>
    </div>

    <footer>
        &copy; 2025 TAP 2 TABLE | All Rights Reserved.
    </footer>

</div>

<!-- Contact Us Section -->
<section id="contact" style="background:#f1f1f1; padding:40px 20px; text-align:center;">
    <h2 style="font-size:30px; color:#2c3e50;">Contact Us</h2>
    <p style="font-size:16px; color:#555;">Reach out to us on your favorite apps!</p>

    <div style="margin-top:20px;">
        <!-- WhatsApp -->
        <a href="https://wa.me/919876543210" target="_blank" title="WhatsApp">
            <img src="https://cdn-icons-png.flaticon.com/512/733/733585.png" width="50" height="50" alt="WhatsApp" style="margin:10px;">
        </a>

        <!-- Instagram -->
        <a href="https://www.instagram.com/tap2t_able?igsh=MTRtdWZ4MnVkdDNnNQ==" target="_blank" title="Instagram">
            <img src="https://cdn-icons-png.flaticon.com/512/174/174855.png" width="50" height="50" alt="Instagram" style="margin:10px;">
        </a>

        <!-- Facebook -->
        <a href="https://facebook.com/yourrestaurant" target="_blank" title="Facebook">
            <img src="https://cdn-icons-png.flaticon.com/512/733/733547.png" width="50" height="50" alt="Facebook" style="margin:10px;">
        </a>

        <!-- X (Twitter) -->
        <a href="https://twitter.com/yourrestaurant" target="_blank" title="X (Twitter)">
            <img src="https://cdn-icons-png.flaticon.com/512/5968/5968958.png" width="50" height="50" alt="Twitter X" style="margin:10px;">
        </a>

        <!-- Google Maps -->
        <a href="https://maps.app.goo.gl/YOUR_LOCATION_LINK" target="_blank" title="Find us on Google Maps">
            <img src="https://cdn-icons-png.flaticon.com/512/684/684908.png" width="50" height="50" alt="Maps" style="margin:10px;">
        </a>

        <!-- Call -->
        <a href="tel:+919876543210" title="Call Us">
            <img src="https://cdn-icons-png.flaticon.com/512/724/724664.png" width="50" height="50" alt="Phone" style="margin:10px;">
        </a>

        <!-- Email -->
        <a href="mailto:contact@tap2table.com" title="Email Us">
            <img src="https://cdn-icons-png.flaticon.com/512/732/732200.png" width="50" height="50" alt="Email" style="margin:10px;">
        </a>
    </div>

    <p style="margin-top:20px; font-size:16px;">Email: <a href="mailto:contact@tap2table.com">contact@tap2table.com</a></p>
    <p>Phone: <a href="tel:+919876543210">+91 98765 43210</a></p>
</section>

</body>
</html>
