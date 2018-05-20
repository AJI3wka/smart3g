<?php
session_start();
error_reporting(85);


$utm = array("utm_source", "utm_medium", "utm_campaign", "utm_content", "utm_term");

$utm_clean = false; foreach($utm as $v){if(trim($_GET[$v])&&trim($_GET[$v])!=$_SESSION[$v]){$utm_clean = true; break;}}
if($utm_clean){foreach($utm as $v){unset($_SESSION[$v]);}}

foreach($utm as $v){if(trim($_GET[$v])&&!$_SESSION[$v]){$_SESSION[$v] = trim($_GET[$v]);}}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-K6BZ9NV');</script>
<!-- End Google Tag Manager -->

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>«SMART-MiRROR» - Зеркало Авто-Компьютер 10в1</title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="favicon.png">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.png">


    <link rel="stylesheet" type="text/css" href="css/form.css" />
    <link rel="stylesheet" href="css/style1.css" type="text/css" />
    <link rel="stylesheet" href="css/media.css" type="text/css" />

    <?php if (!isset($_SERVER['HTTP_USER_AGENT']) || stripos($_SERVER['HTTP_USER_AGENT'], 'Speed Insights')===false): ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <?php endif; ?>
</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K6BZ9NV"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->



	<style>
@media screen and (min-width:200px) and (max-width:550px) {
	.slick-track  .slick-slide img  {
	display: none;
	}
}

@media screen and (min-width:550px) and (max-width:1990px) {
	.ziblock  {
	display: none;
	}
}


