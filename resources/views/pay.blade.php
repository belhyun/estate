@extends('layouts.app', ['body' => 'pagePay'])
@section('content')
<main>
    <section class="section section-1">
        <div class="container">
            <div class="content-wrap">
                <form class="pay-form">
                    <h4 class="title">결제 요청하기</h4>

                    <!-- 거래방식 -->
                    <div class="input-field">
                        <select id="deal">
                            <option value="" disabled selected>거래방식</option>
                            <option value="1">월세 (반전세 포함)</option>
                            <option value="2">전세</option>
                            <option value="3">매매</option>
                            <option value="4">단기임대</option>
                        </select>
                    </div>

                    <!-- 결제자 유형 : 매수자 -->
                    <div class="input-field option option-a-1">
                        <select>
                            <option value="" disabled selected>결제자 유형</option>
                            <option value="1">매수자 (사는 사람)</option>
                            <option value="2">매도자 (파는 사람)</option>
                        </select>
                    </div>
                    <!-- 결제자 유형 : 임대인 -->
                    <div class="input-field option option-a-2">
                        <select>
                            <option value="" disabled selected>결제자 유형</option>
                            <option value="3">임대인 (빌려주는 사람)</option>
                            <option value="4">임차인 (빌리는 사람)</option>
                        </select>
                    </div>

                    <!-- 부동산 유형 : 분양권 제외 -->
                    <div class="input-field option option-b-1">
                        <select>
                            <option value="" disabled selected>부동산 유형</option>
                            <option value="1">아파트</option>
                            <option value="2">오피스텔</option>
                            <option value="3">원룸/투룸</option>
                            <option value="4">빌라/연립</option>
                            <option value="5">단독/다가구</option>
                            <option value="6">상가주택</option>
                            <option value="7">상가</option>
                            <option value="8">사무실</option>
                            <option value="9">공장</option>
                            <option value="10">지식산업센터</option>
                            <option value="11">토지</option>
                        </select>
                    </div>
                    <!-- 부동산 유형 : 토지/분양권 제외-->
                    <div class="input-field option option-b-2">
                        <select>
                            <option value="" disabled selected>부동산 유형</option>
                            <option value="1">아파트</option>
                            <option value="2">오피스텔</option>
                            <option value="3">원룸/투룸</option>
                            <option value="4">빌라/연립</option>
                            <option value="5">단독/다가구</option>
                            <option value="6">상가주택</option>
                            <option value="7">상가</option>
                            <option value="8">사무실</option>
                            <option value="9">공장</option>
                            <option value="10">지식산업센터</option>
                        </select>
                    </div>
                    <!-- 부동산 유형 All -->
                    <div class="input-field option option-b-3">
                        <select>
                            <option value="" disabled selected>부동산 유형</option>
                            <option value="1">아파트</option>
                            <option value="2">오피스텔</option>
                            <option value="3">원룸/투룸</option>
                            <option value="4">빌라/연립</option>
                            <option value="5">단독/다가구</option>
                            <option value="6">상가주택</option>
                            <option value="7">상가</option>
                            <option value="8">사무실</option>
                            <option value="9">공장</option>
                            <option value="10">지식산업센터</option>
                            <option value="11">토지</option>
                            <option value="12">아파트 분양권</option>
                            <option value="13">오피스텔 분양권</option>
                        </select>
                    </div>

                    <!-- 거래금액 : 매매가액 -->
                    <div class="input-field option option-c-1">
                        <input id="price2" type="number" class="validate">
                        <label for="price2">매매가액</label>
                    </div>
                    <!-- 거래금액 : 보증금 -->
                    <div class="input-field option option-c-2">
                        <input id="price1" type="number" class="validate">
                        <label for="price1">보증금</label>
                    </div>

                    <!-- 거래방식 : 월세 -->
                    <div class="input-field option option-d-1">
                        <input id="price3" type="number" class="validate">
                        <label for="price3">월세</label>
                    </div>
                    <!-- 거래방식 : 임대료 -->
                    <div class="input-field option option-d-2">
                        <input id="price4" type="number" class="validate">
                        <label for="price4">임대료</label>
                    </div>

                    <div class="input-field">
                        <input id="BusinessNum" type="number" class="validate">
                        <label for="BusinessNum">중개수수료 결제 금액</label>
                    </div>

                    <div class="row form-row">
                        <div class="input-field col s4">
                            <select>
                                <option value="" disabled selected>통신사</option>
                                <option value="1">SKT</option>
                                <option value="2">KT</option>
                                <option value="3">LG</option>
                                <option value="3">알뜰폰</option>
                            </select>
                        </div>

                        <div class="input-field col s8">
                            <input id="RegNum" type="number" class="validate">
                            <label for="RegNum">휴대전화번호</label>
                        </div>
                    </div>

                    <div class="input-field">
                        <input id="userEmail" type="email" class="validate">
                        <label for="userEmail">이메일</label>
                        <span class="helper-text" data-error="올바른 메일 주소가 아닙니다."></span>
                    </div>

                    <div class="btn-wrap">
                        <a href="pay-2.html" class="waves-effect waves-light btn">다음 단계</a>
                        <a href="main.html" class="waves-effect waves-light btn btn-cancle">돌아가기</a>
                    </div>
                </form>

            </div>
        </div>
    </section>
</main>
@stop
