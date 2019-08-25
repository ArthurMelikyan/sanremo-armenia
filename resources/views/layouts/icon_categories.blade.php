 
@if (count($icon_categories) > 0)

<div class="page-categories-wrap  pb-4">
    <div class="container">
        <div class="col-md-12">
            <div class="row">

                @foreach ($icon_categories as $icon)
                    @if ($icon['show'] == 1)
                    
                    <div class="col-sm text-center ml-5 mx-auto pt-4 mt-4 ">
                        <a href="{{$icon->link}}">
                            <section class="cat-items">
                                <div class="ico-block">
                                   {{-- {!!$icon->icon!!} --}}
                                   <i class="ico text-center {{$icon->icon}} fa-4x"></i>
                                </div>
                                <div class="cat-text-block mt-4">
                                    <p>{!!$icon->category_text!!}</p>
                                </div>
                            </section>
                        </a>
                    </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</div>
@endif