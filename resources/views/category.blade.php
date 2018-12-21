@extends('layouts.layout')  

@section('title')
	Kategoriya - {{ $category->name }}
@endsection

@section('content')

<div class="unit-6 overlayrel overlay" style="background-image: url('/img/shelf.jpg');">
    <div class="overlayBox"></div>
    <div class="text-center breads">
      <h2 class="mb-0">Kateqoriya</h2>
      <p class="mb-0 unit-6">Kateqoriya<span class="sep">></span> <a href="{{ route('category',$category) }}">{{ $category->name }}</a></p>
    </div>
</div>

<div class="site-section bg-light">
  <div class="container">
    <div class="row book-shelf">
        <section class="container">
            <div class="row active-with-click">
                @foreach($category->books as $book)
                  <div class="col-md-4 col-sm-6 col-xs-12">
                      <article class="material-card Teal">
                           <a href="{{ route('show_book',$book)  }}">  
                              <h2>
                                  <span>{{ $book->author }}</span>
                              
                                    <strong>
                                        <i class="fa fa-fw fa-star"></i>
                                        {{ $book->name }}
                                    </strong>
                                  
                              </h2>
                              </a>
                          <div class="mc-content">
                              <div class="img-container">
                                  <img class="img-responsive" src="/Upload/book/{{isset($book->image[0]) ? $book->image[0]->source : ''}}" height="100%" >
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

  </div>
</div>   

@endsection