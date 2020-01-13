<?php

function searchData (&$dataBase, $url_key) { //Функция поиска данных в массиве
    //print_r($dataBase);

    foreach ($dataBase['pages'] as $key => $value) {    //обход массива с информацией о страницах сайта
        if ($value['url_key'] == $url_key) {       // если находит указанный url страницы то возвращает его
            return $value;
        }
    }

    return false;   // если не находит, то возвращает false
}

?>