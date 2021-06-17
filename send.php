<?php 

$name1 = $_POST['artistname'];
$name2 = $_POST ['artistname2'];
$name3 = $_POST ['featartistname'];
$date = $_POST ['date'];
$genre = $_POST ['genre'];
$url1 = $_POST ['url1'];
$url2 = $_POST ['url2'];
$file = $_POST ['file'];
$file2 = $_POST ['file2'];


$name1 = htmlspecialchars($artistname);
$name2 = htmlspecialchars($artistname2);
$name3 = htmlspecialchars($featartistname);
$date = htmlspecialchars($date);
$genre = htmlspecialchars($genre);
$url1 = htmlspecialchars($url1);
$url2 = htmlspecialchars($url2);
$file = htmlspecialchars($file);
$file2 = htmlspecialchars($file2);

$name1 = urldecode($artistname);
$name2 = urldecode($artistname2);
$name3 = urldecode($featartistname);
$date = urldecode($date);
$genre = urldecode($genre);
$url1 = urldecode($url1);
$url2 = urldecode($url2);
$file = urldecode($file);
$file2 = urldecode($file2);


$name1 = trim($artistname);
$name2 = trim($artistname2);
$name3 = trim($featartistname);
$date = trim($date);
$genre = trim($genre);
$url1 = trim($url1);
$url2 = trim($url2);
$file = trim($file);
$file2 = trim($file2);



if (mail("vetoffproduction@gmail.com", "Заявка на дистрибуцию", "Имя главного артиста:".$name1."Другие артисты:".$name2. "При участии (feat):" .$name3. "Дата релиза:" .$date. "Жанр:" .$genre. "Ссылка на iTunes:" .$url1. "Ссылка на Spotify:" .$url2. "Трек:" .$file. "Обложка:" .$file2. "From: example2@mail.ru \r\n"))
 {
    echo "сообщение успешно отправлено";
} else {
    echo "при отправке сообщения возникли ошибки";
}
?>