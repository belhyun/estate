@extends('layouts.app', ['body' => 'pageSignup'])
@section('content')
<main>
    <section class="section sign">
        <div class="container">
            <div class="content-wrap">
                <ul class="sign-btn-list">
                    <li>
                        <a class="btn" href="/login">
                            이메일 로그인
                        </a>
                    </li>
                    <li>
                        <a class="btn btn-naver" href="/login-sns">
                            <img src="assets/images/icon/naver.svg">
                            <span>네이버 로그인</span>
                        </a>
                    </li>
                    <li>
                        <a class="btn btn-kakao" href="/login-sns">
                            <img src="assets/images/icon/kakao.svg">
                            <span>카카오 로그인</span>
                        </a>
                    </li>
                    <li>
                        <a class="btn btn-facebook" href="/login-sns">
                            <img src="assets/images/icon/facebook.png">
                            <span>페이스북 로그인</span>
                        </a>
                    </li>
                    <li>
                        <a class="btn btn-google" href="/login-sns">
                            <img src="assets/images/icon/google.png">
                            <span>구글 로그인</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
</main>
@stop
