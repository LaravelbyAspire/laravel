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
                            <li class="menu-item m_r50 ls_no active_item">
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
                            <li class="menu-item m_r50 ls_no
            ">
                <a class="c2 fw_bold fs_16 t_dcrtn_no hover1" href="/">
                    Baş sahypa</a>
            </li>
                            <li class="menu-item m_r50 ls_no  ">
                <a class="c2 fw_bold fs_16 t_dcrtn_no hover1" href="/about_us">
                    Biz barada</a>
            </li>
                            <li class="menu-item m_r50 ls_no  active_item ">
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
<div class="wrapper ">

    <div class="chap_title m_150_0">Hyzmatlarymyz</div>
    <hr class="m_20_0 hg2">
    <div class="files d_flex flex_wrap flex_sp w100 m_40_0">

                <div class="d_flex w49" style="margin-top: 40px;">
            <div class="c2 fw_bold fs_20">
                01            </div>
            <div class="c2 fw_bold fs_20">&nbsp;&nbsp;-&nbsp;&nbsp;</div>
            <div>
                <div class="h73px c6 fw_bold fs_20">Çaganyň dogluşyny döwlet tarapyndan bellige almak hakynda arza (16 ýaşyna ýeten)
</div>

                <section class="buttons">
                    <a href="assets/documents/1.docx">
                        <button class="draw meet">Arza görnüşi<img style="width: 16%; margin-left: 10px"
                                src="/assets/img/download.svg"></button>
                    </a>
                </section>
                <!-- <p class="c2 fs_14">Arza görnüşi</p>
                     -->

            </div>
        </div>
                <div class="d_flex w49" style="margin-top: 40px;">
            <div class="c2 fw_bold fs_20">
                02            </div>
            <div class="c2 fw_bold fs_20">&nbsp;&nbsp;-&nbsp;&nbsp;</div>
            <div>
                <div class="h73px c6 fw_bold fs_20">Çaganyň dogluşyny döwlet tarapyndan bellige almak
 hakynda arza (çaga nikada durmaýan ejeden doglan halatynda we atalygy anyklanylmadyk halatynda)
</div>

                <section class="buttons">
                    <a href="assets/documents/2.docx">
                        <button class="draw meet">Arza görnüşi<img style="width: 16%; margin-left: 10px"
                                src="/assets/img/download.svg"></button>
                    </a>
                </section>


            </div>
        </div>
                <div class="d_flex w49" style="margin-top: 40px;">
            <div class="c2 fw_bold fs_20">
                03            </div>
            <div class="c2 fw_bold fs_20">&nbsp;&nbsp;-&nbsp;&nbsp;</div>
            <div>
                <div class="h73px c6 fw_bold fs_20">Çaganyň dogluşyny döwlet tarapyndan bellige almak
 hakynda arza (Çaga öz aralarynda nikada durýan adamlardan doglan halatynda)
</div>

                <section class="buttons">
                    <a href="assets/documents/3.docx">
                        <button class="draw meet">Arza görnüşi<img style="width: 16%; margin-left: 10px"
                                src="/assets/img/download.svg"></button>
                    </a>
                </section>


            </div>
        </div>
                <div class="d_flex w49" style="margin-top: 40px;">
            <div class="c2 fw_bold fs_20">
                04            </div>
            <div class="c2 fw_bold fs_20">&nbsp;&nbsp;-&nbsp;&nbsp;</div>
            <div>
                <div class="h73px c6 fw_bold fs_20">Tapylan (taşlanylan) çaganyň, ejesi tarapyndan goýlup gidilen çaganyň  dogluşyny döwlet tarapyndan bellige almak hakynda</div>

                <section class="buttons">
                    <a href="assets/documents/4.docx">
                        <button class="draw meet">Arza görnüşi<img style="width: 16%; margin-left: 10px"
                                src="/assets/img/download.svg"></button>
                    </a>
                </section>
                <!-- <p class="c2 fs_14">Arza görnüşi</p>
                     -->

            </div>
        </div>
                <div class="d_flex w49" style="margin-top: 40px;">
            <div class="c2 fw_bold fs_20">
                05            </div>
            <div class="c2 fw_bold fs_20">&nbsp;&nbsp;-&nbsp;&nbsp;</div>
            <div>
                <div class="h73px c6 fw_bold fs_20">NIKA BAGLAŞMAK HAKYNDA </div>

                <section class="buttons">
                    <a href="assets/documents/5.docx">
                        <button class="draw meet">Arza görnüşi<img style="width: 16%; margin-left: 10px"
                                src="/assets/img/download.svg"></button>
                    </a>
                </section>
                <!-- <p class="c2 fs_14">Arza görnüşi</p>
                     -->

            </div>
        </div>
                <div class="d_flex w49" style="margin-top: 40px;">
            <div class="c2 fw_bold fs_20">
                06            </div>
            <div class="c2 fw_bold fs_20">&nbsp;&nbsp;-&nbsp;&nbsp;</div>
            <div>
                <div class="h73px c6 fw_bold fs_20">Är-aýalyň özara razylygy boýunça bilelikdäki nikany bozmak barada arza
