<?php
  // Получаем данные из POST запроса
  $name = $_POST['name'];
  $phone = $_POST['phone'];
  $checkboxes = explode(',', $_POST['checkboxes']);
  $textarea = $_POST['textarea'];
  
  // Формируем сообщение для отправки на почту
  $message = "Имя: " . $name . "\n";
  $message .= "Телефон: " . $phone . "\n";
  $message .= "Выбранные чекбоксы: " . implode(", ", $checkboxes) . "\n";
  $message .= "Комментарий: " . $textarea;
  
  // Отправляем сообщение на почту
  $to = "slastuhin123@gmail.com";
  $subject = "Новая заявка с сайта";
  $headers = "From: webmaster@example.com";
  
  // Отправляем письмо
  $success = mail($to, $subject, $message, $headers);
  
  // Возвращаем ответ клиенту
  if ($success) {
    echo "Сообщение успешно отправлено";
  } else {
    echo "Ошибка при отправке сообщения";
  }
?>