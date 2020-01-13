<!DOCTYPE html>
<html lang="ru">
  <?php
    include_once('./templates/blocks/head.php');
  ?>
  <body>

    <?php
      include_once('./templates/blocks/header.php');
    ?>
    
    <?php
      include_once('./templates/blocks/menu-mobile.php');
    ?>

      <div class="content price-page">
        <div class="grid-container">
          <?php
            include_once('./templates/blocks/breadcrumbs.php');
          ?>
        </div>
        <div class="grid-container">
          <h1>Цены</h1>
        </div>
        <div class="price">
          <div class="grid-container">
            <div class="price_wrapper">
              <?php

                $itemsRent = $database['rent-list'];
                foreach ($itemsRent as $key => $value) {
                  $itemTitle = $value['title'];
                  $itemPrice = $value['price'];
                  include('./templates/blocks/rent-list.php');
                }

              ?>

              <div class="grid-x">
                <div class="price_download"><a class="price-download" href="#" target="_blank"><i class="icon-load"></i>Скачать прайс-лист</a></div>
              </div>
          </div>
        </div>

        <?php
          include_once('./templates/blocks/calc-choose.php');
        ?>
 
        <div class="grid-container">
          <?php
            include_once('./templates/blocks/seo-text.php');
          ?>
      </div>
    </main>

    <?php
      include_once('./templates/blocks/footer.php');
    ?>

    <?php
      include_once('./templates/blocks/scripts.php');
    ?>
    
    <?php
      include_once('./templates/blocks/popup-order-form.php');
    ?>

  </body>
</html>