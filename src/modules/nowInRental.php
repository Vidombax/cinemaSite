<?php
    require_once('../db/connection.php');

    $sql_postersNow = "SELECT `posterFilm`, films.idFilm FROM `films` JOIN `rentals` ON films.idFilm = rentals.idFilm WHERE `statusRental` = 1";
    $data_postersNow = $pdo -> query($sql_postersNow);
    $line_postersNow = $data_postersNow -> fetchAll();
?>

 <div class="flex items-center justify-center mb-40" id="nowInRentalDiv">
    <div class="listOfFilms">
        <?php
            foreach ($line_postersNow as $mas) {?>
                <a href="./src/pages/selectedFilm.php?id=<?=$mas['idFilm']?>"><div class="film-div"><img src="/src/<?=$mas['posterFilm']?>" alt="Poster"></div></a>
            <?}
        ?>            
    </div>
</div>