@extends('site.layout')
@section('title', _('titles.home'))
@section('content')
    <!-- Main a start -->
    <section class="main-a">
        <div class="main-a-b">
            <div class="main-a-c">
                <div class="m-text">Biz arı kimi işləyirik.</div>
                <div class="n-text">2 əsas fəaliyyət sahəmizdən biri də Veb-saytların və<br> Mobil tətbiqlərin hazırlanmasıdır.</div>
                <div class="bees"><img src="{{asset('/site/images/bees.png')}}"></div>
            </div>
        </div>
        <div class="m-next"></div>
    </section>
    <!-- Main a end -->
    <!-- Services start -->
    <section class="services">
        <div class="centered">
            <div class="services-a">
                <h2 class="a-title">Gördüyümüz xidmətlər</h2>
                <div class="a-text">Xidmətlərimiz ilə tanış olun. Biz hansı sahələr üzrə işləməyi bacarırıq</div>
                <div class="services-list">
                    <div class="service-item">
                        <a href="test">
                            <div class="service-name">veb proqramlaşdırma</div>
                            <span>01</span>
                        </a>
                    </div>
                    <div class="service-item">
                        <a href="test">
                            <div class="service-name">front-end</div>
                            <span>02</span>
                        </a>
                    </div>
                    <div class="service-item">
                        <a href="test">
                            <div class="service-name">dizayn</div>
                            <span>03</span>
                        </a>
                    </div>
                    <div class="service-item">
                        <a href="test">
                            <div class="service-name">texniki dəstək</div>
                            <span>04</span>
                        </a>
                    </div>
                    <div class="service-item">
                        <a href="test">
                            <div class="service-name">it konsaltinq</div>
                            <span>05</span>
                        </a>
                    </div>
                    <div class="service-item">
                        <a href="test">
                            <div class="service-name">seo</div>
                            <span>06</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="m-next"></div>
    </section>
    <!-- Services end -->
    <!-- Portfolio start -->
    <section class="portfolio">
        <div class="centered">
            <div class="portfolio-a">
                <h2 class="a-title">Portfoliomuz</h2>
                <div class="portfolio-category">
                    <ul>
                        <li class="active"><a href="test">Hamısı</a></li>
                        <li><a href="test">E-commerce</a></li>
                        <li><a href="test">Korporativ</a></li>
                        <li><a href="test">Mobile</a></li>
                        <li><a href="test">Xəbər</a></li>
                    </ul>
                </div>
                <div class="portfolio-list">
                    <div class="portfolio-item">
                        <a href="test">
                            <div class="portfolio-image" style="background-color:#0C9B53">
                                <div class="pr-img">
                                    <img src="{{asset('/site/images/p/pr1.jpg')}}">
                                </div>
                            </div>
                            <div class="portfolio-info">
                                <h2 class="portfolio-title">Almaterial Tikinti materiallari saytı</h2>
                                <div class="pr-bt">
                                    <div class="pr-more"></div>
                                    <div class="pr-date pr-a">20 Fevral 2022</div>
                                    <div class="pr-category pr-a">Xəbər</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="portfolio-item">
                        <a href="test">
                            <div class="portfolio-image" style="background-color:#3E6FC2">
                                <div class="pr-img">
                                    <img src="{{asset('/site/images/p/pr2.jpg')}}">
                                </div>
                            </div>
                            <div class="portfolio-info">
                                <h2 class="portfolio-title">Azərforum sosial şəbəkəsi</h2>
                                <div class="pr-bt">
                                    <div class="pr-more"></div>
                                    <div class="pr-date pr-a">20 Fevral 2022</div>
                                    <div class="pr-category pr-a">Xəbər</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="portfolio-item">
                        <a href="test">
                            <div class="portfolio-image" style="background-color:#FFD109">
                                <div class="pr-img">
                                    <img src="{{asset('/site/images/p/pr3.jpg')}}">
                                </div>
                            </div>
                            <div class="portfolio-info">
                                <h2 class="portfolio-title">Qaynar Agentlik Reklam saytı</h2>
                                <div class="pr-bt">
                                    <div class="pr-more"></div>
                                    <div class="pr-date pr-a">20 Fevral 2022</div>
                                    <div class="pr-category pr-a">Xəbər</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="portfolio-item">
                        <a href="test">
                            <div class="portfolio-image" style="background-color:#F94239">
                                <div class="pr-img">
                                    <img src="{{asset('/site/images/p/pr4.jpg')}}">
                                </div>
                            </div>
                            <div class="portfolio-info">
                                <h2 class="portfolio-title">HeyBringo Taşıma ve Lojistik websitesi</h2>
                                <div class="pr-bt">
                                    <div class="pr-more"></div>
                                    <div class="pr-date pr-a">20 Fevral 2022</div>
                                    <div class="pr-category pr-a">Xəbər</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="portfolio-item">
                        <a href="test">
                            <div class="portfolio-image" style="background-color:#F4511E">
                                <div class="pr-img">
                                    <img src="{{asset('/site/images/p/pr5.jpg')}}">
                                </div>
                            </div>
                            <div class="portfolio-info">
                                <h2 class="portfolio-title">Home Service application</h2>
                                <div class="pr-bt">
                                    <div class="pr-more"></div>
                                    <div class="pr-date pr-a">20 Fevral 2022</div>
                                    <div class="pr-category pr-a">Xəbər</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="portfolio-item">
                        <a href="test">
                            <div class="portfolio-image" style="background-color:#80868B">
                                <div class="pr-img">
                                    <img src="{{asset('/site/images/p/pr6.jpg')}}">
                                </div>
                            </div>
                            <div class="portfolio-info">
                                <h2 class="portfolio-title">Azculture Mədəniyyət və İncəsənət saytı</h2>
                                <div class="pr-bt">
                                    <div class="pr-more"></div>
                                    <div class="pr-date pr-a">20 Fevral 2022</div>
                                    <div class="pr-category pr-a">Xəbər</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="portfolio-item">
                        <a href="test">
                            <div class="portfolio-image" style="background-color:#0E1013">
                                <div class="pr-img">
                                    <img src="{{asset('/site/images/p/pr7.jpg')}}">
                                </div>
                            </div>
                            <div class="portfolio-info">
                                <h2 class="portfolio-title">Louvel Online shopping website</h2>
                                <div class="pr-bt">
                                    <div class="pr-more"></div>
                                    <div class="pr-date pr-a">20 Fevral 2022</div>
                                    <div class="pr-category pr-a">Xəbər</div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="portfolio-item">
                        <a href="test">
                            <div class="portfolio-image" style="background-color:#EF5F08">
                                <div class="pr-img">
                                    <img src="{{asset('/site/images/p/pr8.jpg')}}">
                                </div>
                            </div>
                            <div class="portfolio-info">
                                <h2 class="portfolio-title">Qaynarinfo.az Xəbər saytı</h2>
                                <div class="pr-bt">
                                    <div class="pr-more"></div>
                                    <div class="pr-date pr-a">20 Fevral 2022</div>
                                    <div class="pr-category pr-a">Xəbər</div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="p-more">
                    <a href="test">Daha çox</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Portfolio end -->
    <!-- Technologies start -->
    <section class="technologies">
        <div class="centered">
            <div class="technologies-a">
                <h2 class="a-title">İstifadə etdiyimiz texnologiyalar</h2>
                <div class="tech-panel">
                    <div class="tech-top">
                        <ul>
                            <li class="t-tab active" data-tab="tab1"><span>Back-end</span></li>
                            <li class="t-tab" data-tab="tab2"><span>Front-end</span></li>
                            <li class="t-tab" data-tab="tab3"><span>Mobile</span></li>
                            <li class="t-tab" data-tab="tab4"><span>Dizayn</span></li>
                        </ul>
                        <div class="t-dots">
                            <i></i>
                            <i></i>
                            <i></i>
                        </div>
                    </div>
                    <div class="tech-list">
                        <div class="tech-list-wrap">
                            <div class="tech-list-a" id="tab1">
                                <ul>
                                    <li class="laravel"><span>Laravel</span></li>
                                    <li class="python"><span>Python</span></li>
                                    <li class="php"><span>Php</span></li>
                                    <li class="nginx"><span>Nginx</span></li>
                                    <li class="jquery"><span>jQuery</span></li>
                                    <li class="xd"><span>Adobe XD</span></li>
                                    <li class="redis"><span>Redis</span></li>
                                </ul>
                            </div>
                            <div class="tech-list-a" id="tab2">
                                <ul>
                                    <li class="laravel"><span>Laravel2</span></li>
                                    <li class="python"><span>Python</span></li>
                                    <li class="php"><span>Php</span></li>
                                    <li class="nginx"><span>Nginx</span></li>
                                    <li class="jquery"><span>jQuery</span></li>
                                    <li class="xd"><span>Adobe XD</span></li>
                                    <li class="redis"><span>Redis</span></li>
                                </ul>
                            </div>
                            <div class="tech-list-a" id="tab3">
                                <ul>
                                    <li class="laravel"><span>Laravel</span></li>
                                    <li class="python"><span>Python</span></li>
                                    <li class="php"><span>Php</span></li>
                                    <li class="nginx"><span>Nginx</span></li>
                                    <li class="jquery"><span>jQuery</span></li>
                                    <li class="xd"><span>Adobe XD</span></li>
                                    <li class="redis"><span>Redis</span></li>
                                </ul>
                            </div>
                            <div class="tech-list-a" id="tab4">
                                <ul>
                                    <li class="laravel"><span>Laravel</span></li>
                                    <li class="python"><span>Python</span></li>
                                    <li class="php"><span>Php</span></li>
                                    <li class="nginx"><span>Nginx</span></li>
                                    <li class="jquery"><span>jQuery</span></li>
                                    <li class="xd"><span>Adobe XD</span></li>
                                    <li class="redis"><span>Redis</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="tech-text">
                            <p>Daxili layihələr üçün təcrübələr və yeni texnologiyaların sınaqdan keçirilməsini tərk etdik.</p>
                            <p>Döyüş tapşırıqlarında biz yalnız sübut edilmiş effektivliyi sübut edilmiş texnologiyalardan istifadə edirik.</p>
                        </div>
                    </div>
                </div>
                <div class="t-team">
                    <div class="t-team-a">
                        <a href="test">
                            <div class="tt-text">Komandamıza baxın</div>
                            <div class="tt-pics">
                                <ul>
                                    <li><img src="{{asset('/site//images/t1.png')}}"></li>
                                    <li><img src="{{asset('/site//images/t2.png')}}"></li>
                                    <li><img src="{{asset('/site//images/t3.png')}}"></li>
                                    <li><img src="{{asset('/site//images/t4.png')}}"></li>
                                </ul>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Technologies end -->
    <!-- Partners start -->
    <section class="partners">
        <div class="centered">
            <div class="partners-a">
                <div class="prt-a">Bizim müştərilərimiz!</div>
                <div class="prt-b">Lahiyələrini bizə etibar edən müştərilər</div>
                <div class="partners-list owl-carousel">
                    <div class="partner-item"><img src="{{asset('/site/images/partner1.png')}}"></div>
                    <div class="partner-item"><img src="{{asset('/site/images/partner2.png')}}"></div>
                    <div class="partner-item"><img src="{{asset('/site/images/partner3.png')}}"></div>
                    <div class="partner-item"><img src="{{asset('/site/images/partner4.png')}}"></div>
                    <div class="partner-item"><img src="{{asset('/site/images/partner1.png')}}"></div>
                    <div class="partner-item"><img src="{{asset('/site/images/partner5.png')}}"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- Partners end -->
@endsection
