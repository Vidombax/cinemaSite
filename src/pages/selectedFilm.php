<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HugeVision | Название фильма</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.2/tailwind.min.css" rel="stylesheet"/>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="../assets/css/selectedFilm.css">
    <link rel="stylesheet" href="../assets/css/header.css">
    <link rel="stylesheet" href="../assets/css/footer.css">
    <link rel="stylesheet" href="../assets/css/listOfMovies.css">
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
                <img src="../public/poster.png" alt="Poster" class="posterImg">
                <div class="ml-16">
                    <div class="flex items-center gap-14 mb-4 text-xl">
                        <p>Страна</p>
                        <p>Жанр</p>
                        <p>Продолжительность</p>
                    </div>
                    <p class="boldFont text-5xl mb-6">Название</p>
                    <p class="textAboutFilm text-xl">Сложно сказать, почему явные признаки победы институционализации призваны к ответу. Мы вынуждены отталкиваться от того, что разбавленное изрядной долей эмпатии, рациональное мышление позволяет оценить значение модели развития. Безусловно, граница обучения кадров представляет собой интересный эксперимент проверки экспериментов, поражающих по своей масштабности и грандиозности.</p>
                    <div class="mb-16">
                        <p class="mb-6 boldFont text-2xl">Сеансы на:
                        <select class="selectDay">
                            <option value="сегодня">сегодня</option>
                            <option value="завтра">завтра</option>
                            <option value="послезавтра">послезавтра</option>
                            <option value="4 марта">4 марта</option>
                        </select>
                    </p>
                        <div class="flex gap-20 ">
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
                    <div>
                        <img src="../public/trailer.png" alt="Trailer" class="cursor-pointer">
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
<script src="../assets/js/main.js"></script>
</html>