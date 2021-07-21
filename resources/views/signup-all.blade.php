@extends('layouts.app', ['body' => 'pageSignup'])
@section('content')
<main>
    <section class="section sign">
        <div class="container">
            <div class="content-wrap">
                <ul class="sign-btn-list">
                    <li>
                        <a class="btn" href="/signup-email">
                            이메일 회원가입
                        </a>
                    </li>
                    <li>
                        <a class="btn btn-naver" href="/signup-sns">
                            <img src="assets/images/icon/naver.svg">
                            <span>네이버 회원가입</span>
                        </a>
                    </li>
                    <li>
                        <a class="btn btn-kakao" href="/signup-sns">
                            <img src="assets/images/icon/kakao.svg">
                            <span>카카오 회원가입</span>
                        </a>
                    </li>
                    <li>
                        <a class="btn btn-facebook" href="/signup-sns">
                            <img src="assets/images/icon/facebook.png">
                            <span>페이스북 회원가입</span>
                        </a>
                    </li>
                    <li>
                        <a class="btn btn-google" href="/signup-sns">
                            <img src="assets/images/icon/google.png">
                            <span>구글 회원가입</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
</main>
@stop
