<?php
    require_once('./connection.php');

    $id = $_POST['id'];
    $time = $_POST['time'];

    $sql_getRentSeat = "SELECT * FROM `tickets` WHERE `idRental` = ? AND `timeSession` = ?";
    $data_getRentSeat = $pdo -> prepare($sql_getRentSeat);
    $data_getRentSeat->execute(array($id, $time));

    $result = $data_getRentSeat->fetchAll(\PDO::FETCH_ASSOC);

    $jsonGetRentSeat = json_encode($result);

    header('Content-Type: application/json');
    echo $jsonGetRentSeat;
?>