<?php include 'db_connect.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Tours - SailCeylon</title>
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

  <section class="tours">
    <h2>Upcoming Sailing Tours</h2>
    <div class="tour-cards">
      <div class="tour-card">
        <h3>Sunset Cruise – Colombo Coast</h3>
        <p><strong>Date:</strong> May 10, 2025</p>
        <p><strong>Time:</strong> 5:00 PM – 8:00 PM</p>
        <p><strong>Price:</strong> LKR 25,000 / USD 75 per person</p>
        <p><strong>Itinerary:</strong> Welcome drink → Sunset sail → Light dinner on board</p>
        <a href="booking.html" class="book-btn">Book Now</a>
      </div>

      <div class="tour-card">
        <h3>Whale Watching Adventure – Mirissa</h3>
        <p><strong>Date:</strong> May 14, 2025</p>
        <p><strong>Time:</strong> 6:00 AM – 11:00 AM</p>
        <p><strong>Price:</strong> LKR 30,000 / USD 90 per person</p>
        <p><strong>Itinerary:</strong> Early morning sail → Whale spotting → Breakfast at sea</p>
        <a href="booking.html" class="book-btn">Book Now</a>
      </div>
    </div>
  </section>

  <section class="workshops">
    <h2>Interactive Sailing Workshops</h2>
    <div class="tour-cards">
      <div class="tour-card">
        <h3>Beginner’s Sailing Course</h3>
        <p><strong>Date:</strong> May 18–20, 2025</p>
        <p><strong>Time:</strong> 10:00 AM – 1:00 PM</p>
        <p><strong>Price:</strong> LKR 45,000 / USD 135</p>
        <p><strong>Includes:</strong> Theory + Hands-on sailing + Certification</p>
        <a href="booking.html" class="book-btn">Book Now</a>
      </div>

      <div class="tour-card">
        <h3>Advanced Crew Skills Workshop</h3>
        <p><strong>Date:</strong> May 25–27, 2025</p>
        <p><strong>Time:</strong> 9:00 AM – 2:00 PM</p>
        <p><strong>Price:</strong> LKR 60,000 / USD 180</p>
        <p><strong>Includes:</strong> Navigation, safety, and advanced maneuvers</p>
        <a href="booking.html" class="book-btn">Book Now</a>
      </div>
    </div>
  </section>

  <footer>
    <p>&copy; 2025 SailCeylon | Designed by [Your Name]</p>
  </footer>
</body>
</html>
