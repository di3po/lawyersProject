<!DOCTYPE html>
<html lang="en">

<head>
    <title>Judge - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="_token" content="{{csrf_token()}}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://preview.colorlib.com/theme/judge/css/open-iconic-bootstrap.min.css+animate.css+owl.carousel.min.css+owl.theme.default.min.css+magnific-popup.css+aos.css+ionicons.min.css+flaticon.css+icomoon.css+style.css.pagespeed.cc.vSmnfZzCw5.css" /> -->
    <script src="https://kit.fontawesome.com/de0f79980b.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="css/main.css" rel="stylesheet">
</head>

<body>
    <header id="home-block">
        <nav class="navbar px-md-0 navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
            <div class="container-fluid px-md-5">
                <a class="navbar-brand" href="index.html">Юрист <span>A Law Firm</span></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="oi oi-menu"></span> Меню
                </button>
                <div class="collapse navbar-collapse" id="ftco-nav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active"><a href="#home-block" class="nav-link">Главная</a></li>
                        <li class="nav-item"><a href="#about-block" class="nav-link">О Нас</a></li>
                        <li class="nav-item"><a href="#area-block" class="nav-link">Сферы деятельности</a></li>
                        <li class="nav-item"><a href="#case-block" class="nav-link">Кейсы</a></li>
                        <li class="nav-item"><a href="#attorney-block" class="nav-link">Наши юристы</a></li>
                        <li class="nav-item"><a href="#contact-block" class="nav-link">Контакты</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="hero-wrap js-fullheight" style="background-image:url(https://preview.colorlib.com/theme/judge/images/xbg_1.jpg.pagespeed.ic.DPOp0cqM68.webp)" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container-fluid px-md-5">
                <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
                    <div class="col-md-6 ftco-animate">
                        <h2 class="subheading">ЛОЗУНГ КОМПАНИЙ</h2>
                        <h1 class="mb-4">НАЗВАНИЕ КОМПАНИЙ</h1>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Заказать звонок
                        </button>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModa2">
                            Отправить форму
                        </button>
                        <p><a href="#">Ознокомится с договором</a></p>


                        <!--<p><a href="#" class="btn-custom mr-md-4">Получи юридическую консультацию <span class="fas fa-home></span></a> <a href="#" class="btn-custom">Сделай запрос <span class="ion-ios-arrow-forward"></span></a></p>-->
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Заказать звонок</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="/order_call" id="order-call" method="POST">
                            @csrf
                            <input class="form-control input1" type="text" id="nameOc" name="nameOc" size="50" placeholder="Имя:">
                            <input class="form-control input1" type="text" id="telnumOc" name="telnumOc" size="50" placeholder="Номер тел:">
                    </div>
                    <div class="modal-footer">
                        <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button> -->
                        <button type="submit" class="btn btn-primary" id="order-call-btn">Заказать</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="exampleModa2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Заказчик</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <form id="contract-request">
                            <input class="form-control input2" type="text" id="lastName" name="lastName" size="50" placeholder="Фамилия:" required>
                            <input class="form-control input2" type="text" id="firstName" name="firstName" size="50" placeholder="Имя:" required>
                            <input class="form-control input2" type="text" id="middleName" name="middleName" size="50" placeholder="Отчество:" required>
                            <input class="form-control input2" type="text" id="IIN" name="IIN" size="50" placeholder="ИИН:" required>
                            <input class="form-control input2" type="text" id="passportNo" name="passportNo" size="50" placeholder="№уд личности:" required>
                            <input class="form-control input2" type="text" id="given" name="given" size="50" placeholder="Выдан:" required>
                            <input class="form-control input2" type="datetime-local" id="period" name="period" size="50" placeholder="Срок действия:" required>
                            <input class="form-control input2" type="text" id="telnumCc" name="telnumCc" size="50" placeholder="Номер тел:" required>
                            <input class="form-control input2" type="text" id="address" name="address" size="50" placeholder="Адрес:" required>
                            <input class="form-control input2" type="text" id="sum" name="sum" size="50" placeholder="Сумма:" required>
                            <input type="file" name="file" id="file">
                            <div id="file-upload-image-block" style="width: 150px;"></div>
                            @csrf
                    </div>
                    <div class="modal-footer">
                        <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button> -->
                        <button type="submit" class="btn btn-primary">Отправить</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
        <section class="ftco-section ftco-no-pb ftco-no-pt services-section">
            <div class="container-fluid px-md-5 py-3">
                <div class="row py-4 d-flex">
                    <div class="col-md-3 services align-self-stretch ftco-animate">
                        <div class="media-body">
                            <span class="num">01</span>
                            <h3 class="heading mb-3" style="color: white !important"><a href="#">Получи юридическую консультацию</a></h3>
                            <p>В частности, граница обучения кадров однозначно определяет каждого участника</p>
                        </div>
                    </div>
                    <div class="col-md-3 services align-self-stretch ftco-animate">
                        <div class="media-body">
                            <span class="num">02</span>
                            <h3 class="heading mb-3"><a href="#">Работай с экспертами</a></h3>
                            <p>В частности, граница обучения кадров однозначно определяет каждого участника</p>
                        </div>
                    </div>
                    <div class="col-md-3 services align-self-stretch ftco-animate">
                        <div class="media-body">
                            <span class="num">03</span>
                            <h3 class="heading mb-3"><a href="#">Заполучи отличные скидки</a></h3>
                            <p>В частности, граница обучения кадров однозначно определяет каждого участника</p>
                        </div>
                    </div>
                    <div class="col-md-3 services align-self-stretch ftco-animate">
                        <div class="media-body">
                            <span class="num">04</span>
                            <h3 class="heading mb-3"><a href="#">Рецензие на ваши документы</a></h3>
                            <p>В частности, граница обучения кадров однозначно определяет каждого участника</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </header>
    <section id="about-block" class="ftco-section ftco-no-pt ftco-no-pb">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-6 d-flex">
                    <div class="img img-video d-flex align-self-stretch align-items-center justify-content-center justify-content-md-end" style="background-image:url(https://preview.colorlib.com/theme/judge/images/xabout.jpg.pagespeed.ic.SbvgKpSkpa.webp)">
                        <!--<a href="https://vimeo.com/45830194" class="icon-video popup-vimeo d-flex justify-content-center align-items-center">
