<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>HugeVision</title>
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.2/tailwind.min.css"
      rel="stylesheet"
    />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="./src/assets/css/main.css" />
    <link rel="stylesheet" href="./src/assets/css/header.css">
    <link rel="stylesheet" href="./src/assets/css/footer.css">
    <link rel="shortcut icon" href="src/public/favicon.png" type="image/png">
  </head>
  <body>
    <div class="blackout" id="blackout">
      
    </div>
    <div>
      <?php
        require_once('./src/modules/Header.html');
      ?>
      <main id="main">
        
      </main>
      <div class="hallDiv" id="hallDiv">
        <div class="aboutHall mb-6">
          <span class="boldFont text-2xl">Название</span>
          <div class="cursor-pointer selectedSessionInHall selectSession">
              <p class="boldFont pointer-events-none">10:00</p>
              <p class="pointer-events-none">228 ₽</p>
          </div>
          <img src="./src/public/cross.png" class="crosBtn" id="crosBtn" alt="closeImg">
        </div>
        <div class="hall mb-4">
            <p class="boldFont colorWhite screenText">Экран</p>
            <div class="hallSeats">            
            <?php
            for ($i=0; $i < 5; $i++) { ?>
              <div class="seats">
                <p class="colorWhite boldFont text-xl numberRow"><?=$i + 1?></p>
                <p class="seatNumber boldFont">1</p>
                <p class="seatNumber boldFont">2</p>
                <p class="seatNumber boldFont">3</p>
                <p class="seatNumber boldFont">4</p>
                <p class="seatNumber boldFont">5</p>
                <p class="seatNumber boldFont">6</p>
                <p class="seatNumber boldFont">7</p>
                <p class="seatNumber boldFont">8</p>
                <p class="seatNumber boldFont">9</p>
                <p class="seatNumber boldFont">10</p>
              </div>
            <?}?>
            </div>
        </div>
        <div class="infoCost">
          <div class="promocodeInfo">
            <p class="boldFont text-xl mb-2">Промокод:</p>
            <input type="text" class="promocodeInput boldFont">
          </div>
          <div class="buyInfo mt-8">
            <p class="boldFont">1 билет за 228 ₽</p>
            <button class="colorWhite buyTicketBtn boldFont">Купить билет</button>
          </div>
        </div>
      </div>
      <?php
        require_once('./src/modules/Footer.html')
      ?>
    </div>
  </body>
  <script src="./src/assets/js/jquery-3.7.1.min.js"></script>
  <script src="./src/assets/js/main.js"></script>
  <script src="./src/assets/js/shedule.js"></script>
</html>