-- NOTE: for home slider on main page -----------------------------------------
INSERT INTO slider (active, title, mini_description, full_description, img) VALUES
     (true,
        "Окно Lumen 7s",
        "с солнцезащитным стеклом по <b class='slide-captions__font-bold'>супервыгодной</b> цене
            <br>
            Наша собственная разработанная и сертифицированная профильная система.
            <br>
            <b>Успейте заказать!</b>
            <br>
            <br>
            Предложение ограничено",
        "Хотите наслаждаться солнечными лучами у окна и не испытывать жары от солнца?
            <br>
            <br>
            <b>Закажите окна с монтажной шириной 70мм Lumen 7s и солнцезащитным теплопакетом DS.</b>
            <br>
            <br>
            Мы дарим людям тепло и комфорт по разумным ценам.
            <br>
            Воспользуйтесь предложением от нашего собственного производства и вы получите
            качественные окна по выгодной цене. Наша собственная разработка профилей позволяет
            нам экономить на сырье материалов.
            <br>
            Звоните прямо сейчас и мы сделаем расчет вашего заказа.
            <br>
            Успейте заказать по акции! Количество изделий ограничено.
            <br>
            <br>
            Позвоните
            <a href='tel:&nbsp;+ +7 (4742) 56-55-55' class='link__general'>+7 (4742) 565-555</a>
            и мы расскажем все подробности",
        "slider-1.jpg"),
     (true,
        "Акция",
        "Доступное окно в квартиру
            <br>
            всего за <b class='slide-captions__font-bold'>10 690</b> ₽",
        "Хотите выгодно сэкономить при покупке двух-створчатого окна в свою квартиру?
            <br>
            <br>
            Купите по акции по выгодной цене
            <br>
            <br>
            Мы сделаем Ваш дом теплее и уютнее всего за <b>10 690</b> руб.
            <br>
            За эту цену Вы получаете окно с энергосберегающим стеклопакетом и надежной
            фурнитурой. Сделаем монтаж по ГОСТу со всеми необходимыми паро-гидроизоляционными
            лентами. Срок проведения данной акции до 25 декабря 2020г включительно.
            Успейте воспользоваться нашим уникальным предложением!
            <br>
            <br>
            Звоните прямо сейчас по телефону
            <a href='tel:&nbsp;+ +7 (4742) 56-55-55' class='link__general'>+7 (4742) 565-555</a>
            и мы расскажем подробнее.",
        "slider-2.jpg"),
    (true,
        "220+ Laytout Demos",
        "POLO is packed with 220+ pre-made layouts that...",
        "POLO is packed with 220+ pre-made layouts that allow you to quickly
            jumpstart your project. Completely customizable for creating your own designs.",
        "slider-3.mp4");


-- NOTE: for home components on main page
INSERT INTO services_home (img, title, description) VALUES
    ("services-1.png",
    "Стеклопакеты",
    "Описание... ."),

    ("services-1.png",
    "Москитные сетки",
    "Описание... ."),

    ("services-1.png",
    "Подоконники",
    "Описание... ."),

    ("services-1.png",
    "Пена",
    "Описание... ."),

    ("services-1.png",
    "Ремонт",
    "Описание... .");


-- NOTE: for home about on main page
INSERT INTO about_home (img, title, mini_description, full_description) VALUES
    ("about-1.jpg",
    "История компании",
    "Этапы развития и становление компании",
    "Описание... "),

    ("about-2.jpg",
    "Наш офис",
    "Познакомьтесь с нашим домом, вы не останетесь равнодушным",
    "Описание... "),

    ("about-3.jpg",
    "Наше производство",
    "Погрузитесь в нашу атмосферму производства, и узнайте о всех ее этапах",
    "Описание... "),

    ("about-4.jpg",
    "Сертификаты",
    "Вы станете доверять нам еще больше, когда узнаете о всех наших сертификатах",
    "Описание... ");


