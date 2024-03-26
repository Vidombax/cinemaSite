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
  <div class="slider mb-16" id="slider">
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
      <div class="calendar">

      </div>
    </div>
    <div class="listOfMovies" id="listOfMovies">
      <?php
        $sql_films = "SELECT films.idFilm, `nameFilm`, `countryFilm`, `genreFilm`, `durationFilm`, `posterFilm`, `priceTicket`, `statusRental` FROM `films` JOIN `rentals` ON films.idFilm = rentals.idFilm WHERE `statusRental` = 1";
        $Data_films = $pdo -> query($sql_films);
        $Line_films = $Data_films -> fetchAll();

        foreach ($Line_films as $mas) {?>
          <div class="mb-12 movieSession">
            <p hidden id="idFilm"><?=$mas['idFilm']?></p>
            <a href="./src/pages/selectedFilm.php?id=<?=$mas['idFilm']?>&price=<?=$mas['priceTicket']?>&status=<?=$mas['statusRental']?>">
              <img src="./src/<?=$mas['posterFilm']?>" alt="Poster" class="poster cursor-pointer"/>
            </a>
            <div class="grid">
              <div class="flex gap-10">
                <p class="text-2xl"><?=$mas['countryFilm']?></p>
                <p class="text-2xl"><?=$mas['genreFilm']?></p>
                <p class="text-2xl"><?=$mas['durationFilm']?></p>
              </div>
              <p class="boldFont text-5xl cursor-pointer" id="nameSelectedFilm">
                <a href="./src/pages/selectedFilm.php?id=<?=$mas['idFilm']?>&price=<?=$mas['priceTicket']?>&status=<?=$mas['statusRental']?>"><?=$mas['nameFilm']?></a>
              </p>
              <div class="flex gap-20 sessions">
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
    $(document).ready(function() {
      $('.slider').slick({
        infinite: true,
        slidesToShow: 3,
        autoplay: true,
        autoplaySpeed: 2000,
        centerMode: true,
        nextArrow:
          '<img src="./src/public/arrow-right.png" alt="arrowLeft" class="cursor-pointer arrowSlider" width="32" height="32">',
        prevArrow:
          '<img src="./src/public/arrow-left.png" alt="arrowRight" class="cursor-pointer arrowSlider" width="32" height="32">',
      });    

      $('.calendar').slick({
        infinite: true,
        slidesToShow: 7,
        slidesToScroll: 7,
        nextArrow:
          '<img src="./src/public/arrow-right.png" alt="arrowLeft" class="cursor-pointer arrowSliderShedule" width="32" height="32">',
        prevArrow:
          '<img src="./src/public/arrow-left.png" alt="arrowRight" class="cursor-pointer arrowSliderShedule" width="32" height="32">',
      });

      function daysInMonth(month, year) {
        return new Date(year, month, 0).getDate();
      }

    
      let currentDate = new Date(),
      currentMonth = currentDate.getMonth() + 1,
      currentYear = currentDate.getFullYear(),
      currentDay = currentDate.getDate();
      

      for (let i = 0; i < 14; i++) {
        let nextDate = new Date(currentYear, currentMonth - 1, currentDay + i);
        let formattedDate = nextDate.toLocaleDateString('ru-RU', { month: 'long', day: 'numeric' });
        if (i == 0) {
          $('.calendar').slick('slickAdd', '<div class="colorWhite calendar-item selectSheduleDay">' + formattedDate + '</div>');
        }
        else {
          $('.calendar').slick('slickAdd', '<div class="calendar-item">' + formattedDate + '</div>');
        }        
      }
    });
  </script>
</html>
