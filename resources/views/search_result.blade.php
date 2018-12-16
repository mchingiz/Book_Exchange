@extends('layouts.layout')  

@section('title')
	Axtarış
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
              </ul>
              <div class="tab-content bg-white p-4 rounded" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-job" role="tabpanel" aria-labelledby="pills-job-tab">
                  <form action="{{ route('search_result') }}" method="get">
                    <div class="row">
                      <div class="col-md-6 col-lg-9 mb-3 mb-lg-0">
                        <input type="text" name="search_string" class="form-control" placeholder="məs: 451 Farenheit">
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
    </div>  
    

    <div class="site-section bg-light">
      <div class="container">
        <div class="row justify-content-start text-left mb-5">
          <div class="col-md-9" data-aos="fade">
          	@if(Session::has('result'))
            	<h2 class="font-weight-bold text-black">{{ Session::get('message') }}</h2>
          	@endif
          </div>
        </div>
        <div class="row book-shelf">
            <section class="container">
                @if(Session::has('result'))
					@if(Session::get('result') == 'success')
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
		                                    	<img class="img-responsive" src="/Upload/book/{{isset($book->image[0]) ? $book->image[0]->source : ''}}" height="100%">
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
					@endif
                @endif
            </section>
            
        </div>
        
      </div>
    </div>
@endsection