</div>

                <section class="buttons">
                    <a href="assets/documents/6.docx">
                        <button class="draw meet">Arza görnüşi<img style="width: 16%; margin-left: 10px"
                                src="/assets/img/download.svg"></button>
                    </a>
                </section>
                <!-- <p class="c2 fs_14">Arza görnüşi</p>
                     -->

            </div>
        </div>
                <div class="d_flex w49" style="margin-top: 40px;">
            <div class="c2 fw_bold fs_20">
                07            </div>
            <div class="c2 fw_bold fs_20">&nbsp;&nbsp;-&nbsp;&nbsp;</div>
            <div>
                <div class="h73px c6 fw_bold fs_20">NIKANY BOZMAK HAKYNDA ARZA</div>

                <section class="buttons">
                    <a href="assets/documents/7.docx">
                        <button class="draw meet">Arza görnüşi<img style="width: 16%; margin-left: 10px"
                                src="/assets/img/download.svg"></button>
                    </a>
                </section>
                <!-- <p class="c2 fs_14">Arza görnüşi</p>
                     -->

            </div>
        </div>
                <div class="d_flex w49" style="margin-top: 40px;">
            <div class="c2 fw_bold fs_20">
                08            </div>
            <div class="c2 fw_bold fs_20">&nbsp;&nbsp;-&nbsp;&nbsp;</div>
            <div>
                <div class="h73px c6 fw_bold fs_20">NIKANYŇ BOZULANDYGYNY DÖWLET BELLIGINE ALMAK HAKYNDA ARZA
(nika kazyýet tarapyndan bozulanda)
</div>

                <section class="buttons">
                    <a href="assets/documents/8.docx">
                        <button class="draw meet">Arza görnüşi<img style="width: 16%; margin-left: 10px"
                                src="/assets/img/download.svg"></button>
                    </a>
                </section>
                <!-- <p class="c2 fs_14">Arza görnüşi</p>
                     -->

            </div>
        </div>
                <div class="d_flex w49" style="margin-top: 40px;">
            <div class="c2 fw_bold fs_20">
                09            </div>
            <div class="c2 fw_bold fs_20">&nbsp;&nbsp;-&nbsp;&nbsp;</div>
            <div>
                <div class="h73px c6 fw_bold fs_20">Çaganyň perzentlige alynmagyny döwlet belligine almak hakynda arza</div>

                <section class="buttons">
                    <a href="assets/documents/9.docx">
                        <button class="draw meet">Arza görnüşi<img style="width: 16%; margin-left: 10px"
                                src="/assets/img/download.svg"></button>
                    </a>
                </section>
                <!-- <p class="c2 fs_14">Arza görnüşi</p>
                     -->

            </div>
        </div>
                <div class="d_flex w49" style="margin-top: 40px;">
            <div class="c2 fw_bold fs_20">
                10            </div>
            <div class="c2 fw_bold fs_20">&nbsp;&nbsp;-&nbsp;&nbsp;</div>
            <div>
                <div class="h73px c6 fw_bold fs_20">Atalygy anyklamak hakynda ata-enäniň bilelikdäki arzasy </div>

                <section class="buttons">
                    <a href="assets/documents/10.docx">
                        <button class="draw meet">Arza görnüşi<img style="width: 16%; margin-left: 10px"
                                src="/assets/img/download.svg"></button>
                    </a>
                </section>
                <!-- <p class="c2 fs_14">Arza görnüşi</p>
                     -->

            </div>
        </div>
                <div class="d_flex w49" style="margin-top: 40px;">
            <div class="c2 fw_bold fs_20">
                11            </div>
            <div class="c2 fw_bold fs_20">&nbsp;&nbsp;-&nbsp;&nbsp;</div>
            <div>
                <div class="h73px c6 fw_bold fs_20">Atalygy anyklamak hakynda arza </div>

                <section class="buttons">
                    <a href="assets/documents/11.docx">
                        <button class="draw meet">Arza görnüşi<img style="width: 16%; margin-left: 10px"
                                src="/assets/img/download.svg"></button>
                    </a>
                </section>
                <!-- <p class="c2 fs_14">Arza görnüşi</p>
                     -->

            </div>
        </div>
                <div class="d_flex w49" style="margin-top: 40px;">
            <div class="c2 fw_bold fs_20">
                12            </div>
            <div class="c2 fw_bold fs_20">&nbsp;&nbsp;-&nbsp;&nbsp;</div>
            <div>
                <div class="h73px c6 fw_bold fs_20">Atalygy anyklamak hakynda arza
(çaga doglan wagty çaganyň kakasy bilen nikada durmaýan we bellige almagy)</div>

                <section class="buttons">
                    <a href="assets/documents/12.docx">
                        <button class="draw meet">Arza görnüşi<img style="width: 16%; margin-left: 10px"
                                src="/assets/img/download.svg"></button>
                    </a>
                </section>
                <!-- <p class="c2 fs_14">Arza görnüşi</p>
                     -->

            </div>
        </div>
                <div class="d_flex w49" style="margin-top: 40px;">
            <div class="c2 fw_bold fs_20">
                13            </div>
            <div class="c2 fw_bold fs_20">&nbsp;&nbsp;-&nbsp;&nbsp;</div>
            <div>
                <div class="h73px c6 fw_bold fs_20">Atalygy anyklamak hakynda arza (kazyýetiň çözgüdi esasynda)
</div>

                <section class="buttons">
                    <a href="assets/documents/13.docx">
                        <button class="draw meet">Arza görnüşi<img style="width: 16%; margin-left: 10px"
                                src="/assets/img/download.svg"></button>
                    </a>
                </section>
                <!-- <p class="c2 fs_14">Arza görnüşi</p>
                     -->

            </div>
        </div>
                <div class="d_flex w49" style="margin-top: 40px;">
            <div class="c2 fw_bold fs_20">
                14            </div>
            <div class="c2 fw_bold fs_20">&nbsp;&nbsp;-&nbsp;&nbsp;</div>
            <div>
                <div class="h73px c6 fw_bold fs_20">Atalygy anyklamak hakynda arza
(çaga doglan wagty çaganyň ejesi ölende)
</div>

                <section class="buttons">
                    <a href="assets/documents/14.docx">
                        <button class="draw meet">Arza görnüşi<img style="width: 16%; margin-left: 10px"
                                src="/assets/img/download.svg"></button>
                    </a>
                </section>
                <!-- <p class="c2 fs_14">Arza görnüşi</p>
                     -->

            </div>
        </div>
                <div class="d_flex w49" style="margin-top: 40px;">
            <div class="c2 fw_bold fs_20">
                15            </div>
            <div class="c2 fw_bold fs_20">&nbsp;&nbsp;-&nbsp;&nbsp;</div>
            <div>
                <div class="h73px c6 fw_bold fs_20"> Familiýanyň, adyň, atasynyň adynyň üýtgedilmegi hakynda
