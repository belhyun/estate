<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="utf-8" />
    <title>리딜 | 메인</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta content="..." name="description" />
    <meta content="..." name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <meta property="og:url" content="https://pensive-visvesvaraya-0c1af8.netlify.app/">
    <meta property="og:title" content="리딜">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://pensive-visvesvaraya-0c1af8.netlify.app/assets/images/redal.png">
    <meta property="og:description" content="부동산 중개수수료 비대면 결제 서비스, 리딜">
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/app.min.css') }}" type="text/css">
</head>
<body id="{{$body}}" class="">
<!-- header -->
<header class="header">
    <nav class="header-wrap">
        <div class="container">
            <div class="nav-wrapper">
                <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>

                <a href="/" class="brand-logo">
                    <img src="{{ asset('assets/images/logo/logo-d.svg')}}" class="logo-dark">
                    <img src="{{ asset('assets/images/logo/logo-w.svg')}}" class="logo-white">
                </a>
                <ul class="right hide-on-med-and-down">
                    <li>
                        <a href="/service">이용방법</a>
                    </li>
                    <li>
                        <a href="/pay-select">중계수수료 결제요청</a>
                    </li>
                    <li>
                        <a href="/mypage-user">마이페이지</a>
                    </li>
                    <li>
                        <a href="/board-main">문의 및 공지</a>
                    </li>
                    <li>
                        <a href="/login-main">로그인</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<!-- END header -->
<main>
    @yield('content')
</main>

<!-- footer -->
<footer class="page-footer">
    <div class="container">
        <div class="row mb-0">
            <div class="col l6 s12">
                <h5 class="footer-title">
                    <img src="assets/images/logo/logo-w.svg">
                </h5>
            </div>
            <div class="col l6 s12">
                <p class="footer-text"><b>우팍앤컴퍼니</b></p>
                <p class="footer-text">사업자등록번호 : 860-31-00935</p>
                <p class="footer-text">대표 : 박정우</p>
                <p class="footer-text">통신판매업신고번호 : 2021-서울강동-1258</p>
                <p class="footer-text">서울특별시 강동구 상암로79길 88, 715-704</p>
                <p class="footer-text">0507-1332-3817</p>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            © 2021 WUPARK & COMPANY
            <a class="right" href="/policy" target="_blank">개인정보 제3자동의</a>
        </div>
    </div>
</footer>
<!-- END footer -->

<!-- flow-btn -->
@yield('signup')
<!-- END flow-btn -->

<!-- sidenav -->
<!-- Side Nav -->
<ul id="slide-out" class="sidenav">
    <li>
        <div class="user-view">
            <div class="logo">
                <a href="#!" class="side-logo">
                    <img src="{{ asset('assets/images/logo/logo-d.svg')}}" class="logo-dark">
                </a>
            </div>
            <div class="login">
                <a href="/login-main" class="btn">로그인</a>
                <a href="/signup-main" class="btn">회원가입</a>
            </div>
            <!--
                    <div class="user-info">
                      <a href="#user"><img class="circle" src="assets/images/icon/user-entry.jpg"></a>
                      <div class="info-text">
                        <a href="#name"><span class="name">유인나</span></a>
                        <a href="#email"><span class="email">sdeecxdk@gmail.com</span></a>
                      </div>
                    </div>
                    -->
        </div>
    </li>
    <li><a class="waves-effect" href="/service">이용방법</a></li>
    <li><div class="divider"></div></li>
    <li><a class="waves-effect" href="/pay-select">중개수수료 결제</a></li>
    <li><a class="waves-effect" href="/mypage-user">마이페이지(유저)</a></li>
    <li><a class="waves-effect" href="/mypage-franchisee">마이페이지(가맹점)</a></li>
    <li><a class="waves-effect" href="/board-main">문의 및 공지</a></li>
    <li><a class="waves-effect" href="/nonmember">비회원결제(임시)</a></li>
</ul>
<!-- Side Nav END -->


<!-- END sidenav -->

<!-- App js -->
<script src="{{ asset('assets/js/vender.min.js') }}"></script>
<script src="{{ asset('assets/js/script.min.js') }}"></script>
</body>
</html>
