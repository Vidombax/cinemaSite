<?php    
    require_once('./connection.php');
    require_once __DIR__ . '../../../vendor/autoload.php';
    $settings = require_once __DIR__ . '/settings.php';
    require_once __DIR__ . '/emailSender.php';

    $row = $_POST['row'];
    $seat = $_POST['seat'];
    $id = $_POST['id'];
    $time = $_POST['time'];
    $date = $_POST['date'];   
    $nameFilm = $_POST['nameFilm'];
    $price = $_POST['price'];
    $mail = $_POST['mail'];

    $sql_orderTicket = "INSERT INTO `tickets` (`idClient`, `idRental`, `rowSeat`, `seat`, `timeSession`) VALUES (?, ?, ?, ?, ?)";
    $data_orderTicket = $pdo->prepare($sql_orderTicket);
    $data_orderTicket->execute(array(1, $id, $row, $seat, $time));
    $line_orderTicket = $data_orderTicket->fetch();

    $body = '
    <table cellpadding="0" cellspacing="0" border="0" width="100%" style="font-size: 1px; line-height: normal;">
        <tr em="group">
            <td align="center" bgcolor="#F5F5F7" style="font-family: Impact, Charcoal, sans-serif; padding-top: 20px; padding-bottom: 20px; background-color: #f5f5f7;" class="em-mob-padding_top-0 em-mob-padding_right-0 em-mob-padding_bottom-0 em-mob-padding_left-0">
                <table cellpadding="0" cellspacing="0" width="100%" border="0" style="max-width: 660px; min-width: 660px; width: 660px;" class="em-narrow-table"><tr em="block" class="em-structure">
                    <td align="center" style="padding: 30px 40px 15px;" class="em-mob-padding_top-20 em-mob-padding_right-20 em-mob-padding_bottom-15 em-mob-padding_left-20">
                        <table border="0" cellspacing="0" cellpadding="0" class="em-mob-width-100perc">
                            <tr>
                                <td width="580" valign="middle" class="em-mob-wrap em-mob-width-100perc">
                                    <table cellpadding="0" cellspacing="0" border="0" width="100%" em="atom">
                                        <tr>
                                            <td style="padding-right: 0px; padding-bottom: 20px; padding-left: 0px;" class="em-mob-padding_bottom-15">
                                                <div style="font-family: Verdana, Geneva, sans-serif; font-size: 30px; line-height: 36px; color: #333333;" align="center" class="em-mob-font_size-28px"><b>Билет на фильм '.$nameFilm.'</b></div>
                                            </td>
                                        </tr>
                                    </table>
                                    <table cellpadding="0" cellspacing="0" border="0" width="100%" em="atom" class="em-mob-width-100perc">
                                        <tr>
                                            <td style="padding-bottom: 20px;" class="em-mob-padding_bottom-15">
                                                <div style="font-family: Verdana, Geneva, sans-serif; font-size: 16px; line-height: 23px; color: #000000;" align="center" class="em-mob-font_size-14px">
                                                    Ряд: '.$row.'<br>
                                                    <br>Место: '.$seat.'<br>
                                                    <br>Время: '.$time.'<br>
                                                    <br>Дата: '.$date.'<br>
                                                    <br>Цена: '.$price.' ₽<br>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                </table>
            </td>
        </tr>
    </table>';


    var_dump(send_mail($settings['mail_settings_prod'], [$mail], 'Электронный билет', $body));   
?>