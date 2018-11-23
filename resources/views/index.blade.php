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
                <li class="nav-item">
                  <a class="nav-link py-3" style="color:white;" data-toggle="pill" href="#pills-candidate" role="tab" aria-controls="pills-candidate" aria-selected="false">İstİfadəçİ tap</a>
                </li>
              </ul>
              <div class="tab-content bg-white p-4 rounded" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-job" role="tabpanel" aria-labelledby="pills-job-tab">
                  <form action="#" method="post">
                    <div class="row">
                      <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                        <input type="text" class="form-control" placeholder="məs: 451 Farenheit">
                      </div>
                      <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                        <input type="text" class="form-control" placeholder="məs: Elmi-fantastik">                      
                      </div>
                      <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                        <input type="text" class="form-control form-control-block search-input" id="autocomplete" placeholder="Şəhər" onFocus="geolocate()">
                      </div>
                      <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                        <input type="submit" class="btn btn-primary btn-block" value="Axtar">
                      </div>
                    </div>
                  </form>
                </div>
                <div class="tab-pane fade" id="pills-candidate" role="tabpanel" aria-labelledby="pills-candidate-tab">
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
                  </form>
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
          <div class="col-md-3" data-aos="fade" data-aos-delay="200">
            <a href="new-post.html" class="btn btn-primary py-2 btn-block"><span class="h5">+</span> Kitab əlavə et</a>
          </div>
        </div>
        <div class="row book-shelf">
            <section class="container">
                <div class="row active-with-click">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <article class="material-card Teal">
                            <h2>
                                <span>Kenzaburo Oe</span>
                                <strong>
                                    <i class="fa fa-fw fa-star"></i>
                                    Son bir xoş gün
                                </strong>
                            </h2>
                            <div class="mc-content">
                                <div class="img-container">
                                    <img class="img-responsive" src="img/books/4.png">
                                </div>
                                <div class="mc-description">
                                    He has been known for his versatile portrayals of antiheroes and vulnerable characters. He won the Academy Award for Kramer vs. Kramer in 1979 ...
                                </div>
                                <a href="#">  
                                    <h4>
                                      Ətraflı
                                      </h4>
                                    </a>
                            </div>
                            <a class="mc-btn-action">
                                <i class="fa fa-bars"></i>
                            </a>
                            <div class="mc-footer">
                              <div class="book-tags">
                              <h5><a href="#">Behruzaydnl</a></h5>
                              <h5><a href="#">#Elmi-fantastik</a></h5>
                              <h5><a href="#">#Roman</a></h5>
                            </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <article class="material-card Teal">
                            <h2>
                                <span>Stephen King</span>
                                <strong>
                                    <i class="fa fa-fw fa-star"></i>
                                    Origin
                                </strong>
                            </h2>
                            <div class="mc-content">
                                <div class="img-container">
                                    <img class="img-responsive" src="img/books/4.gif">
                                </div>
                                <div class="mc-description">
                                    He has been nominated for three Academy Awards for his work in the films Primal Fear, American History X and Birdman. He also starred in other roles ...
                                </div>
                                <a href="#">  
                                    <h4>
                                      Ətraflı
                                      </h4>
                                    </a>
                            </div>
                            <a class="mc-btn-action">
                                <i class="fa fa-bars"></i>
                            </a>
                            <div class="mc-footer">
                              <div class="book-tags">
                              <h5><a href="#">Behruzaydnl</a></h5>
                              <h5><a href="#">#Elmi-fantastik</a></h5>
                              <h5><a href="#">#Roman</a></h5>
                            </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <article class="material-card Teal">
                            <h2>
                                <span>Stephen Hawking</span>
                                <strong>
                                    <i class="fa fa-fw fa-star"></i>
                                    İşığın hissələri
                                </strong>
                            </h2>
                            <div class="mc-content">
                                <div class="img-container">
                                    <img class="img-responsive" src="img/books/3.jpg">
                                </div>
                                <div class="mc-description">
                                    English actor and author. Renowned for his distinctive working class cockney accent, Caine has appeared in over 115 films and is regarded as a British ...
                                </div>
                                <a href="#">  
                                    <h4>
                                      Ətraflı
                                      </h4>
                                    </a>
                            </div>
                            <a class="mc-btn-action">
                                <i class="fa fa-bars"></i>
                            </a>
                            <div class="mc-footer">
                              <div class="book-tags">
                              <h5><a href="#">Behruzaydnl</a></h5>
                              <h5><a href="#">#Elmi-fantastik</a></h5>
                              <h5><a href="#">#Roman</a></h5>
                            </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <article class="material-card Teal">
                            <h2>
                                <span>Chingiz Aytmatov</span>
                                <strong>
                                    <i class="fa fa-fw fa-star"></i>
                                    Alabaş
                                </strong>
                            </h2>
                            <div class="mc-content">
                                <div class="img-container">
                                    <img class="img-responsive" src="img/books/3.jpg">
                                </div>
                                <div class="mc-description">
                                    Some of his most notable starring roles were in Martin Scorsese's Mean Streets and Taxi Driver, Ridley Scott's The Duellists and Thelma & Louise, Quentin Tarantino ...
                                </div>
                                <a href="#">  
                                    <h4>
                                      Ətraflı
                                      </h4>
                                    </a>
                            </div>
                            <a class="mc-btn-action">
                                <i class="fa fa-bars"></i>
                            </a>
                            <div class="mc-footer">
                              <div class="book-tags">
                              <h5><a href="#">Behruzaydnl</a></h5>
                              <h5><a href="#">#Elmi-fantastik</a></h5>
                              <h5><a href="#">#Roman</a></h5>
                            </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <article class="material-card Teal">
                            <h2>
                                <span>Dario Fo</span>
                                <strong>
                                    <i class="fa fa-fw fa-star"></i>
                                    Out of the box
                                </strong>
                            </h2>
                            <div class="mc-content">
                                <div class="img-container">
                                    <img class="img-responsive" src="img/books/1.jpg">
                                </div>
                                <div class="mc-description">
                                    Throughout his career, Nicholson has portrayed unique and challenging roles, many of which include dark portrayals of excitable, neurotic and psychopathic characters ...
                                </div>
                                <a href="#">  
                                    <h4>
                                      Ətraflı
                                      </h4>
                                    </a>
                            </div>
                            <a class="mc-btn-action">
                                <i class="fa fa-bars"></i>
                            </a>
                            <div class="mc-footer">
                              <div class="book-tags">
                              <h5><a href="#">Behruzaydnl</a></h5>
                              <h5><a href="#">#Elmi-fantastik</a></h5>
                              <h5><a href="#">#Roman</a></h5>
                            </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <article class="material-card Teal">
                            <h2>
                                <span>Nizami Gəncəvi</span>
                                <strong>
                                    <i class="fa fa-fw fa-star"></i>
                                    İskəndərnamə
                                </strong>
                            </h2>
                            <div class="mc-content">
                                <div class="img-container">
                                    <img class="img-responsive" src="img/books/1.jpg">
                                </div>
                                <div class="mc-description">
                                    He comes from a well-known acting family and began his televised acting in 1958 as a child with his father, Lloyd Bridges, and brother, Beau, on television's Sea Hunt ...
                                </div>
                                <a href="#">  
                                    <h4>
                                      Ətraflı
                                      </h4>
                                    </a>
                            </div>
                            <a class="mc-btn-action">
                                <i class="fa fa-bars"></i>
                            </a>
                            <div class="mc-footer">
                              <div class="book-tags">
                              <h5><a href="#">Behruzaydnl</a></h5>
                              <h5><a href="#">#Elmi-fantastik</a></h5>
                              <h5><a href="#">#Roman</a></h5>
                            </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <article class="material-card Teal">
                            <h2>
                                <span>Cerom K. Cerom</span>
                                <strong>
                                    <i class="fa fa-fw fa-star"></i>
                                    İti saymasaq 3 nəfər
                                </strong>
                            </h2>
                            <div class="mc-content">
                                <div class="img-container">
                                    <img class="img-responsive" src="img/books/5.gif">
                                </div>
                                <div class="mc-description">
                                    is an American actor, producer, music video director, musician and activist. For his work as an artist, Phoenix has received a Grammy Award, a Golden Globe Award and three Academy ...
                                </div>
                                <a href="#">  
                                    <h4>
                                      Ətraflı
                                      </h4>
                                    </a>
                            </div>
                            <a class="mc-btn-action">
                                <i class="fa fa-bars"></i>
                            </a>
                            <div class="mc-footer">
                              <div class="book-tags">
                              <h5><a href="#">Behruzaydnl</a></h5>
                              <h5><a href="#">#Elmi-fantastik</a></h5>
                              <h5><a href="#">#Roman</a></h5>
                            </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <article class="material-card Teal">
                            <h2>
                                <span>Marqaret Mitçell</span>
                                <strong>
                                    <i class="fa fa-fw fa-star"></i>
                                    Hobsonun seçimi
                                </strong>
                            </h2>
                            <div class="mc-content">
                                <div class="img-container">
                                    <img class="img-responsive" src="img/books/4.png">
                                </div>
                                <div class="mc-description">
                                    He is known for his roles in Big (1988), Philadelphia (1993), Forrest Gump (1994), Apollo 13 (1995), Saving Private Ryan, You've Got Mail (both 1998), The Green Mile (1999), Cast Away (2000) ...
                                </div>
                                <a href="#">  
                                    <h4>
                                      Ətraflı
                                      </h4>
                                    </a>
                            </div>
                            <a class="mc-btn-action">
                                <i class="fa fa-bars"></i>
                            </a>
                            <div class="mc-footer">
                              <div class="book-tags">
                              <h5><a href="#">Behruzaydnl</a></h5>
                              <h5><a href="#">#Elmi-fantastik</a></h5>
                              <h5><a href="#">#Roman</a></h5>
                            </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <article class="material-card Teal">
                            <h2>
                                <span>Malcolm Gladwell</span>
                                <strong>
                                    <i class="fa fa-fw fa-star"></i>
                                    Outliers
                                </strong>
                            </h2>
                            <div class="mc-content">
                                <div class="img-container">
                                    <img class="img-responsive" src="img/books/4.gif">
                                </div>
                                <div class="mc-description">
                                    Best known for his distinctive supporting and character roles – typically lowlifes, bullies, and misfits – Hoffman was a regular presence in films from the early 1990s until his death at age 46.
                                </div>
                                <a href="#">  
                                    <h4>
                                      Ətraflı
                                      </h4>
                                    </a>
                            </div>
                            <a class="mc-btn-action">
                                <i class="fa fa-bars"></i>
                            </a>
                            <div class="mc-footer">
                              <div class="book-tags">
                              <h5><a href="#">Behruzaydnl</a></h5>
                              <h5><a href="#">#Elmi-fantastik</a></h5>
                              <h5><a href="#">#Roman</a></h5>
                            </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <article class="material-card Teal">
                            <h2>
                                <span>Herbert Wells</span>
                                <strong>
                                    <i class="fa fa-fw fa-star"></i>
                                    Time machine
                                </strong>
                            </h2>
                            <div class="mc-content">
                                <div class="img-container">
                                    <img class="img-responsive" src="img/books/3.jpg">
                                </div>
                                <div class="mc-description">
                                    He won numerous awards, including an Academy Award for his performance in the 1986 film The Color of Money, a BAFTA Award, a Screen Actors Guild Award, a Cannes Film Festival Award, an Emmy Award ...
                                </div>
                                <a href="#">  
                                    <h4>
                                      Ətraflı
                                      </h4>
                                    </a>
                            </div>
                            <a class="mc-btn-action">
                                <i class="fa fa-bars"></i>
                            </a>
                            <div class="mc-footer">
                              <div class="book-tags">
                              <h5><a href="#">Behruzaydnl</a></h5>
                              <h5><a href="#">#Elmi-fantastik</a></h5>
                              <h5><a href="#">#Roman</a></h5>
                            </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <article class="material-card Teal">
                            <h2>
                                <span>Ray Bradbury</span>
                                <strong>
                                    <i class="fa fa-fw fa-star"></i>
                                    Mars Chronicles
                                </strong>
                            </h2>
                            <div class="mc-content">
                                <div class="img-container">
                                    <img class="img-responsive" src="img/books/2.jpg">
                                </div>
                                <div class="mc-description">
                                    He is hailed for bringing a gripping realism to film acting, and is frequently cited as the greatest and most influential actor of all time. A cultural icon, Brando is most famous for his Academy ...
                                </div>
                                <a href="#">  
                                    <h4>
                                      Ətraflı
                                      </h4>
                                    </a>
                            </div>
                            <a class="mc-btn-action">
                                <i class="fa fa-bars"></i>
                            </a>
                            <div class="mc-footer">
                              <div class="book-tags">
                              <h5><a href="#">Behruzaydnl</a></h5>
                              <h5><a href="#">#Elmi-fantastik</a></h5>
                              <h5><a href="#">#Roman</a></h5>
                            </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <article class="material-card Teal">
                                <h2>
                                <span>Percy Shelly</span>
                                <strong>
                                    <i class="fa fa-fw fa-star"></i>
                                    Ornitorenk
                                </strong>
                            </h2>
                            <div class="mc-content">
                                <div class="img-container">
                                    <img class="img-responsive" src="img/books/1.jpg">
                                </div>
                                <div class="mc-description">
                                    Freeman has received Academy Award nominations for his performances in Street Smart, Driving Miss Daisy, The Shawshank Redemption and Invictus ...
                                </div>
                                <a href="#">  
                                    <h4>
                                      Ətraflı
                                      </h4>
                                    </a>
                            </div>
                            <a class="mc-btn-action">
                                <i class="fa fa-bars"></i>
                            </a>
                            <div class="mc-footer">
                              <div class="book-tags">
                              <h5><a href="#">Behruzaydnl</a></h5>
                              <h5><a href="#">#Elmi-fantastik</a></h5>
                              <h5><a href="#">#Roman</a></h5>
                            </div>
                            </div>
                        </article>
                    </div>
                </div>
            </section>
            
        </div>
        <div class="row mt-5">
          <div class="col-md-12 text-center">
            <div class="site-block-27">
              <ul>
                <li><a href="#"><i class="icon-keyboard_arrow_left h5"></i></a></li>
                <li class="active"><span>1</span></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#"><i class="icon-keyboard_arrow_right h5"></i></a></li>
              </ul>
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