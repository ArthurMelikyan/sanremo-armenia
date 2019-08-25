@include('layouts.layouts')
{{menu('site' , 'layouts.navigation')}}
@include('layouts.logo')
    <div class="contact-wrap"> 
        <h1 class="text-center blue-titles mt-2 mb-5">Ուղարկել հայտ</h1>
        <div class="contact-block col-md-6 offset-md-3 mt-1 mb-5 pt-2 pb-2">
            {{-- if it's error show this --}}
            @include('layouts.show_errors') 
            {{-- if email sended show this --}}
            @if (session()->exists('status')) 
                <div class="alert alert-success">
                    <p>{{session()->get('status')}}</p>
                </div>
            @endif
            <form enctype="multipart/form-data" action="{{action('RequestController@index')}}" method="POST" class="contact100-form validate-form">
                    {{csrf_field()}}
                <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Անունը պարտադիր է">
                    <input class="input100" name="name" type="text" placeholder="Անուն / ազգանուն">
                    <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Էլ․ հասցեն պարտադիր է">
                    <input class="input100" name="email" type="text" placeholder="էլ․ հասցե">
                    <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 rs1-wrap-input100 validate-input">
                    <input class="input100" name="phone" type="text" placeholder="Հեռախոսահամար">
                    <span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 rs1-wrap-input100 validate-input">
                    <input class="input100" name="subject" type="text" placeholder="Նամակի թեման">
                    <span class="focus-input100"></span>
                </div>
    
                <div class="wrap-input100 rs1-wrap-input100 validate-input">
                    <input name="passport" class="filestyle" data-placeholder="Անձնագիր" data-text="Կցել ֆայլ" type="file">
                </div>
                <div class="wrap-input100 rs1-wrap-input100 validate-input">
                    <input name="photo" class="filestyle" data-placeholder="Նկար" data-text="Կցել ֆայլ" type="file">
                </div>
                <div class="container-contact100-form-btn">
                    <button class="contact100-form-btn">
    						<span>Ուղարկել <i class="fas fa-paper-plane"></i></span>
    				</button>
                </div>
            </form> 
        </div>
    </div>
@include('layouts.follow')
@include('layouts.footer')
@include('layouts.end')