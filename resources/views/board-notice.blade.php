@extends('layouts.app', ['body' => 'pageBoard'])
@section('content')
<main>
    <section class="section">
        <div class="container">
            <div class="content-wrap">
                <div class="block">
                    <h4 class="title center-align mt-0 mb-3">공지사항</h4>

                    <table>
                        <thead>
                        <tr>
                            <th>구분</th>
                            <th>내용</th>
                            <th>작성일</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr onclick="location.href='board-notice-view.html';">
                            <td>1</td>
                            <td>리딜이 오픈하였습니다.</td>
                            <td>19.05.02</td>
                        </tr>
                        <tr onclick="location.href='board-notice-view.html';">
                            <td>2</td>
                            <td>리딜 오픈 이벤트</td>
                            <td>19.05.02</td>
                        </tr>
                        <tr onclick="location.href='board-notice-view.html';">
                            <td>3</td>
                            <td>리딜 오픈 이벤트</td>
                            <td>19.05.02</td>
                        </tr>
                        <tr onclick="location.href='board-notice-view.html';">
                            <td>4</td>
                            <td>리딜 오픈 이벤트</td>
                            <td>19.05.02</td>
                        </tr>
                        <tr onclick="location.href='board-notice-view.html';">
                            <td>5</td>
                            <td>리딜 오픈 이벤트</td>
                            <td>19.05.02</td>
                        </tr>
                        <tr onclick="location.href='board-notice-view.html';">
                            <td>6</td>
                            <td>리딜 오픈 이벤트</td>
                            <td>19.05.02</td>
                        </tr>
                        <tr onclick="location.href='board-notice-view.html';">
                            <td>7</td>
                            <td>리딜 오픈 이벤트</td>
                            <td>19.05.02</td>
                        </tr>
                        <tr onclick="location.href='board-notice-view.html';">
                            <td>8</td>
                            <td>리딜 오픈 이벤트</td>
                            <td>19.05.02</td>
                        </tr>
                        <tr onclick="location.href='board-notice-view.html';">
                            <td>9</td>
                            <td>리딜 오픈 이벤트</td>
                            <td>19.05.02</td>
                        </tr>
                        <tr onclick="location.href='board-notice-view.html';">
                            <td>10</td>
                            <td>리딜 오픈 이벤트</td>
                            <td>19.05.02</td>
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
