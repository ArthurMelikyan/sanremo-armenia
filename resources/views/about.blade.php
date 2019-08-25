@include('layouts.layouts')
{{menu('site' , 'layouts.navigation')}}
@include('layouts.logo')

<div class="about-wrap"> 
    <div class="about-block  mt-1 ">
        <h1 class="text-center blue-titles mb-5">Մեր մասին</h1>
        <div class="row">
            <div class="container">
                <div class="col-md-12 pl-4 pr-4 about mb-3">
                    @if (isset($about) && count($about) > 0)
                        <p>{!!$about->text!!}</p>
                    @else
                        <div class="pt-5 pb-5">
                            <h1 class="blue-titles">
                                Այս դաշտը դեռևս չի թարմացվել    
                            </h1>    
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