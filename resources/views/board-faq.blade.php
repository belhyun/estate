@extends('layouts.app', ['body' => 'pageBoard'])
@section('content')
<main>
    <section class="section">
        <div class="container">
            <div class="content-wrap">
                <div class="block">
                    <h4 class="title center-align mt-0 mb-1">FAQ</h4>
                    <h5 class="title center-align fw-300 mb-3">자주 묻는 질문</h5>

                    <table>
                        <thead>
                        <tr>
                            <th>구분</th>
                            <th>분야</th>
                            <th>내용</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr data-target="modal" class="modal-trigger">
                            <td>1</td>
                            <td>로그인</td>
                            <td>이메일로 로그인이 가능한가요?</td>
                        </tr>
                        <tr data-target="modal" class="modal-trigger">
                            <td>2</td>
                            <td>결제</td>
                            <td>신용카드 할부결제도 가능한가요?</td>
                        </tr>
                        <tr data-target="modal" class="modal-trigger">
                            <td>3</td>
                            <td>결제</td>
                            <td>신용카드 할부결제도 가능한가요?</td>
                        </tr>
                        <tr data-target="modal" class="modal-trigger">
                            <td>4</td>
                            <td>결제</td>
                            <td>신용카드 할부결제도 가능한가요?</td>
                        </tr>
                        <tr data-target="modal" class="modal-trigger">
                            <td>5</td>
                            <td>결제</td>
                            <td>신용카드 할부결제도 가능한가요?</td>
                        </tr>
                        <tr data-target="modal" class="modal-trigger">
                            <td>6</td>
                            <td>결제</td>
                            <td>신용카드 할부결제도 가능한가요?</td>
                        </tr>
                        <tr data-target="modal" class="modal-trigger">
                            <td>7</td>
                            <td>결제</td>
                            <td>신용카드 할부결제도 가능한가요?</td>
                        </tr>
                        <tr data-target="modal" class="modal-trigger">
                            <td>8</td>
                            <td>결제</td>
                            <td>신용카드 할부결제도 가능한가요?</td>
                        </tr>
                        <tr data-target="modal" class="modal-trigger">
                            <td>9</td>
                            <td>결제</td>
                            <td>신용카드 할부결제도 가능한가요?</td>
                        </tr>
                        <tr data-target="modal" class="modal-trigger">
                            <td>10</td>
                            <td>결제</td>
                            <td>신용카드 할부결제도 가능한가요?</td>
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
