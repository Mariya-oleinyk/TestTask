<?php

 // $to = "mariya.kapran@gmail.com"; // емайл получателя данных из формы 
 $tema = "Форма обратной связи на PHP"; // тема полученного емайла 
 $message = "Выбранное время: ".$_POST['date']."<br>";//присвоить переменной значение, полученное из формы name=name
 $message = "Маршрут:".$_POST['route1']."<br>"; //полученное из формы name=email
 $message = "Стоимость, грн: ".$_POST['cost']."<br>"; //полученное из формы name=phone
 $message = "Количество мест: ".$_POST['place']."<br>"; //полученное из формы name=message
 $message = "Комментарий: ".$_POST['text']."<br>"; //полученное из формы name=message
 // $headers  = 'MIME-Version: 1.0' . "\r\n"; // заголовок соответствует формату плюс символ перевода строки
 // $headers = 'Content-type: text/html; charset=utf-8' . "\r\n"; // указывает на тип посылаемого контента
 // mail($to, $tema, $message, $headers); //отправляет получателю на емайл значения переменных

   
?>  