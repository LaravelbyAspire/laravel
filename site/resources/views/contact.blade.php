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
                            <li class="menu-item m_r50 ls_no ">
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
                            <li class="menu-item m_r50 ls_no active_item">
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
                            <li class="menu-item m_r50 ls_no
            ">
                <a class="c2 fw_bold fs_16 t_dcrtn_no hover1" href="/">
                    Baş sahypa</a>
            </li>
                            <li class="menu-item m_r50 ls_no  ">
                <a class="c2 fw_bold fs_16 t_dcrtn_no hover1" href="/about_us">
                    Biz barada</a>
            </li>
                            <li class="menu-item m_r50 ls_no   ">
                <a class="c2 fw_bold fs_16 t_dcrtn_no hover1" href="/services">
                    Hyzmatlarymyz</a>
            </li>
                            <li class="menu-item m_r50 ls_no ">
                <a class="c2 fw_bold fs_16 t_dcrtn_no hover1" href="/news">
                    Habarlar</a>
            </li>
                            <li class="menu-item m_r50 ls_no active_item ">
                <a class="c2 fw_bold fs_16 t_dcrtn_no hover1" href="/contact">
                    Habarlaşmak</a>
            </li>
                        </ul>
    </div>
</div>
@endsection

@section('content')

<div class="m_t150">
    <div class="wrapper">
        <div class="chap_title">Habarlaşmak</div>
        <hr class="m_20_0 hg2">
        <div class="timetable">
            <table>
	<tbody>
		<tr>
			<td class="table_header" colspan="4">Resminamalar bo&yacute;un&ccedil;a maglumatlar</td>
		</tr>
		<tr>
			<td class="fw_bold w25 p_20_30">Hepd&auml;niň g&uuml;nleri</td>
			<td class="fw_bold w25 p_20_30">Ta&yacute;&yacute;ar resminamalaryň beril&yacute;&auml;n wagty</td>
			<td class="fw_bold w25 p_20_30">Ra&yacute;atlardan resminamalary kabul edil&yacute;&auml;n wagty</td>
			<td class="fw_bold w25 p_20_30">Arakesme</td>
		</tr>
		<tr>
			<td>Duşenbe</td>
			<td>09:00-13:00</td>
			<td>14:00-16:00</td>
			<td>13:00-14:00</td>
		</tr>
		<tr>
			<td>Sişenbe</td>
			<td>09:00-13:00</td>
		</tr>
		<tr>
			<td>Çarşenbe</td>
		<td>09:00-13:00</td>
			<td>14:00-16:00</td>
			<td>13:00-14:00</td>
		</tr>
		<tr>
			<td>Penşenbe</td>
      	<td colspan="3">Resminamalary tertip d&uuml;zg&uuml;nde saklamak g&uuml;nleri</td>

		</tr>
		<tr>
			<td>Anna</td>
			<td>09:00-13:00</td>
			<td>14:00-16:00</td>
			<td>13:00-14:00</td>
		</tr>
		<tr>
			<td>Şenbe</td>
		<td>09:00-13:00</td>
		</tr>
		<tr>
			<td>&Yacute;ekşenbe</td>
			<td colspan="3">Dynç  </td>
		</tr>
	</tbody>
</table>
</div>









        <div class="m_40_0 web-mobile w100 ">
            <div class="contact_form p20 border-1">
                <form  action="{{ route('send.email') }}" method="POST"  >
                  @csrf
                    <div class="d_flex flex_wrap">
                        <div class="w100 inputs">
                            <h6>Doly adyňyz</h6>
                            <input class="input" style="width: 89%" id="fullname" type="text" name="fullname" value="{{ old('fullname') }}">
                            @error('fullname') <span>{{ $message }}</span> @enderror
                        </div>
                        <div class="w49 inputs">
                            <h6>Email</h6>
                            <input class="input" id="email" type="text" name="email" value="{{ old('email') }}">
                            @error('email') <span>{{ $message }}</span> @enderror
                        </div>
                        <div class="w49 inputs">
                            <h6>Telefon</h6>
                            <input class="input" id="tel" type="text" name="tel" value="{{ old('tel') }}">
                            @error('tel') <span>{{ $message }}</span> @enderror
                        </div>


                        <div class="w49 inputs">
                            <h6>Hatyňyz</h6>
                            <textarea rows="8" cols="50" id="message" name="message" class="input msg" >{{ old('message') }}</textarea>
                            @error('message') <span>{{ $message }}</span> @enderror
                        </div>
                        <div class="sendbtn w49 inputs">
                            <input class="input_send" type="submit" name="send" value="Haty iber">
                        </div>
                    </div>
                </form>
            </div>










            <div class="contact_inform p20">
                <div class="inform_header c3 fs_25 fw_bold ln_30 m_t5">Biziň bilen habarlaşmak üçin salgylarymyz</div>
                <ul class="m_80_0 footer_contact">
                    <li class="d_flex m_b40">
                        <img src="/assets/img/phone.svg">
                        <p class="c7 fw_bold">+993 (12) 94-08-75</p>
                    </li>
                    <li class="d_flex m_b40">
                        <img src="/assets/img/fax.svg">
                        <p class="c7 fw_bold">+993 (12) 94-29-77</p>
                    </li>
                    <li class="d_flex m_b40">
                        <img src="/assets/img/mail.svg">
                        <p class="c7 fw_bold">ryny@sanly.tm</p>
                    </li>
                    <li class="d_flex m_b40">
                        <img src="/assets/img/location.svg">
                        <div class="c7 fw_bold"><p>Türkmenistan, Aşgabat ş, Berkararlyk etrap, Gurbansoltan eje şaýoly, jaý 186.</p>
