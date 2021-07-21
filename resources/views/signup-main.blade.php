@extends('layouts.app', ['body' => 'pageLogin'])
@section('content')
<main>
    <section class="section sign-main sign h100">
        <div class="container">
            <div class="content-wrap">
                <a class="btn btn waves-effect waves-light mb-1" href="/signup-all">
                    일반회원가입
                    <span>(일반소비자)</span>
                </a>
                <a class="btn btn-primay waves-effect waves-light" href="/signup">
                    가맹점회원가입
                    <span>(개업공인중개사)</span>
                </a>
            </div>
        </div>
    </section>
</main>
@stop