</div>

                <section class="buttons">
                    <a href="assets/documents/15.docx">
                        <button class="draw meet">Arza görnüşi<img style="width: 16%; margin-left: 10px"
                                src="/assets/img/download.svg"></button>
                    </a>
                </section>



            </div>
        </div>

        <div class="d_flex w49" style="margin-top: 40px;">
    <div class="c2 fw_bold fs_20">
        16            </div>
    <div class="c2 fw_bold fs_20">&nbsp;&nbsp;-&nbsp;&nbsp;</div>
    <div>
        <div class="h73px c6 fw_bold fs_20">Ölüm hakynda arza
</div>

        <section class="buttons">
            <a href="assets/documents/16.docx">
                <button class="draw meet">Arza görnüşi<img style="width: 16%; margin-left: 10px"
                        src="/assets/img/download.svg"></button>
            </a>
        </section>
        <!-- <p class="c2 fs_14">Arza görnüşi</p>
             -->

    </div>
</div>

<div class="d_flex w49" style="margin-top: 40px;">
<div class="c2 fw_bold fs_20">
17            </div>
<div class="c2 fw_bold fs_20">&nbsp;&nbsp;-&nbsp;&nbsp;</div>
<div>
<div class="h73px c6 fw_bold fs_20">Çaganyň kakasy bilen nikada durmaýan ejesiniň kämillik ýaşyna ýetmedik çaganyň dogluş hakynda
</div>

<section class="buttons">
    <a href="assets/documents/17.docx">
        <button class="draw meet">Arza görnüşi<img style="width: 16%; margin-left: 10px"
                src="/assets/img/download.svg"></button>
    </a>
</section>
<!-- <p class="c2 fs_14">Arza görnüşi</p>
     -->

</div>
</div>

<div class="d_flex w49" style="margin-top: 40px;">
<div class="c2 fw_bold fs_20">
18            </div>
<div class="c2 fw_bold fs_20">&nbsp;&nbsp;-&nbsp;&nbsp;</div>
<div>
<div class="h73px c6 fw_bold fs_20">Raýat ýagdaýynyň namalarynyň ýazgysyna üýtgetmeler, goşmaçalar
we (ýa-da) düzedişler girizmek hakynda

</div>

<section class="buttons">
    <a href="assets/documents/18.docx">
        <button class="draw meet">Arza görnüşi<img style="width: 16%; margin-left: 10px"
                src="/assets/img/download.svg"></button>
    </a>
</section>
<!-- <p class="c2 fs_14">Arza görnüşi</p>
     -->

</div>
</div>

<div class="d_flex w49" style="margin-top: 40px;">
<div class="c2 fw_bold fs_20">
19           </div>
<div class="c2 fw_bold fs_20">&nbsp;&nbsp;-&nbsp;&nbsp;</div>
<div>
<div class="h73px c6 fw_bold fs_20">Raýat ýagdaýynyň namalarynyň ýazgysynyň ýokdugy
hakynda güwänamanyň berilmegi hakynda

</div>

<section class="buttons">
    <a href="assets/documents/19.docx">
        <button class="draw meet">Arza görnüşi<img style="width: 16%; margin-left: 10px"
                src="/assets/img/download.svg"></button>
    </a>
</section>
<!-- <p class="c2 fs_14">Arza görnüşi</p>
     -->

</div>
</div>


<div class="d_flex w49" style="margin-top: 40px;">
<div class="c2 fw_bold fs_20">
20            </div>
<div class="c2 fw_bold fs_20">&nbsp;&nbsp;-&nbsp;&nbsp;</div>
<div>
<div class="h73px c6 fw_bold fs_20">Gaýtadan dogluş hakynda şahadatnamanyň ýa-da dogluş hakynda güwänamanyň berilmegi barada
</div>

<section class="buttons">
    <a href="assets/documents/20.docx">
        <button class="draw meet">Arza görnüşi<img style="width: 16%; margin-left: 10px"
                src="/assets/img/download.svg"></button>
    </a>
</section>
<!-- <p class="c2 fs_14">Arza görnüşi</p>
     -->

</div>
</div>

<div class="d_flex w49" style="margin-top: 40px;">
<div class="c2 fw_bold fs_20">
21            </div>
<div class="c2 fw_bold fs_20">&nbsp;&nbsp;-&nbsp;&nbsp;</div>
<div>
<div class="h73px c6 fw_bold fs_20">ARZA
</div>

<section class="buttons">
    <a href="assets/documents/21.docx">
        <button class="draw meet">Arza görnüşi<img style="width: 16%; margin-left: 10px"
                src="/assets/img/download.svg"></button>
    </a>
</section>
<!-- <p class="c2 fs_14">Arza görnüşi</p>
     -->

</div>
</div>

<div class="d_flex w49" style="margin-top: 40px;">
<div class="c2 fw_bold fs_20">
22            </div>
<div class="c2 fw_bold fs_20">&nbsp;&nbsp;-&nbsp;&nbsp;</div>
<div>
<div class="h73px c6 fw_bold fs_20">Gaýtadan perzentlige alnandygy hakynda şahadatnamanyň ýa-da perzentlige alnandygy hakynda güwänamanyň berilmegi barada arza
</div>

<section class="buttons">
    <a href="assets/documents/22.docx">
        <button class="draw meet">Arza görnüşi<img style="width: 16%; margin-left: 10px"
                src="/assets/img/download.svg"></button>
    </a>
