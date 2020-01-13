<?php

//print_t($_SERVER);
if ($_SERVER['SCRIPT_NAME'] == '/index.php') {      //если имя скрипта /index.php то вызовем функцию с соответствующим параметром
    printPage('/index.php', $database);         // вызов функции
} elseif ($_SERVER['SCRIPT_NAME'] == '/bytovka.php') {      //если имя скрипта /bytovka.php то вызовем функцию с соответствующим параметром
    printPage('/bytovka.php', $database);         // вызов функции
} elseif ($_SERVER['SCRIPT_NAME'] == '/catalog.php') {      //если имя скрипта /catalog.php то вызовем функцию с соответствующим параметром
    printPage('/catalog.php', $database);         // вызов функции
} elseif ($_SERVER['SCRIPT_NAME'] == '/price.php') {      //если имя скрипта /price.php то вызовем функцию с соответствующим параметром
    printPage('/price.php', $database);         // вызов функции
} elseif ($_SERVER['SCRIPT_NAME'] == '/contacts.php') {      //если имя скрипта /contacts.php то вызовем функцию с соответствующим параметром
    printPage('/contacts.php', $database);         // вызов функции
} elseif ($_SERVER['SCRIPT_NAME'] == '/delivery.php') {      //если имя скрипта /delivery.php то вызовем функцию с соответствующим параметром
    printPage('/delivery.php', $database);         // вызов функции
} elseif ($_SERVER['SCRIPT_NAME'] == '/photogallery.php') {      //если имя скрипта /photogallery.php то вызовем функцию с соответствующим параметром
    printPage('/photogallery.php', $database);         // вызов функции
} elseif ($_SERVER['SCRIPT_NAME'] == '/rent.php') {      //если имя скрипта /rent.php то вызовем функцию с соответствующим параметром
    printPage('/rent.php', $database);         // вызов функции
}

function printPage($url_key, &$database) {      // Объявление функции printPage
    $data = searchData($database, $url_key);    // поиск в базе нужного урла
    if (!empty($data) && file_exists(PATH_TPL . $data['tpl'])) {     // если переменная не пустая (вернулся массив с информацией о странице) и такой файл с шаблоном существует то подключим его
        include_once(PATH_TPL . $data['tpl']);
    } else {
        die('в базе нет указанной страницы'); // если не существует - остановим скрипт и выведем сообщение об этом
    }
}

?>