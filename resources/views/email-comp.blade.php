@extends('layouts.app', ['body' => 'pageSignup'])
@section('content')
<main>
    <section class="section sign-message sign">
        <div class="container">
            <div class="content-wrap">
                <h5>메일발송</h5>
                <h5 class="weight-400">
                    결제 정보를 이메일로 보냈습니다.
                </h5>

                <a href="/mypage-user" class="btn btn-primay-darken-2 btn-goto mt-5">결제리스트로 가기</a>
                <a href="/main" class="btn btn-grey btn-goto mt-1">홈으로 가기</a>
            </div>
        </div>
    </section>
</main>
@stop
