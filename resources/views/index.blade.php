@extends('layouts.app', ['body' => 'pageIndex'])
@section('content')
<main>
    <section class="section section-1">
        <div class="container">
            <h5 class="main-title">
                부동산 중개수수료<br>
                신용결제 서비스, 리딜
            </h5>
            <p class="main-text text-1">
                중개 수수료 아직도<br>
                현금 결제 하시나요?
            </p>
            <p class="main-text text-2">
                리딜에서는 신용카드, 간편페이 등 <br>
                <b>다양한 결제수단</b>으로 중개수수료를 <br>
                결제할 수 있습니다.
            </p>
        </div>
    </section>

    <section class="section section-2">
        <div class="container">
            <div class="block">
                <h5 class="center-align">
                    이젠 부동산 중개수수료<br>
                    할부 결제도 가능합니다!
                </h5>
                <div class="main-tab">
                    <ul class="tabs">
                        <li class="tab">
                            <a class="active" href="#tabBlock1">
                                소비자
                            </a>
                        </li>
                        <li class="tab">
                            <a class="active" href="#tabBlock2">
                                공인중개업소
                            </a>
                        </li>
                    </ul>
                    <div id="tabBlock1" class="tabbox">
                        <ul class="img-list-2">
                            <li><img class="icon-check" src="assets/images/icon/icon-check.png">중개가 완성되면 결제 내역을 작성하여 메시지로 보내세요.</li>
                            <li><img class="icon-check" src="assets/images/icon/icon-check.png">신용카드 할부 결제가 가능하여 계획적인 소비가 가능합니다.</li>
                            <li><img class="icon-check" src="assets/images/icon/icon-check.png">현금영주증을 따로 발급 받을 필요가 없습니다.</li>
                        </ul>
                    </div>
                    <div id="tabBlock2" class="tabbox">
                        <ul class="img-list-2">
                            <li><img class="icon-check" src="assets/images/icon/icon-check.png">결제가 완료되면 메시지로 알려주며 과거 결제내역도 확인 할 수 있습니다.</li>
                            <li><img class="icon-check" src="assets/images/icon/icon-check.png">체계적인 거래 관리로 업무효율을 높여 줍니다.</li>
                            <li><img class="icon-check" src="assets/images/icon/icon-check.png">소비자에게 다양한 서비스를 제공 할 수 있습니다.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-3">
        <div class="container">
            <div class="block">
                <div class="row">
                    <div class="col s12">
                        <h5 class="">
                            소비자의 <span class="red-text">76.6%</span>가<br>
                            중개수수료의 신용카드 결제를<br>
                            원하고 있습니다!
                        </h5>
                        <img src="assets/images/main/chart1.svg" class="chart-img">
                        <div class="reference-box">
                            <ul>
                                <li>조사업체 : ㈜마크로밀엠브레인</li>
                                <li>조사년월 : 2021년 3월중</li>
                                <li>조사대상 :공인중개사사무소를 통한 부동산 거래 이용 경험자/서울 및 수도권/만20~39세남녀</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-4">
        <div class="container">
            <div class="block">
                <h5 class="">리딜의 경쟁력</h5>
                <div class="icon-box row">
                    <div class="item col s12">
                        <div class="img-wrap">
                            <img src="assets/images/icon/icon-box-01.png">
                        </div>
                        <div class="text-wrap">
                            <h6>가입즉시 사용 가능</h6>
                            <p>가입 즉시 사용이 가능합니다.</p>
                        </div>
                    </div>
                    <div class="item col s12">
                        <div class="img-wrap">
                            <img src="assets/images/icon/icon-box-02.png">
                        </div>
                        <div class="text-wrap">
                            <h6>가입비 무료</h6>
                            <p>가입비, 약정 부담없이 자유롭게 사용이 가능합니다.</p>
                        </div>
                    </div>
                    <div class="item col s12">
                        <div class="img-wrap">
                            <img src="assets/images/icon/icon-box-03.png">
                        </div>
                        <div class="text-wrap">
                            <h6>다양한 결제수단</h6>
                            <p>국내 유명 신용카드, 간편페이, 실시간 계좌이체 등 다양한 결제수단을 선택할 수 있습니다.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-5">
        <div class="container">
            <div class="block">
                <h5 class="">신용카드</h5>
                <div class="logo-box">
                    <div class="row card-wrap">
                        <div class="col">
                            <div class="img-wrap">
                                <img src="assets/images/main/card/card-ss.png">
                            </div>
                        </div>
                        <div class="col">
                            <div class="img-wrap">
                                <img src="assets/images/main/card/card-kb.png">
                            </div>
                        </div>
                        <div class="col">
                            <div class="img-wrap">
                                <img src="assets/images/main/card/card-hd.png">
                            </div>
                        </div>
                        <div class="col">
                            <div class="img-wrap">
                                <img src="assets/images/main/card/card-sh.png">
                            </div>
                        </div>
                        <div class="col">
                            <div class="img-wrap">
                                <img src="assets/images/main/card/card-ibk.png">
                            </div>
                        </div>
                        <div class="col">
                            <div class="img-wrap">
                                <img src="assets/images/main/card/card-ct.png">
                            </div>
                        </div>
                        <div class="col">
                            <div class="img-wrap">
                                <img src="assets/images/main/card/card-hn.png">
                            </div>
                        </div>
                        <div class="col">
                            <div class="img-wrap">
                                <img src="assets/images/main/card/card-nh.png">
                            </div>
                        </div>
                        <div class="col">
                            <div class="img-wrap">
                                <img src="assets/images/main/card/card-wr.png">
                            </div>
                        </div>
                        <div class="col">
                            <div class="img-wrap">
                                <img src="assets/images/main/card/card-lt.png">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="block">
                <h5 class="">간편페이</h5>

                <div class="pay-box">
                    <img src="assets/images/main/payment/logo-payco.png">
                </div>
                <!--
                            <div class="pay-box">
                              <div class="row">
                                <div class="col s4">
                                  <div class="img-wrap">
                                    <img src="assets/images/main/payment/n-pay.png">
                                  </div>
                                  <span>네이버페이</span>
                                </div>
                                <div class="col s4">
                                  <div class="img-wrap">
                                    <img src="assets/images/main/payment/k-pay.png">
                                  </div>
                                  <span>카카오페이</span>
                                </div>
                                <div class="col s4">
                                  <div class="img-wrap">
                                    <img src="assets/images/main/payment/s-pay.png">
                                  </div>
                                  <span>삼성페이</span>
                                </div>
                              </div>
                            </div>
                -->
            </div>
            <hr>
            <div class="block">
                <h5 class="">실시간 계좌이체</h5>
                <div class="row bank-wrap">
                    <div class="col"><img src="assets/images/main/bank/bank-shinhan.png" alt=""></div>
                    <div class="col"><img src="assets/images/main/bank/bank-kb.png" alt=""></div>
                    <div class="col"><img src="assets/images/main/bank/bank-hana.png" alt=""></div>
                    <div class="col"><img src="assets/images/main/bank/bank-woori.png" alt=""></div>
                    <div class="col"><img src="assets/images/main/bank/bank-nh.png" alt=""></div>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-6">
        <div class="container">
            <div class="block">
                <h5>리딜은 국내최대<br>전자금융사업자와 함께<br>서비스를 제공하고 있습니다.</h5>
                <h5>믿고 거래할 수 있습니다.</h5>
                <img src="assets/images/main/kcp.svg">
            </div>
        </div>
    </section>

    <section class="section section-7">
        <div class="container">
            <div class="block">
                <h5>가맹점 가입문의</h5>
                <p>
                    가맹점 가입에 관해 궁금한 점이 있으시면 연락처를 남겨주세요. <br>
                    관련 부서에서 확인후 연락드리겠습니다.
                </p>


                <form class="form">
                    <div class="input-field">
                        <input id="userName" type="text" class="validate">
                        <label for="userName">이름 또는 닉네임</label>
                    </div>
                    <div class="input-field">
                        <input id="userPhone" type="number" class="validate">
                        <label for="userPhone">전화번호 *필수 ( - 제외)</label>
                    </div>

                    <div class="col-block mb-1">
                        <div class="row form-row">
                            <div class="input-field col email s6">
                                <input id="userEmail" type="email">
                                <label for="userEmail">이메일(영문)</label>
                                <span class="label-icon">@</span>
                            </div>
                            <div class="input-field col s6">
                                <select>
                                    <option value="" disabled selected>선택하기</option>
                                    <option value="1">naver.com</option>
                                    <option value="2">daum.net</option>
                                    <option value="3">gmail.com</option>
                                    <option value="">...</option>
                                    <option value="">직접입력</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="waves-effect waves-light btn btn-large btn-contact">문의하기</button>
                </form>


            </div>
        </div>
    </section>

</main>
@stop
@section('signup')
    <a href="/sign" class="btn btn-large flow-btn">회원가입</a>
@stop
