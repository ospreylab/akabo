<?php
if (!empty($_POST)) {
    $to = "zakaz@akabo.ru";
    $subject = "Новая заявка на сайте";
    $message = "Клиент: {$_POST['customer']}\nТелефон: {$_POST['phone']}";

    if (isset($_POST['email'])) $message .= "\nEmail: {$_POST['email']}";
    if (isset($_POST['task'])) $message .= "\nЗадача: {$_POST['task']}";

    if (mail($to, $subject, $message)) {
        echo 'Письмо успешно отправлено!';
    } else {
        echo 'Ошибка при отправке письма.';
    }
}