<?php
function simpleup_register_shortcodes() {
    add_shortcode('simpleup_header', 'simpleup_header_shortcode');
    add_shortcode('simpleup_hero', 'simpleup_hero_shortcode');
    add_shortcode('simpleup_stats', 'simpleup_stats_shortcode');
    add_shortcode('simpleup_problems', 'simpleup_problems_shortcode');
    add_shortcode('simpleup_solutions', 'simpleup_solutions_shortcode');
    add_shortcode('simpleup_industries', 'simpleup_industries_shortcode');
    add_shortcode('simpleup_contact_form', 'simpleup_contact_form_shortcode');
    add_shortcode('simpleup_cases', 'simpleup_cases_shortcode');
    add_shortcode('simpleup_reviews', 'simpleup_reviews_shortcode');
    add_shortcode('simpleup_services', 'simpleup_services_shortcode');
    add_shortcode('simpleup_process', 'simpleup_process_shortcode');
    add_shortcode('simpleup_about', 'simpleup_about_shortcode');
    add_shortcode('simpleup_team', 'simpleup_team_shortcode');
    add_shortcode('simpleup_guarantees', 'simpleup_guarantees_shortcode');
    add_shortcode('simpleup_guide_form', 'simpleup_guide_form_shortcode');
    
    add_shortcode('simpleup_full', 'simpleup_full_shortcode');
}

add_action('init', 'simpleup_register_shortcodes');

function simpleup_img($filename) {
    return get_template_directory_uri() . '/img/' . $filename;
}

function simpleup_header_shortcode($atts) {
    ob_start();
    ?>
    <header>
        <div class="container">
            <div class="header">
                <a href="" class="logo">SimpleUp</a>
                <div style="display: flex; gap: 40px;">
                    <div style="display: flex;">
                        <a href="#onas">О нас</a>
                        <img style="margin-left: 6px; cursor: pointer;" src="<?php echo simpleup_img('Vector (2).svg'); ?>" alt="">
                    </div>
                    <div style="display: flex;">
                        <a href="#uslugi">Услуги</a>
                        <img style="margin-left: 6px; cursor: pointer;" src="<?php echo simpleup_img('Vector (2).svg'); ?>" alt="">
                    </div>
                    <a href="">Блог</a>
                    <a href="#cases">SEO Кейсы</a>
                    <a href="">Контакты</a>
                </div>
                <div class="contact">
                    <a href="" style="font-size: 20px;">+7 950 853 17 84</a>
                    <div style="margin-left: 20px; display: flex; gap: 6px;">
                        <a style="display: flex; align-items: center;" href=""><img class="btn" src="<?php echo simpleup_img('XMLID_497_.svg'); ?>" alt=""></a>
                        <a style="display: flex; align-items: center;" href=""><img class="btn" src="<?php echo simpleup_img('Vector.svg'); ?>" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <?php
    return ob_get_clean();
}

function simpleup_hero_shortcode($atts) {
    $atts = shortcode_atts(array(
        'title' => 'Увеличиваем продажи и помогаем брендам полностью реализовать потенциал digital-коммуникации',
        'description' => 'Смотрите самые актуальные кейсы по продвижению от нашей digital-компании',
        'button_text' => 'Смотреть кейсы'
    ), $atts);
    
    ob_start();
    ?>
    <section class="block1">
        <div class="container">
            <div class="b1">
                <img style="width: 154px;" src="<?php echo simpleup_img('Frame 2609602.svg'); ?>" alt="">
                <h1 class="global-text"><?php echo esc_html($atts['title']); ?></h1>
                <p style="color: white;"><?php echo esc_html($atts['description']); ?></p>
                <a class="button" href="#cases"><?php echo esc_html($atts['button_text']); ?></a>
            </div>
            <?php echo do_shortcode('[simpleup_stats]'); ?>
        </div>
        <img class="background" src="<?php echo simpleup_img('Rectangle 1237 (1).svg'); ?>" alt="">
    </section>
    <?php
    return ob_get_clean();
}

function simpleup_stats_shortcode($atts) {
    $atts = shortcode_atts(array(
        'clients' => '95',
        'traffic' => '95',
        'leads' => '95'
    ), $atts);
    
    ob_start();
    ?>
    <div class="card-spawn">
        <div class="card">
            <h1 class="procent" data-target="<?php echo esc_attr($atts['clients']); ?>">0%</h1>
            <p>клиентов остаются с нами надолго (отток &lt;5% в год)</p>
        </div>
        <div class="card">
            <h1 class="procent" data-target="<?php echo esc_attr($atts['traffic']); ?>">0%</h1>
            <p>средний рост трафика за 3-4 месяца - +%</p>
        </div>
        <div class="card">
            <h1 class="procent" data-target="<?php echo esc_attr($atts['leads']); ?>">0%</h1>
            <p>рост лидов / конверсий - +%</p>
        </div>
    </div>
    <?php
    return ob_get_clean();
}

