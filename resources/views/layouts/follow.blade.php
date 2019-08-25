{{-- {{dd($follows)}} --}}
<div class="follow-us-block pt-4">
    <div class="container">
        <div class="row">
            <div class="col-md-12 pt-3 pb-2">
                <h4 class="text-center pb-3">Միացեք մեզ</h4>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="container pb-4">
        <div class="row col-md-8 offset-md-2">
    @if (count($follows) > 0 && !empty($follows)) 
        @foreach ($follows as $follow) 
            @if ($follow->show == 1)
            <div class="social-icons-block col-md-3 col-sm-3 col-3 text-center" title="{{$follow->title}}">
                <a href="{{$follow->link}}" target="_blank">
                    <div class="{{$follow->title}} social-ico-item">
                    <i class="{{$follow->icon}}"></i>
                    </div>
                </a>
            </div>
            @endif 
        @endforeach
    @endif
        </div>
    </div>
</div>