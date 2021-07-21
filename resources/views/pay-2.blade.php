@extends('layouts.app', ['body' => 'pagePay'])
@section('content')
<main>
    <section class="section section-1">
        <div class="container">
            <div class="content-wrap">
                <div class="align-center block mb-3">
                    <h5 class="title mb-3">검색결과</h5>
                    <table class="centered">
                        <thead>
                        <tr class="border-top">
                            <th>공인중개사사무소명</th>
                            <th>소재지</th>
                            <th>공인중개사명</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr  onclick="location.href='commission.html';">
                            <td>홍길동공인중개사사무소</td>
                            <td>서울</td>
                            <td>홍길동</td>
                        </tr>
                        <tr  onclick="location.href='commission.html';">
                            <td>홍길동공인중개사사무소</td>
                            <td>의정부</td>
                            <td>홍길동</td>
                        </tr>
                        </tbody>
                    </table>
                    <div class="search-res">
                        <span>1개의 검색결과</span>
                    </div>
                </div>

                <div class="block mb-4">
                    <table class="centered">
                        <thead>
                        <tr class="border-top">
                            <th>공인중개사사무소명</th>
                            <th>소재지</th>
                            <th>공인중개사명</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td colspan="3">검색결과가 없습니다</td>
                        </tr>
                        </tbody>
                    </table>
                    <div class="search-res">
                        <span>0개의 검색결과</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@stop
