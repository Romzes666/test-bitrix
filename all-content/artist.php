<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("artist");
?>
    <section class="breadcrumbs">
        <div class="container">
            <div class="breadcrumbs__list">
                <a href="/index.php" class="breadcrumbs__item">main page</a>
                <div class="breadcrumbs__item breadcrumbs__item-active">acton multi-room</div>
            </div>
        </div>
    </section>

    <section class="banner">
        <div class="container">
            <img src="<?=SITE_TEMPLATE_PATH;?>/img/banner.jpg" alt="">
        </div>
    </section>

    <section class="artist-body">
        <div class="container">
            <h1>BAD TOUCH</h1>
            <div class="artist-body__row">
                <div class="artist-body__text">
                    <p>
                        Bad Touch are a 5-piece classic rock band from Norfolk, UK. Most people see growing up in Norfolk as a disadvantage,
                        but Bad Touch owe the core of their sound to their countryside surroundings. Those formative years of listening to the likes of Led Zeppelin,
                        The Black Crowes, Free and Lynyrd Skynyrd whilst looking out on the rolling countryside and hard-working people gave them an escape to help
                        create their infectious blend of rock, country and blues.
                    </p>
                    <p>
                        Having just completed their fourth album at the legendary Rockfield Studios with Nick Brine (The Darkness,
                        Thunder, Ash), the New Wave of Classic Rock favourites will release ‘Kiss The Sky’ in June 2020 on Marshall Records, Bad Touch
                        are gearing up for a busy year of touring, including a main stage appearance at Ramblin’ Man Fair.
                    </p>
                    <p>
                        After signing to Marshall Records in 2018, Bad Touch released third album ‘Shake A Leg’ which featured Planet Rock Radio favourites ‘Lift Your Head Up’ and ‘Too Many Times’ and critical acclaim across the board and built upon the reputation
                        the band had cemented with tracks like their duet with Mollie Marriott, a cover of Ike & Tina Turner’s classic ‘Baby
                        Get It on’ and crowd pleaser ‘99%’ from 2016’s ‘Truth Be Told’.
                    </p>
                    <p>
                        Bad Touch have extensively toured the UK and Europe, being seen at festivals such as Download Festival, Ramblin’
                        Man Fair and Planet Rockstock. They have toured with Skid Row, The Answer, Broken Witt Rebels, Those Damn Crows, The Quireboys, FM and more.
                    </p>
                    <p>
                        Bad Touch are Stevie (Vocals), Seeks (Guitar/Vocals), Rob (Guitar), Michael (Bass) and George (Drums, Vocals).
                    </p>
                </div>
                <div class="artist-body__social">
                    <ul>
                        <li>
                            <a href="#">
                                <img src="<?=SITE_TEMPLATE_PATH;?>/img/facebook-ico.svg" alt="Facebook logo">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="<?=SITE_TEMPLATE_PATH;?>/img/instagram-ico.svg" alt="Instagram logo">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="<?=SITE_TEMPLATE_PATH;?>/img/twitter-ico.svg" alt="Twitter logo">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="<?=SITE_TEMPLATE_PATH;?>/img/spotify-ico.svg" alt="Spotify logo">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="concerts">
        <div class="container">
            <h2>upcoming concerts</h2>
            <div class="concerts__wrap">
                <div class="concerts__list">
                    <a href="#" class="concerts__item">
                        <div class="concerts__img-wrap">
                            <div class="concerts__img" style="background-image: url(<?=SITE_TEMPLATE_PATH;?>/img/artist2.jpg);"></div>
                        </div>
                        <div class="concerts__body">
                            <div class="concerts__date">
                                <div class="concerts__date-num">
                                    22
                                </div>
                                <div class="concerts__date-month">
                                    may
                                </div>
                            </div>
                            <div class="concerts__title">
                                <div class="concerts__name">
                                    THE BOTTOM LINE
                                </div>
                                <div class="concerts__location">
                                    Maidstone, UK
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="concerts__item">
                        <div class="concerts__img-wrap">
                            <div class="concerts__img" style="background-image: url(<?=SITE_TEMPLATE_PATH;?>/img/artist3.jpg);"></div>
                        </div>
                        <div class="concerts__body">
                            <div class="concerts__date">
                                <div class="concerts__date-num">
                                    24
                                </div>
                                <div class="concerts__date-month">
                                    may
                                </div>
                            </div>
                            <div class="concerts__title">
                                <div class="concerts__name">
                                    KEYWEST
                                </div>
                                <div class="concerts__location">
                                    Mote Park, UK
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="concerts__item">
                        <div class="concerts__img-wrap">
                            <div class="concerts__img" style="background-image: url(<?=SITE_TEMPLATE_PATH;?>/img/artist4.jpg);"></div>
                        </div>
                        <div class="concerts__body">
                            <div class="concerts__date">
                                <div class="concerts__date-num">
                                    28
                                </div>
                                <div class="concerts__date-month">
                                    may
                                </div>
                            </div>
                            <div class="concerts__title">
                                <div class="concerts__name">
                                    KING CREATURE
                                </div>
                                <div class="concerts__location">
                                    Leo's Red Lion, UK
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="concerts__item">
                        <div class="concerts__img-wrap">
                            <div class="concerts__img" style="background-image: url(<?=SITE_TEMPLATE_PATH;?>/img/artist1.jpg);"></div>
                        </div>
                        <div class="concerts__body">
                            <div class="concerts__date">
                                <div class="concerts__date-num">
                                    05
                                </div>
                                <div class="concerts__date-month">
                                    apr
                                </div>
                            </div>
                            <div class="concerts__title">
                                <div class="concerts__name">
                                    BAD TOUCH
                                </div>
                                <div class="concerts__location">
                                    Norwich, UK
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="concerts__item">
                        <div class="concerts__img-wrap">
                            <div class="concerts__img" style="background-image: url(<?=SITE_TEMPLATE_PATH;?>/img/artist5.jpg);"></div>
                        </div>
                        <div class="concerts__body">
                            <div class="concerts__date">
                                <div class="concerts__date-num">
                                    12
                                </div>
                                <div class="concerts__date-month">
                                    apr
                                </div>
                            </div>
                            <div class="concerts__title">
                                <div class="concerts__name">
                                    GRAND SLAM
                                </div>
                                <div class="concerts__location">
                                    Southampton, UK
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="concerts__item">
                        <div class="concerts__img-wrap">
                            <div class="concerts__img" style="background-image: url(<?=SITE_TEMPLATE_PATH;?>/img/artist1.jpg);"></div>
                        </div>
                        <div class="concerts__body">
                            <div class="concerts__date">
                                <div class="concerts__date-num">
                                    24
                                </div>
                                <div class="concerts__date-month">
                                    apr
                                </div>
                            </div>
                            <div class="concerts__title">
                                <div class="concerts__name">
                                    BAD TOUCH
                                </div>
                                <div class="concerts__location">
                                    Ironworks, Inverness, UK
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="concerts__item">
                        <div class="concerts__img-wrap">
                            <div class="concerts__img" style="background-image: url(<?=SITE_TEMPLATE_PATH;?>/img/artist6.jpg);"></div>
                        </div>
                        <div class="concerts__body">
                            <div class="concerts__date">
                                <div class="concerts__date-num">
                                    28
                                </div>
                                <div class="concerts__date-month">
                                    apr
                                </div>
                            </div>
                            <div class="concerts__title">
                                <div class="concerts__name">
                                    KING CREATURE
                                </div>
                                <div class="concerts__location">
                                    Clwb Ifor Bach, UK
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="concerts__item">
                        <div class="concerts__img-wrap">
                            <div class="concerts__img" style="background-image: url(<?=SITE_TEMPLATE_PATH;?>/img/artist7.jpg);"></div>
                        </div>
                        <div class="concerts__body">
                            <div class="concerts__date">
                                <div class="concerts__date-num">
                                    06
                                </div>
                                <div class="concerts__date-month">
                                    mar
                                </div>
                            </div>
                            <div class="concerts__title">
                                <div class="concerts__name">
                                    REWS
                                </div>
                                <div class="concerts__location">
                                    Looe, UK
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>