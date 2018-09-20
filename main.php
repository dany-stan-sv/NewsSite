<?php 
    require_once 'app/database.php';
    $news = get_news();
    $limit = 5;
    
    // если записей в бд меньше 5ти
    if (count($news) < $limit) { $limit = count($news);}
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Новости: Главная</title>
        <link rel="stylesheet" href="public/style.css">
    </head>
    
    <body>
        <div id = "page">
            
            <div id = "head">
                <p class="li"><a href="main.php" class="not">Главная</a></p>
                <p class="li"><a href="more.php">Все Новости</a></p>
                <p class="li"><a href="contact.php">Контакты</a></p>
            </div>
            
            <p class="left">Сводка последних новостей: </p>
            
            <?php for ($i=0; $i<$limit; $i++){ ?>
                    <div id = "window" class="little">
                        <a href="detail.php?i=<?=$i?>"><?= $news[$i]['title']?></a>
                        <span><?= "</br>".mb_substr($news[$i]['text'], 0, 236, "UTF-8")."..."?></span> 
                        <p class = "right"><?= $news[$i]['date']?></p>
                    </div>
            <?php }?>
            
        </div>
    </body>
</html>
