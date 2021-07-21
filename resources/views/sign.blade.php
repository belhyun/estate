@extends('layouts.app', ['body' => 'pageSignup'])
@section('content')
<main>
    <section class="section sign-main sign">
        <div class="container">
            <div class="content-wrap">
                <a class="btn btn waves-effect waves-light mb-1" href="/login-main">
                    로그인
                </a>
                <a class="btn btn-primay waves-effect waves-light" href="/signup-main">
                    회원가입
                </a>
            </div>
        </div>
    </section>
</main>
@stop