function simpleup_problems_shortcode($atts) {
    ob_start();
    ?>
    <section class="block2">
        <div class="container">
            <h1>Почему Ваш бизнес теряет новых клиентов и бюджет?</h1>
            <div class="altspawn">
                <div class="alt-card">
                    <h2>Сайт не приносит клиентов</h2>
                    <p>Он есть, но заявок нет</p>
                    <img class="image" src="<?php echo simpleup_img('image1.svg'); ?>" alt="">
                </div>
                <div class="alt-card2">
                    <h2>Реклама сливает бюджет</h2>
                    <p>Траты есть, продаж почти нет</p>
                </div>
                <div class="alt-card">
                    <h2>SEO без результатов</h2>
                    <p>Подрядчики обещали рост, но трафика нет</p>
                    <img class="image" src="<?php echo simpleup_img('image2.svg'); ?>" alt="">
                </div>
                <div class="alt-card2">
                    <h2>Хаос в бизнес-процессах</h2>
                    <p>CRM, сайт и реклама не связаны</p>
                </div>
                <div class="alt-card">
                    <h2>Сомнения и недоверие</h2>
                    <p>А вдруг снова не получиться?</p>
                    <img class="image" src="<?php echo simpleup_img('image3.svg'); ?>" alt="">
                </div>
                <div class="alt-card2">
                    <h2>Нет стратегии</h2>
                    <p>Все делается кусками, без общей цели</p>
                </div>
            </div>
        </div>
    </section>
    <?php
    return ob_get_clean();
}

function simpleup_solutions_shortcode($atts) {
    ob_start();
    ?>
    <section class="block3">
        <div class="container">
            <h1 class="fixh">Наши решения, которые реально работают</h1>
            <div class="emailspawn">
                <div class="email-cards-container">
                    <div class="altemail-card"></div>
                    <div class="email-card">
                        <div style="display: flex;">
                            <h2>Комплексное продвижение</h2>
                            <svg class="plus1" width="56" viewBox="0 0 73 73" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path class="plus" d="M42.2502 5.25064C42.2502 -1.75028 30.2503 -1.75035 30.2503 5.25049V30.2518H5.25026C-1.75015 30.2518 -1.75002 42.2518 5.25026 42.2518H30.2503V67.2518C30.2503 74.2518 42.2503 74.2518 42.2503 67.2518V42.2518H67.2503C74.2503 42.2518 74.2503 30.2518 67.2503 30.2518H42.2503L42.2502 5.25064Z" />
                            </svg>
                        </div>
                        <p>Мы делаем глубокий анализ и системное SEO-продвижение, чтобы твой бизнес стабильно рос в поиске. Технично, системно, с реальными результатами.
                        SEO, реклама и контент работают вместе, а не по отдельности.</p>
                    </div>
                </div>
                <div class="email-cards-container">
                    <div class="altemail-card"></div>
                    <div class="email-card">
                        <div style="display: flex;">
                            <h2>ИТ-интеграции</h2>
                            <svg class="plus1" width="56" viewBox="0 0 73 73" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path class="plus" d="M42.2502 5.25064C42.2502 -1.75028 30.2503 -1.75035 30.2503 5.25049V30.2518H5.25026C-1.75015 30.2518 -1.75002 42.2518 5.25026 42.2518H30.2503V67.2518C30.2503 74.2518 42.2503 74.2518 42.2503 67.2518V42.2518H67.2503C74.2503 42.2518 74.2503 30.2518 67.2503 30.2518H42.2503L42.2502 5.25064Z" />
                            </svg>
                        </div>
                        <p>Внедряем IT-решения под задачи: автоматизация, интеграции, CRM. Мы не делаем вид, а реально упрощаем процессы и ускоряем бизнес и он начинает работать как единое целое.</p>
                    </div>
                </div>
                <div class="email-cards-container">
                    <div class="altemail-card"></div>
                    <div class="email-card">
                        <div style="display: flex;">
                            <h2>Современные сайты</h2>
                            <svg class="plus1" width="56" viewBox="0 0 73 73" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path class="plus" d="M42.2502 5.25064C42.2502 -1.75028 30.2503 -1.75035 30.2503 5.25049V30.2518H5.25026C-1.75015 30.2518 -1.75002 42.2518 5.25026 42.2518H30.2503V67.2518C30.2503 74.2518 42.2503 74.2518 42.2503 67.2518V42.2518H67.2503C74.2503 42.2518 74.2503 30.2518 67.2503 30.2518H42.2503L42.2502 5.25064Z" />
                            </svg>
                        </div>
                        <p>Разрабатываем сайты под бизнес-цели: дизайн, удобство, скорость работы. Всё так, чтобы сайт приносил клиентов, а не просто существовал.</p>
                    </div>
                </div>
                <div class="email-cards-container">
                    <div class="altemail-card"></div>
                    <div class="email-card">
                        <div style="display: flex;">
                            <h2>Управляемая реклама</h2>
                            <svg class="plus1" width="56" viewBox="0 0 73 73" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path class="plus" d="M42.2502 5.25064C42.2502 -1.75028 30.2503 -1.75035 30.2503 5.25049V30.2518H5.25026C-1.75015 30.2518 -1.75002 42.2518 5.25026 42.2518H30.2503V67.2518C30.2503 74.2518 42.2503 74.2518 42.2503 67.2518V42.2518H67.2503C74.2503 42.2518 74.2503 30.2518 67.2503 30.2518H42.2503L42.2502 5.25064Z" />
                            </svg>
                        </div>
                        <p>Настраиваем рекламу, которая даёт заявки и звонки, окупающие вложения. Работаем в цифрах, делаем оптимизацию и добиваемся прогнозируемого результата. Каждый рубль подконтролен, каждая заявка считается.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
    return ob_get_clean();
}

