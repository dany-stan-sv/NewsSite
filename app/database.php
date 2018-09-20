<?php

$user = 'root';
$pass= '123';
$name = 'newssite_db';

$link = mysqli_connect('localhost', $user, $pass, $name);

if (mysqli_connect_errno())
{
    echo "Ошибка БД. Error № ".mysqli_connect_errno().":<br>". mysqli_connect_error();
    exit();
}

function get_news ()
{
    global $link;
    // данных мало, так что выгружаем сразу все
    $sql = "SELECT * FROM news_table ORDER BY date DESC";
    $result = mysqli_query($link, $sql);
    $news = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $news;
}

function set_contact ($message, $surname, $name, $email, $phone)
{
    global $link;
    $sql = "INSERT INTO contact_table (message, surname, name, email, phone)"
                . " VALUES ('$message', '$surname', '$name', '$email', '$phone');";
             
    $result = mysqli_query($link, $sql);
    return $result;
}