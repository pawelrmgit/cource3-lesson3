<head>
    <title><?php if (!empty($data['title'])) {
        if ($data['url_key'] == '/bytovka.php') {     //если это страничка конкретного товара каталога, то в тайтл выведем название товара
            $data['title'] = $database['bytovka-list'][$bytovka]['title'] . ' - Аренда бытовок "Бытовки-сервис.ru"';
            echo $data['title'];    // Если просто страничка, берём её название из базы
        }
        else {echo $data['title'];}
        } else {echo 'заголовок какой то';}     // Если в базе не найден тайтл, выводим 'заголовок какой то'
        ?></title>
    <meta name="viewport" content="width=device-width">
    <meta charset="utf-8">
    <script src="https://api-maps.yandex.ru/2.1/?apikey=f461f187-b614-45c4-988e-6b214fceb781&amp;lang=ru_RU" type="text/javascript"></script></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css">
    <link rel="stylesheet" href="/assets/css/screen.css">
</head>