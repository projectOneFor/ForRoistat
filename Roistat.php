<?php


class Exchanger {

    static function revertPunctuationMarks(string $str)
    {
        //если введена не пустая строка
        if ($str != "") {
            //знаки пунктуации
            $punkt = "@!#$%^&*?.,~/;:";

            //получаем список знаков с их позициями в ключах массива
            for ($i = 0; $i < strlen($str); $i++) {
                if (($pos = strpos($punkt, $str[$i])) != Null)
                    $buff[$i] = $str[$i];
            }

            //если в строке найдены знаки пунктуации
            if (is_array($buff)) {
                //создаем вспомогательный массив со знаками в обратном порядке
                $buffRev = array_reverse($buff);
                $i = 0;

                //меняем знаки в строке на знаки в обратном порядке
                foreach ($buff as $pos => $b) {
                    $str[$pos] = $buffRev[$i];
                    $i++;
                }

                return $str;

            }else return $str;

        } else return "";
    }
}

$result = Exchanger::revertPunctuationMarks("Привет! Как твои дела?");
echo $result; // Привет? Как твои дела!
