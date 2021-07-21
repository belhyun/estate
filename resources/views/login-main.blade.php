@extends('layouts.app', ['body' => 'pageLogin'])
@section('content')
<main>
    <section class="section sign-main sign h100">
        <div class="container">
            <div class="content-wrap">
                <a class="btn waves-effect waves-light mb-1" href="/login-all">
                    일반회원 로그인
                    <span>(일반소비자)</span>
                </a>
                <a class="btn btn-primay waves-effect waves-light" href="/login">
                    가맹점회원 로그인
                    <span>(개업공인중개사)</span>
                </a>
            </div>
        </div>
    </section>
</main>
@stop
