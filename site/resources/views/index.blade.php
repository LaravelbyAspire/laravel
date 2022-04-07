@extends('layouts.app')
@section('active')
<div class="wrapper d_flex flex_sp w100 a_items">
    <div class="logo d_flex">
        <a class="main_logo" href="/">
            <img src="/assets/img/logo.svg">
        </a>
                    <img class="year" src="/assets/img/header_logo.png">
                </div>
    <div class="d_flex web">
        <ul class="menu d_flex flex_sp a_items">
                            <li class="menu-item m_r50 ls_no active_item">
                <a class="c2 fw_bold fs_16 t_dcrtn_no hover1" href="/"> Baş sahypa</a>
            </li>
                            <li class="menu-item m_r50 ls_no ">
                <a class="c2 fw_bold fs_16 t_dcrtn_no hover1" href="/about_us"> Biz barada</a>
            </li>
                            <li class="menu-item m_r50 ls_no ">
                <a class="c2 fw_bold fs_16 t_dcrtn_no hover1" href="/services"> Hyzmatlarymyz</a>
            </li>
                            <li class="menu-item m_r50 ls_no ">
                <a class="c2 fw_bold fs_16 t_dcrtn_no hover1" href="/news"> Habarlar</a>
            </li>
                            <li class="menu-item m_r50 ls_no ">
                <a class="c2 fw_bold fs_16 t_dcrtn_no hover1" href="/contact"> Habarlaşmak</a>
            </li>
                        </ul>
        <div class="lang d_flex just_center">
            <img src="/assets/img/language.svg">
            <div class="lang_down d_no p_abs m_t20 p10 br20 bg_c1">
                <ul>
                    <li class=""><a
                            class="c2 t_dcrtn_no hover4" href="/ru">RU</a>
                    </li>
                    <li class="active_home_language"><a
                            class=" c2 t_dcrtn_no hover4" href="/">TM</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="mobile">
        <img src="/assets/img/menu.svg" class="menu_icon">
        <img src="/assets/img/close.svg" class="close_icon d_no">

    </div>
</div>


<div class="menu_list">
    <div class="wrapper">
        <ul class="w50">
                            <li class="menu-item m_r50 ls_no                     active_item
            ">
                <a class="c2 fw_bold fs_16 t_dcrtn_no hover1" href="/index">
                    Baş sahypa</a>
            </li>
                            <li class="menu-item m_r50 ls_no ">
                <a class="c2 fw_bold fs_16 t_dcrtn_no hover1" href="/about_us">
                    Biz barada</a>
            </li>
                            <li class="menu-item m_r50 ls_no ">
                <a class="c2 fw_bold fs_16 t_dcrtn_no hover1" href="/services">
                    Hyzmatlarymyz</a>
            </li>
                            <li class="menu-item m_r50 ls_no ">
                <a class="c2 fw_bold fs_16 t_dcrtn_no hover1" href="/news">
                    Habarlar</a>
            </li>
                            <li class="menu-item m_r50 ls_no ">
                <a class="c2 fw_bold fs_16 t_dcrtn_no hover1" href="/contact">
                    Habarlaşmak</a>
            </li>
                        </ul>
    </div>
</div>
@endsection
@section('content')
<div class="bg_c1 p_50_0 m_t124">
    <div class="wrapper d_flex a_items">
        <div class="w40">
            <h2 class="c2 fs_40">Raýat Ýagdaýynyň Namalarynyň Ýazgysyny bellige almak edarasy</h2>
            <div class="fs_18 ln_40 m_t20"><p>Raýat ýagdaýynyň namalarynyň döwlet tarapyndan bellige alynmagyny raýat ýagdaýynyň namalarynyň ýazgysynyň edaralary tarapyndan öz ygtyýarlyklarynyň çäklerinde geçirýärler.</p>
</div>
        </div>
        <div class="web w60 d_flex flex_end">
            <img class="w100" src="/assets/img/content_main.png">

        </div>
    </div>
