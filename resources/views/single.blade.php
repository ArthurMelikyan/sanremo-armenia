@include('layouts.layouts')
{{menu('site' , 'layouts.navigation')}}
{{-- {{dd($article)}} --}}
@include('layouts.logo')  
<div class="single-wrap mb-3">
    <div class="container">
        <div class="row">
            <div class="single-news mt-3 col-md-12 ">
                <div class="news-image col-md-10 offset-md-1">
                 <img src="{{'storage/'.$article->little_image}}" alt="{{$article->title}}">
                    <div class="news-text-wrap mt-2">
                        <h2 class="news-title">{{$article->title}}</h2>
                        <div class="news-date mt-3">
                            <span><i class="fas fa-clock"> </i> 
                                {{$article->published_at}}
                            </span>
                        </div>
                        <div class="news-text mt-3 pb-5">
                            <p>{!!$article->text!!}</p>
                        </div>
                        <div class="share mt-5 mb-5">
                            <div class="addthis_inline_share_toolbox"></div>
                        </div>
                    </div> 
                </div> 
            </div>
        </div>
    </div>
</div>
@include('layouts.follow')
@include('layouts.footer')
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5abd42a2eb8c7d51"></script>
@include('layouts.end')

