<head>
    <link rel="stylesheet" href="src/assets/css/posters.css" />
    <link rel="stylesheet" href="src/assets/css/sheduleSession.css" />
    <link rel="stylesheet" href="src/assets/css/listOfMovies.css" />
    <?php
      require_once('../db/connection.php');

      $sql_afisha = "SELECT * FROM `afisha`";
      $Data_afisha = $pdo -> query($sql_afisha);
      $Line_afisha = $Data_afisha -> fetchAll();
    ?>
  </head>
  <body class="shedulePage">
  <div class="slider flex justify-center gap-32 mb-16" id="slider">
    <?php
      foreach ($Line_afisha as $mas) {?>
          <div>
            <img src="<?=$mas['photoAfisha']?>" alt="Poster" class="posterImg" />
          </div>
      <?}
     ?>        
      </div>
    <div class="mb-16">
      <p class="boldFont mb-12 text-4xl ml-16 colorWhite">Расписание сеансов</p>
      <div class="flex items-center justify-center gap-28">
        <div>
          <img
            src="./src/public/arrow-left.png"
            alt="ArrowLeft"
            class="arrowShedule cursor-pointer"
          />
        </div>
        <div class="cursor-pointer sheduleDay selectSheduleDay">
          <p class="boldFont pointer-events-none">Сегодня</p>
          <p class="pointer-events-none">1 марта</p>
        </div>
        <div class="cursor-pointer sheduleDay">
          <p class="boldFont pointer-events-none">Завтра</p>
          <p class="pointer-events-none">2 марта</p>
        </div>
        <div class="cursor-pointer sheduleDay">
          <p class="boldFont">Среда</p>
          <p>3 марта</p>
        </div>
        <div class="cursor-pointer sheduleDay">
          <p class="boldFont">Четверг</p>
          <p>4 марта</p>
        </div>
        <div class="cursor-pointer sheduleDay">
          <p class="boldFont">Пятница</p>
          <p>5 марта</p>
        </div>
        <div class="cursor-pointer sheduleDay">
          <p class="boldFont">Суббота</p>
          <p>6 марта</p>
        </div>
        <div class="cursor-pointer sheduleDay">
          <p class="boldFont">Воскресенье</p>
          <p>7 марта</p>
        </div>
        <div>
          <img
            src="./src/public/arrow-right.png"
            alt="ArrowRight"
            class="arrowShedule cursor-pointer"
          />
        </div>
      </div>
    </div>
    <div class="listOfMovies" id="listOfMovies">
      <?php
        $sql_films = "SELECT films.idFilm, `nameFilm`, `countryFilm`, `genreFilm`, `durationFilm`, `posterFilm`, `priceTicket` FROM `films` JOIN `rentals` ON films.idFilm = rentals.idFilm WHERE `statusRental` = 1";
        $Data_films = $pdo -> query($sql_films);
        $Line_films = $Data_films -> fetchAll();

        foreach ($Line_films as $mas) {?>
          <div class="mb-12 movieSession">
            <a href="./src/pages/selectedFilm.php?id=<?=$mas['idFilm']?>&price=<?=$mas['priceTicket']?>">
              <img src="./src/<?=$mas['posterFilm']?>" alt="Poster" class="poster cursor-pointer"/>
            </a>
            <div class="grid">
              <div class="flex gap-10">
                <p class="text-2xl"><?=$mas['countryFilm']?></p>
                <p class="text-2xl"><?=$mas['genreFilm']?></p>
                <p class="text-2xl"><?=$mas['durationFilm']?></p>
              </div>
              <p class="boldFont text-5xl cursor-pointer" id="nameSelectedFilm">
                <a href="./src/pages/selectedFilm.php?id=<?=$mas['idFilm']?>&price=<?=$mas['priceTicket']?>"><?=$mas['nameFilm']?></a>
              </p>
              <div class="flex gap-20">
                <div class="cursor-pointer session">
                  <p class="boldFont pointer-events-none">10:00</p>
                  <p class="pointer-events-none"><?=$mas['priceTicket']?> ₽</p>
                </div>
                <div class="cursor-pointer session">
                  <p class="boldFont pointer-events-none">12:30</p>
                  <p class="pointer-events-none"><?=$mas['priceTicket']?> ₽</p>
                </div>
                  <div class="cursor-pointer session">
                    <p class="boldFont pointer-events-none">14:25</p>
                    <p class="pointer-events-none"><?=$mas['priceTicket']?> ₽</p>
                </div>
                <div class="cursor-pointer session">
                  <p class="boldFont pointer-events-none">17:45</p>
                  <p class="pointer-events-none"><?=$mas['priceTicket']?> ₽</p>
                </div>
                <div class="cursor-pointer session">
                  <p class="boldFont pointer-events-none">20:00</p>
                  <p class="pointer-events-none"><?=$mas['priceTicket']?> ₽</p>
                </div>
                <div class="cursor-pointer session">
                  <p class="boldFont pointer-events-none">22:15</p>
                  <p class="pointer-events-none"><?=$mas['priceTicket']?> ₽</p>
                </div>
            </div>
          </div>
        </div>
      
        <?}
      ?>
      </div>
    </div>
  </body>
  <script>
      $('.slider').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        centerMode: true,
        nextArrow:
          '<img src="./src/public/arrow-right.png" alt="arrowLeft" class="cursor-pointer arrowSlider" width="32" height="32">',
        prevArrow:
          '<img src="./src/public/arrow-left.png" alt="arrowRight" class="cursor-pointer arrowSlider" width="32" height="32">',
      });    
  </script>
</html>
