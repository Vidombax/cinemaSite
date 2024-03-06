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
</head>
<body>
<header>
  <div class="flex justify-center items-center gap-60 relative mb-16">
    <a href="../../">
      <img src="../public/logo.png" class="w-32 h-30" alt="Logo" />
    </a>
    <p class="boldFont menu-p cursor-pointer transition" id="sheduleHeaderBtn">Расписание</p>
    <p class="boldFont menu-p cursor-pointer transition" id="filmsHeaderBtn">Фильмы</p>
    <p class="boldFont menu-p cursor-pointer transition" id="promocodeHeaderBtn">Промокоды</p>
  </div>
</header>

    <main>
        <div>
            <div class="flex justify-center items-center mb-16 relative">
                <img src="../public/testPoster.jpg" alt="Poster" class="posterImg">
                <div class="ml-16">
                    <div class="flex items-center gap-14 mb-4 text-xl">
                        <p>Франция</p>
                        <p>Комедия</p>
                        <p>1 час 30 минут</p>
                    </div>
                    <p class="boldFont text-5xl mb-6" id="nameSelectedFilm">Такси</p>
                    <p class="textAboutFilm text-xl">Таксист Никита помешан на быстрой езде. Как ураган проносится он по извилистым улицам Нижнего Тагила на мощном ревущем «ВАЗ», пугая прохожих и приводя в ужас пассажиров. Начинающий следователь Макар вынуждает его помогать в поимке банды грабителей люков, каждый раз ускользающих от полиции на неуловимых «Тойотах».</p>
                    <div class="mb-16">
                        <p class="mb-6 boldFont text-2xl">Сеансы на:
                        <select class="selectDay">
                            <option value="сегодня">сегодня</option>
                            <option value="завтра">завтра</option>
                            <option value="послезавтра">послезавтра</option>
                            <option value="4 марта">4 марта</option>
                        </select>
                    </p>
                        <div class="flex gap-20 items-center justify-center">
                            <div class="cursor-pointer session selectSession">
                                <p class="boldFont">10:00</p>
                                <p>228 ₽</p>
                            </div>
                            <div class="cursor-pointer session">
                                <p class="boldFont">10:00</p>
                                <p>228 ₽</p>
                            </div>
                            <div class="cursor-pointer session">
                                <p class="boldFont">10:00</p>
                                <p>228 ₽</p>
                            </div>
                            <div class="cursor-pointer session">
                                <p class="boldFont">10:00</p>
                                <p>228 ₽</p>
                            </div>
                            <div class="cursor-pointer session">
                                <p class="boldFont">10:00</p>
                                <p>228 ₽</p>
                            </div>
                        </div>
                    </div>
                    <div class="trailerDiv flex items-center justify-center">
                        <video src="../public/trailer-videos/test.mp4" type="video/mp4" controls="controls" width="700" height="700"></video>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer class="flex gap-60 justify-center h-auto items-center p-6">
        <p class="cursor-pointer footer-p boldFont text-2xl transition">О нас</p>
        <p class="cursor-pointer footer-p boldFont text-2xl transition">Контакты</p>
        <p class="cursor-pointer footer-p boldFont text-2xl transition">Расписание</p>
        <p class="cursor-pointer footer-p boldFont text-2xl transition">Вакансии</p>
        <a href="../../"
            ><img src="../public/logo.png" alt="Logo" class="w-32 h-30"
        /></a>
</footer>
</body>
<script src="../assets/js/jquery-3.7.1.min.js"></script>
<script src="../assets/js/main.js"></script>
</html>