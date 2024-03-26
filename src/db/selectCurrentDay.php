<?php
    require_once('./connection.php');

    $day = $_POST['day'];

    $sql_getFilms = "SELECT films.idFilm, `nameFilm`, `posterFilm`, `priceTicket`, `countryFilm`, `genreFilm`, `durationFilm`, `statusRental`, `endRental` FROM `films` JOIN `rentals` ON films.idFilm = rentals.idFilm WHERE `endRental` >= ? AND `statusRental` = 1";
    $data_getFilms = $pdo -> prepare($sql_getFilms);
    $data_getFilms->execute(array($day));

    $result = $data_getFilms->fetchAll(\PDO::FETCH_ASSOC);

    $jsonGetFilms = json_encode($result);

    header('Content-Type: application/json');
    echo $jsonGetFilms;