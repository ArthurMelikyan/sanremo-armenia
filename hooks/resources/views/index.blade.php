@include('layouts.layouts')
@include('layouts.navigation')


<div class="full-image-wrap bg-danger">
    <div class="full-image-block">
    <img src="{{asset('assets/images/banner-home-dark.jpg')}}" alt="a">
        <div class="full-image-content-overlay">
            <div class=" offset-md-1 col-md-10 col-sm-12 full-image-content vertical-align">
                <div class="content-image">
                <img class="overlay-logo" src="{{asset('assets/images/logo_sj.png')}}" alt="">
                </div>
                <div class="text-block col-md-10 offset-md-1 text-center">
                    <h1>Ստացեք ձեր ապագան!</h1>
                    <h4>Սոլիստ երգիչների միջազգային մրցույթ֊փառատոն,6֊ից 15 տաիքային խմբի համար</h4>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="notice-board">
    <div class="notice-board-text-content text-center col-md-10 offset-md-1">
        <h1>World finals | 9th edition</h1>
        <h4>TEATRO ARISTON SANREMO - APRIL 18, 2018</h4>
    </div>
</div>






@include('layouts.icon_categories')
@include('layouts.sponsors')
@include('layouts.founder')
@include('layouts.follow')
@include('layouts.footer')
@include('layouts.end')