-- NOTE: for home clients on main page ----------------------------------------
INSERT INTO clients_slider_home (active, title, alt, img) VALUES
    (true,
        "envato",
        "envato brand",
        "1.png"),

    (true,
        "microsoft",
        "ms brand",
        "2.png"),

    (true,
        "google",
        "google brand",
        "3.png"),

    (true,
        "airbnb",
        "air bnb brand",
        "4.png"),

    (true,
        "target",
        "target brand",
        "5.png"),

    (true,
        "lenovo",
        "lenovo brand",
        "6.png"),

    (true,
        "timberland",
        "timberland brand",
        "7.png"),

    (true,
        "stripe",
        "stripe brand",
        "8.png"),

    (true,
        "paypal",
        "PayPal brand",
        "9.png"),

    (true,
        "amazon",
        "Amazon brand",
        "10.png");


-- NOTE: for about pages ------------------------------------------------------
INSERT INTO about_home (img, title, mini_description, full_description) VALUES
    ("about-1.jpg",
    "История компании",
    "Этапы развития и становление компании",
    "Описание... "),

    ("about-2.jpg",
    "Наш офис",
    "Познакомьтесь с нашим домом, вы не останетесь равнодушным",
    "Описание... "),

    ("about-3.jpg",
    "Наше производство",
    "Погрузитесь в нашу атмосферму производства, и узнайте о всех ее этапах",
    "Описание... "),

    ("about-4.jpg",
    "Сертификаты",
    "Вы станете доверять нам еще больше, когда узнаете о всех наших сертификатах",
    "Описание... ");


-- NOTE: for portfolio --------------------------------------------------------
INSERT INTO portfolio (type_portfolio, class, description) VALUES
    ("gallery",
    "ct-new ct-business",
    "Сеть магазинов Руль, г. Липецк - остекление фасадным алюминием"),

    ("slider",
     "large-width ct-new ct-complex",
     ""),

    ("gallery",
    "ct-new ct-business",
    "Филиал ФГУП ВГТРК ГТРК Липецк, г. Липецк - остекление фасадным алюминием"),

    ("gallery",
    "ct-private",
    "Частный заказчик - остекление гостевого дома и бани"),

    ("gallery",
    "ct-business",
    "Л-ПАК, г. Липецк - установка цельностеклянных перегородок в офисный блок здания"),

    ("gallery",
    "ct-private",
    "Частный заказчик - сложное комплексное остекление"),

    ("gallery",
    "ct-business",
    "Лэм Уэстон Белая Дача, с. Казинка, Экономзона - остекление фасадным алюминием"),

    ("gallery",
    "ct-complex",
    "162-КЖИ, дер. Глухова, Московская обл. - остекление жилых домов"),

    ("gallery",
    "ct-private",
    "Частный заказчик - комплексное остекление ПВХ и Алюминиевые системы");

INSERT INTO portfolio_image (img, portfolio_id) VALUES
    ("portfolio-gallery_rul-1.jpg", 1),
    ("portfolio-gallery_rul-2.jpg", 1),

    ("portfolio-gallery_logovaya-1.jpg", 2),
    ("portfolio-gallery_logovaya-2.jpg", 2),
    ("portfolio-gallery_logovaya-3.jpg", 2),

    ("portfolio-gallery_trk-1.jpg", 3),
    ("portfolio-gallery_trk-2.jpg", 3),

    ("portfolio-gallery_frizz-1.jpg", 4),
    ("portfolio-gallery_frizz-2.jpg", 4),

    ("portfolio-gallery_lpak-1.jpg", 5),
    ("portfolio-gallery_lpak-2.jpg", 5),

    ("portfolio-gallery_friz-1.jpg", 6),
    ("portfolio-gallery_friz-1.jpg", 6),

    ("portfolio-gallery_bel-1.jpg", 7),
    ("portfolio-gallery_bel-2.jpg", 7),

    ("portfolio-gallery_kzhi-1.jpg", 8),
    ("portfolio-gallery_kzhi-2.jpg", 8),

    ("portfolio-gallery_lub-1.jpg", 9),
    ("portfolio-gallery_lub-2.jpg", 9);


-- NOTE: for catalog ----------------------------------------------------------

-- NOTE: groups for products
INSERT INTO catalog_group (id_group, title, description, img, class, active) VALUES
    (1,
        "Окна",
        "Description...",
        "group-1.jpg",
        "ct-group",
        1),

    (2,
        "Балконы",
        "Description...",
        "group-2.jpg",
        "ct-group",
        1),

    (3,
        "Входные группы",
        "Description...",
        "group-3.jpg",
        "ct-group",
        1),

    (4,
        "Раздвижные системы",
        "Description...",
        "group-4.jpg",
        "ct-group",
        1),

    (5,
        "Фасадные системы",
        "Description...",
        "group-5.jpg",
        "ct-group",
        1),

    (6,
        "Цельностеклянные конструкции",
        "Description...",
        "group-6.jpg",
        "ct-group",
        1),

    (7,
        "Стеклопакеты",
        "Description...",
        "group-7.jpg",
        "ct-group",
        1),

    (8,
        "Аксессуары и комплектующие",
        "Description...",
        "group-8.jpg",
        "ct-group",
        1);


