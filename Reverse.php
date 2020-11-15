<?php

function reversePhrase ($text){
    $revText ='';
    $revWord ='';

    // Проходим по каждому символу
    for ($i = 0; $i < mb_strlen($text); $i++){
        $ch = mb_substr($text, $i, 1);

        // Если символ является знаком пунктуации и пробелом,
        // то инвертируем строку, которая находилось до символа.
        if (preg_match("/[.,;:!?)(\s]/", $ch)){
            $uch = mb_substr($revWord, -1, 1);

            // Проверка регистра, если есть заглавные - меняем регистр.
            if (preg_match("/[A-ZА-Я]/u", $uch)){

                //Меняем регистр у заглавной буквы в слове
                $revWord = mb_substr($revWord, 0, -1);
                $uch = mb_strtolower($uch);
                $revWord .= $uch;

                //Меняем регистр у первой буквы в инвертированном слове на заглавную
                $first = mb_substr($revWord, 0, 1);
                $firstUP = mb_strtoupper($first);
                $revWord = mb_substr($revWord, 1);
                $revWord = $firstUP . $revWord;
            }
            $revText .= $revWord . $ch ;
            $revWord ='';
        } else {
            $revWord = $ch . $revWord;
        }
    }

    $revText = $revText . $revWord;
    return $revText;
}
?>