<?php include 'db_connect.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Fleet & Services - SailCeylon</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>
  <header>
    <nav class="navbar">
      <h1>SailCeylon</h1>
      <ul class="nav-links">
        <li><a href="index.html">Home</a></li>
        <li><a href="about.html">About Us</a></li>
        <li><a href="fleet.html">Fleet & Services</a></li>
        <li><a href="tours.html">Tours</a></li>
        <li><a href="gallery.html">Gallery</a></li>
        <li><a href="contact.html">Contact</a></li>
        <li><a href="booking.html">Booking</a></li>
      </ul>
    </nav>
  </header>

  <section class="fleet">
    <h2>Our Luxurious Fleet</h2>
    <div class="fleet-grid">
      <div class="fleet-card">
        <img src="https://images.unsplash.com/photo-1584452964155-f599a5f5ad05" alt="Yacht 1">
        <h3>Ocean Pearl</h3>
        <p>Capacity: 10 guests | Amenities: Wi-Fi, Sun Deck, Bar | Price: $500/hr</p>
      </div>
      <div class="fleet-card">
        <img src="https://images.unsplash.com/photo-1500375592092-40eb2168fd21" alt="Yacht 2">
        <h3>Sea Breeze</h3>
        <p>Capacity: 12 guests | Amenities: Lounge, AC, Catering | Price: $600/hr</p>
      </div>
      <div class="fleet-card">
        <img src="https://images.unsplash.com/photo-1526153780891-2f29c17143b4" alt="Yacht 3">
        <h3>Wave Dancer</h3>
        <p>Capacity: 8 guests | Amenities: Sound System, Jacuzzi | Price: $450/hr</p>
      </div>
    </div>
  </section>

  <section class="services">
    <h2>Our Services</h2>
    <ul>
      <li><strong>Private Yacht Charters:</strong> Ideal for birthdays, proposals, or VIP experiences.</li>
      <li><strong>Scenic Coastal Tours:</strong> Cruise the coastline and explore hidden beaches.</li>
      <li><strong>Sailing Workshops:</strong> Hands-on lessons from expert sailors for all skill levels.</li>
      <li><strong>Corporate Events:</strong> Host meetings, retreats, and team-building at sea.</li>
    </ul>
  </section>

  <footer>
    <p>&copy; 2025 SailCeylon | Designed by [Your Name]</p>
  </footer>
</body>
</html>