</div>
<div class="p_30_0">
    <div class="wrapper">
        <div class="chap_title">Hyzmatlarymyz</div>
        <div class="main_services d_flex flex_wrap w100">
                        <div class="service_card service_card1 bg_c3 p20 w23 hg400 aos-init aos-animate"
                data-aos="fade-up" data-aos-duration="3000">
                <img class="w60px" src="/assets/img/media.svg">

                <h5 class="fs_25 m_20_0 c4 hg80">Çaganyň dogluşyny döwlet tarapyndan bellige almak </h5>
                <div class="ln_30 fs_14">Täze dogulan çaganyň dogluşyny döwlet tarapyndan bellige almak</div>
            </div>
                        <div class="service_card service_card2 bg_c3 p20 w23 hg400 aos-init aos-animate"
                data-aos="fade-up" data-aos-duration="3000">
                <img class="w60px" src="/assets/img/media (1).svg">

                <h5 class="fs_25 m_20_0 c4 hg80">Tapylan çaganyň, dogluşyny döwlet tarapyndan bellige almak</h5>
                <div class="ln_30 fs_14">Eger çaganyň hossary näbelli bolsa döwlet tarapyndan bellige almak</div>
            </div>
                        <div class="service_card service_card3 bg_c3 p20 w23 hg400 aos-init aos-animate"
                data-aos="fade-up" data-aos-duration="3000">
                <img class="w60px" src="/assets/img/media (2).svg">

                <h5 class="fs_25 m_20_0 c4 hg80">NIKA BAGLAŞMAK</h5>
                <div class="ln_30 fs_14">Türkmenistanyň Maşgala kodeksiniň 20-nji maddasynda görkezilen nika baglaşylmagyna ýol bermeýän ýagdaýlaryň ýüze çykmadyk ýagdaýynda nika baglanyşmak rugsat edilýär.</div>
            </div>
                        <div class="service_card service_card4 bg_c3 p20 w23 hg400 aos-init aos-animate"
                data-aos="fade-up" data-aos-duration="3000">
                <img class="w60px" src="/assets/img/media (3).svg">
                <h5 class="fs_25 m_20_0 c4 hg80">Är-aýalyň özara razylygy boýunça bilelikdäki nikany bozmak</h5>
                <div class="ln_30 fs_14">Türkmenistanyň Maşgala kodeksiniň 25-nji maddasyna laýyklykda, nikanyň bozulmagyny döwlet tarapyndan bellige almak</div>
            </div>
                        <div class="service_card service_card5 bg_c3 p20 w23 hg400 aos-init aos-animate"
                data-aos="fade-up" data-aos-duration="3000">
                <img class="w60px" src="/assets/img/media (4).svg">

                <h5 class="fs_25 m_20_0 c4 hg80">NIKANYŇ BOZULANDYGYNY DÖWLET BELLIGINE ALMAK</h5>
                <div class="ln_30 fs_14">Nika kazyýet tarapyndan bozulanda </div>
            </div>
                        <div class="service_card service_card6 bg_c3 p20 w23 hg400 aos-init aos-animate"
                data-aos="fade-up" data-aos-duration="3000">
                <img class="w60px" src="/assets/img/media (5).svg">

                <h5 class="fs_25 m_20_0 c4 hg80">Çaganyň perzentlige alynmagyny döwlet belligine almak</h5>
                <div class="ln_30 fs_14">Çaganyň perzentlige alynmagyny döwlet tarapyndan bellige alnanynda </div>
            </div>
                        <div class="service_card service_card7 bg_c3 p20 w23 hg400 aos-init aos-animate"
                data-aos="fade-up" data-aos-duration="3000">
                <img class="w60px" src="/assets/img/media (6).svg">

                <h5 class="fs_25 m_20_0 c4 hg80"> Familiýanyň, adyň, atasynyň adynyň üýtgedilmegi </h5>
                <div class="ln_30 fs_14">Familiýanyň, adyň, atasynyň adynyň üýtgediljek halatynda</div>
            </div>
                        <div class="service_card service_card8 bg_c3 p20 w23 hg400 aos-init aos-animate"
                data-aos="fade-up" data-aos-duration="3000">
                <img class="w60px" src="/assets/img/media (7).svg">

                <h5 class="fs_25 m_20_0 c4 hg80">Ölümi döwlet tarapyndan bellige almak</h5>
                <div class="ln_30 fs_14">Ölümi döwlet tarapyndan bellige almak hakynda şahadatnama almak isleýän, ölen adamyň hossarlary üçin</div>
            </div>
                    </div>
        <a href="/services" class="t_dcrtn_no d_flex flex_sp just_center a_items moving-left">
            <p class="c2 m_r10">Giňişleýin</p>
            <img src="/assets/img/right.svg">
        </a>
    </div>
