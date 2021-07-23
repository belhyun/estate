@extends('layouts.app', ['body' => 'pageCms'])
@section('content')
<main>
    <section class="section section-1">
        <div class="container">
            <div class="content-wrap mb-3">
                <h6 class="mb-1">결제 공인중개사 사무소 정보</h6>
                <div class="info-box">
                    <ul>
                        <li><b>사무소 </b><span>홍길동공인중개사무소</span></li>
                        <li><b>주소 </b><span>서울시 강남구 테헤란로 OO</span></li>
                        <li><b>연락처 </b><span>010-5555-XXXX</span></li>
                        <li><b>개업공인중개사명 </b><span>홍길동</span></li>
                        <li><b>개설등록번호 </b><span>XX-XXXX-XXX</span></li>
                        <li><b>사업자번호 </b><span>XXX-XX-XXXXX</span></li>
                    </ul>
                </div>
                <span class="warring-text">※ 결제 전 거래한 공인중개사무소가 맞는지 반드시 확인하십시오.</span>

                <div class="cms-form">
                    <h6 class="mb-1">결제 수단</h6>
                    <div class="input-field mb-3">
                        <div class="switch">
                            <label class="flex-switch">
                                신용카드
                                <input type="checkbox" id="check1">
                                <span class="lever"></span>
                            </label>
                        </div>
                        <div class="switch">
                            <label class="flex-switch">
                                간편페이
                                <input type="checkbox" id="check2">
                                <span class="lever"></span>
                            </label>
                        </div>
                        <div class="switch">
                            <label class="flex-switch">
                                실시간 계좌이체
                                <input type="checkbox" id="check3">
                                <span class="lever"></span>
                            </label>
                        </div>
                    </div>

                    <h6 class="mb-1">중계수수료 결제 금액</h6>
                    <div class="input-field mb-3">
                        <input data-inputmask="'alias': 'currency', 'placeholder': '', 'digits': '0', 'allowMinus': 'false', 'showMaskOnFocus': 'false', 'showMaskOnHover': 'false', 'suffix': ',000원'" placeholder="원"/>
                        <span class="payment-text">금삼십만원정</span>
                    </div>

                    <a href="/commission-next" class="btn btn-next waves-effect waves-light">다음 단계로</a>
                </div>
            </div>
        </div>
    </section>
</main>
@stop
