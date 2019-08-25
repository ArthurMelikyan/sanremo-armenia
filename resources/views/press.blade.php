@include('layouts.layouts')
{{menu('site' , 'layouts.navigation')}}
@include('layouts.logo')
<div class="press-wrap pt-2 pb-5">
<h1 class="text-center blue-titles mb-5">Մամուլ</h1>
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="row">
    @if (count($reviews) > 0)
        @foreach ($reviews as $review)
        <div class="col-md-12 col-sm-12 col-lg-6 mt-1">
                    <div class="row press-item mt-3 mb-3">
                        <div style="background-image:url({{'storage/'.$review->image}})" class="press-image-block col-md-4 col-xl-4 col-sm-4 col-12 col-lg-4">
                        {{-- <img src="{{'storage/'.$review->image}}" alt="{{$review->title}}"> --}}
                        </div>
                        <div class="press-text-block col-md-8 col-xl-8 col-lg-8 col-sm-8 col-12 mb-3">
                            <h6 class="blue-titles mt-2">{{$review->title}}</h6>
                            <p>{{str_limit($review->desc,190)}}</p>
                            <a class="blue-titles" href="{{$review->link}}" target="_blank">Տեսնել ավելին</a>
                        </div>
                    </div>
                </div>
        @endforeach
    @else
        <div class="pt-5 pb-5">
            <h1>Տվյալներ դեռ չկան</h1>
        </div>
    @endif

</div>
</div>
</div>
</div>
</div>
@include('layouts.follow')
@include('layouts.footer')
@include('layouts.end')



 