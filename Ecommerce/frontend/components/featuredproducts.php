<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Featured Products</title>
  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;600&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Outfit', sans-serif;
      margin: 0;
      padding: 0;
      background: #f7f7f7;
    }

    .section {
      padding: 4rem 20px;
      background-color: #fff;
      text-align: center;
      position: relative;
    }

    .section h2 {
font-size: max(0.6875rem, clamp(1.25rem, 1.067rem + 0.78vw, 28px));
      margin-bottom: 30px;
              line-height: 39.2px;
              letter-spacing: 5.04px;
                gap: 1.25rem;
                font-weight: 300;
                word-spacing: 0px;
                text-transform: uppercase;

    }
    .section h2{
        font-weight: 500;
    }

    .products {
      display: grid;
      grid-template-columns: repeat(4, minmax(250px, 1fr));
      gap: 24px;
      /* max-width: 1200px; */
      margin: 0 auto;
    }

    .product-card {
      background-color: #fff;
      border: 1px solid #eee;
      border-radius: 8px;
      padding: 16px;
      text-align: center;
      transition: 0.3s;
    }

    .product-card:hover {
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }

    .product-card img {
      width: 100%;
      max-width: 100%;
      height: auto;
      border-radius: 8px;
      margin-bottom: 12px;
    }

    .product-title {
      font-weight: 600;
      font-size: 18px;
      margin: 10px 0 6px;
      color: #333;
      text-decoration: none;
    }

    .price {
      font-size: 16px;
      color: #e53935;
    }

    .old-price {
      text-decoration: line-through;
      color: #888;
      font-size: 14px;
      margin-left: 8px;
    }

    .swatches {
      display: flex;
      justify-content: center;
      margin: 10px 0;
      gap: 6px;
    }

    .swatch {
      width: 20px;
      height: 20px;
      border-radius: 50%;
      border: 1px solid #ccc;
      cursor: pointer;
    }

    .cta-button {
      margin-top: 30px;
    }

    .cta-button a {
      display: inline-block;
      background: #000;
      color: #fff;
      text-decoration: none;
      padding: 12px 24px;
      border-radius: 5px;
      font-weight: 600;
    }

    .on-sale-badge {
      background-color: #e53935;
      color: #fff;
      font-size: 12px;
      padding: 3px 8px;
      border-radius: 4px;
      position: absolute;
      top: 10px;
      left: 10px;
    }

    .product-img-container {
      position: relative;
    }
  </style>
</head>
<body>

  <section class="section">
    <h2>Don't miss out on the opportunity to save during our exclusive <strong>SALE!</strong></h2>
    
    <div class="products">

      <!-- Product Card 1 -->
      <div class="product-card">
        <div class="product-img-container">
          <span class="on-sale-badge">On Sale</span>
          <img src="https://alburhanluggage.com/cdn/shop/files/134_6afb6400-74f4-405e-9c2e-dd7b6de88d70.png?v=1743547094" alt="Lusetti Signature" />
        </div>
        <a href="#" class="product-title">Lusetti Signature</a>
        <div class="price">Rs.22,500 <span class="old-price">Rs.27,500</span></div>
        <div class="swatches">
          <div class="swatch" style="background:#FFC0CB;"></div>
          <div class="swatch" style="background:#005BD3;"></div>
          <div class="swatch" style="background:#000000;"></div>
          <div class="swatch" style="background:#e3cdf7;"></div>
        </div>
      </div>

      <!-- Product Card 2 -->
      <div class="product-card">
        <div class="product-img-container">
          <span class="on-sale-badge">On Sale</span>
          <img src="https://alburhanluggage.com/cdn/shop/files/128.png?v=1736716182" alt="Goby London CheckMate" />
        </div>
        <a href="#" class="product-title">Goby London CheckMate</a>
        <div class="price">Rs.6,999 <span class="old-price">Rs.10,999</span></div>
        <div class="swatches">
          <div class="swatch" style="background:#FFFDD0;"></div>
          <div class="swatch" style="background:#6F4E37;"></div>
        </div>
      </div>