</section>
<!-- <p class="c2 fs_14">Arza görnüşi</p>
     -->

</div>
</div>

<div class="d_flex w49" style="margin-top: 40px;">
<div class="c2 fw_bold fs_20">
23           </div>
<div class="c2 fw_bold fs_20">&nbsp;&nbsp;-&nbsp;&nbsp;</div>
<div>
<div class="h73px c6 fw_bold fs_20">Gaýtadan atasynyň anyklanylandygy hakynda şahadatnamanyň ýa-da atalygyň anyklanylandygy hakynda
</div>

<section class="buttons">
    <a href="assets/documents/23.docx">
        <button class="draw meet">Arza görnüşi<img style="width: 16%; margin-left: 10px"
                src="/assets/img/download.svg"></button>
    </a>
</section>
<!-- <p class="c2 fs_14">Arza görnüşi</p>
     -->

</div>
</div>

<div class="d_flex w49" style="margin-top: 40px;">
<div class="c2 fw_bold fs_20">
24            </div>
<div class="c2 fw_bold fs_20">&nbsp;&nbsp;-&nbsp;&nbsp;</div>
<div>
<div class="h73px c6 fw_bold fs_20">Gaýtadan familiýanyň, adynyň we atasynyň adynyň üýtgedilendigi hakynda
</div>

<section class="buttons">
    <a href="assets/documents/24.docx">
        <button class="draw meet">Arza görnüşi<img style="width: 16%; margin-left: 10px"
                src="/assets/img/download.svg"></button>
    </a>
</section>
<!-- <p class="c2 fs_14">Arza görnüşi</p>
     -->

</div>
</div>

<div class="d_flex w49" style="margin-top: 40px;">
<div class="c2 fw_bold fs_20">
25           </div>
<div class="c2 fw_bold fs_20">&nbsp;&nbsp;-&nbsp;&nbsp;</div>
<div>
<div class="h73px c6 fw_bold fs_20">Gaýtadan ölüm hakynda şahadatnamanyň ýa-da ölüm hakynda
</div>

<section class="buttons">
    <a href="assets/documents/25.docx">
        <button class="draw meet">Arza görnüşi<img style="width: 16%; margin-left: 10px"
                src="/assets/img/download.svg"></button>
    </a>
</section>
<!-- <p class="c2 fs_14">Arza görnüşi</p>
     -->

</div>
</div>

<div class="d_flex w49" style="margin-top: 40px;">
<div class="c2 fw_bold fs_20">
26            </div>
<div class="c2 fw_bold fs_20">&nbsp;&nbsp;-&nbsp;&nbsp;</div>
<div>
<div class="h73px c6 fw_bold fs_20">Dogluş hakynda nama ýazgydan göçürme
</div>

<section class="buttons">
    <a href="assets/documents/26.docx">
        <button class="draw meet">Arza görnüşi<img style="width: 16%; margin-left: 10px"
                src="/assets/img/download.svg"></button>
    </a>
</section>
<!-- <p class="c2 fs_14">Arza görnüşi</p>
     -->

</div>
</div>

<div class="d_flex w49" style="margin-top: 40px;">
<div class="c2 fw_bold fs_20">
27           </div>
<div class="c2 fw_bold fs_20">&nbsp;&nbsp;-&nbsp;&nbsp;</div>
<div>
<div class="h73px c6 fw_bold fs_20">DOGLUŞ HAKYNDA GÜWÄNAMA
</div>

<section class="buttons">
    <a href="assets/documents/27.docx">
        <button class="draw meet">Arza görnüşi<img style="width: 16%; margin-left: 10px"
                src="/assets/img/download.svg"></button>
    </a>
</section>
<!-- <p class="c2 fs_14">Arza görnüşi</p>
     -->

</div>
</div>

<div class="d_flex w49" style="margin-top: 40px;">
<div class="c2 fw_bold fs_20">
28           </div>
<div class="c2 fw_bold fs_20">&nbsp;&nbsp;-&nbsp;&nbsp;</div>
<div>
<div class="h73px c6 fw_bold fs_20">DOGLUŞ HAKYNDA GÜWÄNAMA
(çaganyň kakasy barada maglumatlar ejesiniň görkezmesi boýunça)
</div>

<section class="buttons">
    <a href="assets/documents/28.docx">
        <button class="draw meet">Arza görnüşi<img style="width: 16%; margin-left: 10px"
                src="/assets/img/download.svg"></button>
    </a>
</section>
<!-- <p class="c2 fs_14">Arza görnüşi</p>
     -->

</div>
</div>

<div class="d_flex w49" style="margin-top: 40px;">
<div class="c2 fw_bold fs_20">
29           </div>
<div class="c2 fw_bold fs_20">&nbsp;&nbsp;-&nbsp;&nbsp;</div>
<div>
<div class="h73px c6 fw_bold fs_20">DOGLUŞ HAKYNDA GÜWÄNAMA
</div>

<section class="buttons">
    <a href="assets/documents/29.docx">
        <button class="draw meet">Arza görnüşi<img style="width: 16%; margin-left: 10px"
                src="/assets/img/download.svg"></button>
    </a>
</section>
<!-- <p class="c2 fs_14">Arza görnüşi</p>
     -->

</div>
</div>


<div class="d_flex w49" style="margin-top: 40px;">
<div class="c2 fw_bold fs_20">
30          </div>
<div class="c2 fw_bold fs_20">&nbsp;&nbsp;-&nbsp;&nbsp;</div>
<div>
<div class="h73px c6 fw_bold fs_20">NIKA BAGLAŞYLANDYGY HAKYNDA
GÜWÄNAMA

</div>

<section class="buttons">
    <a href="assets/documents/30.docx">
        <button class="draw meet">Arza görnüşi<img style="width: 16%; margin-left: 10px"
                src="/assets/img/download.svg"></button>
    </a>
