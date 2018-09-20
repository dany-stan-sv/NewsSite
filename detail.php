<?php 
    require_once 'app/database.php';
    
    $news = get_news();
    $i = filter_input(INPUT_GET, "i");
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Новости: Подробно</title>
        <link rel="stylesheet" href="public/style.css">
    </head>
    <body>
        <div id = "page">
            <div id = "head">
                <p class="li"><a href="main.php">Главная</a></p>
                <p class="li"><a href="more.php">Все Новости</a></p>
                <p class="li"><a href="contact.php">Контакты</a></p>
            </div>

            <div id = "window" class="big">
                <p class="title"><?= $news[$i]['title']?></p>
                
            <!-- html съедает перенос строки типа: (\r\n, \n\r, \n и \r) -->
            <!-- функция nl2br перд каждым переносом вставляет тег <br /> -->
                <p class="text"><?= nl2br($news[$i]['text'])?></p>
                
                <p class = "right"><?= "Автор: ".$news[$i]['author']?></p>
                <p class = "right"><?= $news[$i]['date']?></p>
            </div>
            
        </div>
    </body>
</html>