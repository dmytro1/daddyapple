<?php

//$name = stripslashes(htmlspecialchars($_POST['name']));
$phone  = stripslashes( htmlspecialchars( $_POST['phone'] ) );
$color  = stripslashes( htmlspecialchars( $_POST['color'] ) );
$memory = stripslashes( htmlspecialchars( $_POST['memory'] ) );
$model  = stripslashes( htmlspecialchars( $_POST['model'] ) );

$url      = isset( $_SERVER['HTTPS'] ) ? 'https://' : 'http://';
$url      .= $_SERVER['SERVER_NAME'];
$url      .= $_SERVER['REQUEST_URI'];
$main_url = dirname( $url );

$user_ip = $_SERVER['REMOTE_ADDR'];

switch ( $model ) {
	case 'iPhone 5s':
		$price  = 4000;
		$amount = 3;
		break;
	case 'iPhone 6':
		$price  = 7000;
		$amount = 4;
		break;
	case 'iPhone 6 plus':
		$price  = 8000;
		$amount = 5;
		break;
	case 'iPhone 6s':
		$price  = 10000;
		$amount = 6;
		break;
	case 'iPhone 6s plus':
		$price  = 12000;
		$amount = 7;
		break;
	case 'iPhone 7':
		$price  = 15000;
		$amount = 8;
		break;
	case 'iPhone 7 plus':
		$price  = 20000;
		$amount = 9;
		break;
}

date_default_timezone_set( 'Europe/Kiev' );
$curr_date = date( "d-m-Y" );
$curr_time = date( "H:i:s" );

$subject = 'Daddy Apple';
$to      = "";

$message = '<html><body>';
$message .= '<table border="1" cellspacing="0" cellpadding="5">';
$message .= "<tr><td>IP чувака</td><td>" . $user_ip . "</td></tr>";
$message .= "<tr><td>Дата</td><td>" . $curr_date . " " . $curr_time . "</td></tr>";
//$message .= "<tr><td>Ім'я</td><td>" . $name . "</td></tr>";
$message .= "<tr><td>Модель</td><td>" . $model . "</td></tr>";
$message .= "<tr><td>Колір</td><td>" . $color . "</td></tr>";
$message .= "<tr><td>Пам'ять</td><td>" . $memory . "</td></tr>";
$message .= "<tr><td>Телефон</td><td>" . $phone . "</td></tr>";
$message .= '</table>';
$message .= '</body></html>';

$headers = "From: daddy_apple\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

mail( $to, $subject, $message, $headers );

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Информация</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="well text-center">
		<?php if ( @$phone ) { ?>

            <h2>Спасибо за заявку!</h2>
            <span class="glyphicon glyphicon-ok text-success"></span><br>

            <table class="table">
                <tbody>
                <tr>
                    <td>IP чувака:</td>
                    <td><?= $user_ip ?></td>
                </tr>
                <tr>
                    <td>Дата:</td>
                    <td><?= $curr_date . ' ' . $curr_time ?></td>
                </tr>
                <tr>
                    <td>Модель:</td>
                    <td><?= $model ?></td>
                </tr>
                <tr>
                    <td>Цвет:</td>
                    <td><?= $_POST['color'] ?></td>
                </tr>
                <tr>
                    <td>Память:</td>
                    <td><?= $_POST['memory'] ?></td>
                </tr>
                <tr>
                    <td>Телефон:</td>
                    <td><?= $phone ?></td>
                </tr>
                </tbody>
            </table>

            <p>Не забудьте посетить наш Instagram аккаунт:</p>
            <a class="insta" target="_blank"
               href="https://www.instagram.com/_daddy_apple_">instagram.com/daddy_apple</a><br><br>
            <a href="https://www.instagram.com/_daddy_apple_" target="_blank"><img class="insta-img" src="img/logo.png"
                                                                                   width="100"></a>

		<?php } else { ?>

            <p>Средняя рыночная цена на б/у <br><strong><?= $model ?>, <?= $memory ?>, <?= $color ?></strong><br>
                составляет <strong><?= $price ?> грн</strong></p>
            <p>Данная модель сейчас <br>есть в наличии: <strong><?= $amount ?> шт.</strong></p>
            <p>Узнать актуальную цену и получить видео-обзор подходящего iPhone:</p>

            <div class="btn-group">
                <a href="" class="btn btn-default"><i class="fa fa-envelope" aria-hidden="true"></i> email</a>
                <a href="" class="btn btn-default"><img src="img/viber.png" width="15"> viber</a>
                <a href="" class="btn btn-default"><i class="fa fa-telegram" aria-hidden="true"></i> telegram</a>
            </div>
            <br><br>
            <p>Или мы можем сообщить Вам лично:</p>
            <form id="telForm" action="" method="post">
                <input style="display: none" name="memory" value="<?= $memory ?>">
                <input style="display: none" name="color" value="<?= $color ?>">
                <input style="display: none" name="model" value="<?= $model ?>">
                <input type="tel" class="form-control" id="phone2" name="phone" placeholder="Ваш телефон" required>
                <button type="submit" class="btn btn-custom">позвонить</button>
            </form>
            <br>
            <a href="<?= $main_url ?>">вернутся к выбору параметров</a>


		<?php } ?>


        <!--
		<p>Не забудьте посетить наш Instagram аккаунт:</p>
		<a class="insta" target="_blank"
		   href="https://www.instagram.com/_daddy_apple_">instagram.com/daddy_apple</a><br><br>
		<a href="https://www.instagram.com/_daddy_apple_" target="_blank"><img class="insta-img" src="img/logo.png" width="100"></a>
	-->
    </div>


</div>

<script src="js/jquery.js"></script>
<script src="js/main.js"></script>
<script src="js/jquery.maskedinput.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>