@include('layouts.layouts')
{{menu('site' , 'layouts.navigation')}}
@include('layouts.logo') 
<div class="contact-wrap"> 
    <h1 class="text-center blue-titles mt-2 mb-5">Հետադարձ կապ</h1>
    <div class="contact-block col-md-6 offset-md-3 mt-1 mb-5 pt-2 pb-2">
        {{-- if it's error show this --}}
        @include('layouts.show_errors') 
        {{-- if email sended show this --}}
        @if (session()->exists('status')) 
            <div class="alert alert-success">
                <p>{{session()->get('status')}}</p>
            </div>
         @endif
    <form action="{{action('ContactController@index')}}" method="POST" class="contact100-form validate-form">
        {{csrf_field()}}    
            <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Անունը պարտադիր է">
                <input class="input100" value="{{ old('name') }}" name="name" type="text" placeholder="Անուն / ազգանուն">
                <span class="focus-input100"></span>
            </div>
            <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Էլ․ հասցեն պարտադիր է">
                <input class="input100" value="{{ old('email') }}" name="email" type="text" placeholder="էլ․ հասցե">
                <span class="focus-input100"></span>
            </div>
            <div class="wrap-input100 rs1-wrap-input100 validate-input">
                <input class="input100" value="{{ old('phone') }}" name="phone" type="text" placeholder="Հեռախոսահամար">
                <span class="focus-input100"></span>
            </div>
            <div class="wrap-input100 rs1-wrap-input100 validate-input">
                <input class="input100" value="{{ old('subject')}}" name="subject" type="text" placeholder="Նամակի թեման">
                <span class="focus-input100"></span>
            </div>
            <div class="wrap-input100 validate-input" data-validate="Նամակը պարտադիր է">
                <textarea class="input100" value="{{ old('message') }}" name="message" placeholder="Ձեր նամակն այստեղ"></textarea>
                <span class="focus-input100"></span>
            </div>
            <div class="container-contact100-form-btn"> 
                    <button type="submit" class="contact100-form-btn">
                        <span>Ուղարկել<i class="fas fa-paper-plane"></i></span>
                    </button>
            </div>
        </form>
    </div>
</div>
@include('layouts.follow')
@include('layouts.footer')
@include('layouts.end')