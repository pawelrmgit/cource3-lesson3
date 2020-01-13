<ul class="breadcrumbs">
    <li><a href="/">
        <?php 
            $dataIndex = searchData($database, '/index.php');   // первый уровень всегда главная
            echo $dataIndex['name']; 
        ?>
    </a></li>
    
    <!-- Второй уровень если это bytovka.php или rent.php - это либо имя страницы каталога либо имя страницы статей (у нас пока нет такой страницы)
        Если это не описанные страницы, то этого куска нет
      -->

    <?php if ($data['url_key'] == '/bytovka.php') { ?>
        <?php $dataCatalog = searchData($database, '/catalog.php'); ?>
        <li><a href="<?php echo $dataCatalog['url_key']; ?>">
            <?php 
                echo $database['pages'][2]['name']; 
            ?>
        </a></li>
    <?php } elseif ($data['url_key'] == '/rent.php') { ?>
        <li><a href="#">
            <?php 
                echo 'Статьи'; 
            ?>
        </a></li>
    <?php } ?>

    <!-- Текущий уровень если это bytovka.php то выведем название по соответствующему товару из бд
        В остальных случаях выводим имя страницы
     -->
    <li><span>
        <?php 
            if ($data['url_key'] == '/bytovka.php') {
                
                echo $database['bytovka-list'][$bytovka]['name'];
            }
            else echo $data['name']; 
        ?>
    </span></li>
</ul>