</section>
<!-- <p class="c2 fs_14">Arza görnüşi</p>
     -->

</div>
</div>


<div class="d_flex w49" style="margin-top: 40px;">
<div class="c2 fw_bold fs_20">
31          </div>
<div class="c2 fw_bold fs_20">&nbsp;&nbsp;-&nbsp;&nbsp;</div>
<div>
<div class="h73px c6 fw_bold fs_20">NIKADA DURMAÝANDYGY HAKYNDA
GÜWÄNAMA

</div>

<section class="buttons">
    <a href="assets/documents/31.docx">
        <button class="draw meet">Arza görnüşi<img style="width: 16%; margin-left: 10px"
                src="/assets/img/download.svg"></button>
    </a>
</section>
<!-- <p class="c2 fs_14">Arza görnüşi</p>
     -->

</div>
</div>


<div class="d_flex w49" style="margin-top: 40px;">
<div class="c2 fw_bold fs_20">
32          </div>
<div class="c2 fw_bold fs_20">&nbsp;&nbsp;-&nbsp;&nbsp;</div>
<div>
<div class="h73px c6 fw_bold fs_20">NIKADA DURMAÝANDYGY HAKYNDA
GÜWÄNAMA

</div>

<section class="buttons">
    <a href="assets/documents/32.docx">
        <button class="draw meet">Arza görnüşi<img style="width: 16%; margin-left: 10px"
                src="/assets/img/download.svg"></button>
    </a>
</section>
<!-- <p class="c2 fs_14">Arza görnüşi</p>
     -->

</div>
</div>


<div class="d_flex w49" style="margin-top: 40px;">
<div class="c2 fw_bold fs_20">
33         </div>
<div class="c2 fw_bold fs_20">&nbsp;&nbsp;-&nbsp;&nbsp;</div>
<div>
<div class="h73px c6 fw_bold fs_20">NIKADA DURÝANDYGY HAKYNDA
GÜWÄNAMA

</div>

<section class="buttons">
    <a href="assets/documents/33.docx">
        <button class="draw meet">Arza görnüşi<img style="width: 16%; margin-left: 10px"
                src="/assets/img/download.svg"></button>
    </a>
</section>
<!-- <p class="c2 fs_14">Arza görnüşi</p>
     -->

</div>
</div>

<div class="d_flex w49" style="margin-top: 40px;">
<div class="c2 fw_bold fs_20">
34          </div>
<div class="c2 fw_bold fs_20">&nbsp;&nbsp;-&nbsp;&nbsp;</div>
<div>
<div class="h73px c6 fw_bold fs_20">NIKANYŇ BOZULANDYGY HAKYNDA
GÜWÄNAMA

</div>

<section class="buttons">
    <a href="assets/documents/34.docx">
        <button class="draw meet">Arza görnüşi<img style="width: 16%; margin-left: 10px"
                src="/assets/img/download.svg"></button>
    </a>
</section>
<!-- <p class="c2 fs_14">Arza görnüşi</p>
     -->

</div>
</div>

<div class="d_flex w49" style="margin-top: 40px;">
<div class="c2 fw_bold fs_20">
35          </div>
<div class="c2 fw_bold fs_20">&nbsp;&nbsp;-&nbsp;&nbsp;</div>
<div>
<div class="h73px c6 fw_bold fs_20">ATALYGYŇ ANYKLANYLANDYGY HAKYNDA
GÜWÄNAMA

</div>

<section class="buttons">
    <a href="assets/documents/35.docx">
        <button class="draw meet">Arza görnüşi<img style="width: 16%; margin-left: 10px"
                src="/assets/img/download.svg"></button>
    </a>
</section>
<!-- <p class="c2 fs_14">Arza görnüşi</p>
     -->

</div>
</div>

<div class="d_flex w49" style="margin-top: 40px;">
<div class="c2 fw_bold fs_20">
36         </div>
<div class="c2 fw_bold fs_20">&nbsp;&nbsp;-&nbsp;&nbsp;</div>
<div>
<div class="h73px c6 fw_bold fs_20">Familiýanyň, adyň we atasynyň adynyň
üýtgedilendigi hakynda

</div>

<section class="buttons">
    <a href="assets/documents/36.docx">
        <button class="draw meet">Arza görnüşi<img style="width: 16%; margin-left: 10px"
                src="/assets/img/download.svg"></button>
    </a>
</section>
<!-- <p class="c2 fs_14">Arza görnüşi</p>
     -->

</div>
</div>

<div class="d_flex w49" style="margin-top: 40px;">
<div class="c2 fw_bold fs_20">
37          </div>
<div class="c2 fw_bold fs_20">&nbsp;&nbsp;-&nbsp;&nbsp;</div>
<div>
<div class="h73px c6 fw_bold fs_20">ÖLÜM HAKYNDA GÜWÄNAMA
</div>

<section class="buttons">
    <a href="assets/documents/37.docx">
        <button class="draw meet">Arza görnüşi<img style="width: 16%; margin-left: 10px"
                src="/assets/img/download.svg"></button>
    </a>
</section>
<!-- <p class="c2 fs_14">Arza görnüşi</p>
     -->

</div>
</div>

<div class="d_flex w49" style="margin-top: 40px;">
<div class="c2 fw_bold fs_20">
38          </div>
<div class="c2 fw_bold fs_20">&nbsp;&nbsp;-&nbsp;&nbsp;</div>
<div>
<div class="h73px c6 fw_bold fs_20">Raýat ýagdaýynyň nama ýazgysyna üýtgetme, goşmaça we (ýa-da) düzediş
girizilendigi hakynda

</div>

<section class="buttons">
    <a href="assets/documents/38.docx">
        <button class="draw meet">Arza görnüşi<img style="width: 16%; margin-left: 10px"
                src="/assets/img/download.svg"></button>
    </a>
