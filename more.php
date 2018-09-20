<?php 
    require_once 'app/database.php';
    
    $news = get_news();
    
    // количество записей в одной странице
    $qt = 4;
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Новости: Больше</title>
        <link rel="stylesheet" href="public/style.css">
        
        <script> 
            // чтобы была доступна  из js
            var qt = '<?php echo $qt;?>'; 
        </script>
        <script src="public/script/pagination.js"></script>
        
    </head>
    <body onload="foo('b1');">
        <div id = "page">
            <div id = "head">
                <p class="li"><a href="main.php">Главная</a></p>
                <p class="li"><a href="more.php" class="not">Все Новости</a></p>
                <p class="li"><a href="contact.php">Контакты</a></p>
            </div>
            
            <!-- создаём окна сразу для всех записей -->
            <?php for ($i=0, $j=0, $limit=count($news); $i<$limit; $i++){ 
                if($i%$qt === 0) {$j++;}?>
                <div class="<?='b'.$j?>">
                    <div id = "window" class="little">
                        <a href="detail.php?i=<?=$i?>"><?= $news[$i]['title']?></a>
                        <span><?= "</br>".mb_substr($news[$i]['text'], 0, 236, "UTF-8")."..."?></span> 
                        <p class = "right"><?= $news[$i]['date']?></p>
                    </div>
                </div>
            <?php }?>
        </div>
        
        <!-- количество кнопок зависит от количества записей и $qt -->
        <div id='buttons'>
        <?php for ($i=1, $limit=ceil(count($news)/$qt); $i<=$limit; $i++){ ?>
            <p class="but">
                <input type="button" id="a<?=$i?>" onclick="foo('b<?=$i?>')" value=<?=$i?> />
            </p>
        <?php }?>
        </div>
        
    </body>
</html>
