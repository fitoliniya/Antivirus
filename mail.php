<?php
$to = '<enebra.org@gmail.com>, ';
$to .= 'enebra.org@gmail.com';

$subject = 'Закупка Таблетонов';

$name = $_POST['name'];
$phone = $_POST['phone'];
$message = " <p>Заказ Таблетончиков </p> </br> <b>Для: $name </b> </br><i>Телефонный номер: $phone  </i> </br>";

$headers = "Content-type: text/html; charset=utf-8 \r\n";
$headers .= "From: Бабулесы <suport@enebra.org>\r\n";
$headers .= "Reply-To: order@enebra.org\r\n";
echo mail($to, $subject, $message, $headers);
?>
<!doctype html>
<html lang="ru">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta http-equiv="refresh" content="5;URL=./"/>
        <title>Ваше сообщение успешно отправлено</title>
    </head>
    <style type="text/css">
        div {
            display: block;
            font-family: arial, sans-serif;
            font-stretch: semi-condensed;
            font-size: 25px;
            width: 50%;
            border: 11px outset #4CAF50;
            background: #ece8c0;
            padding: 15px;
            border-radius: 15px;
            color: #584e4e;
        }
    
        div#SLG_balloon_obj {
            display: none !important;
        }
    
        h3 {
            font-size: 30px;
        }
    
        body {
            background: radial-gradient(black 15%, transparent 16%) 0 0, radial-gradient(black 15%, transparent 16%) 8px 8px, radial-gradient(rgba(255, 255, 255, .1) 15%, transparent 20%) 0 1px, radial-gradient(rgba(255, 255, 255, .1) 15%, transparent 20%) 8px 9px;
            background-color: #282828;
            background-size: 16px 16px;
            color: #ffffff;
        }
    </style>
    <body>
    <br/>
        <center>
            <div>
                <h3>Ваша заявка успешно отправлена!</h3>
                <Br> Мы свяжемся с Вами в ближайшее время.
                <Br>
                <Br> Через 5 секунд Вы вернетесь
                <Br> на Главную страницу
                <p>
                    <a href="javascript: history.back()">Вернуться назад</a>
                </p>
            </div>
        </center>
    </body>
</html>

    