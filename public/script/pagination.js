// моя экспериментальная функция - динамическая пагинация на чистом js
// переход без обновления страницы
function foo(class_name) {

    for (var a = 1; a <= qt; a++){
        var act1 = "none", act2 = "white";
        if (class_name === ('b' + a)) { act1 = "block"; act2 = "#8bcdef";}

        // показываем блоки выбраной страницы, скрываем остальные
        var div = document.getElementsByClassName('b' + a);
        for(var i = 0; i < div.length; i++)
            {div[i].style.display = act1;}

        // выделяем кнопку связанную с текущей страницей
        document.getElementById('a' + a).style.background = act2;
    }
}