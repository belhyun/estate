@extends('layouts.app', ['body' => 'pageLogin'])
@section('content')
<main>
    <section class="section section-1 h100">
        <div class="container">
            <div class="content-wrap">
                <form class="sign-form">
                    <h4 class="title mb-3">결제내역 검색</h4>

                    <h6 class="mb-1">검색으로 찾기</h6>
                    <div class="input-field">
                        <input id="input1" type="text">
                        <label for="input1">공인중개사무소명</label>
                    </div>
                    <a href="/pay-history-res" class="waves-effect waves-light btn btn-next">검색</a>
                </form>

            </div>
        </div>
    </section>
</main>
