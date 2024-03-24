<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <meta name="Title" content="(주)웨보노믹스">
    <meta property="og:type" content="website">
    <meta property="og:title" content="(주)웨보노믹스">
    <meta property="og:url" content="https://newwebon.webonomics.co.kr">
    <meta property="og:site_name" content="(주)웨보노믹스">
    <meta name="Description" content="Since 1999, 웹에이전시 24년차 믿을 수 있는 기업 1999년 순수하게 웹에이전시로 출발한 ㈜웨보노믹스입니다.">
    <meta property="og:description" content="Since 1999, 웹에이전시 24년차 믿을 수 있는 기업 1999년 순수하게 웹에이전시로 출발한 ㈜웨보노믹스입니다.">
    <meta name="Author" content="웨보노믹스">
    <meta name="Keywords" content="웨보노믹스,웹에이전시,웹개발">
    <meta property="og:image" content="https://newwebon.webonomics.co.kr/storage/config/2D6SomUi_e45c1d.png">
    <link rel="icon" href="https://newwebon.webonomics.co.kr/storage/config/Nja1Gni7_b7426e.ico" type="image/x-icon">
    <title>(주)웨보노믹스</title>
    <script src="/js/jquery-3.7.1.min.js?ver=231011"></script>
    <script src="/js/jquery-ui.min.js?ver=231011"></script>
    <script src="/js/app.js?ver=231011"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <link rel="stylesheet" href="/css/app.css?ver=231011">
    <link rel="stylesheet" href="/css/font-awesome/css/font-awesome.min.css?ver=231011">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="/js/swiper/swiper.min.css">
    <script src="/js/swiper/swiper.min.js"></script>
    <script type="text/javascript" src="/js/jquery.fancybox.js?v=2.1.4"></script>
    <link rel="stylesheet" type="text/css" href="/js/jquery.fancybox.css?v=2.1.4" media="screen">
    <link rel="stylesheet" href="/css/template/menu/default-dropdown/reset.css">
    <link rel="stylesheet" href="/css/template/menu/default-dropdown/style.css">
    <script>

        jQuery(function ($) {


            //스크롤 따라다니는 메뉴박스 만들기
            $(window).scroll(function () {


                if ($(this).scrollTop() > 200) {
                    $(".at-header").addClass('fixed');

                }
                else {
                    $(".at-header").removeClass('fixed');
                }

            });



            $(".at-open-menu").click(function (e) {
                $(".all_menu_wrap").animate({ right: 0 }, '300');
                $(".all_menu_close_btn").show();
            });


            $(".all_menu_close,.all_menu_close_btn").click(function (e) {
                $(".all_menu_wrap").animate({ right: "-100%" }, '300');
                $(".all_menu_close_btn").hide();
            });


            var bw = $("body").width();
            $(window).resize(function () {
                bw = $("body").width();
            });

            if (bw >= 992) {


            } else {

                $(".all_menu_box li .depth01").click(function () {
                    $(this).parent().toggleClass("active").siblings().removeClass("active");
                });

            }


            $(".history_year").click(function () { //Fire the click event 


                $(this).parent("div").find(".history_content").slideToggle();
                $(this).find("i").toggleClass("minus");
                $(this).find("span").toggleClass("active");


                return false; //prevent page scrolling on tab click
            });


            $(".history_tabbox").hide(); // Hide all tab content divs by default
            $(".history_tabbox#history4").show(); // Show the first div of tab content by default

            $(".history_tab ul li a").click(function () { //Fire the click event

                var activeTab = $(this).attr("href"); // Catch the click link
                $(".history_tab ul li a").removeClass("active"); // Remove pre-highlighted link
                $(this).addClass("active"); // set clicked link to highlight state
                $(".history_tabbox").hide(); // hide currently visible tab content div 
                $(activeTab).fadeIn(); // show the target tab content div by matching clicked link.

                return false; //prevent page scrolling on tab click
            });

        });

        $(document).ready(function () {

            $(".fancybox").fancybox({
                maxWidth: 658,
                maxHeight: 710,
                fitToView: false,
                width: '100%',
                height: '100%',
                autoSize: false,
                autoCenter: false,
                closeClick: false,
                openEffect: 'none',
                closeEffect: 'none'
            });

            $(".history_box.active a.history_year").trigger("click");


        });
    </script>
</head>

