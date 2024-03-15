<?php
    require_once('./connection.php');

    $row = $_POST['row'];
    $seat = $_POST['seat'];
    $id = $_POST['id'];
    $time = $_POST['time'];

    $sql_orderTicket = "INSERT INTO `tickets` (`idClient`, `idRental`, `rowSeat`, `seat`, `timeSession`) VALUES (?, ?, ?, ?, ?)";
    $data_orderTicket = $pdo->prepare($sql_orderTicket);
    $data_orderTicket->execute(array(1, $id, $row, $seat, $time));
    $line_orderTicket = $data_orderTicket->fetch();


    echo 'Место забронировано';
?>