INSERT INTO catalog_subgroup (group_id, title, description, img, link, active) VALUES
-- NOTE: window
    (1, "Окна Lumen", "Description...", "subgroup-1-1.jpg", "catalog/product-window-lumen", 1),
    (1, "Окна Rehau", "Description...", "subgroup-1-2.jpg", "catalog/product-window-rehau", 1),
    (1, "Окна KBE", "Description...", "subgroup-1-3.jpg", "catalog/product-window-kbe", 1),
    (1, "Окна Veka", "Description...", "subgroup-1-4.jpg", "catalog/product-window-veka", 1),
    (1, "Панорамные окна", "Description...", "subgroup-1-5.jpg", "catalog/product-window-panoramic", 1),
    (1, "Окна по типу остекления", "Description...", "subgroup-1-6.jpg", "", 1),
    (1, "Ламинированные окна", "Description...", "subgroup-1-7.jpg", "", 1),

-- NOTE: loggia
    (2, "Раздвижной Слайдорс", "Description...", "subgroup-2-1.jpg", "", 1),
    (2, "Пластиковый балкон", "Description...", "subgroup-2-2.jpg", "", 1),
    (2, "Балкон с выносом и обшивкой", "Description...", "subgroup-2-3.jpg", "", 1),

-- NOTE: incoming group
    (3, "Входные двери из ПВХ", "Description...", "subgroup-3-1.jpg", "", 1),
    (3, "Алюминиевые двери", "Description...", "subgroup-3-2.jpg", "", 1),
    (3, "Межкомнатные двери ПВХ", "Description...", "subgroup-3-3.jpg", "", 1),
    (3, "Двери с пристежками", "Description...", "subgroup-3-4.jpg", "", 1),
    (3, "Двери различных форм", "Description...", "subgroup-3-5.jpg", "", 1),

-- NOTE: sliding systems
    (4, "Пластиковые системы", "Description...", "subgroup-4-1.jpg", "", 1),
    (4, "Алюминиевые системы", "Description...", "subgroup-4-2.jpg", "", 1),
    (4, "PSK порталы (параллельно-раздвижные)", "Description...", "subgroup-4-3.jpg", "", 1),
    (4, "HS порталы (подъемно-сдвижные)", "Description...", "subgroup-4-4.jpg", "", 1),

-- NOTE: facade systems
    (5, "Витражное остекление", "Description...", "subgroup-5-1.jpg", "", 1),
    (5, "Остекление комплексных объектов", "Description...", "subgroup-5-2.jpg", "", 1),
    (5, "Противопожарные перегородки и двери", "Description...", "subgroup-5-3.jpg", "", 1),

-- NOTE: all-glass structures
    (6, "Стеклянные перегородки и двери", "Description...", "subgroup-6-1.jpg", "", 1),
    (6, "Душевые перегородки", "Description...", "subgroup-6-2.jpg", "", 1),
    (6, "Остекление переговорных и абинетов", "Description...", "subgroup-6-3.jpg", "", 1),
    (6, "Двери для саун и парных", "Description...", "subgroup-6-4.jpg", "", 1),

-- NOTE: dDouble-glazed windows
    (7, "Теплопакеты OS", "Description...", "subgroup-7-1.jpg", "", 1),
    (7, "Энергосберегающие", "Description...", "subgroup-7-2.jpg", "", 1),
    (7, "Мультифункциональные", "Description...", "subgroup-7-3.jpg", "", 1),
    (7, "Тонированные", "Description...", "subgroup-7-4.jpg", "", 1),
    (7, "Триплекс", "Description...", "subgroup-7-5.jpg", "", 1),
    (7, "Пакеты с декоративной раскладкой", "Description...", "subgroup-7-6.jpg", "", 1),
    (7, "Заявка на замену пакетов", "Description...", "subgroup-7-7.jpg", "", 1),

