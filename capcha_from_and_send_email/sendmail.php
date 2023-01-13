<?php
    if($_POST['captcha'] != 76447) {
        header('location: reCaptchAndReturnFrom.php');
        exit;
    }
    // нужно счиать с селетка все, обрабатываем его
    if ($_POST['subject'] == 1) {
        $subject = 'Вопрос по уроку';
    } elseif ($_POST['subject'] == 2) {
        $subject = 'Личный вопрос';
    } elseif ($_POST['subject'] == 3) {
        $subject = 'Благодарность';
    } else {
        $subject = 'Вопрос по уроку';
    }

    $to = "kuleshov-as@mail.ru";
    $from = trim($_POST['email']); // валидация происходит за счет html5 'email'

    $message = htmlspecialchars($_POST['message']);
    $message = urldecode($message);
    $message = trim($message);
    // таким образом мы обезапасили нашу текстарию

    $headers = "From : $from" . "\r\n".
    "Reply-To: $from" . "\r\n".
    "X-Mailer: PHP/". phpversion();

    if (mail($to, $subject, $message)) { // true or false
        echo "Письмо отправлено";
    } else {
        echo "Error";
    }

?>