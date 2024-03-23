<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HugeVision | </title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.2/tailwind.min.css" rel="stylesheet"/>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="../assets/css/selectedFilm.css">
    <link rel="stylesheet" href="../assets/css/header.css">
    <link rel="stylesheet" href="../assets/css/footer.css">
    <link rel="stylesheet" href="../assets/css/listOfMovies.css">
    <link rel="shortcut icon" href="../public/favicon.png" type="image/png">
    <?php
        require_once('../db/connection.php');
    ?>
</head>
<body>
<p hidden id="statusFilm"><?=$_GET['status']?></p>
<p hidden id="dayFilm"><?=$_GET['day']?></p>
<div class="blackout" id="blackout"></div>
<div class="mainDiv">
<header>
  <div class="flex justify-center items-center gap-60 relative mb-36">
    <?php
        $sql_film = "SELECT * FROM `films` WHERE films.idFilm = ?";
        $Data_film = $pdo -> prepare($sql_film);
        $Data_film->execute(array($_GET['id']));
        $Line_film = $Data_film -> fetch();
    ?>
    <a href="../../">
      <img src="../public/logo.png" class="w-32 h-30" alt="Logo" />
    </a>
    <p class="boldFont menu-p cursor-pointer transition" id="sheduleHeaderBtn"><a href="../../">Расписание</a></p>
    <p class="boldFont menu-p cursor-pointer transition" id="filmsHeaderBtn"><a href="../../">Фильмы</a></p>
    <p class="boldFont menu-p cursor-pointer transition" id="promocodeHeaderBtn"><a href="../../">Промокоды</a></p>
  </div>
</header>

    <main>
            <div class="flex justify-center items-center mb-16 relative">
                <p hidden id="idFilm"><?=$_GET['id']?></p>
                <img src="../<?=$Line_film['posterFilm']?>" alt="Poster" class="posterImg">
                <div class="ml-16">
                    <div class="flex items-center gap-14 mb-4 text-xl">
                        <p><?=$Line_film['countryFilm']?></p>
                        <p><?=$Line_film['genreFilm']?></p>
                        <p><?=$Line_film['durationFilm']?></p>
                    </div>
                    <p class="boldFont text-5xl mb-6" id="nameSelectedFilm"><?=$Line_film['nameFilm']?></p>
                    <p class="textAboutFilm text-xl"><?=$Line_film['descriptionFilm']?></p>
                    <?php
                          if ($_GET['status'] == 0) {?>
                              <div class="mb-16 grid" id="sessionsDiv">

                              </div>
                          <?}
                          else {?>
                            <div class="mb-16 grid" id="sessionsDiv">
                              <p class="mb-6 boldFont text-2xl">Сеансы на:
                                <select class="selectDay">
                                  <option value="сегодня">сегодня</option>
                                  <option value="завтра">завтра</option>
                                  <option value="послезавтра">послезавтра</option>
                                  <option value="4 марта">4 марта</option>
                                </select>
                              </p>
                              <div class="flex gap-20 items-center justify-center sessions">
                                <div class="cursor-pointer session">
                                  <p class="boldFont pointer-events-none">10:00</p>
                                  <p class="pointer-events-none"><?=$_GET['price']?> ₽</p>
                                </div>
                                <div class="cursor-pointer session">
                                  <p class="boldFont pointer-events-none">12:30</p>
                                  <p class="pointer-events-none"><?=$_GET['price']?> ₽</p>
                                </div>
                                <div class="cursor-pointer session">
                                  <p class="boldFont pointer-events-none">14:25</p>
                                  <p class="pointer-events-none"><?=$_GET['price']?> ₽</p>
                                </div>
                                <div class="cursor-pointer session">
                                  <p class="boldFont pointer-events-none">17:45</p>
                                  <p class="pointer-events-none"><?=$_GET['price']?> ₽</p>
                                </div>
                                <div class="cursor-pointer session">
                                  <p class="boldFont pointer-events-none">20:00</p>
                                  <p class="pointer-events-none"><?=$_GET['price']?> ₽</p>
                                </div>
                              </div>
                            </div>
                          <?}
                        ?>

                    <div class="trailerDiv flex items-center justify-center">
                        <?php
                            if ($Line_film['trailerFilm'] == '../public/trailer-videos/test.mp4') {?>
                                <video src="<?=$Line_film['trailerFilm']?>" type="video/mp4" width="700" height="400" controls="controls"></video>  
                            <?} else {?>
                                <iframe width="700" height="400" src="<?=$Line_film['trailerFilm']?>"></iframe>
                            <?}
                        ?>                                              
                    </div>
                </div>
            </div>
    </main>
    <div class="hallDiv" id="hallDiv">
        <p id="iddd" hidden></p>
        <div class="hallBlackout"></div>
        <div class="orderTickets">
        <div class="backBtnOrder cursor-pointer backDiv mt-4 mb-4" id="backBtnOrder">
            <img src="../public/arrow-left.png" class="pointer-events-none" alt="arrowLeft" width="32" height="32">
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
              <input type="email" class="boldFont" id="mailInput" name="mailInput">
            </div>
          </div>
          <div class="buyDiv">
            <p class="boldFont text-2xl" id="itogValue">1 билет за 228 ₽</p>
            <button class="orderBtnInInfoDiv boldFont text-2xl">Купить билет</button>
          </div>
        </div>
        <div class="aboutHall mb-6">
          <span class="boldFont text-2xl" id="nameFilmInOrder"></span>
          <div class="cursor-pointer selectedSessionInHall selectSession">
              <p class="boldFont pointer-events-none" id="timeSelectedSession">10:00</p>
              <p class="pointer-events-none" id="priceSelectedSession">228 ₽</p>
          </div>
          <img src="../public/cross.png" class="crosBtn" id="crosBtn" alt="closeImg">
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
    <footer class="flex gap-60 justify-center h-auto items-center p-6">
        <p class="cursor-pointer footer-p boldFont text-2xl transition">О нас</p>
        <p class="cursor-pointer footer-p boldFont text-2xl transition">Контакты</p>
        <p class="cursor-pointer footer-p boldFont text-2xl transition">Расписание</p>
        <p class="cursor-pointer footer-p boldFont text-2xl transition">Вакансии</p>
        <a href="../../"
            ><img src="../public/logo.png" alt="Logo" class="w-32 h-30"
        /></a>
</footer>
</div>
</body>
<script src="../assets/js/jquery-3.7.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="../assets/js/main.js"></script>
<script src="../assets/js/shedule.js"></script>
</html>