function simpleup_industries_shortcode($atts) {
    ob_start();
    ?>
    <section class="block4">
        <div class="container">
            <h1>Отраслевая экспертиза</h1>
        </div>
        <div class="karusel" id="karusel">
            <div style="margin-left: 160px;" class="global-block-karusel">
                <h2>Медицина</h2>
                <div class="container-karusel">
                    <img class="block-karusel" src="<?php echo simpleup_img('Mask group.svg'); ?>" alt="">
                    <p>Услуги, которые были использованы</p>
                </div>
            </div>
            <div class="global-block-karusel">
                <h2>Недвижимость</h2>
                <div class="container-karusel">
                    <img class="block-karusel" src="<?php echo simpleup_img('Mask group.svg'); ?>" alt="">
                    <p>Услуги, которые были использованы</p>
                </div>
            </div>
            <div class="global-block-karusel">
                <h2>Доставка</h2>
                <div class="container-karusel">
                    <img class="block-karusel" src="<?php echo simpleup_img('Mask group.svg'); ?>" alt="">
                    <p>Услуги, которые были использованы</p>
                </div>
            </div>
            <div class="global-block-karusel">
                <h2>Медицина</h2>
                <div class="container-karusel">
                    <img class="block-karusel" src="<?php echo simpleup_img('Mask group.svg'); ?>" alt="">
                    <p>Услуги, которые были использованы</p>
                </div>
            </div>
            <div class="global-block-karusel">
                <h2>Доставка</h2>
                <div class="container-karusel">
                    <img class="block-karusel" src="<?php echo simpleup_img('Mask group.svg'); ?>" alt="">
                    <p>Услуги, которые были использованы</p>
                </div>
            </div>
            <div class="global-block-karusel">
                <h2>Медицина</h2>
                <div class="container-karusel">
                    <img class="block-karusel" src="<?php echo simpleup_img('Mask group.svg'); ?>" alt="">
                    <p>Услуги, которые были использованы</p>
                </div>
            </div>
        </div>
    </section>
    <?php
    return ob_get_clean();
}

function simpleup_contact_form_shortcode($atts) {
    $atts = shortcode_atts(array(
        'title' => 'ХОТИТЕ УЗНАТЬ, СКОЛЬКО БУДЕТ СТОИТЬ ПРОДВИЖЕНИЕ ВАШЕГО САЙТА?',
        'description' => 'Обратитесь к нам за индивидуальным расчетом.',
        'button_text' => 'УЗНАТЬ СТОИМОСТЬ ПРОДВИЖЕНИЯ'
    ), $atts);
    
    ob_start();
    ?>
    <main class="forma">
        <div class="container">
            <div class="content-wrapper">
                <div class="text-section">
                    <h1><?php echo esc_html($atts['title']); ?></h1>
                    <p><?php echo esc_html($atts['description']); ?></p>
                </div>
                <div class="form-section">
                    <form action="<?php echo admin_url('admin-post.php'); ?>" method="post">
                        <input type="hidden" name="action" value="simpleup_contact_form">
                        <?php wp_nonce_field('simpleup_contact_nonce', 'simpleup_nonce'); ?>
                        <div class="former">
                            <input type="text" name="name" placeholder="Имя" required>
                            <input type="tel" name="phone" placeholder="+7 (999) 999-99-99" required>
                            <input type="url" name="website" placeholder="Ссылка на ваш сайт">
                            <div class="contact-method">
                                <select name="contact_method" required style="color: #8A78A1;">
                                    <option value="" disabled selected>Как с вами связаться</option>
                                    <option value="phone">Телефон</option>
                                    <option value="whatsapp">WhatsApp</option>
                                    <option value="telegram">Telegram</option>
                                </select>
                            </div>
                        </div>
                        <label class="privacy-notice" for="privacy-checkbox">
                            <input type="checkbox" id="privacy-checkbox" name="privacy" required>
                            <span class="custom-checkbox"></span>
                            Нажимая на кнопку вы соглашаетесь с политикой конфиденциальности
                        </label>
                        <button type="submit" class="button"><?php echo esc_html($atts['button_text']); ?></button>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <?php
    return ob_get_clean();
}

