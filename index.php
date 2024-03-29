<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>HugeVision</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.2/tailwind.min.css" rel="stylesheet"/>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="./src/assets/js/jquery-3.7.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    

    <link rel="stylesheet" href="./src/assets/css/main.css" />
    <link rel="stylesheet" href="./src/assets/css/header.css">
    <link rel="stylesheet" href="./src/assets/css/footer.css">
    <link rel="shortcut icon" href="src/public/favicon.png" type="image/png">
  </head>
  <body>
    <div class="arrowUp" id="arrowUp">
      <a href="#mainDiv"><img src="./src/public/arrow-up.png" alt="arrow-up"></a>
    </div>
    <div class="blackout" id="blackout">
      
    </div>
    <div class="mainDiv" id="mainDiv">
      <?php
        require_once('./src/modules/Header.html');
      ?>
      <main id="main">
        <img src="./src/public/loading.gif" alt="Loading" width="64" height="64" class="flex justify-center items-center">
      </main>
      <div class="hallDiv" id="hallDiv">
        <p id="iddd" hidden></p>
        <div class="hallBlackout"></div>
        <div class="orderTickets" id="orderTickets">
          <div class="backBtnOrder cursor-pointer backDiv mt-4 mb-4" id="backBtnOrder">
            <img src="./src/public/arrow-left.png" class="pointer-events-none" alt="arrowLeft" width="32" height="32">
            <p class="boldFont colorWhite text-2xl pointer-events-none">Назад</p>
          </div>
          <p class="boldFont colorWhite text-3xl mb-12 textAboutData">Данные для получения заказа</p>
          <div class="inputsOrders">
            <div class="inputAndTextOrder">
              <p class="boldFont colorWhite text-2xl mb-2">Номер телефона:</p>
              <input type="text" class="boldFont" id="telInput" name="telInput">
            </div>
            <div class="inputAndTextOrder mb-44">
              <p class="boldFont colorWhite text-2xl mb-2">E-MAIL:</p>
              <input type="text" class="boldFont" id="mailInput" name="mailInput">
            </div>
          </div>
          <div class="buyDiv">
            <p class="boldFont text-2xl" id="itogValue"></p>
            <button class="boldFont text-2xl orderBtnInInfoDiv">Купить билет</button>
          </div>
        </div>
        <div class="aboutHall mb-6">
          <span class="boldFont text-2xl" id="nameFilmInOrder"></span>
          <div class="cursor-pointer selectedSessionInHall selectSession">
              <p class="boldFont pointer-events-none" id="timeSelectedSession">10:00</p>
              <p class="pointer-events-none" id="priceSelectedSession">228 ₽</p>
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
            <input type="text" class="promocodeInput boldFont" maxlength="6">
          </div>
          <div class="buyInfo mt-8">
            <p class="boldFont" id="countSeats">Выберите место</p>
            <button class="colorWhite buyTicketBtn boldFont">Купить билет</button>
          </div>
        </div>
      </div>
      <?php
        require_once('./src/modules/Footer.html')
      ?>
    </div>
  </body>  
  <script src="./src/assets/js/main.js"></script>
  <script src="./src/assets/js/shedule.js"></script>
</html>
