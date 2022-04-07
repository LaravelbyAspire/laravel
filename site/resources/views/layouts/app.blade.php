<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>RÝNÝ</title>    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/assets/img/logo.svg">
    <link rel="stylesheet" media="(min-width:769px)" type="text/css" href="/css/style.css">
    <link rel="stylesheet" media="(max-width:768px)" type="text/css" href="/css/mobile.css">
    <link rel="stylesheet" type="text/css" href="/css/hover.css">
    <script type="text/javascript" src="/js/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="/css/owl.carousel.min.css">
    <script type="text/javascript" src="/js/jquery.min.js"></script>
    <script type="text/javascript" src="/js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="/js/owl.carousel.js"></script>
    <script type="text/javascript" src="/js/owl.autoplay.js"></script>
    <script type="text/javascript"
        src="https://api-maps.yandex.ru/2.1/?lang=tk_TM&apikey=ANU_n1wBAAAA9dJOHwIAndhp9hj72-Nr3sW2AEH-gDOMfxgAAAAAAAAAAAB-2HSHDwvq-KtuTkQpIqYR-USDdg==">
    </script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>
  <body><header>
      @yield('active')
</header>
<script>
$('.lang').hover(function() {
    $('.lang_down').toggleClass('d_no')
})

$(document).ready(function() {
    $(window).scroll(function() {
        if ($(document).scrollTop() > 125) {
            $(".logo .main_logo, .logo .year").addClass("d_no");
            // $('header').addClass('bg_c2');
            // $('header a').addClass('c1');
        } else {
            $(".logo .main_logo, .logo .year").removeClass("d_no");
            // $('header').removeClass('bg_c2');
            // $('header a').removeClass('c1');
        }
    });
});
$('.menu_icon').click(function() {
    $(this).toggleClass('d_no')
    $('.close_icon').toggleClass('d_no')
    $('.menu_list').slideToggle()
})
$('.close_icon').click(function() {
    $(this).toggleClass('d_no')
    $('.menu_icon').toggleClass('d_no')
    $('.menu_list').slideToggle()
})
</script>
<body>
@yield('content')
  </body>
  <footer>
      <div class="wrapper web-mobile a_items flex_sp">
          <div class=" w250">
              <img src="/assets/img/logo.svg">
          </div>
          <div class=" w250">
              <p class="rec_time">
                  Resminamalaryň kabul edilýän wagtlary            </p>
              <p class="c7 fs_14 m_t10">Duşenbe, Sişenbe, Çarşenbe, Anna, Şenbe</p>
              <p class="c7 fs_14 m_t10">09:00 - 17:00</p>
          </div>
          <div class="w350">
              <ul class="footer_contact">
                  <li class="d_flex m_b15">
                      <img src="/assets/img/phone.svg">
                      <p class="c7 fw_300">+993 (12) 940875; </p>
                  </li>
                  <li class="d_flex m_b15">
                      <img src="/assets/img/fax.svg">
                      <p class="c7 fw_300">+993 (12) 942977; </p>
                  </li>
                  <li class="d_flex m_b15">
                      <img src="/assets/img/mail.svg">
                      <p class="c7 fw_300">ryny@sanly.tm</p>
                  </li>
                  <li class="d_flex m_b15">
                      <img src="/assets/img/location.svg">
                      <div class="c7 fw_300"><p> Türkmenistan.Aşgabat şäheri.Berkararlyk etrap. Gurbansoltan eje şaýoly,186</p>
  </div>
                  </li>
              </ul>
          </div>
      </div>
      <div class="wrapper d_flex flex_sp foot2">
          <div class="d_flex">
              <p class="c_white">Copyright &copy; 2022. Ähli Hukuklary Goralan. By Nurmuhammedov</p>
          </div>
          <div class="c_white">

          </div>
      </div>
  </footer>

</html>