</div>
<div class="p_30_0">
    <div class="wrapper">
        <div class="chap_title">Habarlar</div>
        <div class="main_news d_flex flex_wrap w100">
                        <div class="news_card main_news_card web-mobile w49">
                <div class="m_r10 img_w">
                    <a class="d_iblock w100change" href="/news/Döwlet Baştutanymyz nobatdaky ýaşaýyş jaý toplumynyň açylyşyna">
                        <img class="w100change"  src="/assets/img/news/thumb.jfif">
                        <!-- <img style="width: 300px;" src="/assets/img/img<? echo $count + 1?>.png"> -->
                    </a>
                </div>
                <div class="bg_c3 p20 hg190">
                    <a class="t_dcrtn_no c4" href="/news/Döwlet Baştutanymyz nobatdaky ýaşaýyş jaý toplumynyň açylyşyna">
                        <h5 class="fs_18 hg110">Döwlet Baştutanymyz nobatdaky ýaşaýyş jaý toplumynyň açylyşyna gatnaşdy </h5>
                        <!-- <div class="fs_14 m_t20">Şu gün hormatly Prezidentimiz Serdar Berdimuhamedow paýtagtymyzyň Bagtyýarlyk etrabynyň Çoganly ýaşaýyş toplumyndaky</div> -->
                        <div class="d_flex m_t20">
                            <p class="fw_bold c6 m_r10 fs_14">24 Mart, 2022 ý.</p>
                            <p class="fw_bold c6 m_r10 fs_14">19:39</p>
                        </div>
                    </a>
                </div>
            </div>
                        <div class="news_card main_news_card web-mobile w49">
                <div class="m_r10 img_w">
                    <a class="d_iblock w100change" href="/news/Türkmenistanyň Prezidenti Pakistan Yslam">
                        <img class="w100change"
                            src="/assets/img/news/thumb (1).jfif ">
                        <!-- <img style="width: 300px;" src="/assets/img/img<? echo $count + 1?>.png"> -->
                    </a>
                </div>
                <div class="bg_c3 p20 hg190">
                    <a class="t_dcrtn_no c4" href="/news/Türkmenistanyň Prezidenti Pakistan Yslam">
                        <h5 class="fs_18 hg110">Türkmenistanyň Prezidenti Pakistan Yslam Respublikasynyň ýolbaşçylaryny gutlady</h5>
                        <!-- <div class="fs_14 m_t20">Hormatly Prezidentimiz Serdar Berdimuhamedow Pakistan Yslam Respublikasynyň Prezidenti Arif Alwa, Pakistan Yslam Respublikasynyň Premýer-ministri Imran Hana</div> -->
                        <div class="d_flex m_t20">
                            <p class="fw_bold c6 m_r10 fs_14">23 Mart, 2022 ý.</p>
                            <p class="fw_bold c6 m_r10 fs_14">11:30</p>
                        </div>
                    </a>
                </div>
            </div>

            </div>

                    </div>
        <a href="/news" class="t_dcrtn_no d_flex flex_sp just_center a_items moving-left">
            <p class="c2 m_r10">Giňişleýin</p>
            <img src="/assets/img/right.svg">
        </a>
    </div>
</div>
<style>
.service_card1:hover {
    transition: all 600ms cubic-bezier(0.68, -0.55, 0.265, 1.55);
    transform: translateY(-10px);
}

.service_card1:hover.service_card1 img {
    color: red;
    filter: hue-rotate(45deg);
}
</style>
<style>
.service_card2:hover {
    transition: all 600ms cubic-bezier(0.68, -0.55, 0.265, 1.55);
    transform: translateY(-10px);
}

.service_card2:hover.service_card2 img {
    color: red;
    filter: hue-rotate(45deg);
}
</style>
<style>
.service_card3:hover {
    transition: all 600ms cubic-bezier(0.68, -0.55, 0.265, 1.55);
    transform: translateY(-10px);
}

.service_card3:hover.service_card3 img {
    color: red;
    filter: hue-rotate(45deg);
}
</style>
<style>
.service_card4:hover {
    transition: all 600ms cubic-bezier(0.68, -0.55, 0.265, 1.55);
    transform: translateY(-10px);
}

.service_card4:hover.service_card4 img {
    color: red;
    filter: hue-rotate(45deg);
}
</style>
<style>
.service_card5:hover {
    transition: all 600ms cubic-bezier(0.68, -0.55, 0.265, 1.55);
    transform: translateY(-10px);
}

.service_card5:hover.service_card5 img {
    color: red;
    filter: hue-rotate(45deg);
}
</style>
<style>
.service_card6:hover {
    transition: all 600ms cubic-bezier(0.68, -0.55, 0.265, 1.55);
    transform: translateY(-10px);
}

.service_card6:hover.service_card6 img {
    color: red;
    filter: hue-rotate(45deg);
}
</style>
<style>
.service_card7:hover {
    transition: all 600ms cubic-bezier(0.68, -0.55, 0.265, 1.55);
    transform: translateY(-10px);
}

.service_card7:hover.service_card7 img {
    color: red;
    filter: hue-rotate(45deg);
}
</style>
<style>
.service_card8:hover {
    transition: all 600ms cubic-bezier(0.68, -0.55, 0.265, 1.55);
    transform: translateY(-10px);
}

.service_card8:hover.service_card8 img {
    color: red;
    filter: hue-rotate(45deg);
}
</style>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
AOS.init();
</script>
<style>
.moving-left img {
    position: relative;
    transition: transform 0.3s ease;
    transform: translateX(0px);
}

.moving-left:hover img {
    transform: translateX(10px);
}
</style>
@endsection
