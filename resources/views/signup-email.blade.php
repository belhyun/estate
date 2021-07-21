@extends('layouts.app', ['body' => 'pageSignup'])
@section('content')
<main>
    <section class="section section-1">
        <div class="container">
            <div class="content-wrap">
                <form class="sign-form">
                    <h4 class="title">이메일 회원가입</h4>
                    <div class="input-field">
                        <input id="userCompay" type="text" class="validate">
                        <label for="userCompay">성명</label>
                    </div>

                    <div class="col-block">
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
                        <span class="text">※가입시 입력하신 이메일 주소가 아이디 입니다.</span>
                    </div>

                    <div class="col-block mt-1">
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

                    <p data-target="modal1" class="modal-trigger">
                        <label>
                            <input type="checkbox" id="privCheck"/>
                            <span>개인정보/약관 동의</span>
                        </label>
                    </p>
                    <div class="btn-wrap">
                        <a href="/sign-comp" class="waves-effect waves-light btn">회원가입 완료</a>
                    </div>
                </form>

            </div>
        </div>
    </section>
</main>
@stop
