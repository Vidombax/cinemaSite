<head>
    <link rel="stylesheet" href="src/assets/css/posters.css" />
    <link rel="stylesheet" href="src/assets/css/sheduleSession.css" />
    <link rel="stylesheet" href="src/assets/css/listOfMovies.css" />
  </head>
  <body class="shedulePage">
    <div class="flex justify-center mb-16">
      <div class="flex justify-center gap-32">
        <div>
          <img src="./src/public/silde-1.png" alt="Poster" class="posterImg" />
        </div>
        <div>
          <img src="./src/public/silde-2.png" alt="Poster" class="posterImg" />
        </div>
        <div>
          <img src="./src/public/silde-3.png" alt="Poster" class="posterImg" />
        </div>
      </div>
      <div class="flex absolute left-50 sliderTumbler">
        <button
          class="opacity-90 bg-white p-4 w-16 h-16 rounded-full hover:opacity-100 transition text-2xl"
        >
          <
        </button>
        <button
          class="opacity-90 bg-white p-4 w-16 h-16 rounded-full hover:opacity-100 transition text-2xl"
        >
          >
        </button>
      </div>
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
          <p class="boldFont">Сегодня</p>
          <p>1 марта</p>
        </div>
        <div class="cursor-pointer sheduleDay">
          <p class="boldFont">Завтра</p>
          <p>2 марта</p>
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
    <div class="listOfMovies flex items-center justify-center" id="listOfMovies">
      <div class="mb-12 movieSession">
        <a href="./src/pages/selectedFilm.php">
          <img src="./src/public/poster.png" alt="Poster" class="poster cursor-pointer"/>
        </a>
        <div class="grid">
          <div class="flex gap-10">
            <p class="text-2xl">Страна</p>
            <p class="text-2xl">Жанр</p>
            <p class="text-2xl">Продолжительность</p>
          </div>
          <p class="boldFont text-5xl cursor-pointer">
            <a href="#">Название</a>
          </p>
          <div class="flex gap-20">
            <div class="cursor-pointer session selectSession">
              <p class="boldFont pointer-events-none">10:00</p>
              <p class="pointer-events-none">228 ₽</p>
            </div>
            <div class="cursor-pointer session">
              <p class="boldFont pointer-events-none">10:00</p>
              <p class="pointer-events-none">228 ₽</p>
            </div>
            <div class="cursor-pointer session">
              <p class="boldFont pointer-events-none">10:00</p>
              <p class="pointer-events-none">228 ₽</p>
            </div>
            <div class="cursor-pointer session">
              <p class="boldFont pointer-events-none">10:00</p>
              <p class="pointer-events-none">228 ₽</p>
            </div>
            <div class="cursor-pointer session">
              <p class="boldFont pointer-events-none">10:00</p>
              <p class="pointer-events-none">228 ₽</p>
            </div>
            <div class="cursor-pointer session">
              <p class="boldFont pointer-events-none">10:00</p>
              <p class="pointer-events-none">228 ₽</p>
            </div>
            </div>
          </div>
        </div>
      </div>
      
    </div>
  </body>
</html>
