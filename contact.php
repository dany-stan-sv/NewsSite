<?php 
    require_once 'app/database.php';
    
    if (filter_has_var (INPUT_POST, "Surname")) {
        
        $result = set_contact(filter_input(INPUT_POST, "Message"), 
                            filter_input(INPUT_POST, "Surname"), filter_input(INPUT_POST, "Name"), 
                            filter_input(INPUT_POST, "E-mail"), filter_input(INPUT_POST, "Phone"));

        if ($result) {
            header("Location: main.php"); exit;
        } 
        else {echo "Непредвиденная ошибка";}
    }
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Новости: Отзыв</title>
        <link rel="stylesheet" href="public/style.css">
    </head>
    <body>
        <div id = "page">
            <div id = "head">
                <p class="li"><a href="main.php">Главная</a></p>
                <p class="li"><a href="more.php">Все Новости</a></p>
                <p class="li"><a href="contact.php" class="not">Контакты</a></p>
            </div>
            
            <p class="left">Оставьте свои данные и наш менджер свяжется с вами: </p>
            
            <form action="#" method="post">
                <textarea class="textarea" name="Message" rows="3" placeholder="Приветственное сообщение"></textarea>
                <p><input class="input" name="Surname" required placeholder="Фамилия"></p>
                <p><input class="input" name="Name" required placeholder="Имя"></p>
                <p><input class="input" type=email name="E-mail" required placeholder="E-mail"></p>
                <p><input class="input" type=tel name="Phone" required placeholder="10 цифр моб. номера" pattern="[0-9]{10}"></p>
                <p class="center"><input type="image" src="public/images/button_send.png" alt="Отправить"></p>
            </form>
            
            <p class = "right">Автор сайта: danila-svd@mail.ru</p>
            
        </div>
        
    </body>
</html>