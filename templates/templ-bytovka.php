<!DOCTYPE html>
<html lang="ru">

  <?php
    $bytovka = 0; // Информация, о том какой бытовки эта страница
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
          <h1><?php echo $database['bytovka-list'][$bytovka]['title']?></h1>
        </div>
        <div class="card_bytovka-wrapper">
          <div class="grid-container">
            <div class="card_bytovka-item">
              <div class="card_bytovka-main">
                <div class="card_bytovka-img">
                  <div class="card_bytovka-min-rent">Минимальный срок аренды - <span> 30 дней</span></div>
                  <div class="card_bytovka-for slider-dots"><a data-fancybox="sklad" href="../assets/img/preview1.png" title=""><img src="../assets/img/preview1.png" alt="" title=""></a><a data-fancybox="sklad" href="../assets/img/preview2.png" title=""><img src="../assets/img/preview2.png" alt="" title=""></a><a data-fancybox="sklad" href="../assets/img/preview3.png" title=""><img src="../assets/img/preview3.png" alt="" title=""></a><a data-fancybox="sklad" href="../assets/img/preview4.png" title=""><img src="../assets/img/preview4.png" alt="" title=""></a><a data-fancybox="sklad" href="../assets/img/preview5.png" title=""><img src="../assets/img/preview5.png" alt="" title=""></a><a data-fancybox="sklad" href="../assets/img/preview6.png" title=""><img src="../assets/img/preview6.png" alt="" title=""></a></div>
                  <div class="card_bytovka-nav">
                    <div class="card_bytovka-nav-item">
                      <div class="card_bytovka-nav-wrap"><img src="../assets/img/preview1.png" alt="" title=""></div>
                    </div>
                    <div class="card_bytovka-nav-item">
                      <div class="card_bytovka-nav-wrap"><img src="../assets/img/preview2.png" alt="" title=""></div>
                    </div>
                    <div class="card_bytovka-nav-item">
                      <div class="card_bytovka-nav-wrap"><img src="../assets/img/preview3.png" alt="" title=""></div>
                    </div>
                    <div class="card_bytovka-nav-item">
                      <div class="card_bytovka-nav-wrap"><img src="../assets/img/preview4.png" alt="" title=""></div>
                    </div>
                    <div class="card_bytovka-nav-item">
                      <div class="card_bytovka-nav-wrap"><img src="../assets/img/preview5.png" alt="" title=""></div>
                    </div>
                    <div class="card_bytovka-nav-item">
                      <div class="card_bytovka-nav-wrap"><img src="../assets/img/preview6.png" alt="" title=""></div>
                    </div>
                  </div>
                </div>
                <div class="card_bytovka-content">
                  <div class="card_bytovka-price">Цена аренды:<span><?php echo $database['bytovka-list'][$bytovka]['price']?></span></div>
                  <div class="card_bytovka-rent">Аренда от трех бытовок:<span> По запросу</span></div>
                  <div class="card_bytovka-link"><a class="btn_pink" href="#" data-open="popup_order">Заказать</a></div>
                  <div class="card_bytovka-gabarits">Размеры: 2400 Х 6000</div>
                  <div class="card_bytovka-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget odio.</div>
                  <div class="card_bytovka-characteristics">
                    <ul class="characteristic">
                      <li>Отделка оргалит</li>
                      <li>Усиленный каркас</li>
                      <li>Стальные решетки на окнах</li>
                      <li>Электропроводка</li>
                      <li>Освещение</li>
                      <li>Наружная обшивка оцинкованный профнастил</li>
                      <li>Металлическая дверь</li>
                      <li>Пол – доска окрашенная</li>
                      <li>Возможность постановки бытовки на бытовку</li>
                    </ul>
                  </div>
                  <div class="card_bytovka-advantages">
                    <ul class="adv">
                      <li>Залога нет</li>
                      <li>Предоплата от двух месяцев</li>
                    </ul>
                  </div><a class="card_bytovka-download" href="#" alt="" title="">Скачать договор аренды бытовки-склада</a>
                </div>
              </div>
              <div class="card_bytovka-info">
                <div class="card_bytovka-video">
                  <div class="video-container">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/dNZb_KtKhTc&amp;showinfo=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  </div>
                </div>
                <div class="card_bytovka-calculator">
                  <?php
                    include_once('./templates/blocks/calc-delivery.php');
                  ?>
                </div>
                <div class="preview_bytovka-additional">
                  <div class="preview_bytovka-additional-caption">Может дополнительно комплектоваться:</div>
                  <div class="preview_bytovka-icons"><img src="../assets/img/add-ic1.svg" alt="" title=""><img src="../assets/img/add-ic2.svg" alt="" title=""><img src="../assets/img/add-ic3.svg" alt="" title=""><img src="../assets/img/add-ic4.png" alt="" title=""><img src="../assets/img/add-ic5.svg" alt="" title=""></div>
                </div>
              </div>
            </div>
          </div>
        </div>

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