function simpleup_cases_shortcode($atts) {
    ob_start();
    ?>
    <section class="block5" id="cases">
        <div class="container">
            <h1>Кейсы по SEO продвижению сайтов</h1>
            <div class="cases">
                <p class="case">Все кейсы</p>
                <p class="case">Автомобили</p>
                <p class="case">Салон красоты</p>
                <p class="case">Юридические услуги</p>
                <p class="case">Мебель</p>
                <p class="case">Медицина</p>
                <p class="case">Ювелирные изделия</p>
                <p class="case">Консалтинг</p>
                <p class="case">Книги</p>
                <p class="case">Новости</p>
                <p class="case">Стройматериалы</p>
                <p class="case">Косметика</p>
                <p class="case">Страховые компании</p>
                <p class="case">Автосалоны</p>
                <p class="case">Кафе, рестораны</p>
                <p class="case">Гостиницы</p>
                <p class="case">Цветы</p>
                <p class="case">Продукты</p>
                <p class="case">Транспорт</p>
                <p class="case">Одежда</p>
                <p class="case">Производства</p>
                <p class="case">Сельхозтехника</p>
                <p class="case">Типография</p>
                <p class="case">Аптеки</p>
                <p class="case">Корпоративные сайты</p>
                <p class="case">Порталы</p>
                <p class="case">E-Commerce</p>
            </div>
            <div class="casecontent">
                <div class="casecards">
                    <div class="casecard">
                        <div class="casecard-frame">
                            <img src="<?php echo simpleup_img('Frame1.svg'); ?>" alt="">
                            <div class="casecard-menu">
                                <div class="casesmini">
                                    <p class="casemini">Транспорт</p>
                                    <p class="casemini">E-Commerce</p>
                                </div>
                                <div>
                                    <h4>Автомобильные прицепы</h4>
                                    <h2>Как получить 80% органического трафика</h2>
                                </div>
                                <button class="buttoncase">СМОТРЕТЬ КЕЙС</button>
                            </div>
                        </div>
                        <div class="casecard-info">
                            <div class="info-card">
                                <div class="arrow">
                                    <img src="<?php echo simpleup_img('arrow.svg'); ?>" alt="">
                                    <h2>70%</h2>
                                </div>
                                <p>ключевых запросов в ТОП-10 за 3–4 месяца</p>
                            </div>
                            <div class="info-card">
                                <div class="arrow">
                                    <img src="<?php echo simpleup_img('arrow.svg'); ?>" alt="">
                                    <h2>80% +</h2>
                                </div>
                                <p>запросов остаются в ТОПе через 5–7 месяцев</p>
                            </div>
                            <div class="info-card">
                                <div class="arrow">
                                    <img src="<?php echo simpleup_img('arrow.svg'); ?>" alt="">
                                    <h2>80%</h2>
                                </div>
                                <p>трафика на сайт — из поисковых систем (Яндекс и Google)</p>
                            </div>
                        </div>
                    </div>
                    <div class="casecard">
                        <div class="casecard-frame">
                            <img src="<?php echo simpleup_img('Frame2.svg'); ?>" alt="">
                            <div class="casecard-menu">
                                <div class="casesmini">
                                    <p class="casemini">Сельхозтехника</p>
                                    <p class="casemini">Стройматериалы</p>
                                </div>
                                <div>
                                    <h4>Бурение</h4>
                                    <h2>Как увеличить конверсию в 12 раз</h2>
                                </div>
                                <button class="buttoncase">СМОТРЕТЬ КЕЙС</button>
                            </div>
                        </div>
                        <div class="casecard-info">
                            <div class="info-card">
                                <div class="arrow">
                                    <img src="<?php echo simpleup_img('arrow.svg'); ?>" alt="">
                                    <h2>105</h2>
                                </div>
                                <p>ключевых запросов<br>в ТОП-5 за 4 месяца.</p>
                            </div>
                            <div class="info-card">
                                <div class="arrow">
                                    <img src="<?php echo simpleup_img('arrow.svg'); ?>" alt="">
                                    <h2>В 5 раз</h2>
                                </div>
                                <p>увеличился целевой трафик</p>
                            </div>
                            <div class="info-card">
                                <div class="arrow">
                                    <img src="<?php echo simpleup_img('arrow.svg'); ?>" alt="">
                                    <h2>37</h2>
                                </div>
                                <p>ключевых запросов<br>в ТОП-3 за 4 месяца.</p>
                            </div>
                        </div>
                    </div>
                    <div class="casecard">
                        <div class="casecard-frame">
                            <img src="<?php echo simpleup_img('Frame3.svg'); ?>" alt="">
                            <div class="casecard-menu">
                                <div class="casesmini">
                                    <p class="casemini">Консалтинг</p>
                                    <p class="casemini">Производства</p>
                                </div>
                                <div>
                                    <h4>Аутсорсинг персонала</h4>
                                    <h2>Как лейдинг вывести в ТОП-3 за 3 месяца</h2>
                                </div>
                                <button class="buttoncase">СМОТРЕТЬ КЕЙС</button>
                            </div>
                        </div>
                        <div class="casecard-info">
                            <div class="info-card">
                                <div class="arrow">
                                    <img src="<?php echo simpleup_img('arrow.svg'); ?>" alt="">
                                    <h2>3</h2>
                                </div>
                                <p>ключевых запросов из 6-ти в ТОП-3.</p>
                            </div>
                            <div class="info-card">
                                <div class="arrow">
                                    <img src="<?php echo simpleup_img('arrow.svg'); ?>" alt="">
                                    <h2>2</h2>
                                </div>
                                <p>ключевых запросов из 6-ти в ТОП-10.</p>
                            </div>
                            <div class="info-card">
                                <div class="arrow">
                                    <img src="<?php echo simpleup_img('arrow.svg'); ?>" alt="">
                                    <h2>50%</h2>
                                </div>
                                <p>конверсии за 3 месяца.</p>
                            </div>
                        </div>
                    </div>
                    <div class="casecard">
                        <div class="casecard-frame">
                            <img src="<?php echo simpleup_img('Frame4.svg'); ?>" alt="">
                            <div class="casecard-menu">
                                <div class="casesmini">
                                    <p class="casemini">Медицина</p>
                                    <p class="casemini">E-Commerce</p>
                                </div>
                                <div>
                                    <h4>Мед центр</h4>
                                    <h2>Как получить 80% органического трафика </h2>
                                </div>
                                <button class="buttoncase">СМОТРЕТЬ КЕЙС</button>
                            </div>
                        </div>
                        <div class="casecard-info">
                            <div class="info-card">
                                <div class="arrow">
                                    <img src="<?php echo simpleup_img('arrow.svg'); ?>" alt="">
                                    <h2>70%</h2>
                                </div>
                                <p>ключевых запросов в ТОП-10 за 3–4 месяца</p>
                            </div>
                            <div class="info-card">
                                <div class="arrow">
                                    <img src="<?php echo simpleup_img('arrow.svg'); ?>" alt="">
                                    <h2>80% +</h2>
                                </div>
                                <p>запросов остаются в ТОПе через 5–7 месяцев</p>
                            </div>
                            <div class="info-card">
                                <div class="arrow">
                                    <img src="<?php echo simpleup_img('arrow.svg'); ?>" alt="">
                                    <h2>80%</h2>
                                </div>
                                <p>трафика на сайт — из поисковых систем (Яндекс и Google)</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="numberlist">
                    <button class="nubmer-btn"><img src="<?php echo simpleup_img('left.svg'); ?>" alt=""></button>
                    <button class="nubmer-btn on">1</button>
                    <button class="nubmer-btn">2</button>
                    <button class="nubmer-btn">3</button>
                    <button class="nubmer-btn">...</button>
                    <button class="nubmer-btn">10</button>
                    <button class="nubmer-btn"><img src="<?php echo simpleup_img('right.svg'); ?>" alt=""></button>
                </div>
            </div>
        </div>
    </section>
    <?php
    return ob_get_clean();
}