</section>
<!-- <p class="c2 fs_14">Arza görnüşi</p>
     -->

</div>
</div>

<div class="d_flex w49" style="margin-top: 40px;">
<div class="c2 fw_bold fs_20">
39          </div>
<div class="c2 fw_bold fs_20">&nbsp;&nbsp;-&nbsp;&nbsp;</div>
<div>
<div class="h73px c6 fw_bold fs_20">RAÝAT ÝAGDAÝYNYŇ NAMA ÝAZGYSYNYŇ
ÝOKDUGY HAKYNDA

</div>

<section class="buttons">
    <a href="assets/documents/39.docx">
        <button class="draw meet">Arza görnüşi<img style="width: 16%; margin-left: 10px"
                src="/assets/img/download.svg"></button>
    </a>
</section>
<!-- <p class="c2 fs_14">Arza görnüşi</p>
     -->

</div>
</div>

<div class="d_flex w49" style="margin-top: 40px;">
<div class="c2 fw_bold fs_20">
40          </div>
<div class="c2 fw_bold fs_20">&nbsp;&nbsp;-&nbsp;&nbsp;</div>
<div>
<div class="h73px c6 fw_bold fs_20">Toý dabarasynyň geçirilýändigi
barada güwänama

</div>

<section class="buttons">
    <a href="assets/documents/40.docx">
        <button class="draw meet">Arza görnüşi<img style="width: 16%; margin-left: 10px"
                src="/assets/img/download.svg"></button>
    </a>
</section>
<!-- <p class="c2 fs_14">Arza görnüşi</p>
     -->

</div>
</div>


<div class="d_flex w49" style="margin-top: 40px;">
<div class="c2 fw_bold fs_20">
41          </div>
<div class="c2 fw_bold fs_20">&nbsp;&nbsp;-&nbsp;&nbsp;</div>
<div>
<div class="h73px c6 fw_bold fs_20">Jaýlama we ýatlama dessuryny amala aşyrmak üçin
goşmaça rugsadyň berilmegi barada

</div>

<section class="buttons">
    <a href="assets/documents/43.docx">
        <button class="draw meet">Arza görnüşi<img style="width: 16%; margin-left: 10px"
                src="/assets/img/download.svg"></button>
    </a>
</section>
<!-- <p class="c2 fs_14">Arza görnüşi</p>
     -->

</div>
</div>

<div class="d_flex w49" style="margin-top: 40px;">
<div class="c2 fw_bold fs_20">
42          </div>
<div class="c2 fw_bold fs_20">&nbsp;&nbsp;-&nbsp;&nbsp;</div>
<div>
<div class="h73px c6 fw_bold fs_20">Türkmenistanyň raýaty bilen daşary ýurt raýatynyň ýa-da raýatlygy ýok adamyň
nika baglaşandygy barada
</div>

<section class="buttons">
    <a href="assets/documents/45.docx">
        <button class="draw meet">Arza görnüşi<img style="width: 16%; margin-left: 10px"
                src="/assets/img/download.svg"></button>
    </a>
</section>

</div>
</div>



<div class="d_flex w49" style="margin-top: 40px;">
<div class="c2 fw_bold fs_20">
43         </div>
<div class="c2 fw_bold fs_20">&nbsp;&nbsp;-&nbsp;&nbsp;</div>
<div>
<div class="h73px c6 fw_bold fs_20">NIKANYŇ BOZULANDYGY HAKYNDA
HABARNAMA
</div>

<section class="buttons">
    <a href="assets/documents/45.docx">
        <button class="draw meet">Arza görnüşi<img style="width: 16%; margin-left: 10px"
                src="/assets/img/download.svg"></button>
    </a>
</section>
<!-- <p class="c2 fs_14">Arza görnüşi</p>
     -->

</div>
</div>

<div class="d_flex w49" style="margin-top: 40px;">
<div class="c2 fw_bold fs_20">
44          </div>
<div class="c2 fw_bold fs_20">&nbsp;&nbsp;-&nbsp;&nbsp;</div>
<div>
<div class="h73px c6 fw_bold fs_20">PERZENTLIGE ALNANDYGY HAKYNDA
HABARNAMA


</div>

<section class="buttons">
    <a href="assets/documents/46.docx">
        <button class="draw meet">Arza görnüşi<img style="width: 16%; margin-left: 10px"
                src="/assets/img/download.svg"></button>
    </a>
</section>
<!-- <p class="c2 fs_14">Arza görnüşi</p>
     -->

</div>
</div>

<div class="d_flex w49" style="margin-top: 40px;">
<div class="c2 fw_bold fs_20">
45         </div>
<div class="c2 fw_bold fs_20">&nbsp;&nbsp;-&nbsp;&nbsp;</div>
<div>
<div class="h73px c6 fw_bold fs_20">ATALYGYŇ ANYKLANYLANDYGY HAKYNDA
HABARNAMA

</div>

<section class="buttons">
    <a href="assets/documents/47.docx">
        <button class="draw meet">Arza görnüşi<img style="width: 16%; margin-left: 10px"
                src="/assets/img/download.svg"></button>
    </a>
</section>
<!-- <p class="c2 fs_14">Arza görnüşi</p>
     -->

</div>
</div>

<div class="d_flex w49" style="margin-top: 40px;">
<div class="c2 fw_bold fs_20">
46          </div>
<div class="c2 fw_bold fs_20">&nbsp;&nbsp;-&nbsp;&nbsp;</div>
<div>
<div class="h73px c6 fw_bold fs_20">Familiýanyň, adyň, atasynyň adynyň üýtgedilendigi hakynda
HABARNAMA

</div>

<section class="buttons">
    <a href="assets/documents/48.docx">
        <button class="draw meet">Arza görnüşi<img style="width: 16%; margin-left: 10px"
                src="/assets/img/download.svg"></button>
    </a>
