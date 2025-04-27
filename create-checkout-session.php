<?php
require 'vendor/autoload.php';

\Stripe\Stripe::setApiKey('sk_test_YOUR_SECRET_KEY'); // Replace with your real secret key

$session = \Stripe\Checkout\Session::create([
  'payment_method_types' => ['card'],
  'line_items' => [[
    'price_data' => [
      'currency' => 'usd', // or 'lkr' based on user selection
      'product_data' => [
        'name' => 'SailCeylon Tour Booking',
      ],
      'unit_amount' => 5000 * 100, // Amount in cents (e.g. $50.00 or Rs. 5000)
    ],
    'quantity' => 1,
  ]],
  'mode' => 'payment',
  'success_url' => 'https://yourdomain.com/success.html',
  'cancel_url' => 'https://yourdomain.com/cancel.html',
]);

echo json_encode(['id' => $session->id]);
