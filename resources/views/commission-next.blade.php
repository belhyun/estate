@extends('layouts.app', ['body' => 'pageCms'])
@section('content')
<main>
    <section class="section section-1">
        <div class="container">
            <div class="content-wrap mb-3">
                <h5 class="center-align title mb-4">결제가 완료되었습니다.</h5>
                <h6 class="mb-1">중계수수료 결제 완료 정보</h6>
                <div class="info-box list mb-3">
                    <ul>
                        <li>사무소명 : 홍길동공인중개사사무소</li>
                        <li>주소 : 서울시 강남구 테헤란로 OO</li>
                        <li>연락처 : 010-5555-XXXX</li>
                        <li>개업공인중개사명 : 홍길동</li>
                        <li>개설등록번호 : OO-OOOO-OOO</li>
                        <li>사업자번호 : OOO-OO-OOOOO</li>
                        <li>결제수단 : 삼성카드 (신용카드)</li>
                        <li>결제금액 : 300,000원</li>
                        <li>결제일 : 2021년 6월 30일</li>
                        <li>거래번호 : OOOOOO</li>
                    </ul>
                </div>
                <a href="/email-comp" class="btn btn-next waves-effect waves-light">결제정보 내 이메일로 보내기</a>

                <!-- 비회원일 경우 팝업 호출 -->
                <p class=" mt-3">비회원일 경우</p>
                <a href="/email-comp" class="btn btn-next waves-effect waves-light modal-trigger" data-target="modal">결제정보 내 이메일로 보내기</a>
            </div>
        </div>
    </section>
</main>
@stop
