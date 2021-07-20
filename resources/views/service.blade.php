@extends('layouts.app', ['body' => 'pageService'])
@section('content')
<main>
    <section class="section section-1">
        <div class="container center-align">
            <h5>
                목돈이 들어가는 중개수수료,<br>
                이젠 신용결제로<br>
                부담을 줄이세요.
                </h6>
        </div>
    </section>

    <section class="section section-list section-2">
        <div class="container">
            <div class="block">
                <h6>간편한 가입절차</h6>
                <ul class="list">
                    <li>회원가입 버튼 클릭!</li>
                    <li>간단 정보 입력</li>
                    <li>즉시 가입완료</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="section section-list section-3">
        <div class="container">
            <div class="block">
                <h6>편리한 결제요청</h6>
                <ul class="list mb-0">
                    <li class="title">QR 코드 방식</li>
                    <li>부동산 거래완료</li>
                    <li>중개수수료 결제시 해당 공인중개사사무소에 비치된 QR코드 촬영</li>
                    <li>중개수수료 입력</li>
                    <li>결제 완료</li>
                </ul>
                <ul class="list mt-0 pt-0">
                    <li class="title">검색 방식</li>
                    <li>부동산 거래완료</li>
                    <li>리딜 홈페이지 접속(웹 & 모바일)</li>
                    <li>해당 공인중개업소 검색</li>
                    <li>중개수수료 입력</li>
                    <li>결제 완료</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="section section-list section-3">
        <div class="container">
            <div class="block">
                <h6>똑똑한 결제 방식</h6>
                <ul class="list">
                    <li>잘못한 결제는 취소 후 다시 결제 할 수 있습니다.</li>
                    <li>일정 시간이 지나도 결제가 이루어지지 않을 경우 알람을 보낼 수 있습니다. (가맹 공인중개업소)</li>
                    <li>언제든 거래 내역을 확인 할 수 있으며 출력도 가능합니다.</li>
                </ul>
            </div>
        </div>
    </section>
</main>
@stop
