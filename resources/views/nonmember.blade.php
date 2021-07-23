@extends('layouts.app', ['body' => 'pageLogin'])
@section('content')
<main>
    <section class="section sign-main sign h100">
        <div class="container">
            <div class="content-wrap">
                <a class="btn waves-effect waves-light mb-1" href="/signup-main">
                    회원가입 후 결제
                </a>
                <a class="btn btn-primay waves-effect waves-light" href="/pay-select">
                    비회원으로 결제
                </a>
            </div>
        </div>
    </section>
</main>
@stop
