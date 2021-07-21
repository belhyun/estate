@extends('layouts.app', ['body' => 'pageBoard'])
@section('content')
<main> <section class="section">
        <div class="container">
            <div class="content-wrap">
                <div class="block">
                    <ul class="board-link-list">
                        <li><a class="link waves-effect waves-light" href="/board-faq">FAQ</a></li>
                        <li><a class="link waves-effect waves-light" href="/board-question">문의사항</a></li>
                        <li><a class="link waves-effect waves-light" href="/board-notice">공지사항</a></li>
                        <li><a class="link waves-effect waves-light" href="/board-policy-main">약관 및 정책</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</main>
@stop