<!-- Product Card 3 -->
      <div class="product-card">
        <div class="product-img-container">
          <span class="on-sale-badge">On Sale</span>
          <img src="https://alburhanluggage.com/cdn/shop/files/128.png?v=1736716182" alt="Goby London CheckMate" />
        </div>
        <a href="#" class="product-title">Goby London CheckMate</a>
        <div class="price">Rs.6,999 <span class="old-price">Rs.10,999</span></div>
        <div class="swatches">
          <div class="swatch" style="background:#FFFDD0;"></div>
          <div class="swatch" style="background:#6F4E37;"></div>
        </div>
      </div>
      <!-- Product Card 4 -->
      <div class="product-card">
        <div class="product-img-container">
          <span class="on-sale-badge">On Sale</span>
          <img src="https://alburhanluggage.com/cdn/shop/files/128.png?v=1736716182" alt="Goby London CheckMate" />
        </div>
        <a href="#" class="product-title">Goby London CheckMate</a>
        <div class="price">Rs.6,999 <span class="old-price">Rs.10,999</span></div>
        <div class="swatches">
          <div class="swatch" style="background:#FFFDD0;"></div>
          <div class="swatch" style="background:#6F4E37;"></div>
        </div>
      </div>
      
      <!-- Product Card 1 -->
      <div class="product-card">
        <div class="product-img-container">
          <span class="on-sale-badge">On Sale</span>
          <img src="https://alburhanluggage.com/cdn/shop/files/134_6afb6400-74f4-405e-9c2e-dd7b6de88d70.png?v=1743547094" alt="Lusetti Signature" />
        </div>
        <a href="#" class="product-title">Lusetti Signature</a>
        <div class="price">Rs.22,500 <span class="old-price">Rs.27,500</span></div>
        <div class="swatches">
          <div class="swatch" style="background:#FFC0CB;"></div>
          <div class="swatch" style="background:#005BD3;"></div>
          <div class="swatch" style="background:#000000;"></div>
          <div class="swatch" style="background:#e3cdf7;"></div>
        </div>
      </div>

      <!-- Product Card 2 -->
      <div class="product-card">
        <div class="product-img-container">
          <span class="on-sale-badge">On Sale</span>
          <img src="https://alburhanluggage.com/cdn/shop/files/128.png?v=1736716182" alt="Goby London CheckMate" />
        </div>
        <a href="#" class="product-title">Goby London CheckMate</a>
        <div class="price">Rs.6,999 <span class="old-price">Rs.10,999</span></div>
        <div class="swatches">
          <div class="swatch" style="background:#FFFDD0;"></div>
          <div class="swatch" style="background:#6F4E37;"></div>
        </div>
      </div>
<!-- Product Card 3 -->
      <div class="product-card">
        <div class="product-img-container">
          <span class="on-sale-badge">On Sale</span>
          <img src="https://alburhanluggage.com/cdn/shop/files/128.png?v=1736716182" alt="Goby London CheckMate" />
        </div>
        <a href="#" class="product-title">Goby London CheckMate</a>
        <div class="price">Rs.6,999 <span class="old-price">Rs.10,999</span></div>
        <div class="swatches">
          <div class="swatch" style="background:#FFFDD0;"></div>
          <div class="swatch" style="background:#6F4E37;"></div>
        </div>
      </div>
      <!-- Product Card 4 -->
      <div class="product-card">
        <div class="product-img-container">
          <span class="on-sale-badge">On Sale</span>
          <img src="https://alburhanluggage.com/cdn/shop/files/128.png?v=1736716182" alt="Goby London CheckMate" />
        </div>
        <a href="#" class="product-title">Goby London CheckMate</a>
        <div class="price">Rs.6,999 <span class="old-price">Rs.10,999</span></div>
        <div class="swatches">
          <div class="swatch" style="background:#FFFDD0;"></div>
          <div class="swatch" style="background:#6F4E37;"></div>
        </div>
      </div>
      <!-- Add more product cards here in same structure -->

    </div>

    <div class="cta-button">
      <a href="/collections/sale">View All</a>
    </div>
  </section>

</body>
</html>
