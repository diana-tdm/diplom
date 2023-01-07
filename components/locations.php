<?php
    require_once "$path/system/db.php";

    $query = $db -> query("SELECT * FROM (SELECT * FROM locations ORDER BY id DESC LIMIT 20) as res ORDER BY id");
?>
    
    <section class="locations">
      <div class="container">
        <h3 class="locations__title title">Наши локации</h3>
        <div class="locations__cont">
          <div class="locations__list">
            <div class="locations__slider">
                <?php foreach ($query as $row) {
                    $name = $row[name];
                    $image = $row[image];
                    require "location.php";
                }?>  
            </div>
            <button class="locations__btn button">выбрать локацию</button>
          </div>
          <button class="slider__arrow slider__arrow--prev">
            <i class="fa-solid fa-chevron-left fa-3x"></i>
          </button>
          <button class="slider__arrow slider__arrow--next">
            <i class="fa-solid fa-chevron-right fa-3x"></i>
          </button>
        </div>
      </div>
    </section>