</section>
<!-- <p class="c2 fs_14">Arza görnüşi</p>
     -->

</div>
</div>

<div class="d_flex w49" style="margin-top: 40px;">
<div class="c2 fw_bold fs_20">
47         </div>
<div class="c2 fw_bold fs_20">&nbsp;&nbsp;-&nbsp;&nbsp;</div>
<div>
<div class="h73px c6 fw_bold fs_20">RAÝAT ÝAGDAÝYNYŇ NAMA ÝAZGYSYNYŇ
ÝOKDUGY HAKYNDA
HABARNAMA


</div>

<section class="buttons">
    <a href="assets/documents/49.docx">
        <button class="draw meet">Arza görnüşi<img style="width: 16%; margin-left: 10px"
                src="/assets/img/download.svg"></button>
    </a>
</section>
<!-- <p class="c2 fs_14">Arza görnüşi</p>
     -->

</div>
</div>

<div class="d_flex w49" style="margin-top: 40px;">
<div class="c2 fw_bold fs_20">
48         </div>
<div class="c2 fw_bold fs_20">&nbsp;&nbsp;-&nbsp;&nbsp;</div>
<div>
<div class="h73px c6 fw_bold fs_20">Raýat ýagdaýynyň namalaryny döwlet tarapyndan bellige almakdan
ýüz dönderilendigi hakynda
Habarnama

</div>

<section class="buttons">
    <a href="assets/documents/50.docx">
        <button class="draw meet">Arza görnüşi<img style="width: 16%; margin-left: 10px"
                src="/assets/img/download.svg"></button>
    </a>
</section>
<!-- <p class="c2 fs_14">Arza görnüşi</p>
     -->

</div>
</div>

<div class="d_flex w49" style="margin-top: 40px;">
<div class="c2 fw_bold fs_20">
49          </div>
<div class="c2 fw_bold fs_20">&nbsp;&nbsp;-&nbsp;&nbsp;</div>
<div>
<div class="h73px c6 fw_bold fs_20"> Raýat ýagdaýynyň namalarynyň ýazgylaryna üýtgetmeler, goşmaçalar we (ýa-da) düzedişler girizmek barada HABARNAMA

</div>

<section class="buttons">
    <a href="assets/documents/51.docx">
        <button class="draw meet">Arza görnüşi<img style="width: 16%; margin-left: 10px"
                src="/assets/img/download.svg"></button>
    </a>
</section>
<!-- <p class="c2 fs_14">Arza görnüşi</p>
     -->

</div>
</div>

<div class="d_flex w49" style="margin-top: 40px;">
<div class="c2 fw_bold fs_20">
50       </div>
<div class="c2 fw_bold fs_20">&nbsp;&nbsp;-&nbsp;&nbsp;</div>
<div>
<div class="h73px c6 fw_bold fs_20">Raýat ýagdaýynyň namalarynyň ýazgylaryna üýtgetmeler, goşmaçalar we (ýa-da) düzedişler girizmek hakynda

</div>

<section class="buttons">
    <a href="assets/documents/52.docx">
        <button class="draw meet">Arza görnüşi<img style="width: 16%; margin-left: 10px"
                src="/assets/img/download.svg"></button>
    </a>
</section>
<!-- <p class="c2 fs_14">Arza görnüşi</p>
     -->

</div>
</div>

<div class="d_flex w49" style="margin-top: 40px;">
<div class="c2 fw_bold fs_20">
51         </div>
<div class="c2 fw_bold fs_20">&nbsp;&nbsp;-&nbsp;&nbsp;</div>
<div>
<div class="h73px c6 fw_bold fs_20">Raýat ýagdaýynyň nama ýazgysyna üýtgetmeler, goşmaçalar we
 (ýa-da) düzedişler girizmek hakynda


</div>

<section class="buttons">
    <a href="assets/documents/53.docx">
        <button class="draw meet">Arza görnüşi<img style="width: 16%; margin-left: 10px"
                src="/assets/img/download.svg"></button>
    </a>
</section>
<!-- <p class="c2 fs_14">Arza görnüşi</p>
     -->

</div>
</div>

<div class="d_flex w49" style="margin-top: 40px;">
<div class="c2 fw_bold fs_20">
52        </div>
<div class="c2 fw_bold fs_20">&nbsp;&nbsp;-&nbsp;&nbsp;</div>
<div>
<div class="h73px c6 fw_bold fs_20">Familiýany, ady, atasynyň adyny üýtgetmek hakynda
N E T I J E N A M A
</div>

<section class="buttons">
    <a href="assets/documents/54.docx">
        <button class="draw meet">Arza görnüşi<img style="width: 16%; margin-left: 10px"
                src="/assets/img/download.svg"></button>
    </a>
</section>
<!-- <p class="c2 fs_14">Arza görnüşi</p>
     -->

