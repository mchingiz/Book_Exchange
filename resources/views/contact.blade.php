@extends('layouts.layout')

@section('title')
    Blog
@endsection

@section('content')
    <div class="unit-6 overlayrel overlay" style="background-image: url('img/shelf.jpg');">
        <div class="overlayBox"></div>
        <div class="text-center breads">
          <h2 class="mb-0">Əlaqə</h2>
          <p class="mb-0 unit-6"><a href="index.html">Əsas səhifə</a> <span class="sep">></span> <span>Əlaqə</span></p>
        </div>
      </div>

    
    

    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
       
          <div class="col-md-12 col-lg-8 mb-5">
          
            
          
            <form action="#" class="p-5 bg-white">

              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname">Ad və soyadınız</label>
                  <input type="text" id="fullname" class="form-control" placeholder="Məs: Bəhruz Aydınlı">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="email">Elektron poçtunuz</label>
                  <input type="email" id="email" class="form-control" placeholder="Məs: behruzaydnl@gmail.com">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="email">Mövzu</label>
                  <input type="text" id="subject" class="form-control" placeholder="Mövzu">
                </div>
              </div>
              

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="message">Bizə mesajınız</label> 
                  <textarea name="message" id="message" cols="30" rows="5" class="form-control" placeholder="Necə kömək edə bilərik?"></textarea>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Send" class="btn btn-primary  py-2 px-4">
                </div>
              </div>

  
            </form>
          </div>

          <div class="col-lg-4">
              <div class="p-4 mb-3 bg-white">
                <h3 class="h5 text-black mb-3">Əlaqə məlumatlarımız</h3>
                <p class="mb-0 font-weight-bold">Address</p>
                <p class="mb-4">Sumqayıt şəhəri, Çerkassi küçəsi, 18/22</p>
  
                <p class="mb-0 font-weight-bold">Telefon</p>
                <p class="mb-4"><a href="#">+994 51 301 22 28</a></p>
  
                <p class="mb-0 font-weight-bold">Elektron poçt</p>
                <p class="mb-0"><a href="#">behruzaydnl@gmail.com</a></p>
  
              </div>
              
              <div class="p-4 mb-3 bg-white">
                <h3 class="h5 text-black mb-3">Haqqımızda</h3>
                <p>KitabTap komandası 2018-ci ildə Nigar xanım Cəfərova həzrətlərinin rəhbərliyi ilə bir araya gəlmiş və ictimaiyyət üçün faydalı bir iş görmək məqsədilə bu portalı yaratmışdır.bu ifadə öz yerində. </p>
                <p><a href="#" class="btn btn-primary  py-2 px-4">Bizi tanıyın</a></p>
              </div>
            </div>
        </div>
      </div>
    </div>

   


    <div class="site-section">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-6" data-aos="fade" >
            <h2>Tez-tez soruşulan suallar?</h2>
          </div>
        </div>
        

        <div class="row justify-content-center" data-aos="fade" data-aos-delay="100">
          <div class="col-md-8">
            <div class="accordion unit-8" id="accordion">
            <div class="accordion-item">
              <h3 class="mb-0 heading">
                <a class="btn-block" data-toggle="collapse" href="#collapseOne" role="button" aria-expanded="true" aria-controls="collapseOne">Saytdan istifadə üçün hər hansısa ödəniş tələb olunur mu?<span class="icon"></span></a>
              </h3>
              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="body-text">
                  <p>Portalımız tamamilə kitabsevərlərin rahatlığı üçün nəzərdə tutulub və bu xidmət üçün istifadəçilərdən heç bir ödəniş tələb olunmur. Siz portalımızda bir-birinizlə ünsiyyətdə olaraq axtardığınız kitablara daha tez çata bilirsinizsə bu bizim üçün kifayətdir ;)</p>
                </div>
              </div>
            </div> <!-- .accordion-item -->
            
            <div class="accordion-item">
              <h3 class="mb-0 heading">
                <a class="btn-block" data-toggle="collapse" href="#collapseTwo" role="button" aria-expanded="false" aria-controls="collapseTwo">Qeydiyyat vacibdir mi?<span class="icon"></span></a>
              </h3>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="body-text">
                  <p>Saytımız istifadəçi məlumatları üzərində qurulduğundan sizin qeydiyyatdan keçməyiniz bizim yeganə şərtimizdir. Məlumatlarınızın təhlükəsizliyi barədə isə bizə güvənə bilərsiz.</p>
                </div>
              </div>
            </div> <!-- .accordion-item -->

            <div class="accordion-item">
              <h3 class="mb-0 heading">
                <a class="btn-block" data-toggle="collapse" href="#collapseThree" role="button" aria-expanded="false" aria-controls="collapseThree">Köməyə ehtiyac olduqda və ya problem yarandıqda nə edim?  <span class="icon"></span></a>
              </h3>
              <div id="collapseThree" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="body-text">
                  <p>Sadəcə bizimlə əlaqə saxlayın ;) Bizə zəng edə, elektron poçt vasitəsilə yaza və ya saytımızın mesaj bölməsindən bizimlə əlaqə yarada bilərsiz və biz saytımızla bağlı istənilən sualınızı cavablamağa hər zaman hazır olacağıq!</p>
                </div>
              </div>
            </div> <!-- .accordion-item -->

          </div>
          </div>
        </div>
      
      </div>
    </div>
@endsection