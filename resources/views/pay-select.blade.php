@extends('layouts.app', ['body' => 'pagePay'])
@section('content')
<main>
    <section class="section section-1">
        <div class="container">
            <div class="content-wrap">
                <div class="select-btn">
                    <a class="btn waves-effect waves-light n-desk mb-1" href="/pay-qr">QR 코드로 결제하기</a>
                    <a class="btn btn-sub waves-effect waves-light mb-3" href="/pay-search">검색으로 결제하기</a>
                    <a class="btn btn-grey waves-effect waves-light" href="/pay-history">결제내역 검색</a>
                </div>
            </div>
        </div>
    </section>
</main>
@stop
