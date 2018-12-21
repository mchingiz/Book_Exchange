@extends('layouts.layout')

@section('title')
    Login
@endsection

@section('content')
    <div class="unit-6 overlayrel overlay" style="background-image: url('img/shelf.jpg');">
      <div class="overlayBox"></div>
      <div class="text-center breads">
        <h2 class="mb-0">Daxil ol</h2>
        <p class="mb-0 unit-6"><a href="index.html">Əsas səhifə</a> <span class="sep">></span> <span>Daxil ol</span></p>
      </div>
    </div>    

    <div class="site-section bg-light">
      <div class="container">
        <div class="row login">       
          <div class="col-md-12 col-lg-6 offset-lg-3 mb-5">                              
            <form method="POST" action="{{ route('login') }}" class="p-5 bg-white">               {{ csrf_field() }}
              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="username">Email adresiniz</label>
                  <input  type="email"  id="username" class="form-control" placeholder="məs: behruzaydnl@gmail.com" name="email" value="{{ old('email') }}" required autofocus>
                   @if ($errors->has('email'))
                        <p class="text-danger">
                            <strong>{{ $errors->first('email') }}</strong>
                        </p>
                    @endif
                  
               
                </div>
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="password">Şifrəniz</label>
                  <input type="password" id="password" class="form-control" placeholder="***********" name="password" required>
                  
                    @if ($errors->has('password'))
                        <p class="text-danger">
                            <strong>{{ $errors->first('email') }}</strong>
                        </p>
                    @endif
                </div>
              </div>            
              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Daxil ol" id="loginBtn" class="btn btn-primary  py-2 px-5">
                </div>
              </div>  
            </form>
            <div class="goToLogin goTo">
                <a href="/register">Qeydiyyatdan keç</a>
              </div>
          </div>
        </div>
     
      </div>
    </div>
  
    <div class="site-section">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-6" data-aos="fade" >
            <h2>Kitabları necə dəyişməli?</h2>
          </div>
        </div>
        

        <div class="row justify-content-center" data-aos="fade" data-aos-delay="100">
          <div class="col-md-8">
            <div class="accordion unit-8" id="accordion">
            <div class="accordion-item">
              <h3 class="mb-0 heading">
                <a class="btn-block" data-toggle="collapse" href="#collapseOne" role="button" aria-expanded="true" aria-controls="collapseOne">Elan yerləşdirin<span class="icon"></span></a>
              </h3>
              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="body-text">
                  <p>Saytımızda qeydiyyatdan keçin və "kitab əlavə et" bölməsində dəyişmək istədiyiniz kitabın məlumatlarını və fotosunu yerləşdirin.</p>
                </div>
              </div>
            </div> <!-- .accordion-item -->
            
            <div class="accordion-item">
              <h3 class="mb-0 heading">
                <a class="btn-block" data-toggle="collapse" href="#collapseTwo" role="button" aria-expanded="false" aria-controls="collapseTwo">Təklifləri dəyərləndirin<span class="icon"></span></a>
              </h3>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="body-text">
                  <p>Paylaşdığınız kitab üçün gələn təklifləri nəzərdən keçirin və sizə ən uyğun olanın hansı olduğuna qərar verin.</p>
                </div>
              </div>
            </div> <!-- .accordion-item -->

            <div class="accordion-item">
              <h3 class="mb-0 heading">
                <a class="btn-block" data-toggle="collapse" href="#collapseThree" role="button" aria-expanded="false" aria-controls="collapseThree">Kitabları dəyişin!<span class="icon"></span></a>
              </h3>
              <div id="collapseThree" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="body-text">
                  <p>Mesaj bölməmizdən istifadə edərək bir-birinizlə əlaqə yaradın, görüş vaxtını və yerini təyin edin və ya kitabları poçtla göndərin!</p>
                </div>
              </div>
            </div> <!-- .accordion-item -->

          </div>
          </div>
        </div>
      
      </div>
    </div>
@endsection