@extends('layouts.layout')  

@section('title')
Kitabtap - index
@endsection

@section('content')
<div class="site-blocks-cover" style="background-image: url(img/shelf.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row row-custom align-items-center">
          <div class="col-md-12">
            <h1 class="mb-2 text-white w-75">Azərbaycanın <span class="font-weight-bold">yeganə</span> kitab dəyişmə portalı</h1>
            <div class="job-search">
              <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active py-3" style="color:white;" data-toggle="pill" href="#pills-job" role="tab" aria-controls="pills-job" aria-selected="true">Kİtab tap</a>
                </li>
<!--                 <li class="nav-item">
                  <a class="nav-link py-3" style="color:white;" data-toggle="pill" href="#pills-candidate" role="tab" aria-controls="pills-candidate" aria-selected="false">İstİfadəçİ tap</a>
                </li> -->
              </ul>
              <div class="tab-content bg-white p-4 rounded" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-job" role="tabpanel" aria-labelledby="pills-job-tab">
                  <form action="{{ route('search_result') }}" method="get">
                    <div class="row">
                      <div class="col-md-6 col-lg-9 mb-3 mb-lg-0">
                        <input type="text" name="search_string" class="form-control" placeholder="məs: 451 Farenheit">
                      </div>
                      <!-- <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                        <input type="text" class="form-control" placeholder="məs: Elmi-fantastik">                      
                      </div> -->
                      <!-- <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                        <input type="text" class="form-control form-control-block search-input" id="autocomplete" placeholder="Şəhər" onFocus="geolocate()">
                      </div> -->
                      <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                        <input type="submit" class="btn btn-primary btn-block" value="Axtar">
                      </div>
                    </div>
                  </form>
                </div>
                <!-- <div class="tab-pane fade" id="pills-candidate" role="tabpanel" aria-labelledby="pills-candidate-tab">
                  <form action="#" method="post">
                    <div class="row">
                      <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                        <input type="text" class="form-control" placeholder="məs: Bəhruz Aydınlı">
                      </div>
                      <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                        <div class="select-wrap">
                          <span class="icon-keyboard_arrow_down arrow-down"></span>
                          <select name="" id="" class="form-control">
                            <option value="">Kitablarına bax</option>
                            <option value="internship">Profilinə bax</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                        <input type="text" class="form-control form-control-block search-input" id="autocomplete" placeholder="Şəhər" onFocus="geolocate()">
                      </div>
                      <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                        <input type="submit" class="btn btn-primary btn-block" value="Axtar">
                      </div>
                    </div>
                  </form> -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>  
    

    <div class="site-section bg-light">
      <div class="container">
        <div class="row justify-content-start text-left mb-5">
          <div class="col-md-9" data-aos="fade">
            <h2 class="font-weight-bold text-black">Ən son əlavə olunanlar</h2>
          </div>
        </div>
        <div class="row book-shelf">
            <section class="container">
                <div class="row active-with-click">
                    @foreach($books as $book)
                      <div class="col-md-4 col-sm-6 col-xs-12">
                          <article class="material-card Teal">
                              <h2>
                                  <span>{{ $book->author }}</span>
                                  <strong>
                                      <i class="fa fa-fw fa-star"></i>
                                      {{ $book->name }}
                                  </strong>
                              </h2>
                              <div class="mc-content">
                                  <div class="img-container">
                                      <img class="img-responsive" src="{{ $book->image }}" height="100%">
                                  </div>
                                  <div class="mc-description">
                                      {{ $book->description }}
                                  </div>
                                  <a href="{{ route('show_book',$book)  }}">  
                                      <h4>Ətraflı</h4>
                                  </a>
                              </div>
                              <a class="mc-btn-action">
                                  <i class="fa fa-bars"></i>
                              </a>
                              <div class="mc-footer">
                                <div class="book-tags">
                                    <h5><a href="#">{{ $book->category->name }}</a></h5>
                                </div>
                              </div>
                          </article>
                      </div>
                    @endforeach
                </div>
            </section>
            
        </div>

        <div class="row mt-5">
          <div class="col-md-12 text-center">
            <div class="site-block-27 custom_pagination">
              {{ $books->links() }}
            </div>
          </div>
        </div>

      </div>
    </div>       

    <div class="site-section">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-6" data-aos="fade" >
            <h2 class="text-black">Niyə Kitab<strong>Tap</strong>? </h2>
          </div>
        </div>
        <div class="row hosting">
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-4" data-aos="fade" data-aos-delay="100">

            <div class="unit-3 h-100 bg-white">
              
              <div class="d-flex align-items-center mb-3 unit-3-heading">
                <div class="unit-3-icon-wrap mr-4">
                  <svg class="unit-3-svg" xmlns="http://www.w3.org/2000/svg" width="59px" height="68px">
                    <path fill-rule="evenodd" stroke-width="2px" stroke-linecap="butt" stroke-linejoin="miter" fill="none" d="M29.000,66.000 L1.012,49.750 L1.012,17.250 L29.000,1.000 L56.988,17.250 L56.988,49.750 L29.000,66.000 Z"></path>
                  </svg>
                  <!-- icon fl-bigmug-line-portfolio23 -->
                  <i class="fa fa-bookmark unit-3-icon" style="color: lightskyBlue; font-size: 37px;"></i>
                  <!-- <span class="unit-3-icon icon fl-bigmug-line-portfolio23"></span> -->
                </div>
                <h2 class="h5">Yüzlərlə kitab seçimi</h2>
              </div>
              <div class="unit-3-body">
                <p>Siz axtardığınız kitabı bir neçə dəqiqə ərzində portalda düzgün axtarış etməklə tapa bilərsiniz!</p>
              </div>
            </div>

          </div>
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-4" data-aos="fade" data-aos-delay="200">
            
            <div class="unit-3 h-100 bg-white">
              
              <div class="d-flex align-items-center mb-3 unit-3-heading">
                <div class="unit-3-icon-wrap mr-4">
                  <svg class="unit-3-svg" xmlns="http://www.w3.org/2000/svg" width="59px" height="68px">
                    <path fill-rule="evenodd" stroke-width="2px" stroke-linecap="butt" stroke-linejoin="miter" fill="none" d="M29.000,66.000 L1.012,49.750 L1.012,17.250 L29.000,1.000 L56.988,17.250 L56.988,49.750 L29.000,66.000 Z"></path>
                  </svg>
                  <i class="fa fa-map unit-3-icon" style="color: lightskyBlue; font-size: 35px;"></i>
                  <!-- <span class="unit-3-icon icon fl-bigmug-line-big104"></span> -->
                </div>
                <h2 class="h5">Məkan uyğunluğu</h2>
              </div>
              <div class="unit-3-body">
                <p>Axtarış edərkən yalnızca sizə yaxın olan şəhərləri, məkanları seçə və əlavə vaxt itkisindən xilas ola bilərsiz!</p>
              </div>
            </div>

          </div>
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-4" data-aos="fade" data-aos-delay="300">
            
            <div class="unit-3 h-100 bg-white">              
              <div class="d-flex align-items-center mb-3 unit-3-heading">
                <div class="unit-3-icon-wrap mr-4">
                  <svg class="unit-3-svg" xmlns="http://www.w3.org/2000/svg" width="59px" height="68px">
                    <path fill-rule="evenodd" stroke-width="2px" stroke-linecap="butt" stroke-linejoin="miter" fill="none" d="M29.000,66.000 L1.012,49.750 L1.012,17.250 L29.000,1.000 L56.988,17.250 L56.988,49.750 L29.000,66.000 Z"></path>
                  </svg>
                  <i class="fa fa-users unit-3-icon" style="color: lightskyBlue; font-size: 35px;"></i>
                  <!-- <span class="unit-3-icon icon fl-bigmug-line-airplane86"></span> -->
                </div>
                <h2 class="h5">Prosesin şəffaflığı</h2>
              </div>
              <div class="unit-3-body">
                <p>Portalımızda yalan vədlər və uyğun olmayan davranışlar qarşısında dərhal tədbir görülür! </p>
              </div>
            </div>

          </div>

        </div>
      
      </div>
    </div>

    <div class="site-section block-4 bg-light">

      <div class="container">

        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-6" data-aos="fade" >
            <h2 class="text-black">Xoşbəxt istifadəçilər</h2>
          </div>
        </div>

        <div class="nonloop-block-4 owl-carousel" data-aos="fade">
          <div class="item col-md-8 mx-auto">
            
            <div class="block-38 text-center bg-white p-4">
              <div class="block-38-img">
                <div class="block-38-header"> 
                  <img src="img/person1.jpg" alt="Bəhruz Aydınlı">
                  <h3 class="block-38-heading">Bəhruz Aydınlı</h3>
                  <p class="block-38-subheading">Sumqayıt, Sci-fi</p>
                </div>
                <div class="block-38-body">
                  <p>Bu sayt mənə axtardığım kitabları özümə uyğun vaxtda və məkanda, istədiyim şərtlərlə əldə etmək imkanı qazandırdı. Kitablar paylaşıldıqca daha çox fayda verirlər, odur ki oxuduğum kitabları paylaşmaqdan heç bir vaxt çəkinmirəm! </p>
                </div>
              </div>
            </div>

          </div>
          <div class="item col-md-8 mx-auto">
            <div class="block-38 text-center bg-white p-4">
              <div class="block-38-img">
                <div class="block-38-header">
                  <img src="img/person2.png" alt="Russell Westbrook">
                  <h3 class="block-38-heading">Russell Westbrook</h3>
                  <p class="block-38-subheading">Oklahoma, Mifologiya</p>
                </div>
                <div class="block-38-body">
                  <p>Oklahomanın soyuq qış gecələrində tək keçirdiyim vaxtlarda birdən bu sayt qarşıma çıxdı və artıq tək olmadığımı, kitabların da mənimlə olacağını anladığım an həyatımın ən rəngarəng anlarından idi desəm yalan olmaz.</p>
                </div>
              </div>
            </div>
          </div>

          <div class="item col-md-8 mx-auto">
            
            <div class="block-38 text-center bg-white p-4">
              <div class="block-38-img">
                <div class="block-38-header"> 
                    <img src="img/person1.jpg" alt="Bəhruz Aydınlı">
                    <h3 class="block-38-heading">Bəhruz Aydınlı</h3>
                    <p class="block-38-subheading">Sumqayıt, Sci-fi</p>
                  </div>
                  <div class="block-38-body">
                    <p>Bu sayt mənə axtardığım kitabları özümə uyğun vaxtda və məkanda, istədiyim şərtlərlə əldə etmək imkanı qazandırdı. Kitablar paylaşıldıqca daha çox fayda verirlər, odur ki oxuduğum kitabları paylaşmaqdan heç bir vaxt çəkinmirəm! </p>
                  </div>
              </div>
            </div>

          </div>
          <div class="item col-md-8 mx-auto">
            <div class="block-38 text-center bg-white p-4">
              <div class="block-38-img">
                <div class="block-38-header">
                    <img src="img/person2.png" alt="Russell Westbrook">
                    <h3 class="block-38-heading">Russell Westbrook</h3>
                    <p class="block-38-subheading">Oklahoma, Mifologiya</p>
                  </div>
                  <div class="block-38-body">
                    <p>Oklahomanın soyuq qış gecələrində tək keçirdiyim vaxtlarda birdən bu sayt qarşıma çıxdı və artıq tək olmadığımı, kitabların da mənimlə olacağını anladığım an həyatımın ən rəngarəng anlarından idi desəm yalan olmaz.</p>
                  </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="py-5 bg-primary">
      <div class="container">
        <div class="row" data-aos="fade">
          <div class="col-md-12">
            <h2 class="text-white h4 font-weihgt-normal mb-4">Bizimlə əlaqə</h2>
          </div>
        </div>  
        <form action="" data-aos="fade" class="row">
          <div class="col-md-6">
            <input type="text" class="form-control border-0 mb-3 mb-md-0 padds" placeholder="Ad və soyadınız">
          </div>
          <div class="col-md-6">
            <input type="text" class="form-control border-0 mb-3 mb-md-0 padds" placeholder="Emailiniz">
          </div>
          <div class="col-md-6">
              <input type="text" class="form-control border-0 mb-3 mb-md-0 padds" placeholder="Mövzu">
            </div>
          <div class="col-md-6 col-xs-12">
              <textarea class="form-control border-0 mb-3 mb-md-0 padds yourmessage" placeholder="Bizə mesajınız"></textarea>
            </div>
          <div class="col-md-3 sendUsaMessage">
            <input type="submit" value="Göndər" class="btn btn-dark btn-block padds btnpadds" style="height: 45px;">  
          </div>
        </form>
      </div>
    </div>
@endsection