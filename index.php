<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Pedro's Pizza | The Finest Italian in Walsall</title>
  <link rel="stylesheet" type="text/css" href="https://daccaa.com/UI/daccaa-ui.css">
  <link rel="stylesheet" type="text/css" href="main.css?v=<?php echo filemtime('main.css'); ?>">
</head>
<body>

  <div class="menu-bar">
    <div class="inner">
      <div class="left">
        <img src="logo-white.png" alt="Pedro's Pizza Logo" />
      </div>
      <div class="right">
        <a href="./" class="selected">Home</a><a href="about">About</a><a href="menu">Menu</a><a href="contact">Contact</a>
      </div>
    </div>
  </div>
  
  <div class="sale">
    <div class="inner">
      Mid-week madness, get two for the price of one on all pizza!
    </div>
  </div>
  
  <div class="image-holder">
    <div class="overlay centre">
      <div class="inner-holder">
        <div class="text">
          Finest Italian in Walsall
        </div>
        <div class="button">
          <a href="javascript:void(0);" class="reserve">Reserve a seat</a>
        </div>
      </div>
    </div>
  </div>
  
  <div class="content">
    <div class="inner">
      <div class="title">
        Welcome to Pedro's Pizza
      </div>
      <div class="desc">
        We have the finest pizza in Walsall. People travel from all around the globe to taste Pedro's Pizza. Join the trend of people and come to Walsall and stop by at Pedro's to experience the difference. Our customers love Pedro's Pizza and with 100% return rate - you know what to do...
      </div>
      
      <img src="https://daccaa.com/tutorial/pedro-final/pedro.jpg" alt="A picture of Pedro" class="pedro" />
      
      <div class="desc">
        Hi, I am Pedro, I am the guy making these award winning pizzas. I worked tirelessly with my Pa to make these award winning pizzas. It all stems from my traditional Italian roots whereby my Great Grandad was a master cook renown across the whole of Italy. My Pa and I created this authentic Italian menu to conjure up the best experience for all of our beloved customers.
      </div>
      
    </div>
  </div>
  
  <div id="map"></div> 
  
  <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
  <script src="https://cdn.apple-mapkit.com/mk/5.x.x/mapkit.js"></script>
  <script src="main.js?v=<?php echo filemtime('main.js'); ?>"></script>  
</body>
</html>
