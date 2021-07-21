@extends('layouts.app', ['body' => 'pageLogin'])
@section('content')
<main>
    <section class="section section-1 h100">
        <div class="container">
            <div class="content-wrap">
                <form class="login-form">
                    <h4 class="title">로그인</h4>
                    <div class="col-block">
                        <div class="row form-row">
                            <div class="input-field col email s6">
                                <input id="userEmail" type="email">
                                <label for="userEmail">이메일</label>
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

                    <div class="input-field">
                        <input id="userPw" type="password" class="validate">
                        <label for="userPw">패스워드</label>
                        <span class="helper-text" data-error="패스워드를 다시 확인해주세요."></span>
                    </div>
                    <a href="/index" class="waves-effect waves-light btn btn-primay">로그인</a>
                </form>
            </div>
        </div>
    </section>
</main>
@stop
