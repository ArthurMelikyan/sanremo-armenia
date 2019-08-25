{{-- {{dd($sponsors)}} --}}

<div class="sponors col-md-12">
    <div class="sponsor-wrap pt-1 pb-4 text-center">
        <div class="row">   
        @foreach ($sponsors as $sponsor)   
                <div class="sponsor-item col-sm pt-4 pb-4 mt-4 ">
                    <p>{{$sponsor->sponsor_name}}</p>
                    <a href="{{$sponsor->link}}" target="_blank">
                        <div class="sponsor-logo-block">
                            <img class="sponsor-img" src="{{'storage/'.$sponsor->sponsor_image}}" alt="{{$sponsor->sponsor_name}}">
                        </div>
                    </a>
                </div>
        @endforeach

        </div>
    </div>
</div>