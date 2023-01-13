<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name ="viewport" content="width=device-width,
     initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title><?="New Page"; ?></title>
  </head>

  <body>
    <form action="sendmail.php" method="POST">
        <select name="subject">
            <option disabled selected> Тема письма</option>
            <option value="1">Вопрос по уроку</option>
            <option value="2">Личный вопрос</option>
            <option value="3">Благодарсность</option>
        </select>
        <input type="email" name="email" placeholder="Введите
        ваш email" maxlength="50" required>
        <textarea name="message" placeholder="Введите сообщение"
        maxlength="150" required></textarea>
        <img src ="kapcha.jpg">
        <input type="number" name="captcha" placeholder="Введите
         ответ" maxlength="3" required>
         <input type="submit" value="Отправить письмо">
    </form>
  </body>
</html>