</style>


    <div id="wrapper">
        <header id="header">
            <div class="top_nav_holder">
                <div class="center">
                    <ul>
                        <li><a href="#" class="info_btn_2">Доставка и оплата</a></li>
                        <li><a href="#" class="guarantee">Гарантия</a></li>
                        <li><a href="#" class="call_back_btn">Заказать звонок</a></li>
                    </ul>
                </div>
            </div>
            <div class="gen_nav_wrapper">
                <div class="gen_nav_holder">
                    <div class="center"> <strong class="logo"><a href="/"></a></strong>
                        <nav>
                            <div class="burger_menu"> <span></span> </div>
                            <ul>
                                <li><a href="#characteristics_section" class="anchor">возможности</a></li>
                                <li><a href="#gallery_section" class="anchor">фотографии</a></li>
                                <li><a href="#char_comp_section" class="anchor">параметры и комплектация</a></li>
                                <li><a href="#rewiews_section" class="anchor">Отзывы</a></li>
                            </ul>
                        </nav> <a href="#" class="top_order">оформить заказ</a> </div>
                </div>
            </div>
        </header>
        <section class="master_section">
            <div class="center">
                <ul class="mini_characteristics">
                    <li class="wow fadeIn" data-wow-delay="1.6s"> </li>
                    <li class="wow fadeIn" data-wow-delay="1.8s"> </li>
                    <li class="wow fadeIn" data-wow-delay="2s"> </li>
                    <!--<li class="wow fadeIn" data-wow-delay="1.6s"> <img src="images/top-icon-4.png?2" alt="image description"> </li>-->
                </ul>
                <div class="master_holder">
                    <div class="text_block">
                        <h1 class="wow fadeIn" data-wow-delay="0.8s">Зеркало<br> авто-компьютер<br> в ультратонком корпусе<br> 10в1</h1>

						<img class="ziblock" src="images/new-slider1.png" alt="image description" style="     width: 320px; ">


                        <p class="wow fadeIn" data-wow-delay="1s">«SMART-MiRROR» - это самый передовой гаджет для автомобиля, программное ядро разработанное Японскими инженерами, самая последняя версия операционной системы - Android 7.0 Nougat с русскоязычным интуитивно понятным интерфейсом. Все это в ультратонком корпусе, приятно дополняющем интерьер автомобиля любого класса.</p>
                        <ul class="wow fadeIn" data-wow-delay="1.2s">
                            <li>Навигация</li>
                            <li>Видеорегистратор</li>
                            <li>Видео, Музыка, Фото</li>
                            <li>Парковочная камера</li>
                            <li>Двойная запись</li>
                            <li>Full HD 1080p</li>
                            <li>Голосовые звонки</li>
                            <li>Wi-Fi и Bluetooth</li>
                            <li>На системе Android 7.0</li>
                        </ul>
                        <div class="wow fadeIn main_price" data-wow-delay="1.4s"> <span>стоимость по акции до
						<script type="text/javascript">
						Data=new Date();
						//Data=(new Date()).getTime() + 2*24*60*60*1000;
						Year=Data.getFullYear(); Month=Data.getMonth(); Day=Data.getDate(); // Преобразуем месяца
						switch (Month){case 0: fMonth="января"; break; case 1: fMonth="февраля"; break; case 2: fMonth="марта"; break; case 3: fMonth="апреля"; break; case 4: fMonth="мая"; break; case 5: fMonth="июня"; break; case 6: fMonth="июля"; break; case 7: fMonth="августа"; break; case 8: fMonth="сентября"; break; case 9: fMonth="октября"; break; case 10: fMonth="ноября"; break; case 11: fMonth="декабря"; break;}// Вывод
						document.write(" "+Day+"&nbsp;"+fMonth+"");
						</script>:</span>
                            <div class="old_price">5300 грн.</div>
                            <div class="new_price">2499 грн.</div>
                            <ul class="main_btn_list">
                                <li><a href="#" class="order_btn"><i>Оформить заказ</i></a></li>
                                <li><a href="#characteristics_section" class="anchor"><i>Подробнее</i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="wow fadeIn main_carousel" data-wow-delay="0.5s">
                        <div class="main_carousel_holder">
                            <div class="carousel_block"> <img class="blocno" src="images/new-slider1.png" alt="image description"> </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

			 <section class="light_section">
            <div class="center">

                <ul class="light_list">
                    <li class="wow fadeIn" data-wow-delay="0.2s">
                        <div class="light_list_block">
                            <div class="visual"> <img src="images/light-2.png" alt="image description"> </div><strong>Доставка 1 день</strong>
                        <p>Отправка товара в день заказа</p>
                        </div>
                    </li>
					 <li class="wow fadeIn" data-wow-delay="0.4s">
                        <div class="light_list_block">
                            <div class="visual"> <img src="images/light-1.png" alt="image description"> </div><strong>Оплата при получении</strong>
                         <p>Возможность проверить товар перед оплатой</p>
                        </div>
                    </li>
					<li class="wow fadeIn" data-wow-delay="0.6s">
                        <div class="light_list_block">
                            <div class="visual"> <img src="images/light-3.png" alt="image description"> </div><strong>Гарантия 3 года</strong>
                            <p>Официальная гарантия от магазина</p>
                        </div>
                    </li>

					<li class="wow fadeIn" data-wow-delay="0.8s">
                        <div class="light_list_block">
                            <div class="visual"> <img src="images/light-4.png" alt="image description"> </div><strong>Тест-драйв 14 дней</strong>
                         <p>Если не понравится, мы вернем вам деньги!</p>
                        </div>
                    </li>
                </ul>
            </div>
        </section>

        <section class="specialoffer_section">
            <div class="center">
                <div class="specialoffer_text">
                    <h2>выгодное<br> спецпредложение<br> только до
					<script type="text/javascript">
						Data=new Date();
						//Data=(new Date()).getTime() + 2*24*60*60*1000;
						Year=Data.getFullYear(); Month=Data.getMonth(); Day=Data.getDate(); // Преобразуем месяца
						switch (Month){case 0: fMonth="января"; break; case 1: fMonth="февраля"; break; case 2: fMonth="марта"; break; case 3: fMonth="апреля"; break; case 4: fMonth="мая"; break; case 5: fMonth="июня"; break; case 6: fMonth="июля"; break; case 7: fMonth="августа"; break; case 8: fMonth="сентября"; break; case 9: fMonth="октября"; break; case 10: fMonth="ноября"; break; case 11: fMonth="декабря"; break;}// Вывод
						document.write(" "+Day+"&nbsp;"+fMonth+"");
						</script>
					</h2>
                    <div class="specialoffer_price_block">
                        <div class="big_sale" style="letter-spacing: -5px;">-53%</div>
                        <div> <span class="old_price">5300 грн.</span> <span class="new_price">2499 грн.</span> </div>
                    </div>
                    <p>Выгодное специальное предложение до конца дня.
                        <br> Закажите многофункциональное зеркало авто-компьютер с камерой заднего вида 10в1 по специальной цене!</p>
                </div>
                <div class="specialoffer_form_holder">
                    <form method="POST" action="send.php" id="lv-formLanding1" onsubmit="if(!this.name.value){this.name.focus(); return false;} if(!this.phone.value){this.phone.focus(); return false;}"> <strong>Оформить заказ</strong>
                        <p>Наш оператор свяжется с Вами для
                            <br> уточнения деталей заказа.</p>
                        <input placeholder="Введите ваше имя" id="lv-formLanding1-fio" class="" name="name" type="text" maxlength="255" required/>
                        <input placeholder="Введите ваш контактный телефон" id="lv-formLanding1-phone" class="phone-mask" name="phone" required type="text" maxlength="25" />
                        <div class="input_sbmt_holder">
							<input type="hidden" name="theme" value="Заказ тoвара">
                            <input type="submit" value="Отправить заявку"> </div><span>Данная заявка Вас ни к чему не обязывает<br> и является конфиденциальной.</span> </form>
                </div>
            </div>
        </section>


        <section class="characteristics_section" id="characteristics_section">
            <div class="center">
			  <center> <h2>Особенности «SMART-MiRROR»</h2> </center>
			    <br>
                <ul class="characteristics_list">
                    <li>
                        <div class="visual"> <img src="images/characteristics-2.jpg" alt=""> </div>
                        <h3>Встроенный GPS-навигатор</h3>
                        <p>Благодаря встроенному в зеркало GPS-навигатору, вам больше не нужно вглядываться в названия улиц и номера домов во время поиска нужного адреса. При приближении к выбранному пункту назначения экран переключится в режим камеры, и нужное место будет отмечено яркой стрелкой. Установленно две навигационные системы: Navitel (лицензия, последней версии) и Goolge Карты. Возможность установить любые другие навигационные системы через PlayMarket.</p>
                    </li>
                    <li>
                        <div class="visual"> <img src="images/characteristics-1.jpg" alt=""> </div>
                        <h3>Видеорегистратор в зеркале</h3>
                        <p>Одним из достоинств «SMART-MIRROR», как видеорегистратора - это качественная фронтальная камера, записывающая в высочайшем формате Full HD с разрешением 1920*1080. При этом угол обзора составляет 170°. Используется качественная матрица, которая делает картинку яркой, сочной, четкой, а угол обзора экрана настолько широкий, что изображение не искажается с водительского сиденья.</p>
                    </li>
                    <li>
                        <div class="visual"> <img src="images/characteristics-3.jpg" alt=""> </div>
                        <h3>Oперационная система Android 7.0</h3>
                        <p>Сенсорный экран размером в 5.5" дюймов на самой лучшей и самой стабильной операционной системе Android 7.0 Nougat. Возможность установить множество приложений из Google PlayMarket, а также смотреть потоковое видео из интернета и осуществлять веб-браузинг по сети.</p>
                    </li>
                    <li>
                        <div class="visual"> <img src="images/characteristics-4.jpg" alt=""> </div>
                        <h3>Камера заднего вида</h3>
                        <p>Поможет Вам не только безопасно припарковаться, но и ведёт постоянную видеосъемку в Full HD 1080p качестве.</p>
                    </li>
                    <li>
                        <div class="visual"> <img src="images/characteristics-5.jpg" alt=""> </div>
                        <h3>Режим "Ночная съемка"</h3>
                        <p>Основой функции "Ночная съемка" служит датчик, улавливающий световые лучи. Информация обрабатывается и проецируется в виде малоцветного образа в определённом масштабе на монитор. Дальность обзора - 350 метров.</p>
                    </li>
                    <li>
                        <div class="visual"> <img src="images/characteristics-6.jpg" alt=""> </div>
                        <h3>Голосовые звонки (Hands free)</h3>
                        <p>Благодаря встроенному модулю Bluetooth версии 5.0, вы можете принимать звонки не отвлекаясь на поиски вашего мобильного телефона.</p>
                    </li>
					  <li>
                        <div class="visual"> <img src="images/characteristics-7.jpg" alt=""> </div>
                        <h3>Full HD 1080p</h3>
                        <p>Используется новаторская технология передачи видео Full HD 1080 Prof (повышенная четкость изображения).</p>
                    </li>
					 <li>
                        <div class="visual"> <img src="images/characteristics-8.jpg" alt=""> </div>
                        <h3>Простое крепление и подключение</h3>
                        <p>Регистратор незаметен – крепление поверх зеркала делает его разрешенным по новому законодательству, а также он не будет легкой добычей для воров (т. е. отсутствует необходимость постоянно снимать и прятать устройство)</p>
                    </li>

                </ul>
            </div>
        </section>
        <section class="for_russia_section">
            <div class="center">
                <div class="visual"> <img src="images/ukraine.png" alt=""> </div><strong>Разработан для дорог <br> Украины, стран СНГ и Европы</strong>
                <p>Зеркало авто-компьютер 10в1 «SMART-MiRROR»&nbsp;полностью адаптированно под внутренний рынок Украины, стран СНГ и Европы. Русскоязычный интерфейс устройства приятно дополняет интуитивно понятный интерфейс. </p>
                <div class="order_holder"> <a href="#" class="order_btn">Заказать в 1 клик</a> </div>
            </div>
        </section>
        <section class="ultra_section">
            <div class="center">
                <h2>Ультратонкий<br> корпус&nbsp;«SMART-MiRROR»</h2>
                <p>Все оригинальные устройства «SMART-MiRROR» производятся на современном, высокотехнологичном оборудовании, что позволило нам создать уникальный, ультратонкий корпус толщиной всего 8 мм, заключивший в себя самый богатый внутренний функционал среди аналогов</p>
                <div class="visual_holder">
                    <div class="visual"> <img class="wow fadeIn" data-wow-delay="0.2s" src="images/ultra-1.png" alt="image description">

                    </div>

                </div>
            </div>
        </section>
        <section class="gallery_section" id="gallery_section">
            <div class="center">
                <p>Фотографии&nbsp;«SMART-MiRROR»</p>
            </div>
            <div class="gallery_carousel">
                   <div>
                    <a href="images/f/03.jpg" class="gallery_carousel_visual" rel="group1"> <img src="images/carousel-3.jpg" alt="image description"> </a>
                </div>
                <div>
                    <a href="images/f/04.jpg" class="gallery_carousel_visual" rel="group1"> <img src="images/carousel-4.jpg" alt="image description"> </a>
                </div>
				<div>
                    <a href="images/f/02.jpg" class="gallery_carousel_visual" rel="group1"> <img src="images/carousel-2.jpg" alt="image description"> </a>
                </div>
                <div>
                    <a href="images/f/10.jpg" class="gallery_carousel_visual" rel="group1"> <img src="images/carousel-10.jpg" alt="image description"> </a>
                </div>
                 <div>
                    <a href="images/f/01.jpg" class="gallery_carousel_visual" rel="group1"> <img src="images/carousel-1.jpg" alt="image description"> </a>
                </div>
                <div>
                    <a href="images/f/05.jpg" class="gallery_carousel_visual" rel="group1"> <img src="images/carousel-5.jpg" alt="image description"> </a>
                </div>
				 <div>
                    <a href="images/f/07.jpg" class="gallery_carousel_visual" rel="group1"> <img src="images/carousel-7.jpg" alt="image description"> </a>
                </div>

				 <div>
                    <a href="images/f/09.jpg" class="gallery_carousel_visual" rel="group1"> <img src="images/carousel-9.jpg" alt="image description"> </a>
                </div>
				<div>
                    <a href="images/f/08.jpg" class="gallery_carousel_visual" rel="group1"> <img src="images/carousel-8.jpg" alt="image description"> </a>
                </div>
				<div>
                    <a href="images/f/06.jpg" class="gallery_carousel_visual" rel="group1"> <img src="images/carousel-6.jpg" alt="image description"> </a>
                </div>

            </div>
        </section>
        <section class="char_comp_section" id="char_comp_section">
            <div class="center">
                <div class="char_comp_block char_block"> <strong>Характеристики</strong> <span></span>
                    <p>"SMART-MiRROR" является продуктом разработки Японских инженеров, которые смогли уместить мощность настоящего планшетного компьютера в одном устройстве без потерь в качестве и производительности. Процессор Ambarella A7 совместно с оптической системой из 6 линз обеспечивают максимально детализированное изображение с четкой детализацией как днем, так и ночью</p>
                    <ul>
                        <li> <span>Дисплей</span> <b>5,5 " IPS, сенсорный экран</b> </li>
                        <li> <span>Разрешение экрана</span> <b>1920x1080</b> </li>
                        <li> <span>Оперативная память</span> <b>2 Гб</b> </li>
                        <li> <span>Накопительная память</span> <b>32 Гб</b> </li>
                        <li> <span>CPU:</span> <b>Четырехъядерный QUAD COREARM</b> </li>
                        <li> <span>Основная камера</span> <b>Full HD 1080 px | 170°</b> </li>
                        <li> <span>Камера заднего вида</span> <b>Full HD 1080 px | 170°</b> </li>
                        <li> <span>Разрешение видео</span> <b>1920 x 1080 px, 30 fps</b> </li>
                        <li> <span>Операционная система</span> <b>Android 7.0 Nougat</b> </li>
                        <li> <span>Система навигации</span> <b>GPS</b> </li>
                        <li> <span>Сеть и коммуникации</span> <b>Wi-Fi, Bluetooth</b> </li>
                        <li> <span>Микрофон</span> <b>Встроенный, шумоподавление</b> </li>
                        <li> <span>Совместная запись</span> <b>2 камеры</b> </li>
                        <li> <span>G-sensor</span> <b>есть</b> </li>
                        <li> <span>Циклическая запись</span> <b>есть</b> </li>
                        <li> <span>Разработка устройства</span> <b>Япония</b> </li>
                        <li> <span>Производство</span> <b>Южная Корея</b> </li>
                    </ul>
                </div>
                <div class="char_comp_block comp_block"> <strong>Комплектация</strong> <span>Простая установка</span>
                    <p>Зеркало бортовой компьютер — накладка на штатное зеркало заднего вида. Установка видеорегистратора возможна на штатном зеркале любой толщины. Зеркало SMART-MiRROR просто фиксируется на месте с помощью двух резиновых держателей, имеющих регулируемую длину.</p>
                    <div class="visual_holder">
                        <div class="visual"> <b>6,5 метровый кабель для тыловой камеры</b> <img src="images/compl-1.jpg" alt="image description"> </div>
                        <div class="visual"> <b>Автомобильное зарядное устройство</b> <img src="images/compl-2.jpg" alt="image description"> </div>
                        <div class="visual"> <b>USB-кабель</b> <img src="images/compl-3.jpg" alt="image description"> </div>
                        <div class="visual" style="padding-left:30px;"> <b>Камера заднего вида</b> <img src="images/compl-4.jpg" alt="image description"> </div>
                        <div class="visual"> <b>Резиновые стяжки - 2 шт.</b> <img src="images/compl-5.jpg" alt="image description"> </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="full_free_section">
            <div class="center">
                <h2 class="wow fadeIn" data-wow-delay="0.2s">Полная свобода<br> с Android 7.0 Nougat</h2>
                <p class="wow fadeIn" data-wow-delay="0.4s">Самая последняя операционная система - Android 7.0 Nougat, основанная на ядре Linux, в сочетании с интуитивно понятным интерфейсом, открывает для Вас полный доступ ко всем приложениям Google Play и всемирной сети. Слушайте любимую музыку, смотрите фильмы, пользуйтесь приложениями и общайтесь с друзьями в социальных сетях. </p>
                <div class="free_list_info">
                    <div class="free_list_holder">
                        <p class="wow fadeIn" data-wow-delay="0.6s">Топ 10 популярных приложений используемых в салоне автомобиля</p>
                        <ul>
                            <li class="wow fadeIn" data-wow-delay="0.8s">Whats App</li>
                            <li class="wow fadeIn" data-wow-delay="0.9s">Facebook</li>
                            <li class="wow fadeIn" data-wow-delay="1s">Яндекс карты</li>
                            <li class="wow fadeIn" data-wow-delay="1.1s">Waze</li>
                            <li class="wow fadeIn" data-wow-delay="1.2s">2GIS</li>
                            <li class="wow fadeIn" data-wow-delay="1.3s">Яндекс. Навигатор</li>
                            <li class="wow fadeIn" data-wow-delay="1.4s">Google Maps</li>
                            <li class="wow fadeIn" data-wow-delay="1.5s">BlaBlaCar</li>
                            <li class="wow fadeIn" data-wow-delay="1.6s">Youtube</li>
                            <li class="wow fadeIn" data-wow-delay="1.7s">Navitel</li>
                        </ul> <a href="#" class="order_btn">Заказать в 1 клик</a> </div>
                    <div class="wow bounceInDown visual" data-wow-delay="2s"> <img src="images/interface-1.png?2" alt="image description"> </div>
                </div>
            </div>
            <div class="wow fadeIn after_bg" data-wow-delay="2.8s"></div>
        </section>

        <section class="reliable_section">
            <div class="center">
                <h2>Надежный помощник</h2>
                <ul class="characteristics_list">
                    <li>
                        <div class="visual"> <img src="images/reliable-1.jpg" alt=""> </div>
                        <h3>Защитит от автоподстав,<br> Поможет доказать Вашу правоту</h3>
                        <p>Только четкое изображение Full HD, в сочетании с синхронной записью DualCam (+камера заднего вида) и записью траектории движения GPS, поможет защитить Вас от автоподстав, неправомерных действий сотрудников ГАИ и, самое главное, доказать вашу правоту в суде.</p>
                    </li>
                    <li>
                        <div class="visual"> <img src="images/reliable-2.jpg" alt=""> </div>
                        <h3>Не отвлекает от дороги<br> и не мешает обзору</h3>
                        <p>«GOLD-FUSION»&nbsp;обеспечивает безопасное и комфортное вождение. Ультратонкий корпус устройства выполнен в универсальном компактном размере, идеально сочетающемся с салонами различных автомобилей. Зеркало не загромождает салон и не закрывает обзор водителя, а специальный зеркальный материал обеспечивает четкий задний обзор.</p>
                    </li>
                </ul>
            </div>
        </section>
        <section class="dualcam_section dualcam_section_info">
            <div class="center">
                <p>С 25 апреля 2016 года запись с видеорегистратора является неоспоримым доказательством в суде. </p>
            </div>
        </section>
        <section class="rewiews_section" id="rewiews_section">
            <div class="center">
                <h2>Отзывы<br> автовладельцев</h2>
                <div class="reviews_carousel">
                    <div class="reviews_carousel_block">
                        <div class="visual"> <img src="images/reviewer-1.png" alt="image description"> </div>
                        <p>Очень красивое зеркало. Подключается легко. Вторую камеру поставил под стекло в багажнике, качество супер. В парковочной камере есть метки. Вечером все видно. На экране можно показать картинку сразу с 2-х камер. Спасибо.</p>
                        <div class="reviewer_info"> <span>Игорь Еремеев</span>, <span>Киев</span>, 32 года Предприниматель </div>
                        <div class="stars_list" style="display: inline-flex;"> <img src="images/stars.png" alt="image description"> <img src="images/stars.png" alt="image description"> <img src="images/stars.png" alt="image description"> <img src="images/stars.png" alt="image description"> <img src="images/stars.png" alt="image description"> </div>
                    </div>
                    <div class="reviews_carousel_block">
                        <div class="visual"> <img src="images/reviewer-2.png" alt="image description"> </div>
                        <p>До этого был обычный регистратор и отдельно планшет. Позже кое-как воткнул еще и камеру через весь салон. В прикуривателе зарядка телефона и FM трансмитер... Рад что все благополучно сменил Вашим зеркалом. Материал и оптика действительно хороши.</p>
                        <div class="reviewer_info"> <span>Михаил Брагин</span>, Харьков, 34 года Экспедитор </div>
                        <div class="stars_list" style="display: inline-flex;"> <img src="images/stars.png" alt="image description"> <img src="images/stars.png" alt="image description"> <img src="images/stars.png" alt="image description"> <img src="images/stars.png" alt="image description"> <img src="images/stars.png" alt="image description"> </div>
                    </div>
                    <div class="reviews_carousel_block">
                        <div class="visual"> <img src="images/reviewer-3.png" alt="image description"> </div>
                        <p>Cпасибо за посылку и оперативную работу. Копал интернет неделю, чтобы найти что-нибудь вменяемое по адекватной цене. Очень рад, что попал именно на ваше зеркало. А за камеру заднего вида отдельный поклон!</p>
                        <div class="reviewer_info"> <span>Алексей Горшенев</span>, Кривой Рог, 29 лет Персональный тренер </div>
                        <div class="stars_list" style="display: inline-flex;"> <img src="images/stars.png" alt="image description"> <img src="images/stars.png" alt="image description"> <img src="images/stars.png" alt="image description"> <img src="images/stars.png" alt="image description"> <img src="images/stars.png" alt="image description"> </div>
                    </div>
                    <div class="reviews_carousel_block">
                        <div class="visual"> <img src="images/reviewer-4.png" alt="image description"> </div>
                        <p>Благодарю всю вашу команду за вашу работу и этот "компьютер"! Работает отлично. Русский интерфейс и камера паркинга порадовали. Картинку пишет отличную. Спасибо. </p>
                        <div class="reviewer_info"> <span>Сергей Краховский</span>, Днепр, 50 лет Дальнобойщик </div>
                        <div class="stars_list" style="display: inline-flex;"> <img src="images/stars.png" alt="image description"> <img src="images/stars.png" alt="image description"> <img src="images/stars.png" alt="image description"> <img src="images/stars.png" alt="image description"> <img src="images/stars.png" alt="image description"> </div>
                    </div>
                    <div class="reviews_carousel_block">
                        <div class="visual"> <img src="images/reviewer-5.png" alt="image description"> </div>
                        <p>Рассказали как автоворы выбивают окна в автомобилях и срывают планшеты, регистраторы и телефоны - не стал рисковать машиной босса и приобрел Ваш "бортовой компьютер". Расстроен только одним - что не купил сразу второй для своей машины )</p>
                        <div class="reviewer_info"> <span>Станислав Власов</span>, Запорожье, 49 лет Персональный водитель </div>
                        <div class="stars_list" style="display: inline-flex;"> <img src="images/stars.png" alt="image description"> <img src="images/stars.png" alt="image description"> <img src="images/stars.png" alt="image description"> <img src="images/stars.png" alt="image description"> <img src="images/stars.png" alt="image description"> </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="happy_recall_section">
            <div class="center">
                <p>Мы будем рады получить Ваш отзыв. Оставляйте свои комментарии на нашей почте или по бесплатному телефону: </p><a href="mailto:support@auto-quidux.com.ua"><span class="__cf_email__">support@auto-keep.com.ua</span></a> </div>
        </section>

        <section class="specialoffer_section">
            <div class="center">
                <div class="specialoffer_text">
                    <h2>выгодное<br> спецпредложение<br> только до <script type="text/javascript">
						Data=new Date();
						//Data=(new Date()).getTime() + 2*24*60*60*1000;
						Year=Data.getFullYear(); Month=Data.getMonth(); Day=Data.getDate(); // Преобразуем месяца
						switch (Month){case 0: fMonth="января"; break; case 1: fMonth="февраля"; break; case 2: fMonth="марта"; break; case 3: fMonth="апреля"; break; case 4: fMonth="мая"; break; case 5: fMonth="июня"; break; case 6: fMonth="июля"; break; case 7: fMonth="августа"; break; case 8: fMonth="сентября"; break; case 9: fMonth="октября"; break; case 10: fMonth="ноября"; break; case 11: fMonth="декабря"; break;}// Вывод
						document.write(" "+Day+"&nbsp;"+fMonth+"");
						</script>
					</h2>
                    <div class="specialoffer_price_block">
                        <div class="big_sale" style="letter-spacing: -5px;">-53%</div>
                        <div> <span class="old_price">5300 грн.</span> <span class="new_price">2499 грн.</span> </div>
                    </div>
                    <p>Выгодное специальное предложение до конца дня.
                        <br> Закажите многофункциональное зеркало авто-компьютер с камерой заднего вида 10в1 по специальной цене!</p>
                </div>
                <div class="specialoffer_form_holder">
                    <form method="POST" action="send.php" id="lv-formLanding3" onsubmit="if(!this.name.value){this.name.focus(); return false;} if(!this.phone.value){this.phone.focus(); return false;}"> <strong>Оформить заказ</strong>
                        <p>Наш оператор свяжется с Вами для
                            <br> уточнения деталей заказа.</p>
                        <input placeholder="Введите ваше имя" id="lv-formLanding3-fio" class="" name="name" type="text" maxlength="255" required/>
                        <input placeholder="Введите ваш контактный телефон" id="lv-formLanding3-phone" class="phone-mask" name="phone" required type="text" maxlength="25" />
                        <div class="input_sbmt_holder">
							<input type="hidden" name="theme" value="Заказ тoвара">
                            <input type="submit" value="Отправить заявку"> </div><span>Данная заявка Вас ни к чему не обязывает<br> и является конфиденциальной.</span> </form>
                </div>
            </div>
        </section>
        <footer>
            <div class="center">
                <div class="free_call">
                    <p>Остались вопросы? Звоните!</p>
                </div><a href="#" class="call_back_btn"><span>Заказать обратный звонок</span></a>
                <p class="identificational_block"> <span></span> <span></span> <span><span style="color: rgb(78, 89, 93); font-family: "Helvetica Neue", Helvetica, Verdana, Arial, sans-serif; font-size: 14px; text-align: start; display: inline !important;"></span></span> </p>
                <div class="copy">Copyright © 2018 GOLD-FUSION Inc. All rights reserved.</div>
                <p id="offer-block"><a id="offer-block-link" href="politics.html" target="_blank">Условия соглашения и политика конфиденциальности</a></p>
            </div>
        </footer>

        <div class="popup_holder" id="popup1" style="display: none">
            <div class="bg">&nbsp;</div>
            <div class="popup"> <a href="#" class="close_popup"></a>
                <div class="popup_title"> <strong>Оформить заказ</strong>
                    <p>Наш оператор свяжется с Вами для
                        <br> уточнения деталей заказа. </p>
                </div>
                <div class="popup_content">
                    <form method="POST" action="send.php" id="lv-formLanding4" class="popup_form1" onsubmit="if(!this.name.value){this.name.focus(); return false;} if(!this.phone.value){this.phone.focus(); return false;}">
                        <fieldset>
                            <div class="popup_input_holder">
                                <input placeholder="Введите ваше имя" id="lv-formLanding4-fio" class="" name="name" type="text" maxlength="255" required/> </div>
                            <div class="popup_input_holder">
                                <input placeholder="Введите ваш контактный телефон" id="lv-formLanding4-phone" class="phone-mask" name="phone" required type="text" maxlength="25" /> </div>
                            <div class="popup_submit_holder">
								<input type="hidden" name="theme" value="Заказ тoвара">
                                <input type="submit" value="Отправить заказ"> </div>
                        </fieldset>
                    </form>
                    <p>Мы гарантируем конфиденциальность данных.
                        <br> Все данные передаются исключительно
                        <br> специалисту службы заказов.</p>
                </div>
            </div>
        </div>
        <div class="popup_holder" id="popup2" style="display: none">
            <div class="bg">&nbsp;</div>
            <div class="popup"> <a href="#" class="close_popup"></a>
                <div class="popup_title"> <strong>Заказать звонок</strong>
                    <p>Ведущий специалист компании свяжется
                        <br> с вами в ближайшее время</p>
                </div>
                <div class="popup_content">
                    <form method="POST" action="send.php" id="lv-formLanding5" class="popup_form1" onsubmit="if(!this.name.value){this.name.focus(); return false;} if(!this.phone.value){this.phone.focus(); return false;}">
                        <fieldset>
                            <div class="popup_input_holder">
                                <input placeholder="Введите ваше имя" id="lv-formLanding5-fio" class="" name="name" type="text" maxlength="255" required/> </div>
                            <div class="popup_input_holder">
                                <input placeholder="Введите ваш контактный телефон" id="lv-formLanding5-phone" class="phone-mask" name="phone" required type="text" maxlength="25" /> </div>
                            <div class="popup_submit_holder">
								<input type="hidden" name="theme" value="Заказ звoнка">
                                <input type="submit" value="Перезвоните мне"> </div>
                        </fieldset>
                    </form>
                    <p>Мы гарантируем конфиденциальность данных.
                        <br> Все данные передаются исключительно
                        <br> специалисту службы заказов.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="popup_holder" id="popup4" style="display: none">
        <div class="bg">&nbsp;</div>
        <div class="popup text_popup"> <a href="#" class="close_popup"></a>
            <div class="popup_title"> <strong>Доставка и оплата</strong> </div>
            <div class="popup_content">
                <p>Заказы доставляются компанией "Новая Почта". Оплата за товар - при получении на почте! После отправки вам будет отправлено СМС уведомление с номером накладной заказа, путь посылки можно отслеживать онлайн на сайте "Новая Почта".</p>
                <p>Что необходимо указать при заказе? ФИО (полностью) и Ваш контактный телефон, после чего менеджер свяжется с вами в течении 15 мин.</p>
                <p>Срок доставки: 1-2 дня.</p>
                <p>Стоимость доставки: 54 грн.</p>
            </div>
        </div>
    </div>
    <div class="popup_holder" id="popup5" style="display: none">
        <div class="bg">&nbsp;</div>
        <div class="popup text_popup"> <a href="#" class="close_popup"></a>
            <div class="popup_title"> <strong>Гарантийное обслуживание</strong> </div>
            <div class="popup_content">
                <p>На все устройства, купленные у нас в магазине, распространяются гарантийные обязательства.</p>
                <p>Гарантийное обслуживание включает в себя бесплатный ремонт или замену вышедших из строя комплектующих в течение 3 года с момента приобретения изделия.</p>
                <p>Гарантия распространяется только на элементную базу устройства. Гарантия предоставляется в том случае, если проявляется дефект изготовителя. В рамках гарантийного обслуживания мы восстанавливаем устройство, либо меняем его на новое. В крайнем случае (если в наличии нет устройства этого модельного ряда) возвращаем полную стоимость. В любом случае при предъявлении претензии к качеству устройства будет проведена экспертиза. После экспертизы мы извещаем клиента о наступлении гарантийного или не гарантийного случая.</p>
                <p>Срок гарантийного ремонта определяется степенью неисправности изделия и может доходить до 15 (пятнадцати) календарных дней, с момента передачи устройства в сервисный центр, если иной срок не определен письменным соглашением. Претензии по комплектации и внешнему виду изделия принимаются только при его покупке.</p>
            </div>
        </div>
    </div>
    </div>
    <script src="js/jquery.main.js"></script>
    <script src="js/slick.min.js?2"></script>
    <script src="js/fancybox/jquery.fancybox.pack.js"></script>
    <link href="comeback/ComebackerAlert.css" rel="stylesheet" type="text/css" />
    <script src="comeback/ComebackerAlert.js?v=2" type="text/javascript"></script>
    <?php if (!isset($_SERVER['HTTP_USER_AGENT']) || stripos($_SERVER['HTTP_USER_AGENT'], 'Speed Insights')===false): ?>
        <script src="https://api-maps.yandex.ru/2.0-stable/?load=package.standard&lang=ru-RU" type="text/javascript"></script>
        <?php endif; ?>
            <script src="js/delivery.js" type="text/javascript"></script>
            <script>
                function randomInteger(min, max) {
                    var rand = min + Math.random() * (max + 1 - min);
                    rand = Math.floor(rand);
                    return rand;
                }
            </script>
            <link href="https://fonts.googleapis.com/css?family=Fira+Sans" rel="stylesheet">

            <link rel="stylesheet" href="css/animate.css">
            <link rel="stylesheet" href="css/slick.css">
            <link rel="stylesheet" href="js/fancybox/jquery.fancybox.css">
            <script src="js/wow.min.js"></script>
            <script>
                if ($(window).width() > 768) {
                    new WOW().init();
                };
            </script>
            <script src="js/maskinput.js"></script>
            <script type="text/javascript">
                jQuery(function($) {
                    $(".phone-mask").mask("+38(099)999-99-99");
                });
            </script>
</body>

</html>