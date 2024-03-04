<?php

function flare_featured_home_main_slider() {

?>
    <div class="main-slider">
        <div class="item"
            style="background-image: url('https://primasnabauto.ru/wp-content/uploads/2017/11/5f70907a8f.jpg');">
            <div class="carousel-caption wow fadeInUp">
                <h1>Аукционы Японии</h1>
                <p>Как купить&nbsp;автомобиль из Японии Хотите приобрести автомобиль с японского
                    аукциона надежно и
                    выгодно? Компания "ПримаСнаб Авто" поможет на каждом этапе покупки, даже если вы находитесь в другом
                    регионе. Вы можете... </p>
                <a class="carousel-caption__btn" href="https://primasnabauto.ru/auktsiony-yaponii/">
                    Подробнее.. </a>
            </div>
        </div>

        <div class="item"
            style="background-image: url('https://primasnabauto.ru/wp-content/uploads/2017/11/Lexus-RX-350-F-Sport-1280x650.jpg');">
            <div class="carousel-caption wow fadeInUp">
                <h1>Таможенное оформление Автомобилей
                </h1>
                <p>Наша компания предлагает перечень услуг таможенного оформления: Оформление
                    транспортных средств и
                    мототехники, распилов и запчастей на автомболи Консультирование по вопросам таможенного оформления;
                    Предварительный анализ документов, предоставленных на таможенное декларирование; Проверка... </p>
                <a class="carousel-caption__btn" href="https://primasnabauto.ru/tamozhennoe-oformlenie-2/">
                    Подробнее.. </a>
            </div>
        </div>

        <div class="item">
            <div class="carousel-caption wow fadeInUp">
                <h1> Установка и активация устройств ЭРА-ГЛОНАСС
                </h1>
                <p>С декабря 2017 года одна из наших компаний "ПримаСнаб" являемся официальным
                    партнером АО «ГЛОНАСС» по
                    реализации аппаратуры вызова экстренных оперативных служб (АВЭОС), в том числе аккредитованы как
                    квалифицированная мастерская, связанная... </p>
                <a class="carousel-caption__btn"
                    href="https://primasnabauto.ru/ustanovka-i-aktivatsiya-ustrojstv-era-g/">
                    Подробнее.. </a>
            </div>
        </div>

    </div>

    <?php
}

add_action( 'flare_homepage', 'flare_featured_home_main_slider', 25 );