function simpleup_reviews_shortcode($atts) {
    ob_start();
    ?>
    <section class="block6">
        <img class="stolbs" src="<?php echo simpleup_img('stolbs.svg'); ?>" alt="">
        <div class="container">
            <h1>Отзывы</h1>
        </div>
        <div class="karusel gap" id="karusel2">
            <div class="alt-card cardcreater" style="margin-left: 160px;">
                <h3>Иван Иванов (название компании)</h3>
                <p>Настраиваем рекламу, которая даёт заявки и звонки, окупающие вложения. Работаем в цифрах, делаем оптимизацию и добиваемся прогнозируемого результата. Каждый рубль подконтролен, каждая заявка считается.</p>
                <div class="button-img">
                    <button class="altbutton altbtn1">читать далее</button>
                    <img src="<?php echo simpleup_img('people.png'); ?>" alt="">
                </div>
            </div>
            <div class="alt-card2 cardcreater">
                <h3>Иван Иванов (название компании)</h3>
                <p>Настраиваем рекламу, которая даёт заявки и звонки, окупающие вложения. Работаем в цифрах, делаем оптимизацию и добиваемся прогнозируемого результата. Каждый рубль подконтролен, каждая заявка считается.</p>
                <div class="button-img">
                    <button class="altbutton altbtn2">читать далее</button>
                    <img src="<?php echo simpleup_img('people.png'); ?>" alt="">
                </div>
            </div>
            <div class="alt-card cardcreater">
                <h3>Иван Иванов (название компании)</h3>
                <p>Настраиваем рекламу, которая даёт заявки и звонки, окупающие вложения. Работаем в цифрах, делаем оптимизацию и добиваемся прогнозируемого результата. Каждый рубль подконтролен, каждая заявка считается.</p>
                <div class="button-img">
                    <button class="altbutton altbtn1">читать далее</button>
                    <img src="<?php echo simpleup_img('people.png'); ?>" alt="">
                </div>
            </div>
            <div class="alt-card2 cardcreater">
                <h3>Иван Иванов (название компании)</h3>
                <p>Настраиваем рекламу, которая даёт заявки и звонки, окупающие вложения. Работаем в цифрах, делаем оптимизацию и добиваемся прогнозируемого результата. Каждый рубль подконтролен, каждая заявка считается.</p>
                <div class="button-img">
                    <button class="altbutton altbtn2">читать далее</button>
                    <img src="<?php echo simpleup_img('people.png'); ?>" alt="">
                </div>
            </div>
            <div class="alt-card cardcreater">
                <h3>Иван Иванов (название компании)</h3>
                <p>Настраиваем рекламу, которая даёт заявки и звонки, окупающие вложения. Работаем в цифрах, делаем оптимизацию и добиваемся прогнозируемого результата. Каждый рубль подконтролен, каждая заявка считается.</p>
                <div class="button-img">
                    <button class="altbutton altbtn1">читать далее</button>
                    <img src="<?php echo simpleup_img('people.png'); ?>" alt="">
                </div>
            </div>
            <div class="alt-card2 cardcreater" style="margin-right: 30px;">
                <h3>Иван Иванов (название компании)</h3>
                <p>Настраиваем рекламу, которая даёт заявки и звонки, окупающие вложения. Работаем в цифрах, делаем оптимизацию и добиваемся прогнозируемого результата. Каждый рубль подконтролен, каждая заявка считается.</p>
                <div class="button-img">
                    <button class="altbutton altbtn2">читать далее</button>
                    <img src="<?php echo simpleup_img('people.png'); ?>" alt="">
                </div>
            </div>
        </div>
    </section>
    <?php
    return ob_get_clean();
}

