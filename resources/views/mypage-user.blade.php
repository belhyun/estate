@extends('layouts.app', ['body' => 'pageMypage'])
@section('content')
    <main>
        <section class="section section-1">
            <div class="container">
                <div class="content-wrap">
                    <div class="align-center block mb-3">
                        <h5 class="title center-align mb-3">마이페이지</h5>
                        <div class="center-align mb-5">
                            <a href="/mypage-user-edit" class="btn btn-primay-darken-2 btn-center">회원정보수정</a>
                        </div>

                        <h6 class="mb-1">결제내역</h6>
                        <table class="bg-blue">
                            <thead>
                            <tr class="border-top">
                                <th>거래번호</th>
                                <th>사무소명</th>
                                <th>결제일</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr onclick="location.href='pay-detail.html';" class="pay-cancle">
                                <td>19001245</td>
                                <td>홍길동공인중개사무소</td>
                                <td>19.04.02</td>
                            </tr>
                            <tr onclick="location.href='pay-detail.html';">
                                <td>19001245</td>
                                <td>홍길동공인중개사무소</td>
                                <td>19.04.02</td>
                            </tr>
                            <tr onclick="location.href='pay-detail.html';" class="pay-cancle">
                                <td>19001245</td>
                                <td>홍길동공인중개사무소</td>
                                <td>19.04.02</td>
                            </tr>
                            <tr onclick="location.href='pay-detail.html';">
                                <td>19001245</td>
                                <td>홍길동공인중개사무소</td>
                                <td>19.04.02</td>
                            </tr>
                            <tr onclick="location.href='pay-detail.html';">
                                <td>19001245</td>
                                <td>홍길동공인중개사무소</td>
                                <td>19.04.02</td>
                            </tr>
                            <tr onclick="location.href='pay-detail.html';">
                                <td>19001245</td>
                                <td>홍길동공인중개사무소</td>
                                <td>19.04.02</td>
                            </tr>
                            <tr onclick="location.href='pay-detail.html';">
                                <td>19001245</td>
                                <td>홍길동공인중개사무소</td>
                                <td>19.04.02</td>
                            </tr>
                            <tr onclick="location.href='pay-detail.html';">
                                <td>19001245</td>
                                <td>홍길동공인중개사무소</td>
                                <td>19.04.02</td>
                            </tr>
                            <tr onclick="location.href='pay-detail.html';">
                                <td>19001245</td>
                                <td>홍길동공인중개사무소</td>
                                <td>19.04.02</td>
                            </tr>
                            <tr onclick="location.href='pay-detail.html';">
                                <td>19001245</td>
                                <td>홍길동공인중개사무소</td>
                                <td>19.04.02</td>
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
