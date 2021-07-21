@extends('layouts.app', ['body' => 'pageBoard'])
@section('content')
<main>
    <section class="section">
        <div class="container">
            <div class="content-wrap">
                <div class="block">
                    <ul class="policy-link-list">
                        <li><a class="link waves-effect" href="/policy-terms">서비스 이용약관</a></li>
                        <li><a class="link waves-effect" href="/policy-privacy">개인정보 처리방침</a></li>
                        <li><a class="link waves-effect" href="/policy-marketing">마케팅 정보 수신동의</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</main>
@stop
