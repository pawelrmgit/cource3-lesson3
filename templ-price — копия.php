<!DOCTYPE html>
<html lang="ru">
  <?php
    $title = 'Цена - Аренда бытовок "Бытовки-сервис.ru"';
    include_once('./templates/blocks/head.php');
  ?>
  <body>

    <?php
      include_once('./templates/blocks/header.php');
    ?>
    
    <?php
      include_once('./templates/blocks/menu-mobile.php');
    ?>

    <main>
      <div class="content price-page">
        <div class="grid-container">
          <ul class="breadcrumbs">
            <li><a href="/">Главная</a></li>
            <li><span>Цены</span></li>
          </ul>
        </div>
        <div class="grid-container">
          <h1>Цены</h1>
        </div>
                    
        <?php
          include_once('./templates/blocks/rent-list.php');
        ?>

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

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="/assets/js/foundation.min.js"></script>
    <script src="/assets/js/slick.min.js"></script>
    <script src="/assets/js/jquery.fancybox.min.js"></script>
    <script src="/assets/js/jquery.mask.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <script async src="/assets/js/main.js"></script>
    
    <?php
      include_once('./templates/blocks/popup-order-form.php');
    ?>

  </body>
</html>