function simpleup_services_shortcode($atts) {
    ob_start();
    ?>
    <section class="block7" id="uslugi">
        <div class="container">
            <h1>Наши услуги</h1>
            <div class="uslugi">
                <div class="alt-card2 usl">
                    <h1>Продвижение сайтов</h1>
                    <p>Настраиваем рекламу, которая даёт заявки и звонки, окупающие вложения. Работаем в цифрах, делаем</p>
                    <svg class="plus1" width="40" viewBox="0 0 73 73" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path class="plus" d="M42.2502 5.25064C42.2502 -1.75028 30.2503 -1.75035 30.2503 5.25049V30.2518H5.25026C-1.75015 30.2518 -1.75002 42.2518 5.25026 42.2518H30.2503V67.2518C30.2503 74.2518 42.2503 74.2518 42.2503 67.2518V42.2518H67.2503C74.2503 42.2518 74.2503 30.2518 67.2503 30.2518H42.2503L42.2502 5.25064Z" />
                    </svg>
                </div>
                <div class="alt-card usl">
                    <h1>Реклама</h1>
                    <p>Настраиваем рекламу, которая даёт заявки и звонки, окупающие вложения. Работаем в цифрах, делаем</p>
                    <svg class="plus1" width="40" viewBox="0 0 73 73" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M42.2502 5.25064C42.2502 -1.75028 30.2503 -1.75035 30.2503 5.25049V30.2518H5.25026C-1.75015 30.2518 -1.75002 42.2518 5.25026 42.2518H30.2503V67.2518C30.2503 74.2518 42.2503 74.2518 42.2503 67.2518V42.2518H67.2503C74.2503 42.2518 74.2503 30.2518 67.2503 30.2518H42.2503L42.2502 5.25064Z" fill="white"/>
                    </svg>
                </div>
                <div class="alt-card usl">
                    <h1>Создание сайтов</h1>
                    <p>Настраиваем рекламу, которая даёт заявки и звонки, окупающие вложения. Работаем в цифрах, делаем</p>
                    <svg class="plus1" width="40" viewBox="0 0 73 73" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M42.2502 5.25064C42.2502 -1.75028 30.2503 -1.75035 30.2503 5.25049V30.2518H5.25026C-1.75015 30.2518 -1.75002 42.2518 5.25026 42.2518H30.2503V67.2518C30.2503 74.2518 42.2503 74.2518 42.2503 67.2518V42.2518H67.2503C74.2503 42.2518 74.2503 30.2518 67.2503 30.2518H42.2503L42.2502 5.25064Z" fill="white"/>
                    </svg>
                </div>
                <div class="alt-card2 usl">
                    <h1>Техническая поддержка</h1>
                    <p>Настраиваем рекламу, которая даёт заявки и звонки, окупающие вложения. Работаем в цифрах, делаем</p>
                    <svg class="plus1" width="40" viewBox="0 0 73 73" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path class="plus" d="M42.2502 5.25064C42.2502 -1.75028 30.2503 -1.75035 30.2503 5.25049V30.2518H5.25026C-1.75015 30.2518 -1.75002 42.2518 5.25026 42.2518H30.2503V67.2518C30.2503 74.2518 42.2503 74.2518 42.2503 67.2518V42.2518H67.2503C74.2503 42.2518 74.2503 30.2518 67.2503 30.2518H42.2503L42.2502 5.25064Z" />
                    </svg>
                </div>
            </div>
        </div>
    </section>
    <?php
    return ob_get_clean();
}

