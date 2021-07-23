@extends('layouts.app', ['body' => 'pageMypage'])
@section('content')
<main>
    <section class="section section-1">
        <div class="container">
            <div class="content-wrap">
                <div class="align-center block mb-3">
                    <h5 class="title center-align mb-3">마이페이지</h5>
                    <div class="center-align mb-5">
                        <a href="/mypage-fr-edit" class="btn btn-primay-darken-2 btn-center">가맹점 정보수정</a>
                    </div>


                    <div class="title-button">
                        <h6>결제완료내역</h6>
                        <button type="button" class="btn btn-primay">상세내용 다운로드</button>
                    </div>
                    <table class="bg-yellow">
                        <thead>
                        <tr class="border-top">
                            <th></th>
                            <th>관계자</th>
                            <th>결제상태</th>
                            <th>결제완료일</th>
                            <th style="width:80px">요청알림</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th>
                                <label class="check">
                                    <input type="checkbox" />
                                    <span></span>
                                </label>
                            </th>
                            <td>홍길동</td>
                            <td>결제완료</td>
                            <td>19.04.02</td>
                            <td><button type="button" class="btn btn-grey modal-trigger" data-target="modal1">내역확인</button></td>
                        </tr>
                        <tr>
                            <th>
                                <label class="check">
                                    <input type="checkbox" />
                                    <span></span>
                                </label>
                            </th>
                            <td>홍길동</td>
                            <td>결제대기</td>
                            <td>-</td>
                            <td><button type="button" class="btn btn-red modal-trigger" data-target="modal2">요청알림</button></td>
                        </tr>
                        <tr>
                            <th>
                                <label class="check">
                                    <input type="checkbox" />
                                    <span></span>
                                </label>
                            </th>
                            <td>홍길동</td>
                            <td>결제완료</td>
                            <td>19.04.02</td>
                            <td><button type="button" class="btn btn-grey modal-trigger" data-target="modal1">내역확인</button></td>
                        </tr>
                        <tr>
                            <th>
                                <label class="check">
                                    <input type="checkbox" />
                                    <span></span>
                                </label>
                            </th>
                            <td>홍길동</td>
                            <td>결제대기</td>
                            <td>-</td>
                            <td><button type="button" class="btn btn-red modal-trigger" data-target="modal2">요청알림</button></td>
                        </tr>
                        <tr>
                            <th>
                                <label class="check">
                                    <input type="checkbox" />
                                    <span></span>
                                </label>
                            </th>
                            <td>홍길동</td>
                            <td>결제대기</td>
                            <td>-</td>
                            <td><button type="button" class="btn btn-red modal-trigger" data-target="modal2">요청알림</button></td>
                        </tr>
                        <tr>
                            <th>
                                <label class="check">
                                    <input type="checkbox" />
                                    <span></span>
                                </label>
                            </th>
                            <td>홍길동</td>
                            <td>결제대기</td>
                            <td>-</td>
                            <td><button type="button" class="btn btn-red modal-trigger" data-target="modal2">요청알림</button></td>
                        </tr>
                        <tr>
                            <th>
                                <label class="check">
                                    <input type="checkbox" />
                                    <span></span>
                                </label>
                            </th>
                            <td>홍길동</td>
                            <td>결제완료</td>
                            <td>19.04.02</td>
                            <td><button type="button" class="btn btn-grey modal-trigger" data-target="modal1">내역확인</button></td>
                        </tr>
                        <tr>
                            <th>
                                <label class="check">
                                    <input type="checkbox" />
                                    <span></span>
                                </label>
                            </th>
                            <td>홍길동</td>
                            <td>결제완료</td>
                            <td>19.04.02</td>
                            <td><button type="button" class="btn btn-grey modal-trigger" data-target="modal1">내역확인</button></td>
                        </tr>
                        <tr>
                            <th>
                                <label class="check">
                                    <input type="checkbox" />
                                    <span></span>
                                </label>
                            </th>
                            <td>홍길동</td>
                            <td>결제완료</td>
                            <td>19.04.02</td>
                            <td><button type="button" class="btn btn-grey modal-trigger" data-target="modal1">내역확인</button></td>
                        </tr>
                        <tr>
                            <th>
                                <label class="check">
                                    <input type="checkbox" />
                                    <span></span>
                                </label>
                            </th>
                            <td>홍길동</td>
                            <td>결제완료</td>
                            <td>19.04.02</td>
                            <td><button type="button" class="btn btn-grey modal-trigger" data-target="modal1">내역확인</button></td>
                        </tr>
                        </tbody>
                    </table>
                    <ul class="pagination center-align mt-2">
                        <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
                        <li class="active"><a href="#!">1</a></li>
                        <li class="waves-effect"><a href="#!">2</a></li>
                        <li class="waves-effect"><a href="#!">3</a></li>
                        <li class="waves-effect"><a href="#!">4</a></li>
                        <li class="waves-effect"><a href="#!">5</a></li>
                        <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</main>
@stop
