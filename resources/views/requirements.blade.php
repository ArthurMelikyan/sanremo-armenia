@include('layouts.layouts')
{{menu('site' , 'layouts.navigation')}}
@include('layouts.logo')
<div class="requirement-wrap"> 
    <div class="requirements-block container mt-1 mb-5">
        <h1 class="text-center blue-titles mb-5">Պայմաններ</h1>
        <div class="col-md-12 requiremente-item mb-3">
            @if (count($requirement) > 0 && $requirement != null && $requirement != '' )
                <p>{!!$requirement['text']!!}</p>
            @else 
                <div class="pt-5 pb-5">
                    <h3 class="blue-titles">Այս դաշտը դեռևս չի լրացվել</h3>
                </div>
            @endif
        </div>
        
    </div>
</div>

 
@include('layouts.follow')
@include('layouts.footer')
@include('layouts.end')
