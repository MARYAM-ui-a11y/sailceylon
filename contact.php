<?php include 'db_connect.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Contact Us - SailCeylon</title>
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
        <li><a href="contact.html" class="active">Contact</a></li>
        <li><a href="booking.html">Booking</a></li>
      </ul>
    </nav>
  </header>

  <section class="contact">
    <h2>Contact Us</h2>
    <p>We’d love to hear from you! Whether you're interested in a private charter, tour booking, or just want to ask a question — drop us a message below.</p>

    <form class="contact-form">
      <input type="text" name="name" placeholder="Your Name" required />
      <input type="email" name="email" placeholder="Your Email" required />
      <input type="tel" name="phone" placeholder="Your Phone Number" required />
      <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
      <button type="submit">Send Message</button>
    </form>
  </section>

  <footer>
    <p>&copy; 2025 SailCeylon | Designed by [Your Name]</p>
  </footer>
</body>
</html>
