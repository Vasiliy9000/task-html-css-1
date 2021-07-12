<?php
if (isset($_POST['tel']) && isset($_POST['email']) && isset($_POST['text']) && isset($_POST['product'])){
    // Переменные с формы
        $tel = $_POST['tel'];
        $email = $_POST['email'];
        $text = $_POST['text'];
        $product = $_POST['product'];
        
        // защищаем от экранирования 
        $tel = htmlspecialchars($tel);
        $email = htmlspecialchars($email);
        $text = htmlspecialchars($text);
        $product = htmlspecialchars($product);
        
        // декодируем url
        $tel = urldecode($tel);
        $email = urldecode($email);
        $text = urldecode($text);
        $product = urldecode($product);  
        
        // удаляем пробелы 
        $tel = trim($tel);
        $email = trim($email);
        $text = trim($text);
        $product = trim($product);
        
        
        if (mail("$email", "Заявка с сайта", "Телефон:".$tel.". E-mail: ".$email ,"From: example2@mail.ru \r\n"))
             {     echo "succes";
            } else {
                echo "error";
            }
}
            

        
        
   
