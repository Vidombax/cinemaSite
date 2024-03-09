<head>
    <link rel="stylesheet" href="src/assets/css/filmsPage.css">
    <?php
        require_once('../db/connection.php');

        $sql_postersNow = "SELECT `posterFilm`, films.idFilm, `priceTicket`, `statusRental` FROM `films` JOIN `rentals` ON films.idFilm = rentals.idFilm WHERE `statusRental` = 1";
        $data_postersNow = $pdo -> query($sql_postersNow);
        $line_postersNow = $data_postersNow -> fetchAll();
    ?>
</head>
<body>
    <div>
        <div class="filmsCategories mb-12 cursor-pointer">
            <p class="boldFont text-3xl cursor-pointer" id="nowBtn">Сейчас в кино</p>
            <p class="boldFont text-3xl" id="soonBtn">Скоро</p>
        </div>
        <div id="listOfFilms">
            <div class="flex items-center justify-center mb-40" id="nowInRentalDiv">
                <div class="listOfFilms">
                    <?php
                        foreach ($line_postersNow as $mas) {?>
                            <a href="./src/pages/selectedFilm.php?id=<?=$mas['idFilm']?>&price=<?=$mas['priceTicket']?>&status=<?=$mas['statusRental']?>"><div class="film-div"><img src="/src/<?=$mas['posterFilm']?>" alt="Poster"></div></a>
                        <?}
                    ?>                         
                </div>
            </div>
        </div>
    </div>
</body>
<script src="./src/assets/js/films.js"></script>
</html>