@extends('layouts.app', ['body' => 'pageMypage'])
@section('content')
<main>
    <section class="section section-1">
        <div class="container">
            <div class="content-wrap">
                <form class="sign-form">
                    <h5 class="title center-align mb-3">가맹점 정보수정</h5>
                    <div class="input-field">
                        <input id="userCompay" type="text" class="validate" value="###공인중개소">
                        <label for="userCompay">공인중개업소명</label>
                    </div>

                    <div class="input-field">
                        <input id="businessNum" type="number" class="validate" value="01510845652">
                        <label for="businessNum">사업자번호 (- 제외)</label>
                    </div>

                    <div class="input-field">
                        <input id="repName" type="text" class="validate" value="개업공인중개사명">
                        <label for="repName">개업공인중개사명</label>
                    </div>

                    <div class="input-field">
                        <input id="RegNum" type="number" class="validate" value="15456465454">
                        <label for="RegNum">개설등록번호 (- 제외)</label>
                    </div>


                    <div class="col-block">
                        <div class="row form-row">
                            <div class="input-field col s8">
                                <input id="userAddress" type="text" class="validate modal-trigger" data-target="modalFind" disabled value="15453">
                                <label for="userAddress">우편번호</label>
                            </div>
                            <div class="input-field col s4">
                                <button type="button" class="btn btn-primay-darken-2 mt-0 modal-trigger" data-target="modalFind">우편번호 찾기</button>
                            </div>
                        </div>
                    </div>

                    <div class="input-field">
                        <input id="userAddress" type="text" class="validate" value="서울시 테헤란로">
                        <label for="userAddress">주소</label>
                    </div>

                    <div class="input-field">
                        <input id="userAddress2" type="text" class="validate">
                        <label for="userAddress2">상세주소</label>
                    </div>

                    <div class="col-block mt-1">
                        <div class="row form-row">
                            <div class="input-field col email s6">
                                <input id="userEmail" type="email" value="parkwebe">
                                <label for="userEmail">이메일(영문)</label>
                                <span class="label-icon">@</span>
                            </div>
                            <div class="input-field col s6">
                                <select>
                                    <option value="" disabled selected>선택하기</option>
                                    <option value="1">naver.com</option>
                                    <option value="2" selected>daum.net</option>
                                    <option value="3">gmail.com</option>
                                    <option value="">...</option>
                                    <option value="">직접입력</option>
                                </select>
                            </div>
                        </div>
                        <span class="text">※가입시 입력하신 이메일 주소가 아이디 입니다.</span>
                    </div>

                    <div class="col-block mt-1">
                        <div class="row form-row">
                            <div class="input-field col s4">
                                <select>
                                    <option value="" disabled selected>통신사</option>
                                    <option value="1">SKT</option>
                                    <option value="2">KT</option>
                                    <option value="3" selected>LG</option>
                                    <option value="3">알뜰폰</option>
                                </select>
                            </div>
                            <div class="input-field col s8">
                                <input id="RegNum" type="number" class="validate" value="01080005000">
                                <label for="RegNum">휴대전화번호 (- 제외)</label>
                            </div>
                        </div>
                    </div>

                    <div class="col-block">
                        <div class="row form-row">
                            <div class="input-field col s12">
                                <button type="button" class="btn btn-primay-darken-2">인증번호 전송</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-block mt-1">
                        <div class="row form-row">
                            <div class="input-field col s8">
                                <input id="userTel" type="number">
                                <label for="userTel">인증번호 확인</label>
                            </div>
                            <div class="input-field col s4">
                                <button type="button" class="btn btn-primay-darken-2 mt-0">인증번호 확인</button>
                            </div>
                        </div>
                    </div>

                    <div class="input-field">
                        <input id="userPw" type="password" class="validate">
                        <label for="userPw">비밀번호</label>
                        <span class="helper-text"></span>
                        <span class="text">(숫자, 영문 소문자, 대문자 포함 8자리)</span>
                    </div>

                    <div class="input-field">
                        <input id="userPwre" type="password" class="validate">
                        <label for="userPwre">비밀번호 확인</label>
                        <span class="helper-text" data-error="패스워드를 다시 확인해주세요."></span>
                    </div>

                    <div class="divi-text">
                        <h5>선택사항</h5>
                    </div>

                    <div class="col-block mb-2">
                        <div class="row form-row">
                            <div class="input-field col s4">
                                <select>
                                    <option value="" disabled selected>은행</option>
                                    <option value="1">국민은행</option>
                                    <option value="2">NH농협</option>
                                    <option value="3" selected>신한은행</option>
                                    <option value="3">우리은행</option>
                                    <option value="3">기업은행</option>
                                    <option value="3">하나은행</option>
                                    <option value="3">카카오뱅크</option>
                                    <option value="3">새마을금고</option>
                                    <option value="3">우체국</option>
                                    <option value="3">제일은행</option>
                                </select>
                            </div>
                            <div class="input-field col s8">
                                <input id="bankNum" type="number" class="validate" value="27270121548511">
                                <label for="bankNum">정산 받을 계좌번호</label>
                            </div>
                        </div>
                        <span class="text">※ 대표자와 계좌주가 일치해야 합니다.</span>
                        <button type="button" class="waves-effect waves-light btn btn-primay-darken-2">계좌확인</button>
                    </div>

                    <div class="file-field input-field">
                        <div class="btn">
                            <span>사업자등록증 파일첨부</span>
                            <input type="file">
                        </div>
                        <div class="file-path-wrapper file-camera">
                            <input class="file-path validate" type="text" placeholder="사업자등록증" accept="image/*;capture=camera" value="file.jpge">
                        </div>
                    </div>
                    <div class="btn-wrap">
                        <a href="/mypage-franchisee" class="waves-effect waves-light btn btn-primay-darken-2">저장하기</a>
                    </div>
                </form>
            </div>
        </div>
    </section>
</main>
@stop
