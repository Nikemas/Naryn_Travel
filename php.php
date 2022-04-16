<?php
    $login =$_POST['login'];
    $email =$_POST['email'];
    $text =$_POST['text'];
    
    

    $login = htmlspecialchars($login);
    $email = htmlspecialchars($email);
    $text = htmlspecialchars($text);


    $login = urldecode($login);
    $email = urldecode($email);
    $text = urldecode($text);


    $login = trim($login);
    $email = trim($email);
    $text = trim($text);

    if(mail("ardaktmntlove@gmail.com",
        "Новое письмо с сайта",
        "login :".$login."\n".
        "email :".$email."\n".
        "text :".$text."\n".
        "From : ardaktmntlove@gmail.com \r\n"
    )
)
    {
        echo('Письмо получино');
    }
    else {
        echo('Error');
    }
?>