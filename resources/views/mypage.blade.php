@extends('layouts.app', ['body' => 'pageMypage'])
@section('content')
<main>
    <section class="section">
        <div class="container">
            <h5>마이페이지</h5>

            <div class="block">
                <div class="row">
                    <div class="col s12">
                        <div class="card-panel">
                            <canvas id="barChart"></canvas>
                        </div>
                    </div>

                    <div class="col s12">
                        <div class="card-panel">
                            <canvas id="lineChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="block">
                <div class="btn-wrap">
                    <a href="/mypage-2" class="waves-effect waves-light btn mb-1">결제 요청 리스트 보기</a>
                    <a href="/main" class="waves-effect waves-light btn btn-cancle">돌아가기</a>
                </div>
            </div>
        </div>
    </section>
</main>
@stop