</div>
</div>


            </div>
    <div class="faq m_40_0">
        <div class="faq_header c2 d_flex just_center a_items fw_bold fs_20 p10 m_40_0">Köp soralýan soraglar</div>
                <div class="m_10_0">
            <div class="question question1 d_flex flex_sp bg_c1 p20">
                <div class="fs_18 fw_bold ln_36"></div>
                <img src="/assets/img/polygon.svg">
            </div>
            <div class="answer answer1 d_no fs_14 c4 ln_30 p20"></div>
                <div class="m_10_0">
            <div class="question question2 d_flex flex_sp bg_c1 p20">
                <div class="fs_18 fw_bold ln_36"></div>
                <img src="/assets/img/polygon.svg">
            </div>
            <div class="answer answer2 d_no fs_14 c4 ln_30 p20"></div>
        </div>
                <div class="m_10_0">
            <div class="question question3 d_flex flex_sp bg_c1 p20">
                <div class="fs_18 fw_bold ln_36"></div>
                <img src="/assets/img/polygon.svg">
            </div>
            <div class="answer answer3 d_no fs_14 c4 ln_30 p20"></div>
                <div class="m_10_0">
            <div class="question question4 d_flex flex_sp bg_c1 p20">
                <div class="fs_18 fw_bold ln_36"></div>
                <img src="/assets/img/polygon.svg">
            </div>
            <div class="answer answer4 d_no fs_14 c4 ln_30 p20"></div>
                <div class="m_10_0">
            <div class="question question5 d_flex flex_sp bg_c1 p20">
                <div class="fs_18 fw_bold ln_36"></div>
                <img src="/assets/img/polygon.svg">
            </div>
            <div class="answer answer5 d_no fs_14 c4 ln_30 p20"></div>
        </div>
                <div class="m_10_0">
            <div class="question question6 d_flex flex_sp bg_c1 p20">
                <div class="fs_18 fw_bold ln_36"></div>
                <img src="/assets/img/polygon.svg">
            </div>
            <div class="answer answer6 d_no fs_14 c4 ln_30 p20"></div>
                <div class="m_10_0">
            <div class="question question7 d_flex flex_sp bg_c1 p20">
                <div class="fs_18 fw_bold ln_36"></div>
                <img src="/assets/img/polygon.svg">
            </div>
            <div class="answer answer7 d_no fs_14 c4 ln_30 p20"></div>
        </div>
                <div class="m_10_0">
            <div class="question question8 d_flex flex_sp bg_c1 p20">
                <div class="fs_18 fw_bold ln_36"></div>
                <img src="/assets/img/polygon.svg">
            </div>
            <div class="answer answer8 d_no fs_14 c4 ln_30 p20"></div>
        </div>
                <div class="m_10_0">
            <div class="question question9 d_flex flex_sp bg_c1 p20">
                <div class="fs_18 fw_bold ln_36"></div>
                <img src="/assets/img/polygon.svg">
            </div>
            <div class="answer answer9 d_no fs_14 c4 ln_30 p20"></div>
        </div>
                <div class="m_10_0">
            <div class="question question10 d_flex flex_sp bg_c1 p20">
                <div class="fs_18 fw_bold ln_36"></div>
                <img src="/assets/img/polygon.svg">
            </div>
            <div class="answer answer10 d_no fs_14 c4 ln_30 p20"> </div>
        </div>
            </div>
</div>
<script>
$('.question1').click(function() {
    $('.answer1').slideToggle();
    $('.question1 img').toggleClass('rotate');
})
</script>

<script>
$('.question2').click(function() {
    $('.answer2').slideToggle();
    $('.question2 img').toggleClass('rotate');
})
</script>

<script>
$('.question3').click(function() {
    $('.answer3').slideToggle();
    $('.question3 img').toggleClass('rotate');
})
</script>

<script>
$('.question4').click(function() {
    $('.answer4').slideToggle();
    $('.question4 img').toggleClass('rotate');
})
</script>

<script>
$('.question5').click(function() {
    $('.answer5').slideToggle();
    $('.question5 img').toggleClass('rotate');
})
</script>

<script>
$('.question6').click(function() {
    $('.answer6').slideToggle();
    $('.question6 img').toggleClass('rotate');
})
</script>

<script>
$('.question7').click(function() {
    $('.answer7').slideToggle();
    $('.question7 img').toggleClass('rotate');
})
</script>

<script>
$('.question8').click(function() {
    $('.answer8').slideToggle();
    $('.question8 img').toggleClass('rotate');
})
</script>

<script>
$('.question9').click(function() {
    $('.answer9').slideToggle();
    $('.question9 img').toggleClass('rotate');
})
</script>

<script>
$('.question10').click(function() {
    $('.answer10').slideToggle();
    $('.question10 img').toggleClass('rotate');
})
</script>


<style>
button {
    background: none;
    border: 0;
    box-sizing: border-box;
    margin: 1em;
    padding: 0.5em 2em;
    box-shadow: inset 0 0 0 2px #78a797;
    color: #78a797;
    font-size: inherit;
    font-weight: 700;
    position: relative;
    vertical-align: middle;
    /* #f45e61 */
}

button::before,
button::after {
    box-sizing: inherit;
    content: '';
    position: absolute;
    width: 100%;
    height: 100%;
}

.draw {
    transition: color 0.25s;
    /* display: flex;
    justify-content: space-between;
    width: 200px; */
}

.draw::before,
.draw::after {

    border: 2px solid transparent;
    width: 0;
    height: 0;
}


.draw::before {
    top: 0;
    left: 0;
}


.draw::after {
    bottom: 0;
    right: 0;
}

.draw:hover {
    color: #60daaa;
}


.draw:hover::before,
.draw:hover::after {
    width: 100%;
    height: 100%;
}

.draw:hover::before {
    border-top-color: #60daaa;
    border-right-color: #60daaa;
    transition:
        width 0.25s ease-out,
        height 0.25s ease-out 0.25s;
}

.draw:hover::after {
    border-bottom-color: #60daaa;
    border-left-color: #60daaa;
    transition:
        border-color 0s ease-out 0.5s,
        width 0.25s ease-out 0.5s,
        height 0.25s ease-out 0.75s;
}





.meet:hover {
    color: #fbca67;
    cursor: pointer;
}


.meet::after {
    top: 0;
    left: 0;
}


.meet:hover::before {
    border-top-color: #fbca67;
    border-right-color: #fbca67;
}

.meet:hover::after {
    border-bottom-color: #fbca67;
    border-left-color: #fbca67;
    transition:
        height 0.25s ease-out,
        width 0.25s ease-out 0.25s;
}

.meet:hover.meet img {
    filter: sepia(1);
}
</style>
@endsection
