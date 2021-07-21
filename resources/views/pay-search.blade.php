@extends('layouts.app', ['body' => 'pagePay'])
@section('content')
<main>
    <section class="section section-1">
        <div class="container">
            <div class="content-wrap">
                <form class="sign-form">
                    <h4 class="title mb-3">검색으로 결제</h4>

                    <h6 class="mb-1">검색으로 찾기</h6>
                    <div class="col-block mb-3">
                        <div class="row form-row">
                            <div class="input-field col s8">
                                <input id="input1" type="text">
                                <label for="input1">공인중개사무소명</label>
                            </div>
                            <div class="input-field col s4">
                                <button type="button" class="btn btn-primay-darken-2 mt-0">검색</button>
                            </div>
                        </div>
                    </div>

                    <h6 class="mb-1">주소로 찾기</h6>
                    <div class="col-block">
                        <div class="row form-row">
                            <div class="input-field col s8">
                                <input id="input1" type="text">
                                <label for="input1">우편번호</label>
                            </div>
                            <div class="input-field col s4">
                                <button type="button" class="btn btn-primay-darken-2 mt-0">우편번호 찾기</button>
                            </div>
                        </div>
                    </div>

                    <div class="input-field">
                        <input id="inputAdr1" type="text" class="validate">
                        <label for="userinputAdr1Pw">주소</label>
                    </div>

                    <div class="input-field">
                        <input id="inputAdr2" type="text" class="validate">
                        <label for="inputAdr2">상세주소</label>
                    </div>

                    <div class="btn-wrap">
                        <a href="/pay-2" class="waves-effect waves-light btn btn-next">검색</a>
                    </div>
                </form>

            </div>
        </div>
    </section>
</main>
@stop
