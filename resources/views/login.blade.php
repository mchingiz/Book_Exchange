@extends('layouts.layout')

@section('title')
    'Single Book'
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
            <form action="#" class="p-5 bg-white">              
              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="username">İstifadəçi adınız</label>
                  <input type="text" id="username" class="form-control" placeholder="məs: behruzaydnl">
                  <p class="text-danger"></p>
                </div>
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="password">Şifrəniz</label>
                  <input type="password" id="password" class="form-control" placeholder="***********">
                  <p class="text-danger"></p>
                </div>
              </div>            
              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Daxil ol" id="loginBtn" class="btn btn-primary  py-2 px-5">
                </div>
              </div>  
            </form>
            <div class="goToLogin goTo">
                <p>Qeydiyyatdan keç</p>
              </div>
          </div>
        </div>
        <div class="row register">       
            <div class="col-md-12 col-lg-12 mb-5">                              
              <form action="#" class="p-5 bg-white">              
                <div class="row form-group">
                    <div class="col-md-6 mb-3 mb-md-0">
                        <label class="font-weight-bold" for="name">Adınız <span class="text-danger">*</span></label>
                        <input type="text" id="name" class="form-control" placeholder="məs: Bəhruz">
                        <p class="text-danger"></p>
                    </div>
                    <div class="col-md-6 mb-3 mb-md-0">
                        <label class="font-weight-bold" for="surname">Soyadınız <span class="text-danger">*</span></label>
                        <input type="text" id="surname" class="form-control" placeholder="məs: Aydınlı">
                        <p class="text-danger"></p>
                    </div>
                    <div class="col-md-6 mb-3 mb-md-0">
                        <label class="font-weight-bold" for="email">Elektron poçt <span class="text-danger">*</span></label>
                        <input type="email" id="email" class="form-control" placeholder="məs: behruzaydnl@gmail.com">
                        <p class="text-danger"></p>
                    </div>
                    <div class="col-md-6 mb-3 mb-md-0">
                        <label class="font-weight-bold" for="phone">Əlaqə nömrəniz <span class="text-danger">*</span></label>
                        <input type="number" id="phone" class="form-control" placeholder="məs: +994513012228">
                        <p class="text-danger"></p>
                    </div>
                    <div class="col-md-6 mb-3 mb-md-0">
                        <label class="font-weight-bold" for="username">İstifadəçi adınız <span class="text-danger">*</span></label>
                        <input type="text" id="username" class="form-control" placeholder="məs: behruzaydnl">
                        <p class="text-danger"></p>
                    </div>
                    <div class="col-md-6 mb-3 mb-md-0">
                        <label class="font-weight-bold" for="password">Şifrəniz <span class="text-danger">*</span></label>
                        <input type="password" id="password" class="form-control" placeholder="***********">
                        <p class="text-danger"></p>
                    </div>
                    <div class="col-md-6 mb-3 mb-md-0">
                        <label class="font-weight-bold" for="passwordAgain">Şifrənizi təkrarlayın <span class="text-danger">*</span></label>
                        <input type="password" id="passwordAgain" class="form-control" placeholder="***********">  
                        <p class="text-danger"></p>
                    </div>
                    <div class="col-md-6 mb-3 mb-md-0">
                        <label class="font-weight-bold" for="city">Yaşadığınız şəhər <span class="text-danger">*</span></label>
                        <input type="text" id="city" class="form-control" placeholder="məs: Bakı">
                        <p class="text-danger"></p>
                    </div>
                    <div class="col-md-6 mb-3 mb-md-0">
                      <label class="font-weight-bold" for="address">Addresiniz</label>
                      <input type="text" id="address" class="form-control" placeholder="məs: Zərdabi küç, 61">
                      <p class="text-danger"></p>
                    </div>
                  </div>            
                  <div class="form-group row">
                  <div class="col-lg-6 col-md-12 mb-3 mb-md-0">
                      <input type="checkbox" id="terms"> Qaydalarla tanış oldum və onları qəbul edirəm.
                  </div>
                </div>
                <div class="row form-group">
                  <div class="col-md-12">
                    <input type="submit" id="registerBtn" value="Qeydiyyatı tamamla" class="btn btn-primary  py-2 px-5">
                  </div>
                </div>  
              </form>
              <div class="goToRegister goTo">
                <h5>Daxil ol</h5>
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