</div>
                    </li>
                </ul>
            </div>
        </div>
        <div id="map" style="width: 100%; height: 400px; margin-bottom:40px">
            <ymaps class="ymaps-2-1-78-map">
                <ymaps
                    class="ymaps-2-1-78-map ymaps-2-1-78-i-ua_js_yes ymaps-2-1-78-map-bg ymaps-2-1-78-islets_map-lang-en">
                    <ymaps class="ymaps-2-1-78-inner-panes">
                        <ymaps class="ymaps-2-1-78-events-pane ymaps-2-1-78-user-selection-none" unselectable="on"
                            style="height: 100%; width: 100%; top: 0px; left: 0px; position: absolute; z-index: 2500; cursor: url(&quot;https://api-maps.yandex.ru/2.1.78/build/release/images/cursor/grab.cur&quot;) 16 16, url(&quot;https://api-maps.yandex.ru/2.1.78/build/release/images/cursor/grab.cur&quot;), move;">
                        </ymaps>
                        <ymaps class="ymaps-2-1-78-ground-pane"
                            style="top: 0px; left: 0px; position: absolute; transform: translate3d(0px, 0px, 0px) scale(1, 1); z-index: 501;">
                            <ymaps style="z-index: 150; position: absolute;">
                                <canvas height="656" width="1605"
                                    style="position: absolute; width: 1605px; height: 656px; left: -128px; top: -128px;"></canvas>
                            </ymaps>
                        </ymaps>
                        <ymaps class="ymaps-2-1-78-copyrights-pane"
                            style="height: 0px; inset: auto 0px 0px; position: absolute; z-index: 5002;">
                            <ymaps style="display:none;">
                                <ymaps
                                    class="ymaps-2-1-78-copyright ymaps-2-1-78-copyright_color_white ymaps-2-1-78-copyright_logo_no"
                                    style="">
                                    <ymaps class="ymaps-2-1-78-copyright__fog">…</ymaps>
                                    <ymaps class="ymaps-2-1-78-copyright__wrap">
                                        <ymaps class="ymaps-2-1-78-copyright__layout">
                                            <ymaps class="ymaps-2-1-78-copyright__content-cell">
                                                <ymaps class="ymaps-2-1-78-copyright__content">
                                                    <ymaps class="ymaps-2-1-78-copyright__text">Image © 2019
                                                        DigitalGlobe,
                                                        Inc.</ymaps>
                                                    <ymaps class="ymaps-2-1-78-copyright__agreement">&nbsp;<a
                                                            class="ymaps-2-1-78-copyright__link" target="_blank"
                                                            href="https://yandex.ru/legal/maps_termsofuse/?lang=en"
                                                            rel="noopener">User Agreement</a>
                                                    </ymaps>
                                                </ymaps>
                                            </ymaps>
                                            <ymaps class="ymaps-2-1-78-copyright__logo-cell"><a
                                                    class="ymaps-2-1-78-copyright__logo ymaps-2-1-78-copyright__logo_lang_en"
                                                    href="" target="_blank"></a></ymaps>
                                        </ymaps>
                                    </ymaps>
                                </ymaps>
                            </ymaps>
                            <ymaps style="display:none;" class="ymaps-2-1-78-map-copyrights-promo">
                                <ymaps>
                                    <ymaps class="ymaps-2-1-78-gotoymaps" title="Directions">
                                        <ymaps class="ymaps-2-1-78-gotoymaps__container">
                                            <ymaps class="ymaps-2-1-78-gotoymaps__pin"></ymaps>
                                            <ymaps class="ymaps-2-1-78-gotoymaps__text-container">
                                                <ymaps class="ymaps-2-1-78-gotoymaps__text">Directions</ymaps>
                                            </ymaps>
                                        </ymaps>
                                    </ymaps><a class="ymaps-2-1-78-gototech" target="_blank"
                                        href="https://tech.yandex.ru/maps/mapsapi/?from=api-maps "
                                        style="display: none;"></a>
                                </ymaps>
                            </ymaps>
                        </ymaps>
                        <ymaps class="ymaps-2-1-78-controls-pane"
                            style="width: 100%; top: 0px; left: 0px; position: absolute; z-index: 4503;">
                            <ymaps class="ymaps-2-1-78-controls__toolbar" style="margin-top: 10px;">
                                <ymaps class="ymaps-2-1-78-controls__toolbar_left"></ymaps>
                                <ymaps class="ymaps-2-1-78-controls__toolbar_right"></ymaps>
                            </ymaps>
                            <ymaps class="ymaps-2-1-78-controls__bottom" style="top: 400px;"></ymaps>
                            <ymaps class="ymaps-2-1-78-controls__control"
                                style="margin-right: 0px; margin-left: 0px; position: inherit; inset: 108px auto auto 10px;">
                                <ymaps>
                                    <ymaps class="ymaps-2-1-78-zoom" style="height: 150px">
                                        <ymaps
                                            class="ymaps-2-1-78-zoom__plus ymaps-2-1-78-zoom__button ymaps-2-1-78-float-button ymaps-2-1-78-user-selection-none"
                                            unselectable="on">
                                            <ymaps class="ymaps-2-1-78-zoom__icon ymaps-2-1-78-float-button-icon">
                                            </ymaps>
                                        </ymaps>
                                        <ymaps
                                            class="ymaps-2-1-78-zoom__minus ymaps-2-1-78-zoom__button ymaps-2-1-78-float-button ymaps-2-1-78-user-selection-none"
                                            unselectable="on">
                                            <ymaps class="ymaps-2-1-78-zoom__icon ymaps-2-1-78-float-button-icon">
                                            </ymaps>
                                        </ymaps>
                                        <ymaps class="ymaps-2-1-78-zoom__scale">
                                            <ymaps
                                                class="ymaps-2-1-78-zoom__runner ymaps-2-1-78-zoom__button ymaps-2-1-78-float-button ymaps-2-1-78-zoom__runner__transition ymaps-2-1-78-touch-action-none ymaps-2-1-78-user-selection-none"
                                                unselectable="on" style="top: 14px;">
                                                <ymaps
                                                    class="ymaps-2-1-78-zoom__icon ymaps-2-1-78-float-button-icon ymaps-2-1-78-float-button-icon_icon_runner">
                                                </ymaps>
                                            </ymaps>
                                        </ymaps>
                                    </ymaps>
                                </ymaps>
                            </ymaps>
                        </ymaps>
                        <ymaps class="ymaps-2-1-78-places-pane"
                            style="top: 0px; left: 0px; position: absolute; transform: translate3d(0px, 0px, 0px) scale(1, 1); z-index: 2004;">
                            <ymaps class="ymaps-2-1-78-placemark-overlay ymaps-2-1-78-user-selection-none"
                                unselectable="on"
                                style="z-index: 650; height: 0px; width: 0px; position: absolute; left: 675px; top: 200px;">
                                <ymaps>
                                    <ymaps class="ymaps-2-1-78-islets_icon-with-caption">
                                        <ymaps class="ymaps-2-1-78-islets_icon-with-caption__caption-block">
                                            <ymaps class="ymaps-2-1-78-islets_icon-caption"
                                                style="padding: 0px; max-width: 0px;"></ymaps>
                                        </ymaps>
                                        <ymaps id="id_161710181507156804736">
                                            <ymaps
                                                class="ymaps-2-1-78-svg-icon ymaps_https___api_maps_yandex_ru_2_1_78_1083258176504islands_icon___2776D2_34x41_1617101815390"
                                                style="position: absolute; width: 34px; height: 41px; left: -11px; top: -38px;">
                                                <ymaps class="ymaps-2-1-78-svg-icon-content"
                                                    style="font: 13px Arial, sans-serif; position: absolute; text-align: center;left: 5px;top: 6px;width: 16px;height: 16px;">
                                                    <ymaps></ymaps>
                                                </ymaps>
                                            </ymaps>
                                        </ymaps>
                                    </ymaps>
                                </ymaps>
                            </ymaps>
                        </ymaps>
                    </ymaps>
                </ymaps>
            </ymaps>
        </div>
    </div>
