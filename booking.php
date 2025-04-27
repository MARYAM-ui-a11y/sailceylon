<?php
include 'db_connect.php'; // ✅ Correct include

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $experience = $_POST['experience'];
    $booking_date = $_POST['date'];
    $booking_time = $_POST['time'];
    $guests = $_POST['guests'];
    $message = $_POST['message'];

    // Insert into database
    $sql = "INSERT INTO bookings (name, email, phone, experience, booking_date, booking_time, guests, message)
            VALUES ('$name', '$email', '$phone', '$experience', '$booking_date', '$booking_time', '$guests', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "Booking successful!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Booking - SailCeylon</title>
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
        <li><a href="booking.php" class="active">Booking</a></li> <!-- .php because this file is PHP -->
      </ul>
    </nav>
  </header>

  <section class="booking">
    <h2>Book Your SailCeylon Experience</h2>
    <p>Choose your yacht, tour or workshop and schedule your adventure today.</p>

    <form class="booking-form" action="booking.php" method="post"> <!-- Added action and method -->
      <select name="experience" required>
        <option value="">Select Experience</option>
        <option value="luxury-yacht">Luxury Yacht Charter</option>
        <option value="sunset-tour">Sunset Coastal Tour</option>
        <option value="sailing-workshop">Sailing Workshop</option>
      </select>

      <input type="date" name="date" required />
      <input type="time" name="time" required />
      <input type="number" name="guests" placeholder="Number of Guests" min="1" required />

      <input type="text" name="name" placeholder="Your Full Name" required />
      <input type="email" name="email" placeholder="Your Email" required />
      <input type="tel" name="phone" placeholder="Phone Number" required />

      <textarea name="message" rows="4" placeholder="Special requests or comments"></textarea>

      <button type="submit" name="submit">Proceed to Payment</button> <!-- Added name="submit" -->
    </form>
  </section>

  <footer>
    <p>&copy; 2025 SailCeylon | Designed by maryam</p>
  </footer>
</body>
</html>
<button id="checkout-button">Proceed to Payment</button>
<script src="https://js.stripe.com/v3/"></script>
<script>
  const stripe = Stripe("pk_test_YOUR_PUBLIC_KEY"); // Replace with your real key

  document.getElementById("checkout-button").addEventListener("click", function (e) {
    e.preventDefault();
    fetch("create-checkout-session.php", {
      method: "POST"
    })
    .then(response => response.json())
    .then(session => {
      return stripe.redirectToCheckout({ sessionId: session.id });
    })
    .then(result => {
      if (result.error) {
        alert(result.error.message);
      }
    });
  });
</script>