<span class="icon-play"></span>
</a>-->
                    </div>
                </div>
                <div class="col-md-6 px-5 py-5">
                    <div class="row justify-content-start pt-3 pb-3">
                        <div class="col-md-12 heading-section ftco-animate">
                            <span class="subheading">Добро Пожаловать</span>
                            <h2 class="mb-4">Мы Всегда Боремся За Победу Вашей Справедливости</h2>
                            <p>Значимость этих проблем настолько очевидна, что повышение уровня гражданского сознания позволяет выполнить важные задания по разработке распределения внутренних резервов и ресурсов.</p>
                            <p>Базовый вектор развития в значительной степени обусловливает важность поэтапного и последовательного развития общества. Учитывая ключевые сценарии поведения, современная методология разработки, а также свежий взгляд на привычные вещи - безусловно открывает новые горизонты для соответствующих условий активизации.</p>
                            <p>Но представители современных социальных резервов объективно рассмотрены соответствующими инстанциями. Идейные соображения высшего порядка, а также перспективное планирование создаёт необходимость включения в производственный план целого ряда внеочередных мероприятий с учётом комплекса первоочередных требований.</p>
                            <div class="years d-flex">
                                <h4 class="number mr-2" data-number="10">0</h4>
                                <h4>Лет Опыта</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section" id="area-block">
        <div class="container">
            <div class="row no-gutters justify-content-center mb-5">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <span class="subheading">Сферы деятельности</span>
                    <h2 class="mb-4">Сферы деятельности</h2>
                </div>
            </div>
            <div class="row no-gutters d-flex justify-content-center">
                <div class="col-md-3 text-center">
                    <div class="practice-area border-b no-border-l ftco-animate">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="flaticon-family"></span>
                        </div>
                        <h3><a href="#">Семейное Право</a></h3>
                        <p>Внезапно, реплицированные с зарубежных источников, современные исследования представлены в исключительно положительном свете.</p>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="practice-area border-b ftco-animate">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="flaticon-auction"></span>
                        </div>
                        <h3><a href="#">Бизнес Право</a></h3>
                        <p>Внезапно, реплицированные с зарубежных источников, современные исследования представлены в исключительно положительном свете.</p>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="practice-area border-b ftco-animate">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="flaticon-shield"></span>
                        </div>
                        <h3><a href="#">Страховое Право</a></h3>
                        <p>Внезапно, реплицированные с зарубежных источников, современные исследования представлены в исключительно положительном свете.</p>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="practice-area border-b ftco-animate">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="flaticon-handcuffs"></span>
                        </div>
                        <h3><a href="#">Уголовное Право</a></h3>
                        <p>Внезапно, реплицированные с зарубежных источников, современные исследования представлены в исключительно положительном свете.</p>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="practice-area no-border-l ftco-animate">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="flaticon-house"></span>
                        </div>
                        <h3><a href="#">Имущественное Право</a></h3>
                        <p>Внезапно, реплицированные с зарубежных источников, современные исследования представлены в исключительно положительном свете.</p>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="practice-area ftco-animate">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="flaticon-employee"></span>
                        </div>
                        <h3><a href="#">Трудовое Право</a></h3>
                        <p>Внезапно, реплицированные с зарубежных источников, современные исследования представлены в исключительно положительном свете.</p>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="practice-area ftco-animate">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="flaticon-fire"></span>
                        </div>
                        <h3><a href="#">Пожарное Проишествие</a></h3>
                        <p>Внезапно, реплицированные с зарубежных источников, современные исследования представлены в исключительно положительном свете.</p>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="practice-area ftco-animate">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="flaticon-money"></span>
                        </div>
                        <h3><a href="#">Финансовое Право</a></h3>
                        <p>Внезапно, реплицированные с зарубежных источников, современные исследования представлены в исключительно положительном свете.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section ftco-no-pt" id="attorney-block">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <span class="subheading">Наша Команда</span>
                    <h2 class="mb-4">Наши юристы</h2>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-lg-3 col-sm-6">
                    <div class="block-2 ftco-animate">
                        <div class="flipper">
                            <div class="front" style="background-image: url(https://preview.colorlib.com/theme/judge//images/person_1.jpg);">
                                <div class="box">
                                    <h2>Ричард Андерсон</h2>
                                    <p>Гражданский Юрист</p>
                                </div>
                            </div>
                            <div class="back">

                                <blockquote>
                                    <p>&ldquo;Банальные, но неопровержимые выводы, а также непосредственные участники технического прогресса лишь добавляют фракционных разногласий и обнародованы. &rdquo;</p>
                                </blockquote>
                                <div class="author d-flex">
                                    <div class="image align-self-center">
                                        <script data-pagespeed-no-defer>
                                            //<![CDATA[
                                            (function() {
                                                for (var g = "function" == typeof Object.defineProperties ? Object.defineProperty : function(b, c, a) {
                                                        if (a.get || a.set) throw new TypeError("ES3 does not support getters and setters.");
                                                        b != Array.prototype && b != Object.prototype && (b[c] = a.value)
                                                    }, h = "undefined" != typeof window && window === this ? this : "undefined" != typeof global && null != global ? global : this, k = ["String", "prototype", "repeat"], l = 0; l < k.length - 1; l++) {
                                                    var m = k[l];
                                                    m in h || (h[m] = {});
                                                    h = h[m]
                                                }
                                                var n = k[k.length - 1],
                                                    p = h[n],
                                                    q = p ? p : function(b) {
                                                        var c;
                                                        if (null == this) throw new TypeError("The 'this' value for String.prototype.repeat must not be null or undefined");
                                                        c = this + "";
                                                        if (0 > b || 1342177279 < b) throw new RangeError("Invalid count value");
                                                        b |= 0;
                                                        for (var a = ""; b;)
                                                            if (b & 1 && (a += c), b >>>= 1) c += c;
                                                        return a
                                                    };
                                                q != p && null != q && g(h, n, {
                                                    configurable: !0,
                                                    writable: !0,
                                                    value: q
                                                });
                                                var t = this;

                                                function u(b, c) {
                                                    var a = b.split("."),
                                                        d = t;
                                                    a[0] in d || !d.execScript || d.execScript("var " + a[0]);
                                                    for (var e; a.length && (e = a.shift());) a.length || void 0 === c ? d[e] ? d = d[e] : d = d[e] = {} : d[e] = c
                                                };

                                                function v(b) {
                                                    var c = b.length;
                                                    if (0 < c) {
                                                        for (var a = Array(c), d = 0; d < c; d++) a[d] = b[d];
                                                        return a
                                                    }
                                                    return []
                                                };

                                                function w(b) {
                                                    var c = window;
                                                    if (c.addEventListener) c.addEventListener("load", b, !1);
                                                    else if (c.attachEvent) c.attachEvent("onload", b);
                                                    else {
                                                        var a = c.onload;
                                                        c.onload = function() {
                                                            b.call(this);
                                                            a && a.call(this)
                                                        }
                                                    }
                                                };
                                                var x;

                                                function y(b, c, a, d, e) {
                                                    this.h = b;
                                                    this.j = c;
                                                    this.l = a;
                                                    this.f = e;
                                                    this.g = {
                                                        height: window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight,
                                                        width: window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth
                                                    };
                                                    this.i = d;
                                                    this.b = {};
                                                    this.a = [];
                                                    this.c = {}
                                                }

                                                function z(b, c) {
                                                    var a, d, e = c.getAttribute("data-pagespeed-url-hash");
                                                    if (a = e && !(e in b.c))
                                                        if (0 >= c.offsetWidth && 0 >= c.offsetHeight) a = !1;
                                                        else {
                                                            d = c.getBoundingClientRect();
                                                            var f = document.body;
                                                            a = d.top + ("pageYOffset" in window ? window.pageYOffset : (document.documentElement || f.parentNode || f).scrollTop);
                                                            d = d.left + ("pageXOffset" in window ? window.pageXOffset : (document.documentElement || f.parentNode || f).scrollLeft);
                                                            f = a.toString() + "," + d;
                                                            b.b.hasOwnProperty(f) ? a = !1 : (b.b[f] = !0, a = a <= b.g.height && d <= b.g.width)
                                                        } a && (b.a.push(e),
                                                        b.c[e] = !0)
                                                }
                                                y.prototype.checkImageForCriticality = function(b) {
                                                    b.getBoundingClientRect && z(this, b)
                                                };
                                                u("pagespeed.CriticalImages.checkImageForCriticality", function(b) {
                                                    x.checkImageForCriticality(b)
                                                });
                                                u("pagespeed.CriticalImages.checkCriticalImages", function() {
                                                    A(x)
                                                });

                                                function A(b) {
                                                    b.b = {};
                                                    for (var c = ["IMG", "INPUT"], a = [], d = 0; d < c.length; ++d) a = a.concat(v(document.getElementsByTagName(c[d])));
                                                    if (a.length && a[0].getBoundingClientRect) {
                                                        for (d = 0; c = a[d]; ++d) z(b, c);
                                                        a = "oh=" + b.l;
                                                        b.f && (a += "&n=" + b.f);
                                                        if (c = !!b.a.length)
                                                            for (a += "&ci=" + encodeURIComponent(b.a[0]), d = 1; d < b.a.length; ++d) {
                                                                var e = "," + encodeURIComponent(b.a[d]);
                                                                131072 >= a.length + e.length && (a += e)
                                                            }
                                                        b.i && (e = "&rd=" + encodeURIComponent(JSON.stringify(B())), 131072 >= a.length + e.length && (a += e), c = !0);
                                                        C = a;
                                                        if (c) {
                                                            d = b.h;
                                                            b = b.j;
                                                            var f;
                                                            if (window.XMLHttpRequest) f =
                                                                new XMLHttpRequest;
                                                            else if (window.ActiveXObject) try {
                                                                f = new ActiveXObject("Msxml2.XMLHTTP")
                                                            } catch (r) {
                                                                try {
                                                                    f = new ActiveXObject("Microsoft.XMLHTTP")
                                                                } catch (D) {}
                                                            }
                                                            f && (f.open("POST", d + (-1 == d.indexOf("?") ? "?" : "&") + "url=" + encodeURIComponent(b)), f.setRequestHeader("Content-Type", "application/x-www-form-urlencoded"), f.send(a))
                                                        }
                                                    }
                                                }

                                                function B() {
                                                    var b = {},
                                                        c;
                                                    c = document.getElementsByTagName("IMG");
                                                    if (!c.length) return {};
                                                    var a = c[0];
                                                    if (!("naturalWidth" in a && "naturalHeight" in a)) return {};
                                                    for (var d = 0; a = c[d]; ++d) {
                                                        var e = a.getAttribute("data-pagespeed-url-hash");
                                                        e && (!(e in b) && 0 < a.width && 0 < a.height && 0 < a.naturalWidth && 0 < a.naturalHeight || e in b && a.width >= b[e].o && a.height >= b[e].m) && (b[e] = {
                                                            rw: a.width,
                                                            rh: a.height,
                                                            ow: a.naturalWidth,
                                                            oh: a.naturalHeight
                                                        })
                                                    }
                                                    return b
                                                }
                                                var C = "";
                                                u("pagespeed.CriticalImages.getBeaconData", function() {
                                                    return C
                                                });
                                                u("pagespeed.CriticalImages.Run", function(b, c, a, d, e, f) {
                                                    var r = new y(b, c, a, e, f);
                                                    x = r;
                                                    d && w(function() {
                                                        window.setTimeout(function() {
                                                            A(r)
                                                        }, 0)
                                                    })
                                                });
                                            })();

                                            pagespeed.CriticalImages.Run('/mod_pagespeed_beacon', 'https://preview.colorlib.com/theme/judge/', '-ilGEe-FWC', true, false, '6ypO9XVphKw');
                                            //]]>
                                        </script><img src="https://preview.colorlib.com/theme/judge/images/xperson_1.jpg.pagespeed.ic.e9rH06n9-0.webp" alt="" data-pagespeed-url-hash="3473066034" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                    </div>
                                    <div class="name align-self-center ml-3">Ричард Андерсон <span class="position">Гражданский Юрист</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="block-2 ftco-animate">
                        <div class="flipper">
                            <div class="front" style="background-image: url(https://preview.colorlib.com/theme/judge//images/person_2.jpg);">
                                <div class="box">
                                    <h2>Джеффорд Максиллин</h2>
                                    <p>Бизнес-юрист</p>
                                </div>
                            </div>
                            <div class="back">

                                <blockquote>
                                    <p>&ldquo;Банальные, но неопровержимые выводы, а также непосредственные участники технического прогресса лишь добавляют фракционных разногласий и обнародованы. &rdquo;</p>
                                </blockquote>
                                <div class="author d-flex">
                                    <div class="image align-self-center">
                                        <img src="https://preview.colorlib.com/theme/judge/images/xperson_2.jpg.pagespeed.ic.336NftRDi2.webp" alt="" data-pagespeed-url-hash="3767565955" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                    </div>
                                    <div class="name align-self-center ml-3">Джеффорд Максиллин<span class="position">Бизнес-юрист</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="block-2 ftco-animate">
                        <div class="flipper">
                            <div class="front" style="background-image: url(https://preview.colorlib.com/theme/judge//images/person_3.jpg);">
                                <div class="box">
                                    <h2>Карлос Обин</h2>
                                    <p>Защитник по уголовным делам</p>
                                </div>
                            </div>
                            <div class="back">

                                <blockquote>
                                    <p>&ldquo;Банальные, но неопровержимые выводы, а также непосредственные участники технического прогресса лишь добавляют фракционных разногласий и обнародованы. &rdquo;</p>
                                </blockquote>
                                <div class="author d-flex">
                                    <div class="image align-self-center">
                                        <img src="https://preview.colorlib.com/theme/judge/images/xperson_3.jpg.pagespeed.ic.uXRWIVCMLJ.webp" alt="" data-pagespeed-url-hash="4062065876" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                    </div>
                                    <div class="name align-self-center ml-3">Карлос Обин <span class="position">Защитник по уголовным делам</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="block-2 ftco-animate">
                        <div class="flipper">
                            <div class="front" style="background-image: url(https://preview.colorlib.com/theme/judge//images/person_4.jpg);">
                                <div class="box">
                                    <h2>Натан Смит</h2>
                                    <p>Страховой юрист</p>
                                </div>
                            </div>
                            <div class="back">

                                <blockquote>
                                    <p>&ldquo;Банальные, но неопровержимые выводы, а также непосредственные участники технического прогресса лишь добавляют фракционных разногласий и обнародованы. &rdquo;</p>
                                </blockquote>
                                <div class="author d-flex">
                                    <div class="image align-self-center">
                                        <img src="https://preview.colorlib.com/theme/judge/images/xperson_4.jpg.pagespeed.ic.2_UfwsTLbL.webp" alt="" data-pagespeed-url-hash="61598501" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                    </div>
                                    <div class="name align-self-center ml-3">Натан Смит <span class="position">Страховой юрист</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-consultation ftco-section img" style="background-image:url(https://preview.colorlib.com/theme/judge/images/xbg_2.jpg.pagespeed.ic.Why4p9HqNT.webp)">
        <div class="overlay"></div>
        <div class="container">
            <div class="row d-md-flex justify-content-end">
                <div class="col-md-6 half p-3 p-md-5 ftco-animate heading-section">
                    <span class="subheading">Запись на Прием</span>
                    <h2 class="mb-4">Бесплатная Консультация</h2>
                    <form action="/callback_process" id="form-consultation" class="consultation" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="nameCb" id="nameCb" class="form-control" placeholder="Имя" required>
                        </div>
                        <div class="form-group">
                            <input type="text" name="emailCb" id="emailCb" class="form-control" placeholder="Email" required>
                        </div>
                        <div class="form-group">
                            <input type="text" name="subjectCb" id="subjectCb" class="form-control" placeholder="Тема" required>
                        </div>
                        <div class="form-group">
                            <textarea name="msgCb" id="msgCb" cols="30" rows="7" class="form-control" placeholder="Сообщение"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Отправить сообщение" class="btn btn-primary py-3 px-4" required>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section" id="case-block">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-10 text-center heading-section ftco-animate">
                    <span class="subheading">Изучите кейсы</span>
                    <h2 class="mb-4">Больше 1000 успешных кейсов</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 ftco-animate">
                    <div class="case img d-flex align-items-center justify-content-center" style="background-image:url(https://preview.colorlib.com/theme/judge/images/xcase-1.jpg.pagespeed.ic.g95LVgEVTZ.webp)">
                        <div class="text text-center">
                            <h3><a href="#">Юридическое разделение</a></h3>
                            <span>Корпоративный</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ftco-animate">
                    <div class="case img d-flex align-items-center justify-content-center" style="background-image:url(https://preview.colorlib.com/theme/judge/images/xcase-2.jpg.pagespeed.ic.aW9Nn_HdYT.webp)">
                        <div class="text text-center">
                            <h3><a href="#">Юридическое разделение</a></h3>
                            <span>Корпоративный</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ftco-animate">
                    <div class="case img d-flex align-items-center justify-content-center" style="background-image:url(https://preview.colorlib.com/theme/judge/images/xcase-3.jpg.pagespeed.ic.F3-kULnjy9.webp)">
                        <div class="text text-center">
                            <h3><a href="#">Юридическое разделение</a></h3>
                            <span>Корпоративный</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ftco-animate">
                    <div class="case img d-flex align-items-center justify-content-center" style="background-image:url(https://preview.colorlib.com/theme/judge/images/xcase-4.jpg.pagespeed.ic.AZlQ_vxSbk.webp)">
                        <div class="text text-center">
                            <h3><a href="#">Юридическое разделение</a></h3>
                            <span>Корпоративный</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ftco-animate">
                    <div class="case img d-flex align-items-center justify-content-center" style="background-image:url(https://preview.colorlib.com/theme/judge/images/xcase-5.jpg.pagespeed.ic.pxRQZHSFKP.webp)">
                        <div class="text text-center">
                            <h3><a href="#">Юридическое разделение</a></h3>
                            <span>Корпоративный</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ftco-animate">
                    <div class="case img d-flex align-items-center justify-content-center" style="background-image:url(https://preview.colorlib.com/theme/judge/images/xcase-6.jpg.pagespeed.ic.n6aMo5aIcN.webp)">
                        <div class="text text-center">
                            <h3><a href="#">Юридическое разделение</a></h3>
                            <span>Корпоративный</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-gallery">
        <div class="container-wrap">
            <div class="row no-gutters">
                <div class="col-md-2 ftco-animate">
                    <a href="https://preview.colorlib.com/theme/judge/images/image_1.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image:url(https://preview.colorlib.com/theme/judge/images/ximage_1.jpg.pagespeed.ic.YrrBLssVjK.webp)">
                        <div class="icon mb-4 d-flex align-items-center justify-content-center">
                            <span class="icon-instagram"></span>
                        </div>
                    </a>
                </div>
                <div class="col-md-2 ftco-animate">
                    <a href="https://preview.colorlib.com/theme/judge/images/image_2.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image:url(https://preview.colorlib.com/theme/judge/images/ximage_2.jpg.pagespeed.ic.kb2xLF4pvA.webp)">
                        <div class="icon mb-4 d-flex align-items-center justify-content-center">
                            <span class="icon-instagram"></span>
                        </div>
                    </a>
                </div>
                <div class="col-md-2 ftco-animate">
                    <a href="https://preview.colorlib.com/theme/judge/images/image_3.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image:url(https://preview.colorlib.com/theme/judge/images/ximage_3.jpg.pagespeed.ic.sdCvD0HJNn.webp)">
                        <div class="icon mb-4 d-flex align-items-center justify-content-center">
                            <span class="icon-instagram"></span>
                        </div>
                    </a>
                </div>
                <div class="col-md-2 ftco-animate">
                    <a href="https://preview.colorlib.com/theme/judge/images/image_4.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image:url(https://preview.colorlib.com/theme/judge/images/ximage_4.jpg.pagespeed.ic.sJJ_d7wDAC.webp)">
                        <div class="icon mb-4 d-flex align-items-center justify-content-center">
                            <span class="icon-instagram"></span>
                        </div>
                    </a>
                </div>
                <div class="col-md-2 ftco-animate">
                    <a href="https://preview.colorlib.com/theme/judge/images/image_4.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image:url(https://preview.colorlib.com/theme/judge/images/ximage_5.jpg.pagespeed.ic.nzRzhMBUYX.webp)">
                        <div class="icon mb-4 d-flex align-items-center justify-content-center">
                            <span class="icon-instagram"></span>
                        </div>
                    </a>
                </div>
                <div class="col-md-2 ftco-animate">
                    <a href="https://preview.colorlib.com/theme/judge/images/image_4.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image:url(https://preview.colorlib.com/theme/judge/images/ximage_6.jpg.pagespeed.ic.U5NIbM_WDa.webp)">
                        <div class="icon mb-4 d-flex align-items-center justify-content-center">
                            <span class="icon-instagram"></span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- <section class="ftco-section ftco-no-pt ftco-no-pb bg-primary">
        <div class="container py-4">
            <div class="row d-flex justify-content-center">
                <div class="col-md-7 ftco-animate d-flex align-items-center">
                    <h2 class="mb-0" style="color:white; font-size: 28px;">Подпишитесь на нашу Новостную Рассылку</h2>
                </div>
                <div class="col-md-5 d-flex align-items-center">
                    <form action="#" class="subscribe-form">
                        <div class="form-group d-flex">
                            <input type="text" class="form-control" placeholder="Введите ваш адрес электронной почты">
                            <input type="submit" value="Подписаться" class="submit px-3">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section> -->
    <footer class="ftco-footer ftco-bg-dark ftco-section" id="contact-block">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Больше о Джадж</h2>
                        <p>Существующая теория, а также свежий взгляд на привычные вещи - безусловно открывает новые горизонты для инновационных методов управления процессами!</p>
                        <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                            <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4 ml-md-5">
                        <h2 class="ftco-heading-2">Сферы деятельности</h2>
                        <ul class="list-unstyled">
                            <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Семейное Право</a></li>
                            <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Бизнес-Право</a></li>
                            <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Страховое Право</a></li>
                            <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Уголовное Право</a></li>
                            <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Наркопреступления</a></li>
                            <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Пожарное проишествие</a></li>
                            <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Трудовое Право</a></li>
                            <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Имущественное право</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">График Работы</h2>
                        <div class="opening-hours">
                            <h4>Рабочие дни:</h4>
                            <p class="pl-3">
                                <span>Понедельник – Пятница : с 9:00 до 20:00</span>
                                <span>Суббота : с 9:00 до 17:00</span>
                            </p>
                            <h4>Выходные:</h4>
                            <p class="pl-3">
                                <span>Всскресенье</span>
                                <span>Праздники</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Хотите Задать Вопросы?</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li><span class="icon icon-map-marker"></span><span class="text">Ваш Адрес</span></li>
                                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+7 777 777 77 77</span></a></li>
                                <li><a href="#"><span class="icon icon-envelope"></span><span class="text"><span class="__cf_email__" data-cfemail="e38a8d858ca39a8c9691878c8e828a8dcd808c8e">demo@demo.com</span></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <p>
                        Copyright &copy;<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
                        <script>
                            document.write(new Date().getFullYear());
                        </script> Все права защищены | Разработано ТОО NEXT-IN <i class="icon-heart color-danger" aria-hidden="true"></i> <a href="https://colorlib.com" target="_blank"></a>
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <div class="loader"></div>

    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
        </svg></div>
    <script src="https://preview.colorlib.com/theme/judge/js/jquery.min.js"></script>
    <script src="https://preview.colorlib.com/theme/judge/js/jquery-migrate-3.0.1.min.js+popper.min.js+bootstrap.min.js.pagespeed.jc.ine3WznUas.js"></script>
    <script>
        eval(mod_pagespeed_Yi0_Oy07Qi);
    </script>
    <script>
        eval(mod_pagespeed_HnYH$tAJKg);
    </script>
    <script>
        eval(mod_pagespeed_5tjKIOcNqG);
    </script>
    <script src="https://preview.colorlib.com/theme/judge/js/jquery.easing.1.3.js+jquery.waypoints.min.js+jquery.stellar.min.js+owl.carousel.min.js.pagespeed.jc.-uKB51yX_t.js"></script>
    <script>
        eval(mod_pagespeed_jzX_dCBzY0);
    </script>
    <script>
        eval(mod_pagespeed_M7Runcuwon);
    </script>
    <script>
        eval(mod_pagespeed_Ew5fJVvxF1);
    </script>
    <script>
        eval(mod_pagespeed_dRcoe3ucE4);
    </script>
    <script src="https://preview.colorlib.com/theme/judge/js/jquery.magnific-popup.min.js+aos.js+jquery.animateNumber.min.js+scrollax.min.js+google-map.js+main.js.pagespeed.jc.Rk_MfFoBfA.js"></script>
    <script>
        eval(mod_pagespeed_aQTalL3vwR);
    </script>
    <script>
        eval(mod_pagespeed_6Ey$p8PO2n);
    </script>
    <script>
        eval(mod_pagespeed_v1bKHuZTKU);
    </script>
    <script>
        eval(mod_pagespeed_R7IakG9uUH);
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script>
        eval(mod_pagespeed_3zVM0j2N9l);
    </script>
    <script>
        eval(mod_pagespeed_ZDzgR$nUYi);
    </script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js" data-cf-beacon='{"rayId":"65f1fb806d471660","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.5.2","si":10}'></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/imask"></script>
    <!-- <script src="https://online-avtomoiki.com/assets/js/libs/sweetalert.min.js"></script> -->
    <script src="/js/app.js"></script>
    <script type="text/javascript">
        IMask(document.getElementById('telnumOc'), {
            mask: '+{7}(000)000-00-00'
        });
        // $.ajax({
        //     type: 'POST',
        //     data: new FormData(this),
        //     dataType: 'Json',
        //     contentType: false,
        //     processData: false,
        //     cache: false,
        //     beforeSend: function(){
        //         $('.loader').show();
        //     },
        //     complete: function() {
        //         $('.loader').hide();
        //     },
        //     success: function() {

        //     },
        // });


        $('#file').change(function() {
            let inputFile = $(this)[0].files;


            if (inputFile.length > 0) {
                console.log(new FileReader)
                if (typeof(FileReader) != "undefined") {
                    var image_holder = $("#file-upload-image-block");
                    image_holder.empty();
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $("<img />", {
                            "src": e.target.result,
                            "width": "100%",
                        }).appendTo(image_holder);
                        // var img = new Image();
                        // img.src = reader.result;
                        image_holder.prepend('<span class="fa fa-times" id="remove-img" style="cursor:pointer; color:red; float:right; margin-right:3px;"></span>');
                        image_holder.fadeIn('slow');
                    }
                    reader.readAsDataURL($(this)[0].files[0]);
                } else {
                    console.log("This browser does not support FileReader");
                }
            }
        });

        $("#order-call").submit(function(e) {
            e.preventDefault()
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                }
            });
            $.ajax({
                type: 'POST',
                url: "{{url('/order_call')}}",
                dataType: 'json',
                data: new FormData(this),
                // {
                //     name: jQuery('#nameOc').val(),
                //     telnum: jQuery('#telnumOc').val(),
                // },
                contentType: false,
                processData: false,
                cache: false,
                success: function(data) {
                    jQuery('.alert').show();
                    jQuery('.alert').html(data.success);
                }
            });
        })

        $("#contract-request").submit(function(e) {
            e.preventDefault();
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                },
                type: 'POST',
                url: "/create_contract",
                dataType: 'json',
                data: new FormData(this),
                // {
                //     lastname: jQuery('#lastname').val(),
                //     firstName: jQuery('#firstName').val(),
                //     middleName: jQuery('#middleName').val(),
                //     IIN: jQuery('#IIN').val(),
                //     passportNo: jQuery('#passportNo').val(),
                //     given: jQuery('#given').val(),
                //     period: jQuery('#period').val(),
                //     telnumCc: jQuery('#telnumCc').val(),
                //     address: jQuery('#address').val(),
                //     sum: jQuery('#sum').val(),
                //     file: jQuery('#file').val(),
                // },
                contentType: false,
                processData: false,
                cache: false,
                success: function(data) {
                    console.log(data);
                }
            });
        })

        $("#form-consultation").submit(function(e) {
            e.preventDefault();
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                },
                type: 'POST',
                url: "/callback_process",
                dataType: 'json',
                data: new FormData(this),
                // {
                //     name: jQuery('#nameCb').val(),
                //     email: jQuery('#emailCb').val(),
                //     subject: jQuery('#subjectCb').val(),
                //     message: jQuery('#msgCb').val()
                // },
                contentType: false,
                processData: false,
                cache: false,
                success: function(data) {
                    console.log(data);
                }
            });
        });
    </script>
</body>

</html>