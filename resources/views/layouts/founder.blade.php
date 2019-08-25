<div class="founder-block-wrap pt-4 pb-4">
    <div class="container">
        <div class="row">
           <!-- founder left-->
            <div class="founder-left-block mb-4 col-md-4 ">
                <div class="founder-title mb-4">
                <h3 class="blue-titles">{{$founder['left_founder_title']}}</h3>
                </div>
                <div class="founder-image col-sm-8 col-10 offset-1 offset-sm-2 mb-4 offset-md-0">
                    <img src="{{'storage/'.$founder['left_founder_image']}}" alt="{{$founder['left_founder_name']}}">
                </div>
                <div class="founder-name text-center rose-color">
                    <p>{{$founder['left_founder_name']}}</p>
                </div>
            </div>
            <!-- founder right-->
            <div class="founder-right-block col-md-8 ">
                <div class="major-content">
                    <h3 class="text-right blue-titles">{{$founder['right_founder_title']}}</h3>
                    <div class="row">
                        <div class="col-md-8  offset-md-1 major-text-block text-right pt-3">
                            <p class="font-weight-bold">{{$founder['right_founder_role']}}</p>
                            <p class="founder-name rose-color">{{$founder['right_founder_name']}}</p>
                            <p class="major-of-text">{!!$founder['right_founder_text']!!}</p>
                            
                        </div>
                        <div class="major-img-block col-sm-8 offset-sm-2 col-8 offset-2  col-md-3 offset-md-0">
                        <img src="{{'storage/'.$founder['right_founder_image']}}" alt="{{$founder['right_founder_name']}}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>