-- NOTE: accessories and accessories
    (8, "Подоконники Danke", "Description...", "subgroup-8-1.jpg", "", 1),
    (8, "Подоконники Moller", "Description...", "subgroup-8-2.jpg", "", 1),
    (8, "Цветные подоконники", "Description...", "subgroup-8-3.jpg", "", 1),
    (8, "Откосы на изделия", "Description...", "subgroup-8-4.jpg", "", 1);


-- NOTE: main catalog for all products
INSERT INTO catalog_product (alert, img, title, description, class, group_id) VALUES
    ("акция",
        "catalog-1.jpg",
        "Слайдинг-45",
        "Description...",
        "ct-sell",
        1),

    ("новинка",
        "catalog-2.jpg",
        "КП45 GOS-S",
        "Description...",
        "ct-new",
        1),

    ("",
        "catalog-3.jpg",
        "KBE 58",
        "Description...",
        "ct-sell",
        2),

    ("",
        "catalog-4.jpg",
        "Goodwin 58",
        "Description...",
        "ct-sell",
        3),

    ("",
        "catalog-5.jpg",
        "Rehau 70",
        "Description...",
        "ct-new",
        3),

    ("",
        "catalog-6.jpg",
        "Rehau 60",
        "Description...",
        "ct-new",
        4),

    ("",
        "catalog-7.jpg",
        "VEKA Softline 82mm",
        "Description...",
        "ct-new",
        5),

    ("",
        "catalog-8.jpg",
        "Blitz",
        "Description...",
        "ct-new",
        6),

    ("",
        "catalog-8.jpg",
        "WHS Halo 60mm",
        "Description...",
        "ct-new",
        6);


-- NOTE: discounts of the catalog
INSERT INTO catalog_discount (active, img, title, description, full_description) VALUES
    (1,
        "discount-1.jpg",
        "Подоконники Премиум по оптовой цене",

        "Подоконники премиум класса Moller и DANKE Premium будут радовать
        вас своей изящностью и превосходством долгие годы.",

        "С февраля до лета дарим настоящие подарки всем нашим заказчикам.
        Подарки на долгие годы.
        <br>
        <br>
        <div class="blockquote">
        Качественные подоконники Moller и DANKE Premium по оптовой цене!
        </div>
        <br>
        <br>
        Воспользуйтесь акцией нашей компании на приобретение на специальных
        условиях подоконники Премиум Класса. Подоконники Moller и DANKE Premium
        будут радовать вас своей изящностью и превосходством долгие годы.
        Простота в уборке, достаточно протереть влажной салфеткой. Подоконники
        не желтеют и в них не забывается пыль и грязь. Широкий выбор цветовой
        гаммы для вашего интерьера. Уникальное покрытие с максимальной
        прочностью для защиты от царапин.
        <br>
        <br>
        <div class="blockquote">
        10 лет</b> гарантия от производителя и только сейчас <b>оптовая цена</b>
        которую может получить любой наш заказчик.
        </div>
        <br>
        <br>
        Предложение действует для всех частных клиентов нашей компании, размещающих
        заказ в производство от трех изделий из ПВХ или Алюминиевых систем с
        установкой или без установки в период проведения акции. Огромный выбор
        наших оконных систем можно идеально сочетать с данными подоконниками и
        подобрать оптимальное сочетание по любым вашим желаемым параметрам. Не
        откладывайте покупку. Сделайте себе подарок прямо сейчас! О близких тоже
        можно подумать &#128522;
        <br>
        <br>
        Скидка на подоконники действует при заказе оконных или дверных конструкций от 3шт.
        <br>
        Можно сочетать с другими нашими акционными предложениями.
        <br>
        <br>
        <div class="blockquote">
        <a href='tel:+74742565555'>Звоните</a> прямо сейчас и мы сделаем расчет вашего заказа.
        </div>"),

    (1,
        "discount-3.jpg",
        "Порталы",
        "Предлагаем индивидуальные решения по всем вопросам,
        связанным с использованием ПВХ-систем и... Lorem ipsum dolor sit ame..."),

    (1,
        "discount-5.jpg",
        "Фасады",
        "Предлагаем индивидуальные решения по всем вопросам,
        связанным с использованием ПВХ-систем и... Lorem ipsum dolor sit ame...");