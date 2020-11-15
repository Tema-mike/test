<?php
require_once ('Reverse.php');

function revTest(){
    $textArr = ['Привет, меня зовут Артём!',
                'Hello, my name is Artem!',
                'Давайте смешаем разные languages, for Checking корректности обработки кодировки!'];
    for ($i = 0; $i < count($textArr); $i++){
        $text = $textArr[$i];
        echo $text . '<br>';
        echo reversePhrase($text) . '<br>' . '<br>';
    }
}
revTest();