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

    <main>
      <div class="content">
        <div class="grid-container">
        <?php
          include_once('./templates/blocks/breadcrumbs.php');
        ?>
        </div>
        <div class="grid-container">
          <h1>Аренда бытовки</h1>
        </div>
        
        <div class="preview_bytovka-wrapper">
          <div class="grid-container">
      
            <?php
              $itemsRent = $database['bytovka-list'];
              foreach ($itemsRent as $key => $value) {
                $bytovkaTitle = $value['title'];
                $bytovkaPrice = $value['price'];
                include('./templates/blocks/bytovka-list.php');
              }
            ?>
            <div class="grid-x">
              <div class="preview_bytovka-more"><span class="btn_blue">Показать еще</span></div>
            </div>
          </div>
        </div>

        <?php
          include_once('./templates/blocks/calc-choose.php');
        ?>
 
        <?php
          include_once('./templates/blocks/gallery.php');
        ?>


        <?php
          include_once('./templates/blocks/order-form.php');
        ?> 

        <?php
          include_once('./templates/blocks/article.php');
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