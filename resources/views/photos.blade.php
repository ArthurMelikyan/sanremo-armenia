@include('layouts.layouts') 
{{menu('site' , 'layouts.navigation')}}
@include('layouts.logo')

<div class="photos-wrap pt-2 pb-5">
    <h1 class="text-center blue-titles mb-5">Նկարներ</h1>
    <div class="container parent-container">
        <div class="row">

            <div class="gal">
               @if (count($photos) > 0)
                   @foreach ($photos as $photo)
                       @if ($photo->big_image != null && $photo->little_image != null)
                           <a href="{{'storage/'.$photo->big_image}}">
                           <img src="{{'storage/'.$photo->little_image}}" alt="{{($photo->title != null) ? $photo->title : 'image'}}" class="wow fadeIn" title='&#128269;'>
                            </a>
                       @endif
                   @endforeach
               @else
                  <div class="pt-5 pb-5">
                      <h1 class="blue-titles">Նկարներ չկան</h1>
                  </div>
               @endif
            </div>
        </div>
    </div>
</div>
@include('layouts.follow')
@include('layouts.footer')
@include('layouts.end')