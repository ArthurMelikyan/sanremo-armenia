@include('layouts.layouts')
{{menu('site' , 'layouts.navigation')}}  
<div class="full-image-wrap bg-danger">
    <div class="full-image-block">
    <img src="{{'storage/'.$homeHeader['cover_photo']}}" alt="{{$homeHeader['overlay_title']}}">
        <div class="full-image-content-overlay">
            <div class=" offset-md-1 col-md-10 col-sm-12 full-image-content vertical-align">
                <div class="content-image">
                    @if ($homeHeader['overlay_logo'] != null || $homeHeader['overlay_logo'] != '')
                        <img class="overlay-logo" src="{{'storage/'.$homeHeader['overlay_logo']}}" alt="{{$homeHeader['overlay_title']}}">
                    @endif
                </div>
                <div class="text-block col-md-10 offset-md-1 text-center">
                    <h1>{!!$homeHeader['overlay_title']!!}</h1>
                    <h4>{!!$homeHeader['overlay_description']!!}</h4>
                </div>
            </div>
        </div>
    </div>
</div>

    @if ($noticeBoard['status'] == 1 && isset($noticeBoard) && !empty($noticeBoard))
        <div class="notice-board">
            <div class="notice-board-text-content text-center col-md-10 offset-md-1">
             <h1>{!!$noticeBoard['title']!!}</h1>
                <p>{!!$noticeBoard['text']!!}</p>
            </div>
        </div>
    @endif






@include('layouts.icon_categories')
@include('layouts.sponsors') 
@include('layouts.founder')
@include('layouts.follow')
@include('layouts.footer')
@include('layouts.end')









