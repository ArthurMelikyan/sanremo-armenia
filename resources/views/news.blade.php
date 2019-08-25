@include('layouts.layouts')
{{menu('site' , 'layouts.navigation')}}
@include('layouts.logo') 
<div class="news pt-2 pb-5">
    <h1 class="text-center blue-titles mb-2">Նորություններ</h1>
    <div class="container">
        <div class="news-wrap wow fadeIn row col-md-12">
            
            @if (count($articles) > 0)
                @foreach ($articles as $article)
                <div class="news-items col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12 mt-5">
                    <div class="news-thumb-block">
                        <a href="{{route('single',$article->id)}}">
                            <img src="{{'storage/'.$article->little_image}}">
                        </a>
                    </div>
                    <div class="news-text-block">
                        <a href="{{route('single',$article->id)}}">
                            <h7 class="news-title blue-titles">
                                {{str_limit($article->title,70)}}
                            </h7>
                        </a>
                    </div> 
                         <span class="date"><i class="fas fa-clock"> </i> {{$article->published_at}}</span>
                            <div class="description-block">
                                <p>{{str_limit($article->description,180)}}</p> 
                            </div>
                    <hr>
                </div> 
                    
                @endforeach
            @endif
            
        </div>
    </div>
</div>

    @include('layouts.follow')
    @include('layouts.footer')
    @include('layouts.end')