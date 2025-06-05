<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  <style>
    .countdown-section {
      position: relative;
      background-image: url('https://alburhanluggage.com/cdn/shop/files/sale-bg.jpg?v=1707476635');
      background-size: cover;
      background-position: center;
      color: #fff;
      padding: 100px 20px;
      display: flex;
      flex-direction: column;
      align-items: center;
      text-align: center;
    }

    .countdown-overlay {
      background-color: rgba(0, 0, 0, 0.45);
      padding: 40px 20px;
      width: 100%;
      max-width: 1200px;
    }

    .countdown-heading {
      text-transform: uppercase;
      letter-spacing: 2px;
      font-size: 14px;
      margin-bottom: 10px;
    }

    .countdown-title {
      font-size: 42px;
      margin-bottom: 20px;
    }

    .countdown-description {
      font-size: 16px;
      max-width: 500px;
      margin: 0 auto 30px;
    }

    .countdown-timer {
      display: flex;
      justify-content: center;
      gap: 15px;
      margin-bottom: 30px;
      flex-wrap: wrap;
    }

    .timer-box {
      background-color: #b12022;
      padding: 15px 10px;
      min-width: 60px;
      border-radius: 4px;
    }

    .timer-box span {
      display: block;
      font-size: 28px;
      font-weight: bold;
    }

    .timer-label {
      font-size: 12px;
      margin-top: 4px;
      text-transform: uppercase;
    }

    .shop-btn {
      background: #fff;
      color: #000;
      padding: 12px 25px;
      text-decoration: none;
      border-radius: 4px;
      font-weight: bold;
      transition: background 0.3s;
    }

    .shop-btn:hover {
      background: #ddd;
    }

    @media (max-width: 600px) {
      .countdown-title {
        font-size: 28px;
      }
    }
  </style>
</head>

<body>
<?php include __DIR__ . '/../components/featuredproducts.php'; ?>
<section class="countdown-section">
  <div class="countdown-overlay">
    <div class="countdown-heading">Limited Time Offer</div>
    <div class="countdown-title">SALE</div>
    <p class="countdown-description">
      Shop our selection of exclusive Luggage and Travel Bags at reduced price during the Umrah Sale. Hurry up!
    </p>

    <div class="countdown-timer" id="countdown">
      <div class="timer-box">
        <span id="days">00</span>
        <div class="timer-label">Day</div>
      </div>
      <div class="timer-box">
        <span id="hours">00</span>
        <div class="timer-label">Hours</div>
      </div>
      <div class="timer-box">
        <span id="minutes">00</span>
        <div class="timer-label">Min</div>
      </div>
      <div class="timer-box">
        <span id="seconds">00</span>
        <div class="timer-label">Sec</div>
      </div>
    </div>

    <a href="/collections/sale" class="shop-btn">SHOP NOW</a>
  </div>
</section>

<script>
  // Set your countdown date here
  const countDownDate = new Date("July 10, 2025 00:00:00").getTime();

  const x = setInterval(function () {
    const now = new Date().getTime();
    const distance = countDownDate - now;

    const days = Math.floor(distance / (1000 * 60 * 60 * 24));
    const hours = Math.floor(
      (distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
    );
    const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    const seconds = Math.floor((distance % (1000 * 60)) / 1000);

    document.getElementById("days").innerHTML = days < 10 ? "0" + days : days;
    document.getElementById("hours").innerHTML = hours < 10 ? "0" + hours : hours;
    document.getElementById("minutes").innerHTML = minutes < 10 ? "0" + minutes : minutes;
    document.getElementById("seconds").innerHTML = seconds < 10 ? "0" + seconds : seconds;

    if (distance < 0) {
      clearInterval(x);
      document.getElementById("countdown").innerHTML = "<strong>Expired</strong>";
    }
  }, 1000);
</script>


</body>
</html>