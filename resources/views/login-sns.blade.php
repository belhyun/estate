@extends('layouts.app', ['body' => 'pageLogin'])
@section('content')
<main>
    <section class="section section-1 h100">
        <div class="container">
            <div class="content-wrap">
                <form class="sign-form center-align">
                    <h4 class="title">SNS 로그인</h4>
                    <p>SNS 로그인 API</p>

                    <div class="btn-wrap">
                        <a href="/main" class="waves-effect waves-light btn">로그인</a>
                    </div>
                </form>

            </div>
        </div>
    </section>
</main>
@stop