function simpleup_process_shortcode($atts) {
    ob_start();
    ?>
    <section class="block8">
        <div class="container">
            <h1>Как начать с нами работать</h1>
            <div class="snami">
                <div class="numbercards">
                    <div class="numbercard">
                        <h2>1</h2>
                        <p>
                            ‘ Текст текст тексттекст
                            ‘ Текст тексттекст
                            ‘ Текст текст
                            ‘ Текст тексттексттекст
                            ‘ Текст тексттекст
                            ‘ Текст тексттекст
                            ‘ Текст тексттекст
                            ‘ Текст текст
                        </p>
                    </div>
                    <div class="numbercardalt">
                        <h2><img src="<?php echo simpleup_img('arrow2.svg'); ?>" alt="">2</h2>
                        <p>
                            ‘ Текст текст тексттекст
                            ‘ Текст тексттекст
                            ‘ Текст текст
                            ‘ Текст тексттексттекст
                            ‘ Текст тексттекст
                            ‘ Текст тексттекст
                            ‘ Текст тексттекст
                            ‘ Текст текст
                        </p>
                    </div>
                    <div class="numbercard">
                        <h2><img src="<?php echo simpleup_img('arrow2.svg'); ?>" alt="">3</h2>
                        <p>
                            ‘ Текст текст тексттекст
                            ‘ Текст тексттекст
                            ‘ Текст текст
                            ‘ Текст тексттексттекст
                            ‘ Текст тексттекст
                            ‘ Текст тексттекст
                            ‘ Текст тексттекст
                            ‘ Текст текст
                        </p>
                    </div>
                    <div class="numbercardalt">
                        <h2><img src="<?php echo simpleup_img('arrow2.svg'); ?>" alt="">4</h2>
                        <p>
                            ‘ Текст текст тексттекст
                            ‘ Текст тексттекст
                            ‘ Текст текст
                            ‘ Текст тексттексттекст
                            ‘ Текст тексттекст
                            ‘ Текст тексттекст
                            ‘ Текст тексттекст
                            ‘ Текст текст
                        </p>
                    </div>
                </div>
                <div class="content-wrapper2">
                    <div class="text-zayawka">
                        <h1><img src="<?php echo simpleup_img('arrow2.svg'); ?>">Заполните заявку</h1>
                    </div>
                    <div class="form-section">
                        <form action="">
                            <div class="former">
                                <input type="text" placeholder="Имя" required>
                                <input type="tel" placeholder="+7 (999) 999-99-99" required>
                                <input type="url" placeholder="Ссылка на ваш сайт" required>
                                <div class="contact-method">
                                    <select required style="color: #8A78A1;">
                                        <option value="" disabled selected>Как с вами связаться</option>
                                        <option value="phone">Телефон</option>
                                        <option value="whatsapp">WhatsApp</option>
                                        <option value="telegram">Telegram</option>
                                    </select>
                                </div>
                            </div>
                            <label class="privacy-notice2" for="privacy-checkbox2">
                                <input type="checkbox" id="privacy-checkbox2" required>
                                <span class="custom-checkbox2"></span>
                                Нажимая на кнопку вы соглашаетесь с политикой конфиденциальности
                            </label>
                            <button type="submit" class="button">УЗНАТЬ СТОИМОСТЬ ПРОДВИЖЕНИЯ</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
    return ob_get_clean();
}

function simpleup_about_shortcode($atts) {
    ob_start();
    ?>
    <section class="block9" id="onas">
        <div class="container">
            <h1>О компании</h1>
            <div class="content-photo">
                <div class="content-photo1">
                    <img src="<?php echo simpleup_img('photo1.png'); ?>" alt="">
                    <img src="<?php echo simpleup_img('photo5.png'); ?>" alt="">
                    <img src="<?php echo simpleup_img('photo3.png'); ?>" alt="">
                    <img src="<?php echo simpleup_img('photo4.png'); ?>" alt="">
                </div>
                <div class="content-photo2">
                    <img src="<?php echo simpleup_img('photo2.png'); ?>" alt="">
                </div>
            </div>
        </div>
    </section>
    <?php
    return ob_get_clean();
}

function simpleup_team_shortcode($atts) {
    ob_start();
    ?>
    <section class="block10">
        <div class="container">
            <h1>Команда экспертов</h1>
            <div class="karusel2">
                <button id="back"><img src="<?php echo simpleup_img('back.svg'); ?>" alt=""></button>
                <button id="next"><img src="<?php echo simpleup_img('next.svg'); ?>" alt=""></button>
                <div class="karusel2alt">
                    <div class="namecard">
                        <img src="<?php echo simpleup_img('name.png'); ?>" alt="">
                        <h3>Игнат</h3>
                        <p>танцор, акрабат, художник</p>
                    </div>
                    <div class="namecard">
                        <img src="<?php echo simpleup_img('name.png'); ?>" alt="">
                        <h3>Александр</h3>
                        <p>пловец, дрессировщик, любитель кошек</p>
                    </div>
                    <div class="namecard">
                        <img src="<?php echo simpleup_img('name.png'); ?>" alt="">
                        <h3>Антон</h3>
                        <p>кибер спортсмен, поэт, спортсмен</p>
                    </div>
                    <div class="namecard">
                        <img src="<?php echo simpleup_img('name.png'); ?>" alt="">
                        <h3>Виталий</h3>
                        <p>студент, эко активист, волонтер</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
    return ob_get_clean();
}

