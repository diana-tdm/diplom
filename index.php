<?php
$path = $_SERVER['DOCUMENT_ROOT'];
require_once "$path/system/db.php";
?>

<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ADD FOTO</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="fonts/css/all.min.css" />
    <link rel="stylesheet" href="css/style.css" />
  </head>

  <body>
    <?php
    require_once "$path/components/header.php"; 
    ?>

    <section class="banner">
      <div class="container">
        <div class="banner__items">
          <div class="banner__title">
            <span>Профессиональная</span> фотосессия в студии
          </div>
          <div class="banner__subtitle">
            Наша фотостудия позволит <br />
            исполнить ваши мечты
          </div>
          <div class="banner__text">
            <p>
              Фотографии стали неотъемлемой частью нашей жизни. Это теперь не
              просто памятные снимки в альбомах, ныне фото становиться способом
              понравиться окружающим, получить восхищение, заявить о себе всему
              миру.
            </p>
            <p>
              Выбор правильной фотостудии занимает далеко не последнее место в
              получение фотографий. И мы с точностью заявляем, что нашей
              фотостудией вы останетесь довольны и еще не раз захотите
              возвращаться к нам.
            </p>
          </div>
          <button class="banner__btn button">Получить консультацию</button>
        </div>
      </div>
      <div class="banner__forma"></div>
      <div class="banner__gratitude"></div>
    </section>

    <section class="portfolio">
      <h3 class="portfolio__title title">Наши работы</h3>
      <div class="portfolio__cont">
        <div class="portfolio__items">
          <div class="portfolio__slider">
            <div
              class="portfolio__slide"
              style="background-image: url(img/portfolio/01.jpg)"
            ></div>
            <div
              class="portfolio__slide"
              style="background-image: url(img/portfolio/02.jpg)"
            ></div>
            <div
              class="portfolio__slide"
              style="background-image: url(img/portfolio/03.jpg)"
            ></div>
            <div
              class="portfolio__slide"
              style="background-image: url(img/portfolio/01.jpg)"
            ></div>
            <div
              class="portfolio__slide"
              style="background-image: url(img/portfolio/03.jpg)"
            ></div>
          </div>
        </div>
        <button class="slider__arrow slider__arrow--prev">
          <i class="fa-solid fa-chevron-left fa-3x"></i>
        </button>
        <button class="slider__arrow slider__arrow--next">
          <i class="fa-solid fa-chevron-right fa-3x"></i>
        </button>
      </div>
      <div class="slider__pagination">
        <div class="slider__dot slider__dot--active"></div>
        <div class="slider__dot"></div>
        <div class="slider__dot"></div>
        <div class="slider__dot"></div>
        <div class="slider__dot"></div>
      </div>
    </section>

    <?php
    require_once "$path/components/locations.php"; 
    ?>

    <section class="photo-studio">
      <h3 class="photo-studio__title title">Оформление фотостудии</h3>
      <div>
        <video class="photo-studio__video" src=""></video>
      </div>
    </section>

    <section class="services">
      <div class="container">
        <h3 class="services__title title">Виды услуг</h3>
        <div class="services__items">
          <div class="services__img"></div>
          <div class="services__img"></div>
          <div class="services__img"></div>
          <div class="services__img"></div>
          <div class="services__img"></div>
          <div class="services__img"></div>
          <div class="services__img"></div>
          <div class="services__img"></div>
          <div class="services__img"></div>
          <div class="services__img"></div>
          <div class="services__img"></div>
          <div class="services__img"></div>
          <div class="services__img"></div>
          <div class="services__img"></div>
          <div class="services__img"></div>
          <div class="services__img"></div>
        </div>
      </div>
    </section>

    <section class="steps">
      <div class="container">
        <h3 class="steps__title title">Этапы работ</h3>
        <div class="steps__items">
          <div class="steps__elements">
            <div class="steps__elements-title">Заявка</div>
            <div class="steps__elements-text">
              Съешь еще этих мягких французских булок, да выпей чаю. Съешь еще
              этих мягких.
            </div>
            <div class="steps__elements-numb">1</div>
          </div>
          <div class="steps__elements">
            <div class="steps__elements-title">Бронь</div>
            <div class="steps__elements-text">
              Съешь еще этих мягких французских булок, да выпей чаю. Съешь еще
              этих мягких.
            </div>
            <div class="steps__elements-numb">2</div>
          </div>
          <div class="steps__elements">
            <div class="steps__elements-title">
              Составление <br />
              Технического задания
            </div>
            <div class="steps__elements-text">
              Съешь еще этих мягких французских булок, да выпей чаю. Съешь еще
              этих мягких.
            </div>
            <div class="steps__elements-numb">3</div>
          </div>
          <div class="steps__elements">
            <div class="steps__elements-title">Съёмка</div>
            <div class="steps__elements-text">
              Съешь еще этих мягких французских булок, да выпей чаю. Съешь еще
              этих мягких.
            </div>
            <div class="steps__elements-numb">4</div>
          </div>
          <div class="steps__elements">
            <div class="steps__elements-title">Готовые фото</div>
            <div class="steps__elements-text">
              Съешь еще этих мягких французских булок, да выпей чаю. Съешь еще
              этих мягких.
            </div>
            <div class="steps__elements-numb">5</div>
          </div>
        </div>
      </div>
    </section>

    <section class="idea">
      <div class="container">
        <h3 class="idea__title title">
          Фотостудия для любых идейных фотоссесий
        </h3>
        <div class="idea__text idea__text--short">
          <p>
            Воплотите мечту с нашей фотостудией и приобретите красивые,
            уникальные, качественные фотографии, выбрав один из наших залов. А
            их, -на секундочку, -аж семь штук.<br />
            Каждый наш зал оборудован интерьером и профессиональным
            оборудованием, и подойдет для любой фотоссесии, а мы хотим
            рассказать вам о все подробнее.
          </p>
          <p>Какие идеи можно воплотить?</p>

          <p>• Фотоссесия Love Story</p>
          <p>
            Мечтаете показать всему миру вашу историю создания любви или хранить
            снимки в памятном альбоме, то это фотоссесия отлично подойдет вам.
            Расскажите вашу историю с любимым человеком в фотографиях в
            необычном месте.
          </p>
          <p>• Семейная фотоссесия</p>
          <p>
            Семья — это самое главное в жизни любого человека. Хотите повесить
            фотографии в вашем уютном доме, смотреть на них и испытывать прилив
            нежности, значит семейная фотоссесия в нашей фотостудии станет
            отличным вариантом.
          </p>
          <p>• Фотоссесия для беременных девушек</p>
          <p>
            Желаете сохранить воспоминания о прекрасном времени в жизни каждой
            женщины? Наши локации помогут вам организовать и воссоздать в
            фотографиях любовь матери и еще не родившегося ребенка.
          </p>
          <p>• Фотоссесия «Деловой стиль».</p>
          <p>
            Вы не из тех, кто любит яркие чувства, эмоции и считаете себя
            сдержанным. Вам нужны фотографии, где вы раскроетесь как
            профессионал, произведете впечатление как деловой человек. Эта
            фотоссесия станет вашим правильным решением.
          </p>
          <p>• Фотоссесия для девушек и парней.</p>
          <p>
            Хочешь стать кем-то другим? Или, наоборот, показать свое «я»?
            Фотоссесия для девушек или парней поможет воплотить любые идеи.
            Помимо вышеперечисленного есть и другие стили фотоссесий. Вы
            самостоятельно выбираете, а наши фотозалы помогают вам и
            вдохновляют.
          </p>
          <p>Кстати, о них…</p>
          <p>
            Все семь фото локаций уникальные в своем роде. Мы пытались
            воссоздать непохожесть на другие фотостудии не только в городе, но и
            во всей стране. Каждый зал отличается от других по дизайнерскому
            решению и интерьеру. И каждый зал пропитан своим духом, стилем и
            видится для каждого нашего посетителя по-разному. <br />
            Светлые помещения помогут получить более качественные, яркие
            фотоснимки. Трендовая мебель и другие предметы интерьера можно
            двигать и активно использовать в фотосъемках. Локации подойдут для
            любых людей и задач: блогеров и медийных личностей, обычных и
            счастливых семей, предпринимателей и подростков. <br />
            Что еще нужно знать о нас?
          </p>
          <p>
            Оборудование. Неотъемлемая часть любой фотостудии и нередко
            владельцы фотостудий экономят на этой важной части. Мы используем
            все оборудование только от профессиональных продавцов, которые уже
            не один год предлагают свои товары на мировом рынке. Вы найдете все
            что нужно и необходимо для работы фотографов, для создания образов и
            света. Ведь именно от оборудования часто зависит качество
            получающихся фотоснимков.
          </p>
        </div>
        <div class="idea__btns">
          <button class="idea__btn idea__btn--open">
            Подробнее
            <span><i class="fa-solid fa-chevron-down"></i></span>
          </button>
          <button class="idea__btn idea__btn--hidden idea__btn--close">
            Скрыть
            <span><i class="fa-solid fa-chevron-up"></i></span>
          </button>
        </div>
      </div>
    </section>

    <section class="price">
      <div class="container">
        <h3 class="idea__title title">Стоимость фотосесии</h3>
        <div class="price__items">
          <div class="price__elements price__elements-1">
            <div class="price__info">
              <div class="price__info-rate">MINI</div>
              <div class="price__info-price">2500 ₽</div>
              <div class="price__info-location">/ 1 локация</div>
              <ul class="price__info-list">
                <li>Длительность — 30 минут</li>
                <li>Исходники — до 100 штук</li>
                <li>Ретушь — 4 фото</li>
                <li>Аренда фотостудии — Бесплатно</li>
                <li>Любой образ</li>
              </ul>
            </div>
            <h4 class="price__elements-title">Дополнительные услуги</h4>
            <div class="price__elements-btns">
              <button class="price__elements-btn price__elements-btn-1">
                Помощь в позировании
              </button>
              <button class="price__elements-btn price__elements-btn-2">
                Визажист + 2000 ₽
              </button>
              <button class="price__elements-btn price__elements-btn-3">
                Дополнительная ретушь фото — 1 шт. / 250 ₽
              </button>
            </div>
            <button class="price__elements-reserve button">
              Забронировать
            </button>
          </div>
          <div class="price__elements price__elements-2">
            <div class="price__info">
              <div class="price__info-rate">STANDART</div>
              <div class="price__info-price">5000 ₽</div>
              <div class="price__info-location">/ 2 локации</div>
              <ul class="price__info-list">
                <li>Длительность — 1 час 20 минут</li>
                <li>Исходники — до 200 штук</li>
                <li>Ретушь — 8 фото</li>
                <li>Аренда фотостудии — Бесплатно</li>
                <li>Любой образ</li>
              </ul>
            </div>
            <h4 class="price__elements-title">Дополнительные услуги</h4>
            <div class="price__elements-btns">
              <button class="price__elements-btn price__elements-btn-1">
                Помощь в позировании
              </button>
              <button class="price__elements-btn price__elements-btn-2">
                Визажист + 2000 ₽
              </button>
              <button class="price__elements-btn price__elements-btn-3">
                Дополнительная ретушь фото — 1 шт. / 250 ₽
              </button>
            </div>
            <button class="price__elements-reserve button">
              Забронировать
            </button>
          </div>
          <div class="price__elements price__elements-3">
            <div class="price__info">
              <div class="price__info-rate">MINI</div>
              <div class="price__info-price">N ₽</div>
              <div class="price__info-location">
                / Максимальное количество локаций
              </div>
              <ul class="price__info-list">
                <li>Длительность — 4 часа</li>
                <li>Исходники — до 500 штук</li>
                <li>Ретушь — 50 фото</li>
                <li>Аренда фотостудии — Бесплатно</li>
                <li>Визажист — Make-Up, Укладка</li>
                <li>Предварительный подбор образов — До 8 образов</li>
              </ul>
            </div>
            <h4 class="price__elements-title">Дополнительные услуги</h4>
            <div class="price__elements-btns">
              <button class="price__elements-btn price__elements-btn-3">
                Дополнительная ретушь фото — 1 шт. / 250 ₽
              </button>
            </div>
            <button class="price__elements-reserve button">
              Забронировать
            </button>
          </div>
        </div>
      </div>
    </section>

    <section class="trend">
      <div class="container">
        <h3 class="trend__title title">
          Фотоискусство в тренде. Любая фотоссесия ваша история
        </h3>
        <div class="trend__text idea__text idea__text--short">
          <p>
            Мы искренни так считаем и готовы кричать эту фразу на весь мир.
            Фотографии давно перестали пылиться на полках в семейных,
            потрёпанных альбомах.
          </p>
          <p>
            Хотите самовыразиться и не знаете как? Позвоните нам и закажите
            фотосъемку. Хотите удивить и впечатлить? Мы вам поможем. Не уверены?
            Посмотрите отзывы и проконсультируйтесь. Боитесь фотографироваться?
            Наши локации помогут вам расслабиться и почувствовать себя как дома.
          </p>
          <p>Доступные цены для всех и вежливость.</p>
          <p>
            Повторим еще раз: мы работаем в первую очередь для клиентов, и
            аренда нашей фотостудии имеют цены семи чашек кофе. Вы можете
            расплатится любым удобным для вас способом: наличным или безналичным
            расчетом. Все для вашего удобства.
          </p>
          <p>
            Вежливость тоже относиться к главным нашим качествам. У нас вы не
            найдете ужасного обращения, мы всегда готовы ответить вам и
            проконсультировать, помочь и стать вашими друзьями. Все наши
            работники улыбчивы и приветливы вам, которые не оставят вам плохого
            настроения.
          </p>
          <p>
            В каждом городе есть хотя бы несколько фотостудий и часто поход
            туда, становиться чуть ли не традицией семьи, пар или друзей. Тренд
            на истории в фотографиях для социальных сетей, где мы проводим много
            времени, не угасал и не угаснет никогда. Фотоссесия лав стори или
            семейная привлекает внимание всех людей и, доказано, набирает больше
            всего одобрений со стороны людей всего мира. Для качественного
            исполнения вашей мечты стоит обращаться к профессионалу и выбирать
            интересные локации.
          </p>
          <p>
            Наша фотостудия предлагает и то, и то. Профессиональный фотограф
            сможет сделать качественные, интересные фотографии, помочь вам
            воплотить вашу идею в жизнь в уютных залах фотостудии.
          </p>
          <p>
            На ваш выбор у нас есть 7 фотозалов, каждый из которых прекрасен и
            индивидуален по-своему. В больших залах отлично будет смотреться
            групповая фотосессия, а в залах меньше получиться интересная
            фотоссесия в деловом стиле.
          </p>
          <p>
            Мы работаем в первую очередь на качество, поэтому наши цены не
            завышенные и доступны всем желающим. У нас есть различные и удобные
            способы оплаты для вас.
          </p>
        </div>
        <div class="idea__btns">
          <button class="idea__btn trend__btn--open">
            Подробнее
            <span><i class="fa-solid fa-chevron-down"></i></span>
          </button>
          <button class="idea__btn idea__btn--hidden trend__btn--close">
            Скрыть
            <span><i class="fa-solid fa-chevron-up"></i></span>
          </button>
        </div>
      </div>
    </section>

    <section class="gift">
      <div class="container">
        <h3 class="gift__title title">Подарочный сертификат на фотосессию</h3>
        <div class="gift__items">
          <div class="gift__info">
            <div class="gift__info-subtitle">СЕРТИФИКАТ НА ФОТОСЕССИЮ</div>
            <div class="gift__info-title">
              Это подарок, <br />
              который западает <br />
              в душу
            </div>
            <ul class="gift__list">
              <li>Креативное оформление</li>
              <li>Открытый календарь</li>
              <li>Всё включено</li>
            </ul>
          </div>
          <div class="gift__img-text">
            <img class="gift__img" src="img/gift/gift-01.png" alt="gift" />
            <div class="gift__text">
              Срок действия сертификата: 2 месяца <br />
              со дня приобретения.
              <button class="gift__btn button">Приобрести</button>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="reviews">
      <div class="container">
        <h3 class="reviews__title title">Отзывы</h3>
        <div class="reviews__items">
          <div class="reviews__elemenets">
            <img src="img/reviews/rev-01.png" alt="" />
            <div class="reviews__elemenets-title">Мария</div>
            <div class="reviews__elemenets-text">
              Съешь еще этих мягких французских булок, да выпей чаю. Съешь еще
              этих мягких французских булок, да выпей чаю. Съешь еще этих мягких
              французских булок, да выпей чаю.
            </div>
            <button class="reviews__elemenets-btn">Показать ещё</button>
          </div>
          <div class="reviews__elemenets">
            <img src="img/reviews/rev-01.png" alt="" />
            <div class="reviews__elemenets-title">Мария</div>
            <div class="reviews__elemenets-text">
              Съешь еще этих мягких французских булок, да выпей чаю. Съешь еще
              этих мягких французских булок, да выпей чаю. Съешь еще этих мягких
              французских булок, да выпей чаю.
            </div>
            <button class="reviews__elemenets-btn">Показать ещё</button>
          </div>
          <div class="reviews__elemenets">
            <img src="img/reviews/rev-01.png" alt="" />
            <div class="reviews__elemenets-title">Мария</div>
            <div class="reviews__elemenets-text">
              Съешь еще этих мягких французских булок, да выпей чаю. Съешь еще
              этих мягких французских булок, да выпей чаю. Съешь еще этих мягких
              французских булок, да выпей чаю.
            </div>
            <button class="reviews__elemenets-btn">Показать ещё</button>
          </div>
          <div class="reviews__elemenets">
            <img src="img/reviews/rev-01.png" alt="" />
            <div class="reviews__elemenets-title">Мария</div>
            <div class="reviews__elemenets-text">
              Съешь еще этих мягких французских булок, да выпей чаю. Съешь еще
              этих мягких французских булок, да выпей чаю. Съешь еще этих мягких
              французских булок, да выпей чаю.
            </div>
            <button class="reviews__elemenets-btn">Показать ещё</button>
          </div>
          <div class="reviews__elemenets">
            <img src="img/reviews/rev-01.png" alt="" />
            <div class="reviews__elemenets-title">Мария</div>
            <div class="reviews__elemenets-text">
              Съешь еще этих мягких французских булок, да выпей чаю. Съешь еще
              этих мягких французских булок, да выпей чаю. Съешь еще этих мягких
              французских булок, да выпей чаю.
            </div>
            <button class="reviews__elemenets-btn">Показать ещё</button>
          </div>
          <div class="reviews__elemenets">
            <img src="img/reviews/rev-01.png" alt="" />
            <div class="reviews__elemenets-title">Мария</div>
            <div class="reviews__elemenets-text">
              Съешь еще этих мягких французских булок, да выпей чаю. Съешь еще
              этих мягких французских булок, да выпей чаю. Съешь еще этих мягких
              французских булок, да выпей чаю.
            </div>
            <button class="reviews__elemenets-btn">Показать ещё</button>
          </div>
        </div>
        <button class="reviews__items-btn button">Добавить отзыв</button>
      </div>
    </section>

    <section class="contacts">
      <div class="container">
        <div id="map" class="contacts__map">
          <script
            type="text/javascript"
            charset="utf-8"
            async
            src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Aec9c8f299af9f015651b99e4b1c63038fa34eec2ddb8d225e9c42a8948b5cef6&amp;width=100%25&amp;height=615&amp;lang=ru_RU&amp;scroll=false"
          ></script>
        </div>
        <div class="contacts__form">
          <div class="contacts__form-title">Форма обратной связи</div>
          <label class="contacts__form-label label">
            Имя
            <input
              class="contacts__form-input input"
              type="text"
              placeholder="Введите ваше имя"
            />
          </label>
          <label class="contacts__form-label label">
            E-mail
            <input
              class="contacts__form-input input"
              type="text"
              placeholder="Введите ваш E-mail"
            />
          </label>
          <label class="contacts__form-label label">
            Телефон
            <input
              class="contacts__form-input input"
              type="text"
              placeholder="Введите ваше Телефон"
            />
          </label>
          <button class="contacts__form-btn button">Отправить</button>
          <div class="contacts__form-text text">
            Нажимая кнопку «Отправить», вы даете согласие на обработку
            персональных данных и соглашаетесь с политикой конфиденциальности
          </div>
        </div>
      </div>
    </section>

    <?php
    require_once "$path/components/footer.php"; 
    ?>

    <div class="modal modal--gift">
      <div class="gift__form">
        <button class="gift__form-close btn-close">
          <i class="fa-regular fa-circle-xmark fa-2x"></i>
        </button>
        <img
          class="gift__form-img"
          src="img/gift/gift-form-img.svg"
          alt="image"
        />
        <div class="gift__form-items">
          <div class="gift__form-title title">Форма обратной связи</div>
          <div class="gift__form-inputs">
            <label class="gift__form-label label">
              Имя
              <input
                class="gift__form-input input "
                type="text"
                placeholder="Введите ваше имя"
                name="name"
              />
            </label>
            <label class="gift__form-label label">
              E-mail
              <input
                class="gift__form-input input"
                type="email"
                placeholder="Введите ваш E-mail"
                name="email"
              />
            </label>
            <label class="gift__form-label label">
              Телефон
              <input
                class="gift__form-input input"
                type="text"
                placeholder="Введите ваше Телефон"
                name="phone"
              />
            </label>
            <button class="gift__form-btn button">Отправить</button>
          </div>
          <div class="gift__form-text text">
            Нажимая кнопку «Отправить», вы даете согласие на обработку
            персональных данных и соглашаетесь с политикой конфиденциальности
          </div>
        </div>
      </div>
    </div>

    <div class="modal modal--gift-thanks">
      <div class="gift__thanks thanks">
        <button class="gift__thanks-close btn-close">
          <i class="fa-regular fa-circle-xmark fa-2x"></i>
        </button>
        <div class="gift__thanks-title title">
          Благодарим <br />
          за оставленную заявку!
        </div>
        <div class="gift__thanks-text">
          Наши специалисты уже обрабатывают Вашу заявку и свяжутся с Вами в
          ближайшее время
        </div>
      </div>
    </div>

    <div class="modal modal--locations-form">
      <div class="locations__form">
        <button class="locations__form-close btn-close">
          <i class="fa-regular fa-circle-xmark fa-2x"></i>
        </button>
        <img
          class="locations__form-img"
          src="img/locations/location-form-img.svg"
          alt="image"
        />
        <div class="locations__form-items">
          <div class="locations__form-title title">Форма выбора локации</div>
          <div class="locations__form-inputs">
            <label class="locations__form-label label">
              Имя
              <input
                class="locations__form-input input"
                type="text"
                placeholder="Введите ваше имя"
                name="name"
              />
            </label>
            <label class="locations__form-label label">
              E-mail
              <input
                class="locations__form-input input"
                type="email"
                placeholder="Введите ваш E-mail"
                name="email"
              />
            </label>
            <label class="locations__form-label label">
              Телефон
              <input
                class="locations__form-input input"
                type="text"
                placeholder="Введите ваше Телефон"
                name="phone"
              />
            </label>
            <label class="locations__form-label label">
              Локация
              <select
                class="locations__form-select input"
                placeholder="Выберите локацию"
                name="location"
              >
                <option value="Локация 1">Локация 1</option>
                <option value="Локация 2">Локация 2</option>
                <option value="Локация 3">Локация 3</option>
              </select>
            </label>
            <button class="locations__form-btn button">Отправить</button>
            <div class="locations__form-text text">
              Нажимая кнопку «Отправить», вы даете согласие на обработку
              персональных данных и соглашаетесь с
              <a href="#">политикой конфиденциальности</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="modal modal--locations-thanks">
      <div class="locations__thanks thanks">
        <button class="locations__thanks-close btn-close">
          <i class="fa-regular fa-circle-xmark fa-2x"></i>
        </button>
        <div class="locations__thanks-title title">
          Благодарим <br />
          за оставленную заявку!
        </div>
      </div>
    </div>

    <div class="modal modal--reviews-form">
      <div class="reviews__form">
        <button class="reviews__form-close btn-close">
          <i class="fa-regular fa-circle-xmark fa-2x"></i>
        </button>
        <div class="reviews__form-title title">
          Оставьте отзыв о том, <br />
          как прошла ваша фотосессия
        </div>
        <div class="reviews__form-items">
          <div class="reviews__form-inputs">
            <label class="reviews__form-label label">
              Имя
              <input
                class="reviews__form-input input"
                type="text"
                placeholder="Введите ваше имя"
                name="name"
              />
            </label>
            <label class="reviews__form-label label">
              E-mail
              <input
                class="reviews__form-input input"
                type="email"
                placeholder="Введите ваш E-mail"
                name="email"
              />
            </label>
            <label class="reviews__form-label label">
              Фото
              <div class="input">
                <input class="reviews__form-file" type="file" name="file" />
                <button class="reviews__btn-file">Загрузите фотографию</button>
              </div>
            </label>
            <label class="reviews__form-label label">
              Отзыв
              <textarea
                class="reviews__form-textarea input"
                rows="5"
                placeholder="Введите ваш отзыв"
                name="text"
              ></textarea>
            </label>
            <button class="reviews__form-btn button">Отправить</button>
            <div class="reviews__form-text text">
              Нажимая кнопку «Отправить», вы даете согласие на обработку
              персональных данных и соглашаетесь с политикой конфиденциальности
            </div>
          </div>
          <img
            class="reviews__form-img"
            src="img/reviews/reviews-form-img.svg"
            alt="image"
          />
        </div>
      </div>
    </div>

    <div class="modal modal--reviews-thanks">
      <div class="reviews__thanks">
        <button class="reviews__thanks-close btn-close">
          <i class="fa-regular fa-circle-xmark fa-2x"></i>
        </button>
        <div class="reviews__thanks-title title">
          Благодарим за оставленный отзыв!
        </div>
      </div>
    </div>

    <script src="js/siema.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
