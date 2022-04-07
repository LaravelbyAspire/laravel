@extends('layouts.appru')
@section('active')
<div class="wrapper d_flex flex_sp w100 a_items">
       <div class="logo d_flex">
           <a class="main_logo" href="/ru/index">
               <img src="/assets/img/logo.svg">
           </a>
                       <img class="year" src="/assets/img/header_logo.png">
                   </div>
       <div class="d_flex web">
           <ul class="menu d_flex flex_sp a_items">
                               <li class="menu-item m_r50 ls_no
               ">
                   <a class="c2 fw_bold fs_16 t_dcrtn_no hover1" href="/ru/index"> Главная</a>
               </li>
                               <li class="menu-item m_r50 ls_no ">
                   <a class="c2 fw_bold fs_16 t_dcrtn_no hover1" href="/ru/about_us"> О нас</a>
               </li>
                               <li class="menu-item m_r50 ls_no ">
                   <a class="c2 fw_bold fs_16 t_dcrtn_no hover1" href="/ru/services"> Услуги</a>
               </li>
                               <li class="menu-item m_r50 ls_no active_item">
                   <a class="c2 fw_bold fs_16 t_dcrtn_no hover1" href="/ru/news"> Новости</a>
               </li>
                               <li class="menu-item m_r50 ls_no ">
                   <a class="c2 fw_bold fs_16 t_dcrtn_no hover1" href="/ru/contact"> Контакты</a>
               </li>
                           </ul>
           <div class="lang d_flex just_center">
               <img src="/assets/img/language.svg">
               <div class="lang_down d_no p_abs m_t20 p10 br20 bg_c1">
                   <ul>
                       <li class="active_home_language"><a
                               class="c2 t_dcrtn_no hover4" href="/ru">RU</a>
                       </li>
                       <li class=""><a
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
                               <li class="menu-item m_r50 ls_no
               ">
                   <a class="c2 fw_bold fs_16 t_dcrtn_no hover1" href="/ru/index">
                       Главная</a>
               </li>
                               <li class="menu-item m_r50 ls_no ">
                   <a class="c2 fw_bold fs_16 t_dcrtn_no hover1" href="/ru/about_us">
                       О нас</a>
               </li>
                               <li class="menu-item m_r50 ls_no ">
                   <a class="c2 fw_bold fs_16 t_dcrtn_no hover1" href="/ru/services">
                       Услуги</a>
               </li>
                               <li class="menu-item m_r50 ls_no   active_item">
                   <a class="c2 fw_bold fs_16 t_dcrtn_no hover1" href="/ru/news">
                       Новости</a>
               </li>
                               <li class="menu-item m_r50 ls_no ">
                   <a class="c2 fw_bold fs_16 t_dcrtn_no hover1" href="/ru/contact">
                       Контакты</a>
               </li>
                           </ul>
       </div>
   </div>
@endsection
@section('content')

<div class="wrapper">
    <div class="m_t150">
        <div class="chap_title ">Новости</div>
        <hr class="m_20_0 hg2">
        <div id="div1" class="main_news2 d_flex flex_wrap w100">
                        <div class="news_card web-mobile w49">
                <div class="m_r10 img_w">
                    <a class="d_iblock" href="/runews/Döwlet Baştutanymyz nobatdaky ýaşaýyş jaý toplumynyň açylyşyna">
                        <img style="width: 300px;" src="/assets/img/news/thumb.jfif">
                        <!-- <img style="width: 300px;" src="/assets/img/img<? echo $count + 1?>.png"> -->
                    </a>
                </div>
                <div class="web_p_0_20">

                    <h5 class="fs_16px c2">Глава государства принял участие в открытии очередного жилого комплекса </h5>
                    <div class="d_flex m_t20 a_items">
                        <img class="m_r5" src="/assets/img/calendar.svg">
                        <p class="c2 m_r20 fs_12">24 Март, 2022 г.</p>
                        <img class="m_r5" src="/assets/img/clock.svg">
                        <p class="c2 m_r10 fs_12">19:39</p>
                    </div>
                    <div style="max-height: 30px; overflow: hidden; text-overflow: ellipsis; " class="fs_12 m_t20 c6">
                        Сегодня Президент Сердар Бердымухамедов принял участие в                    </div>
                    <a href="/runews/Döwlet Baştutanymyz nobatdaky ýaşaýyş jaý toplumynyň açylyşyna" style="width: 110px;"
                        class="download_btn mr_news_btn m_t20">
                        <p class="c2 fs_12 fw_bold">Показать полностью</p>
                        <img style="width: 8px;" src="/assets/img/right.svg">
                    </a>
                </div>
            </div>
                        <div class="news_card web-mobile w49">
                <div class="m_r10 img_w">
                    <a class="d_iblock" href="/runews/Türkmenistanyň Prezidenti Pakistan Yslam">
                        <img style="width: 300px;" src="/assets/img/news/thumb (1).jfif">
                        <!-- <img style="width: 300px;" src="/assets/img/img<? echo $count + 1?>.png"> -->
                    </a>
                </div>
                <div class="web_p_0_20">

                    <h5 class="fs_16px c2">Президент Туркменистана поздравил руководство Исламской Республики Пакистан</h5>
                    <div class="d_flex m_t20 a_items">
                        <img class="m_r5" src="/assets/img/calendar.svg">
                        <p class="c2 m_r20 fs_12">23 Март, 2022 г.</p>
                        <img class="m_r5" src="/assets/img/clock.svg">
                        <p class="c2 m_r10 fs_12">11:30</p>
                    </div>
                    <div style="max-height: 30px; overflow: hidden; text-overflow: ellipsis; " class="fs_12 m_t20 c6">
                      Президент Сердар Бердымухамедов направил тёплые поздравления и                   </div>
                    <a href="/runews/Türkmenistanyň Prezidenti Pakistan Yslam" style="width: 110px;"
                        class="download_btn mr_news_btn m_t20">
                        <p class="c2 fs_12 fw_bold">Показать полностью</p>
                        <img style="width: 8px;" src="/assets/img/right.svg">
                    </a>
                </div>
            </div>

            </div>
                    </div>

        <script type="text/javascript">
        var news_counter = 20;
        $(document).ready(function() {
            $(document).on('click', '.load_more', function() {
                $.ajax('/function/load.php', {
                    type: 'POST',
                    data: {
                        "page": news_counter
                    },
                    success: function(data, status, xhr) {
                        $('#div1').append(data);
                        news_counter += 5;
                    }
                });
            });
        });
        </script>
    </div>
</div>
<script>
$('.mr_news_btn').hover(function() {
    $(this).find('img').attr('src', function(i, src) {
        return src.replace('/assets/img/right.svg', '/assets/img/right.svg')
        console.log('on')
    })
}, function() {
    $(this).find('img').attr('src', function(i, src) {
        return src.replace('/assets/img/right.svg', '/assets/img/right.svg')
        console.log('over')
    })
})
</script>

@endsection
