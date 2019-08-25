
@include('layouts.layouts')
{{menu('site' , 'layouts.navigation')}}
@include('layouts.logo')
<div class="videos pt-2 pb-5">
<h1 class="text-center blue-titles mb-2">Տեսանյութեր</h1>
<div class="container">
<div class="video-wrap wow fadeIn row col-md-12">

@if (count($videos) > 0)
@foreach ($videos as $key => $video)
    @if ($video->show == 1)
    @php 
    //get video information
        $youtube = Youtube::getVideoInfo($video->video_id);
        // dd($youtube);
    //get video duration and format it to normal minutes
        $video_duration = $youtube->contentDetails->duration;
        $start = new DateTime('@0');
        $start->add(new DateInterval($video_duration));
    // return video duration with $start variable
    @endphp
        <div class="video-items col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
            <div class="video-thumb-block">
                <span class="video-duration ">
                    {{$start->format('i:s')}}
                    {{-- printing video duration --}}
                </span>
                <a class="mfp-iframe" href="https://www.youtube.com/watch?v={{$youtube->id}}">
                    <img class="youtube-thumb" src="{{$youtube->snippet->thumbnails->medium->url}}" alt="{{$youtube->snippet->title}}">
                </a>
            </div>
            <div class="video-text-block">
                <a class="mfp-iframe" href="https://www.youtube.com/watch?v=8wObL_vXmk0">
                    <h7 class="video-title blue-titles">
                        {{str_limit($youtube->snippet->title,55)}}    
                    </h7>
                </a>
            </div>
            <div class="video-views-date">
                <p>
                    <span class="text-secondary">
                        {{Carbon\Carbon::now()->diffForHumans($youtube->snippet->publishedAt)}}
                    </span>
                    <span class="text-info">
                        &#124; {{number_format($youtube->statistics->viewCount)}} դիտում
                    </span>
                </p>
            </div>
        </div>
    @endif
@endforeach
@else
    <div class="pt-5 pb-5">
        <h1 class="blue-titles">Տեսանյութեր դեռ չեն ավելացվել</h1>
    </div>
@endif
    </div>
    </div>
    </div>
@include('layouts.follow')
@include('layouts.footer')
@include('layouts.end')