@extends('layouts.app', ['body' => 'pageBoard'])
@section('content')
<main>
    <section class="section">
        <div class="container">
            <div class="content-wrap">
                <div class="block">
                    <h4 class="title center-align mt-0 mb-1">문의사항</h4>
                    <h6 class="title center-align fw-300 mb-3">
                        저희 서비스에 대한 문의사항이 있으시면<br> 아래 내용을 남겨주세요.<br>
                        확인 후 연락드리겠습니다.
                    </h6>

                    <form class="contact-form">
                        <div class="input-field">
                            <input id="name" type="text" class="validate">
                            <label for="name">성명</label>
                        </div>

                        <div class="input-field">
                            <input id="phone" type="number" class="validate">
                            <label for="phone">휴대폰번호 ( - 제외)</label>
                        </div>

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
                            <textarea id="textarea" class="materialize-textarea" data-length="120"></textarea>
                            <label for="textarea">내용</label>
                        </div>
                        <button type="button" class="btn btn-primay-darken-2 w100 waves-effect waves-light ">문의내용 보내기</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>
@stop
