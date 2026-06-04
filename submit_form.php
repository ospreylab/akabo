<?php
if (!empty($_POST)) {
    $to = "zakaz@akabo.ru";
    $subject = "Новая заявка на сайте";
    $message = "<b>Клиент:</b> {$_POST['customer']}<br><b>Телефон:</b> <a href=\"tel:{$_POST['phone']}\">{$_POST['phone']}";

    if (isset($_POST['email'])) $message .= "<br><b>Email:</b> {$_POST['email']}";
    if (isset($_POST['task'])) $message .= "<br><b>Задача:</b> {$_POST['task']}";

    if (mail($to, $subject, $message)) {
        print_r($_POST);
        echo 'Письмо успешно отправлено!';
    } else {
        echo 'Ошибка при отправке письма.';
    }
}