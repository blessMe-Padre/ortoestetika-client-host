<?php
/*
Template Name: Главная страница
*/
get_header();
?>

<div class="bg-wrapper overflow-hidden">
    <img src="<?php echo get_template_directory_uri() ?>/src/img/bg-for-page.webp">
</div>

<div class="container">
    <section class="hero-1">
        <p class="hero-title-1 hero-title-2">Брекеты <span>vs</span> элайнеры</p>

        <div class="hero_wrapper">
            <div class="hero_item action-bg-9">
            <p class="hero_1_title">элайнеры</p>
                <ul class="hero_1_list">
                    <li>Элайнеры позволяют увидеть финальный результат до начала лечения</li>
                    <li>Они более комфортны и удобны, так как не имеют металлических деталей, что снижает риск
                        раздражения десен и щек</li>
                    <li>Элайнеры позволяют добиться желаемого результата без заметных изменений во внешнем виде, так как
                        практически незаметны на зубах</li>
                    <li>Элайнеры легко снимаются, что упрощает процесс ухода за зубами и позволяет наслаждаться пищей
                        без ограничений</li>
                </ul>
            </div>
            <div class="hero_item action-bg-15">
            <p class="hero_1_title">Брекеты</p>
                <ul class="hero_1_list">
                    <li>Исправление любых, даже самых сложных случаев</li>
                    <li>Круглосуточная работа 24/7 - не нужно думать о дисциплине</li>
                    <li>Незаметное, но мощное воздействие 
                    на «сложные» зубы</li>
                </ul>
            </div>


        </div>
    </section>

    <section class="quote-section">
        <div class="quote-section_wrapper">
            <div class="quote-section_image">
                <img src="<?php echo get_template_directory_uri() ?>/src/img/action/image-16.webp" width="588"
                    height="633" alt="Анастасия Алексеевна Муравьева">
            </div>

            <div class="quote-section_description">
                <p class="quote-section_title">Анастасия Алексеевна Муравьева</p>
                <p class="quote-section_text">Врач ортодонт, специалист в комплексной реабилитации с помощью брекет
                    систем ,съемных капп - элайнеров , а также съемных аппаратных методик</p>

                <div class="quote_block">
                    <div class="quote_block-left">
                        <svg width="107" height="114" viewBox="0 0 107 114" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M0 67.3636V46.3315L40.0486 0L45.8571 28.3476L22.6229 56.6952L45.8571 85.6524L40.0486 114L0 67.3636ZM60.8372 67.3636V46.3315L100.886 0L107 28.3476L83.7657 56.6952L107 85.6524L100.886 114L60.8372 67.3636Z"
                                fill="#596476" />
                        </svg>
                    </div>
                    <p class="quote_block_text">Мы используем как элайнеры, так и брекеты в зависимости от
                        индивидуальных потребностей пациента и сложности случая. Элайнеры отлично подходят для некоторых
                        форм исправления зубов, обеспечивая комфорт и эстетичность, в то время как брекеты могут быть
                        более эффективными для сложных аномалий прикуса. Наша задача — выбрать оптимальный метод
                        лечения, который даст наилучший результат для каждого пациента</p>

                    <div class="quote_block-right">
                        <svg width="107" height="114" viewBox="0 0 107 114" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M107 67.3636V46.3315L66.9514 0L61.1429 28.3476L84.3771 56.6952L61.1429 85.6524L66.9514 114L107 67.3636ZM46.1628 67.3636V46.3315L6.11427 0L-7.62939e-06 28.3476L23.2343 56.6952L-7.62939e-06 85.6524L6.11427 114L46.1628 67.3636Z"
                                fill="#596476" />
                        </svg>
                        </dv>
                    </div>
                </div>
            </div>
    </section>

    <section class="before-after">
        <div class="before-after__wrapper">
            <div class="before-after__item relative">
                <h2 class="before-after__title">до|после</h2>
                <div class="swiper-button-wrapper swiper-button-wrapper-before-after">
                    <div class="swiper-button-prev-hero" tabindex="0" role="button" aria-label="Previous slide">
                    </div>
                    <div class="swiper-button-next-hero" tabindex="0" role="button" aria-label="Next slide"></div>
                </div>
            </div>

            <div class="w-0 min-w-[100%] relative">
                <div class="before-after-slider swiper">
                    <ul class="swiper-wrapper justify-stretch">
                        <li class="swiper-slide">
                            <img src="<?php echo get_template_directory_uri() ?>/src/img/before/image-1.webp"
                                width="867" height="482" alt="before">
                        </li>
                        <li class="swiper-slide">
                            <img src="<?php echo get_template_directory_uri() ?>/src/img/before/image-2.webp"
                                width="867" height="482" alt="before">
                        </li>
                        <li class="swiper-slide">
                            <img src="<?php echo get_template_directory_uri() ?>/src/img/before/image-3.webp"
                                width="867" height="482" alt="before">
                        </li>
                        <li class="swiper-slide">
                            <img src="<?php echo get_template_directory_uri() ?>/src/img/before/image-4.webp"
                                width="867" height="482" alt="before">
                        </li>
                        <li class="swiper-slide">
                            <img src="<?php echo get_template_directory_uri() ?>/src/img/before/image-5.webp"
                                width="867" height="482" alt="before">
                        </li>
                        <li class="swiper-slide">
                            <img src="<?php echo get_template_directory_uri() ?>/src/img/before/image-6.webp"
                                width="867" height="482" alt="before">
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="new-solutions">
        <h2 class="new-solutions_title"><span>«ГЕЛИОДЕНТ» — ВСЕГДА ПРОФЕССИОНАЛЬНОЕ</span> РЕШЕНИЕ СЛОЖНЫХ
            СТОМАТОЛОГИЧЕСКИХ ЗАДАЧ</h2>

        <ul class="new-solutions_list">
            <li class="new-solutions_item">
                <img src="<?php echo get_template_directory_uri() ?>/src/img/action/icon.png" width="38" height="25"
                    alt="icon">
                <h3 class="new-solutions_item-title">Фиксация стоимости лечения при подписании договора</h3>
            </li>
            <li class="new-solutions_item">
                <img src="<?php echo get_template_directory_uri() ?>/src/img/action/icon.png" width="38" height="25"
                    alt="icon">
                <h3 class="new-solutions_item-title">Рассрочка на терапевтическое, хирургическое, ортодонтическое
                    лечение и протезирование</h3>
            </li>
            <li class="new-solutions_item">
                <img src="<?php echo get_template_directory_uri() ?>/src/img/action/icon.png" width="38" height="25"
                    alt="icon">
                <h3 class="new-solutions_item-title">Прием пациентов по полисам добровольного медицинского страхования
                    (ДМС) «СОГАЗ»
                    и «Альфатрахование»</h3>
            </li>
            <li class="new-solutions_item">
                <img src="<?php echo get_template_directory_uri() ?>/src/img/action/icon.png" width="38" height="25"
                    alt="icon">
                <h3 class="new-solutions_item-title">Гарантии на все виды стоматологического лечения</h3>
            </li>
            <li class="new-solutions_item">
                <img src="<?php echo get_template_directory_uri() ?>/src/img/action/icon.png" width="38" height="25"
                    alt="icon">
                <h3 class="new-solutions_item-title">Сопровождение процесса лечения куратором. Индивидуальное
                    оперативное решение всех вопросов лечения</h3>
            </li>
            <li class="new-solutions_item">
                <img src="<?php echo get_template_directory_uri() ?>/src/img/action/icon.png" width="38" height="25"
                    alt="icon">
                <h3 class="new-solutions_item-title">Полное современное техническое оснащение: 3D сканер, КЛКТ,
                    микроскоп, наркоз и т.д.</h3>
            </li>
        </ul>
    </section>

    <?php load_template(get_stylesheet_directory() . '/include/our-partners.php'); ?>
</div>

<?php get_footer(); ?>