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
                               <li class="menu-item m_r50 ls_no ">
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
                               <li class="menu-item m_r50 ls_no  active_item">
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
        <div class="wrap">
            <div class=" d_flex just_center p_rel over_hide" style="z-index: -1;">
                <img class="w100" src="/assets/img/news/thumb (1).jfif">

            </div>
            <div class="d_flex m_t20 a_items">
                <img class="m_r5" src="/assets/img/calendar.svg">
                <p class="c2 m_r20 fs_14">23 Март, 2022 г.</p>
                <img class="m_r5" src="/assets/img/clock.svg">
                <p class="c2 m_r10 fs_14">18:00</p>
            </div>
            <h2 class="m_20_0 c2">Президент Туркменистана поздравил руководство Исламской Республики Пакистан</h2>
             <div class="page_content c4 fw_300 ln_30 fs_18  m_b40"><p>Президент Сердар Бердымухамедов направил тёплые поздравления и наилучшие пожелания Президенту Исламской Республики Пакистан Арифу Алви, Премьер-министру Исламской Республики Пакистан Имран Хану, а также братскому народу страны по случаю национального праздника &ndash; Дня Пакистана.</p>

 <p>Отношения между Туркменистаном и Исламской Республикой Пакистан, которые основываются на принципах равноправия, обоюдного уважения, взаимопонимания и доверия, систематически совершенствуются, отметил в своём послании глава государства, выразив уверенность, что эти связи откроют большие перспективы в различных направлениях во имя дальнейшего развития наших братских народов.</p>

 <p>&laquo;Мы высоко ценим дружественные отношения между Туркменистаном и Исламской Республикой Пакистан&raquo;, &ndash; подчеркнул Президент Сердар Бердымухамедов, выразив уверенность, что двустороннее парт&shy;нёрство будет и далее развиваться и укрепляться в интересах народов двух стран.</p>

 <p>Пользуясь этой приятной возможностью, глава государства выразил Президенту Арифу Алви и Премьер-министру Имран Хану искренние пожелания крепкого здоровья, счастья и благополучия, а братскому народу Пакистана &ndash; прогресса и процветания.</p>

 <p>Источник: <a href="https://tdh.gov.tm/ru/post/30791/prezident-turkmenistana-pozdravil-rukovodstvo-islamskoj-respubliki-pakistan">www.tdh.gov.tm</a></p>
</div>
        </div>

    </div>
</div>
<script>
$('.mr_news_btn').hover(function() {
    $(this).find('img').attr('src', function(i, src) {
        return src.replace('/assets/img/right.svg', '/assets/img/white.svg')
        console.log('on')
    })
}, function() {
    $(this).find('img').attr('src', function(i, src) {
        return src.replace('/assets/img/white.svg', '/assets/img/right.svg')
        console.log('over')
    })
})
</script>

@endsection
