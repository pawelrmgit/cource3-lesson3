<?php

$database = array(  // создаём массив database
    'pages' => array (  // добавим внутрь новый массив с ключём pages, содержит информацию о страницах
        array (     // добавим внутрь новый массив с параметрами страниц
            'url_key' => '/index.php',  // добавим элемент с ключём url_key в котором будем хранить url до нужной страницы
            'tpl' => 'main.php',        // добавим элемент с ключём tpl в котором будем хранить нужный tpl
            'title' => 'Аренда бытовок "Бытовки-сервис.ru". Главная',    // добавим элемент с ключём title в котором будем хранить title нужной страницы     
            'text' => 'тут может быть какой то текст для размещения на главной странице',    // добавим элемент с ключём url_key в котором будем хранить некий текст для размещения на нужной странице
            'name' => 'Главная'  // Имя страница (для хлебных крошек например)
        ),
        array (     // добавим внутрь новый массив с параметрами страниц
            'url_key' => '/contacts.php',  // добавим элемент с ключём url_key в котором будем хранить url до нужной страницы
            'tpl' => 'templ-contacts.php',        // добавим элемент с ключём tpl в котором будем хранить нужный tpl
            'title' => 'Контакты - Аренда бытовок "Бытовки-сервис.ru"',    // добавим элемент с ключём title в котором будем хранить title нужной страницы  
            'text' => '',    // добавим элемент с ключём url_key в котором будем хранить некий текст для размещения на нужной странице
            'name' => 'Контакты'  // Имя страница (для хлебных крошек например)
        ),
        array (     // добавим внутрь новый массив с параметрами страниц
            'url_key' => '/catalog.php',  // добавим элемент с ключём url_key в котором будем хранить url до нужной страницы
            'tpl' => 'templ-catalog.php',        // добавим элемент с ключём tpl в котором будем хранить нужный tpl
            'title' => 'Каталог - Аренда бытовок "Бытовки-сервис.ru"',    // добавим элемент с ключём title в котором будем хранить title нужной страницы  
            'text' => '',    // добавим элемент с ключём url_key в котором будем хранить некий текст для размещения на нужной странице
            'name' => 'Каталог'  // Имя страница (для хлебных крошек например)
        ),
        array (     // добавим внутрь новый массив с параметрами страниц
            'url_key' => '/bytovka.php',  // добавим элемент с ключём url_key в котором будем хранить url до нужной страницы
            'tpl' => 'templ-bytovka.php',        // добавим элемент с ключём tpl в котором будем хранить нужный tpl
            'title' => 'Какая-то бытовка',    // добавим элемент с ключём title в котором будем хранить title нужной страницы  
            'text' => '',    // добавим элемент с ключём url_key в котором будем хранить некий текст для размещения на нужной странице
            'name' => ''  // Имя страница (для хлебных крошек например)
        ),
        array ( 
            'url_key' => '/price.php', 
            'tpl' => 'templ-price.php',  
            'title' => 'Цена - Аренда бытовок "Бытовки-сервис.ru"', 
            'text' => '',
            'name' => 'Цены'
        ),
        array ( 
            'url_key' => '/delivery.php', 
            'tpl' => 'templ-delivery.php',  
            'title' => 'Доставка - Аренда бытовок "Бытовки-сервис.ru"', 
            'text' => '',
            'name' => 'Доставка'
        ),
        array ( 
            'url_key' => '/photogallery.php', 
            'tpl' => 'templ-photogallery.php',  
            'title' => 'Фотогалерея - Аренда бытовок "Бытовки-сервис.ru"', 
            'text' => '',
            'name' => 'Фотогалерея'
        ),
        array ( 
            'url_key' => '/rent.php', 
            'tpl' => 'templ-rent.php',  
            'title' => 'Статья "Покупать или арендовать? - "Аренда бытовок "Бытовки-сервис.ru"', 
            'text' => '<div class="grid-container">
            <h1>Покупать или арендовать?</h1>
          </div>
          <div class="grid-container">
            <div class="seo_text"><img class="content-img" src="/assets/img/rent1.png" alt="" title="">
              <p>Аренда строительных бытовок в Москве — основной профиль деятельности компании Бытовки-Сервис.ru. </p>
              <p>Наша продукция является востребованной в различных секторах бизнеса, поскольку обладает повышенными характеристиками прочности, устойчива к воздействию разнообразных факторов окружающей среды и при этом эстетически привлекательна. Аренда строительной бытовки в нашей компании позволит Вам получить высококачественное изделие и при этом существенно сэкономить. </p>
              <p>Актуальность использования наших блок-контейнеров неоспорима:</p>
              <p>аренда строительных бытовок позволит Вам с комфортом оборудовать места отдыха для рабочих на строительных площадках, на территориях возле торговых павильонов, обеспечить достойные условия работы для охранников и других специалистов, занятых на Вашем предприятии;</p>
              <p>блок-контейнеры, предложенные Вашему вниманию, обладают высокими прочностными характеристиками, поскольку материалы, из которых они изготовлены, являются коррозионностойкими, хорошо сохраняют тепло и не подвержены воздействию влаги. Это позволяет использовать наши бытовки практически в любых погодных условиях, в том числе и в зимний период;</p>
              <p>Покупка или аренда строительной бытовокивходящие в наш ассортимент бытовки полностью готовы к проживанию, поскольку в них предусмотрены все необходимые инженерно-технические коммуникации: в конструкции уже продумана проводка, есть несколько розеток, встроены светильники. Есть возможность дооборудования блок-контейнеров другими необходимыми системами;</p>
              <p>относительно небольшие размеры и сравнительно малый вес делают возможным размещать наши бытовки в два этажа, тем самым Вам удастся сэкономить площадь и при этом обеспечить комфортное размещение своему персоналу;</p>
              <p>внешняя и внутренняя отделка блок-контейнеров выполнена с применением современных качественных материалов, которые абсолютно безопасны для здоровья человека.</p><img src="../assets/img/rent2.png">
            </div>
          </div>',
            'name' => 'Покупать или арендовать?'
            )
    ),
    'category-town' => array (  // добавим внутрь новый массив с ключём category-town, содежащий категории аренды бытовок в городах во всплывающем меню
        array (     // добавим внутрь новый массив с параметрами категории города
            'id' => 1,  // добавим элемент с ключём id в котором будем хранить id категории
            'title' => 'Аренда бытовок в Видном',  // добавим элемент с ключём title в котором будем хранить название для страницы сайта категории
            'name' => 'Аренда бытовок в Видном'  // добавим элемент с ключём name в котором будем хранить имя категории
        ),
        array (     // добавим внутрь новый массив с параметрами категории города
            'id' => 2,  // добавим элемент с ключём id в котором будем хранить id категории
            'title' => 'Аренда бытовок в Домодедово',  // добавим элемент с ключём title в котором будем хранить название для страницы сайта категории
            'name' => 'Аренда бытовок в Домодедово'  // добавим элемент с ключём name в котором будем хранить имя категории
        ),
    ),
    'rent-list' => array (  // добавим внутрь новый массив с ключём item, содежащий товары
        array (     // добавим внутрь новый массив с параметрами товарв
            'id' => 1,  // добавим элемент с ключём id в котором будем хранить id товара
            'title' => 'Блок контейнер 2,5 х 6 м',  // добавим элемент с ключём title в котором будем хранить название для страницы товара
            'name' => 'Блок контейнер 2,5 х 6 м',  // добавим элемент с ключём name в котором будем хранить имя товара
            'price' => '452'  // добавим элемент с ключём name в котором будем хранить цену товара
        ),
        array (     // добавим внутрь новый массив с параметрами товарв
            'id' => 2,  // добавим элемент с ключём id в котором будем хранить id товара
            'title' => 'Блок контейнер 2 х 3 м',  // добавим элемент с ключём title в котором будем хранить название для страницы товара
            'name' => 'Блок контейнер 2 х 3 м',  // добавим элемент с ключём name в котором будем хранить имя товара
            'price' => '52345'  // добавим элемент с ключём name в котором будем хранить цену товара
        ),
        array (     // добавим внутрь новый массив с параметрами товарв
            'id' => 3,  // добавим элемент с ключём id в котором будем хранить id товара
            'title' => 'Блок контейнер 3 х 3 м',  // добавим элемент с ключём title в котором будем хранить название для страницы товара
            'name' => 'Блок контейнер 3 х 3 м',  // добавим элемент с ключём name в котором будем хранить имя товара
            'price' => '62345'  // добавим элемент с ключём name в котором будем хранить цену товара
        ),
        array (     // добавим внутрь новый массив с параметрами товарв
            'id' => 4,  // добавим элемент с ключём id в котором будем хранить id товара
            'title' => 'Блок контейнер 4 х 3 м',  // добавим элемент с ключём title в котором будем хранить название для страницы товара
            'name' => 'Блок контейнер 4 х 3 м',  // добавим элемент с ключём name в котором будем хранить имя товара
            'price' => '72345'  // добавим элемент с ключём name в котором будем хранить цену товара
        ),
        array (     // добавим внутрь новый массив с параметрами товарв
            'id' => 5,  // добавим элемент с ключём id в котором будем хранить id товара
            'title' => 'Блок контейнер 10 х 10 м',  // добавим элемент с ключём title в котором будем хранить название для страницы товара
            'name' => 'Блок контейнер 10 х 10 м',  // добавим элемент с ключём name в котором будем хранить имя товара
            'price' => '100000'  // добавим элемент с ключём name в котором будем хранить цену товара
        )
    ),
    'bytovka-list' => array (  // добавим внутрь новый массив с ключём item, содежащий товары
        array (     // добавим внутрь новый массив с параметрами товарв
            'id' => 1,  // добавим элемент с ключём id в котором будем хранить id товара
            'title' => 'Бытовка прорабская (офис)',  // добавим элемент с ключём title в котором будем хранить название для страницы товара
            'name' => 'Бытовка прорабская (офис)',  // добавим элемент с ключём name в котором будем хранить имя товара
            'price' => 32345  // добавим элемент с ключём name в котором будем хранить цену товара
        ),
        array (     // добавим внутрь новый массив с параметрами товарв
            'id' => 2,  // добавим элемент с ключём id в котором будем хранить id товара
            'title' => 'Бытовка "Домишко"',  // добавим элемент с ключём title в котором будем хранить название для страницы товара
            'name' => 'Бытовка "Домишко"',  // добавим элемент с ключём name в котором будем хранить имя товара
            'price' => 23456  // добавим элемент с ключём name в котором будем хранить цену товара
        ),
        array (     // добавим внутрь новый массив с параметрами товарв
            'id' => 3,  // добавим элемент с ключём id в котором будем хранить id товара
            'title' => 'Бытовка "Избушка на курьих крылышках"',  // добавим элемент с ключём title в котором будем хранить название для страницы товара
            'name' => 'Бытовка "Избушка на курьих крылышках"',  // добавим элемент с ключём name в котором будем хранить имя товара
            'price' => 15667  // добавим элемент с ключём name в котором будем хранить цену товара
        ),
        array (     // добавим внутрь новый массив с параметрами товарв
            'id' => 4,  // добавим элемент с ключём id в котором будем хранить id товара
            'title' => 'Бытовка рабская (не офис)',  // добавим элемент с ключём title в котором будем хранить название для страницы товара
            'name' => 'Бытовка рабская (не офис)',  // добавим элемент с ключём name в котором будем хранить имя товара
            'price' => 777  // добавим элемент с ключём name в котором будем хранить цену товара
        )
    )

);

?>