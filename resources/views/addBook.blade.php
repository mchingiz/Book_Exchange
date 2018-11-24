@extends('layouts.layout')

@section('title')
    Blog
@endsection

@section('content')
<div class="unit-6 overlayrel overlay" style="background-image: url('img/shelf.jpg');">
      <div class="overlayBox"></div>
      <div class="text-center breads">
        <h2 class="mb-0">Kitab əlavə et</h2>
        <p class="mb-0 unit-6"><a href="index.html">Əsas səhifə</a> <span class="sep">></span> <span>Kitab əlavə et</span></p>
      </div>
    </div>  

    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
       
          <div class="col-md-12 col-lg-8 mb-5">          

            @if($errors->any())
              <div class="alert alert-danger" role="alert">
                  <ol>
                      @foreach($errors->all() as $error)
                          <li> {{ $error }} </li>
                      @endforeach
                  </ol>
              </div>
            @endif

            <br>

            @if(Session::has('message'))
              <div class="alert alert-success"> {{Session::get('message')}} </div>
            @endif

          
            <form action="{{route('store_book')}}" method="post" enctype="multipart/form-data" class="p-5 bg-white">

              {{ csrf_field() }}

              <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="bookname">Kitabın adı</label>
                  <input type="text" id="bookname" name="book_name" class="form-control" placeholder="məs: 451 Farenheit" >
                </div>
                <div class="col-md-6 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="author">Müəllif</label>
                  <input type="text" id="author" name="book_author" class="form-control" placeholder="məs: Ray Bradbury" >
                </div>
              </div>  

              <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="book_cat">Kitabın kategoriyası</label>
                  <select name="book_cat" id="book_cat" class="form-control" >
                    @foreach($categories as $cat)
                      <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                    @endforeach

                  </select>
                </div>

                <div class="col-md-6 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="book_condition">Kitabın vəziyyəti</label>
                  <select name="book_condition" id="book_condition" class="form-control" >
                    @foreach($conditions as $c)
                      <option value="{{$c}}">{{$c}}</option>
                    @endforeach

                  </select>
                </div>
              </div>    

              <div class="row form-group">
                <div class="col-md-8 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="book_city">Şəhər</label>
                  <select name="book_city" id="book_city" class="form-control" >
                    @foreach($cities as $c)
                      <option value="{{$c->id}}">{{ $c->name }}</option>
                    @endforeach
                  </select>
                </div>
                <div class="col-md-4 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="book_year">Kitabın ili</label>
                  <input type="number" min="1500" max="2018" class="form-control" id="book_year" name="book_year" value="1500" >
                </div>
              </div>        

              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                    <label class="font-weight-bold" for="aboutBook">Kitab haqqında</label>
                  <textarea name="book_desc" class="form-control" id="aboutBook" cols="30" rows="5" ></textarea>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                    <label class="font-weight-bold" for="book_pref">Üstünlüklər</label>
                  <textarea name="book_pref" class="form-control" id="book_pref" cols="30" rows="5" ></textarea>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="photo">Kitabın fotosu</label>
                  <input type="file" id="photo" name="book_photo" accept="image/*" >
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Paylaş" class="btn btn-primary  py-2 px-5">
                </div>
              </div>

  
            </form>
          </div>

          <div class="col-lg-4">
            <div class="p-4 mb-3 bg-white">
              <h3 class="h5 text-black mb-3">Əlaqə məlumatlarınız</h3>
              <p class="mb-0 font-weight-bold">Address</p>
              <p class="mb-4">Sumqayıt şəhəri, Çerkassi küçəsi, 18/22</p>

              <p class="mb-0 font-weight-bold">Telefon</p>
              <p class="mb-4"><a href="#">+994 51 301 22 28</a></p>

              <p class="mb-0 font-weight-bold">Elektron poçt</p>
              <p class="mb-0"><a href="#">behruzaydnl@gmail.com</a></p>

            </div>
            
            <div class="p-4 mb-3 bg-white">
              <h3 class="h5 text-black mb-3">Haqqınızda</h3>
              <p>"Bir dil bir adam deməkdir", bu ifadə öz yerində. Amma bəzən bir kitab da yeni bir adam mənasına gəlir. Buna görə də fikirləşirəm ki kitablar dünyanın əvəzedilməz parçalarıdır. Elmi-fantastik novellalar isə mənim üçün hər şeydən öncə gəlir.</p>
              <!-- <p><a href="#" class="btn btn-primary  py-2 px-4">Learn More</a></p> -->
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

            <!-- <div class="accordion-item">
              <h3 class="mb-0 heading">
                <a class="btn-block" data-toggle="collapse" href="#collapseFour" role="button" aria-expanded="false" aria-controls="collapseFour">Who should I contact in case of support.<span class="icon"></span></a>
              </h3>
              <div id="collapseFour" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="body-text">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel ad laborum expedita. Nostrum iure atque enim quisquam minima distinctio omnis, consequatur aliquam suscipit, quidem, esse aspernatur! Libero, excepturi animi repellendus porro impedit nihil in doloremque a quaerat enim voluptatum, perspiciatis, quas dignissimos maxime ut cum reiciendis eius dolorum voluptatem aliquam!</p>
                </div>
              </div> -->
            <!-- </div> .accordion-item -->

          </div>
          </div>
        </div>
      
      </div>
    </div>


   
@endsection