function simpleup_guarantees_shortcode($atts) {
    ob_start();
    ?>
    <section class="block11">
        <div class="container">
            <h1>Гарантии и наш подход</h1>
            <div class="nercards">
                <div class="nercard">
                    <h3>1</h3>
                    <div>
                        <h5>Проработанная стратегия под цели бизнеса</h5>
                        <p>прописать подробнее</p>
                    </div>
                    <div class="substract"></div>
                </div>
                <div class="nercard">
                    <h3>2</h3>
                    <div>
                        <h5>Проработанная стратегия под цели бизнеса</h5>
                        <p>прописать подробнее</p>
                    </div>
                    <div class="substract"></div>
                </div>
                <div class="nercard">
                    <h3>3</h3>
                    <div>
                        <h5>Продвигаем не сайт, а бизнес</h5>
                        <p>прописать подробнее</p>
                    </div>
                </div>
            </div>
            <div class="nercards">
                <div class="nercard">
                    <h3>4</h3>
                    <div>
                        <h5>Синергия услуг («1+1=3»)</h5>
                        <p>прописать подробнее</p>
                    </div>
                    <div class="substract"></div>
                </div>
                <div class="nercard">
                    <h3>5</h3>
                    <div>
                        <h5>Синергия услуг («1+1=3»)</h5>
                        <p>прописать подробнее</p>
                    </div>
                    <div class="substract"></div>
                </div>
                <div class="nercard">
                    <h3>6</h3>
                    <div>
                        <h5>Правильная приоритизация процессов</h5>
                        <p>прописать подробнее</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
    return ob_get_clean();
}

function simpleup_guide_form_shortcode($atts) {
    ob_start();
    ?>
    <section class="block12">
        <div class="container">
            <div class="content-wrapper3">
                <div class="text-zayawka2">
                    <h1 class="text-zayawka2h1">Получить гайд/ чек-лист</h1>
                    <p>Обратитесь к нам за индивидуальным расчетом.</p>
                </div>
                <div class="form-section">
                    <form action="<?php echo admin_url('admin-post.php'); ?>" method="post" style="align-items: center;">
                        <input type="hidden" name="action" value="simpleup_guide_form">
                        <?php wp_nonce_field('simpleup_guide_nonce', 'simpleup_nonce'); ?>
                        <div class="former" style="width: 100%; grid-template-columns: repeat(1, 1fr);">
                            <input type="text" name="name" placeholder="Имя" required>
                            <input type="tel" name="phone" placeholder="+7 (999) 999-99-99" required>
                            <input type="url" name="website" placeholder="Ссылка на ваш сайт">
                            <div class="contact-method">
                                <select name="contact_method" required style="color: #8A78A1;">
                                    <option value="" disabled selected>Как с вами связаться</option>
                                    <option value="phone">Телефон</option>
                                    <option value="whatsapp">WhatsApp</option>
                                    <option value="telegram">Telegram</option>
                                </select>
                            </div>
                        </div>
                        <label class="privacy-notice2" for="privacy-checkbox3">
                            <input type="checkbox" id="privacy-checkbox3" name="privacy" required>
                            <span class="custom-checkbox2"></span>
                            Нажимая на кнопку вы соглашаетесь с политикой конфиденциальности
                        </label>
                        <button type="submit" class="button" style="width: 330px; font-size: 16px; padding: 14px 0;">УЗНАТЬ СТОИМОСТЬ ПРОДВИЖЕНИЯ</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <?php
    return ob_get_clean();
}

#Соединение всех шорткодов в одном
function simpleup_full_shortcode($atts) {
    ob_start();

    echo do_shortcode('[simpleup_header]');
    echo do_shortcode('[simpleup_hero]');
    echo do_shortcode('[simpleup_problems]');
    echo do_shortcode('[simpleup_solutions]');
    echo do_shortcode('[simpleup_industries]');
    echo do_shortcode('[simpleup_contact_form]');
    echo do_shortcode('[simpleup_cases]');
    echo do_shortcode('[simpleup_reviews]');
    echo do_shortcode('[simpleup_services]');
    echo do_shortcode('[simpleup_process]');
    echo do_shortcode('[simpleup_about]');
    echo do_shortcode('[simpleup_team]');
    echo do_shortcode('[simpleup_guarantees]');
    echo do_shortcode('[simpleup_guide_form]');
    
    return ob_get_clean();
}

?>