<body>



    <script>

        jQuery(function ($) {



            $(".at-open-menu").click(function (e) {
                $(".all_menu_wrap").animate({ right: 0 }, '300');
                $(".all_menu_close_btn").show();
            });


            $(".all_menu_close,.all_menu_close_btn").click(function (e) {
                $(".all_menu_wrap").animate({ right: "-100%" }, '300');
                $(".all_menu_close_btn").hide();
            });




        });
    </script>

    <!-- 전체 메뉴 -->
    <button class="all_menu_close_btn"></button>
    <div class="all_menu_wrap">
        <div class="at-container">
            <div class="all_menu_close"></div>
            <div class="all_menu_box">

                <div class="all_menu_btn_set">
                    <a href="/login">로그인</a>
                    <a href="/register">사용자가입</a>
                    <a href="/page/notice">공지사항</a>
                </div>

                <ul>
                    <li>
                        <div class="depth01"><a href="/page/intro">회사소개</a></div><a href="/page/intro">
                        </a>
                        <ul class="depth02"><a href="/page/intro">
                            </a>
                            <li><a href="/page/intro"></a><a href="/page/intro">회사소개</a></li>

                            <li><a href="history.html">회사연혁</a></li>

                            <li><a href="/page/organization">조직도</a></li>

                            <li><a href="location.html">오시는 길</a></li>

                        </ul>
                    </li>
                    <li>
                        <div class="depth01"><a href="/page/homepage">서비스</a></div><a href="/page/homepage">
                        </a>
                        <ul class="depth02"><a href="/page/homepage">
                            </a>
                            <li><a href="/page/homepage"></a><a href="/page/homepage">홈페이지 제작</a></li>

                            <li><a href="/page/shoppingmall">쇼핑몰 제작/운영</a></li>

                            <li><a href="/page/solution">솔루션 개발</a></li>

                            <li><a href="/page/mobileapp">모바일 앱 개발</a></li>

                        </ul>
                    </li>
                    <li>
                        <div class="depth01"><a href="/portfolio">포트폴리오</a></div><a href="/portfolio">
                            <ul class="depth02">
                            </ul>
                        </a>
                    </li><a href="/portfolio">
                    </a>
                    <li><a href="/portfolio"></a>
                        <div class="depth01"><a href="/portfolio"></a><a href="/page/request/form">견적문의</a></div><a
                            href="/page/request/form">
                            <ul class="depth02">
                            </ul>
                        </a>
                    </li><a href="/page/request/form">
                    </a>
                    <li><a href="/page/request/form"></a>
                        <div class="depth01"><a href="/page/request/form"></a><a href="/support">수정의뢰</a></div><a
                            href="/support">
                            <ul class="depth02">
                            </ul>
                        </a>
                    </li><a href="/support">
                    </a>
                </ul><a href="/support">

                </a>
            </div><a href="/support">
            </a>
        </div><a href="/support">
        </a>
    </div><a href="/support">
        <!-- 전체 메뉴 -->


    </a>
    <div class="wrap"><a href="/support">

            <!-- header -->
        </a>
        <div class="at-header"><a href="/support">
            </a>
            <div class="main_wrap"><a href="/support">
                </a>
                <h1><a href="/support"></a><a href="/"><img
                            src="https://newwebon.webonomics.co.kr/storage/config/KglCr0je_80de1a.png" alt=""></a></h1>

                <!-- gnb -->
                <div class="at-menu">
                    <ul class="gnb">
                        <li><a href="/page/intro" class="parent"><span>회사소개</span></a>
                            <ul class="snb">
                                <li><a href="/page/intro">회사소개</a></li>

                                <li><a href="history.html">회사연혁</a></li>

                                <li><a href="/page/organization">조직도</a></li>

                                <li><a href="location.html">오시는 길</a></li>

                                <li><a href="list.php">게시판 작성</a></li>

                            </ul>
                        </li>
                        <li><a href="/page/homepage" class="parent"><span>서비스</span></a>
                            <ul class="snb">
                                <li><a href="/page/homepage">홈페이지 제작</a></li>

                                <li><a href="/page/shoppingmall">쇼핑몰 제작/운영</a></li>

                                <li><a href="/page/solution">솔루션 개발</a></li>

                                <li><a href="/page/mobileapp">모바일 앱 개발</a></li>

                            </ul>
                        </li>
                        <li><a href="/portfolio" class="parent"><span>포트폴리오</span></a>
                            <ul class="snb">
                            </ul>
                        </li>
                        <li><a href="/page/request/form" class="parent"><span>견적문의</span></a>
                            <ul class="snb">
                            </ul>
                        </li>
                        <li><a href="/support" class="parent"><span>수정의뢰</span></a>
                            <ul class="snb">
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- gnb -->


                <div class="at-open-menu">
                    <span class="line"></span>
                    <span class="line"></span>
                    <span class="line"></span>
                </div>

            </div>
        </div>