</div>
<script>
function form_check() {
    var x = document.forms["check"]["fullname"].value;
    var y = document.forms["check"]["email"].value;
    var z = document.forms["check"]["message"].value;
    var g = document.forms["check"]["tel"].value;
    var t = document.forms["check"]["company"].value;

    if (x === "") {
        alert("Hökman doldurylmaly");
        return false;
    }
    if (y === "") {
        alert("Hökman doldurylmaly");
        return false;
    }
    if (z === "") {
        alert("Hökman doldurylmaly");
        return false;
    }
    if (g === "") {
        alert("Hökman doldurylmaly");
        return false;
    }
    if (t === "") {
        alert("Hökman doldurylmaly");
        return false;
    }
}
</script>

<script>
ymaps.ready(init);

function init() {
    var myMap = new ymaps.Map("map", {
        center: [37.94483375279959, 58.39064737307091],
        zoom: 19,
        type: 'yandex#satellite',
        controls: ['zoomControl'],
        // scrollZoom: disable
    });
    myMap.behaviors.disable('scrollZoom');
    myMap.geoObjects
        .add(new ymaps.Placemark([37.94483375279959, 58.39064737307091], {
            balloonContent: 'Our office'
        }, {
            preset: 'islands#icon',
            iconColor: '#2776D2'
        }));
}
</script>

@endsection
