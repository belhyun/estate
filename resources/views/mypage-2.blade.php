@extends('layouts.app', ['body' => 'pageMypage'])
@section('content')
<main>
    <section class="section">
        <div class="container">
            <h5 class="mb-2">마이페이지</h5>

            <div class="block mb-4">
                <h6 class="mb-2">결제요청 리스트</h6>
                <table>
                    <thead>
                    <tr class="border-top">
                        <th>결제자</th>
                        <th>결제 상태</th>
                        <th>결제 완료일</th>
                        <th>결제 요청</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><a href="#modal" class="modal-trigger">홍길동</a></td>
                        <td>결제완료</td>
                        <td>21.03.11</td>
                        <td><button type="button" class="btn" disabled>완료</button></td>
                    </tr>
                    <tr>
                        <td><a href="#modal" class="modal-trigger">송영길</a></td>
                        <td>결제완료</td>
                        <td>21.04.18</td>
                        <td><button type="button" class="btn" disabled>완료</button></td>
                    </tr>
                    <tr>
                        <td><a href="#modal" class="modal-trigger">이중구</a></td>
                        <td>결제미완료</td>
                        <td>-</td>
                        <td><button type="button" class="waves-effect waves-light btn btn-re">재요청</button></td>
                    </tr>
                    <tr>
                        <td><a href="#modal" class="modal-trigger">오태식</a></td>
                        <td>결제완료</td>
                        <td>21.06.05</td>
                        <td><button type="button" class="btn" disabled>완료</button></td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="block">
                <div class="btn-wrap">
                    <a href="mypage.html" class="waves-effect waves-light btn btn-cancle">돌아가기</a>
                </div>
            </div>
        </div>
    </section>
</main>
@stop
