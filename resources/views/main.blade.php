@extends('layouts.app', ['body' => 'pageMain'])
@section('content')
<main>
    <section class="section main-section-1">
        <div class="main-slider carousel carousel-slider">
            <div class="carousel-item" href="#one!">
                <img src="assets/images/banner/01.svg">
            </div>
            <div class="carousel-item" href="#two!">
                <img src="assets/images/banner/02.svg">
            </div>
            <div class="carousel-item" href="#one!">
                <img src="assets/images/banner/03.svg">
            </div>
            <!--
           <div class="carousel-item color-1 green-1 white-text" href="#three!">
             <div class="container">
               <h1>배너 슬라이더</h1>
               <h5>슬라이더</h5>
             </div>
           </div>
           <div class="carousel-item color-1 red-1 white-text" href="#four!">
             <div class="container">
               <h1>배너 슬라이더</h1>
               <h5>슬라이더</h5>
             </div>
           </div> -->
        </div>
    </section>

    <section class="section main-section-2">
        <div class="container">
            <div class="service">
                <a href="/pay" class="box1 waves-effect waves-light">
                    <div class="icon">
                        <img src="assets/images/icon/icon-card.svg">
                    </div>
                    <span>중개 수수료 <br>결제 서비스</span>
                </a>
                <!-- <a href="" class="box2 waves-effect waves-light">
                  <div class="icon">
                    <img src="assets/images/icon/icon-certification.svg">
                  </div>
                  <span>전자계약서 <br>서비스</span>
                </a> -->
                <a href="/mypage" class="box3 waves-effect waves-light">
                    <div class="icon">
                        <img src="assets/images/icon/icon-mypage.svg">
                    </div>
                    <span>마이<br>페이지</span>
                </a>
            </div>
        </div>
    </section>

    <!-- <section class="section main-section-3">
      <div class="container">
        <div class="service">
          <a href="pay.html" class="box1 waves-effect">메뉴</a>
          <a href="#!" class="box2 waves-effect">메뉴</a>
          <a href="#!" class="box3 waves-effect">메뉴</a>
        </div>
      </div>
    </section> -->
</main>
@stop
