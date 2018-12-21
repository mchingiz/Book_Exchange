@extends('layouts.layout')

@section('title')
    {{ $book->name }}
@endsection

@section('content')
<div class="unit-6 overlayrel overlay" style="background-image: url('/img/shelf.jpg');">
        <div class="overlayBox"></div>
        <div class="text-center breads">
          <h2 class="mb-0">{{$book->name}}</h2>
          <p class="mb-0 unit-6"><a href="index.html">Əsas səhifə</a> <span class="sep">></span> <span>Kitab</span> <span class="sep">></span> <span>{{$book->name}}</span></p>
        </div>
      </div>

    <div class="site-section bg-light">
      <div class="container">
        <div class="row">     
            <div class="col-lg-4">                        
                <div class="p-4 mb-3 bg-white">
                  <h3 class="h5 text-black mb-3">Kitabın fotosu</h3>
                  <img style="width: 100%" src="/Upload/book/{{isset($book->image[0]) ? $book->image[0]->source : ''}}"/>
                </div>
              </div>  
          <div class="col-md-12 col-lg-8 mb-5">          
            <div class="p-5 bg-white">

              <div class="mb-4 mb-md-5 mr-5">
               <div class="job-post-item-header d-flex align-items-center">
                 <h2 class="mr-3 text-black h4">{{$book->name}} - {{$book->author}}</h2>
                 <div class="badge-wrap">
                  <span class="bg-danger text-white badge py-2 px-4">{{$book->category->name}}</span>
                 </div>
               </div>
               <div class="job-post-item-body d-block d-md-flex">
                 <!-- <div class="mr-3"><span class="fl-bigmug-line-portfolio23"></span> <a href="#">New York Times</a></div> -->
                 <div class="mr-3"><span class="fl-bigmug-line-user144"></span> 
                    <a href="{{ route('user_profile', $book->user) }}">
                      <span>{{$book->user->name}} {{$book->user->surname}}</span>
                    </a><br> 
                  </div>
                 <div class="mr-3"></div>
                 <div><span class="fl-bigmug-line-big104"></span> <span>{{$book->city->name}} </span></div>                 
               </div>
              </div>
              <p><strong>Nəşriyyat ili:</strong> {{$book->year}} </p>
         
              <p><strong>Vəziyyət:</strong> {{$book->condition}} </p>
              
              <h4>Kitab haqqında</h4>
              <p>{{$book->description}}</p>

               <h4>Üstünlük verilir: </h4>
              <p>{{$book->exchange_preferences}}</p>

           
            </div>
          </div>
        </div>
      </div>
    </div>
       
    <div class="comments">
      @if(Auth::check())

        @if(Session::get('status') == 'success')
          <div class="alert alert-success">
            {{ Session::get('message') }}
          </div>
        @endif

        <form action="{{ route('offer.store') }}" method="POST">
          {!! csrf_field() !!}
          <div class="comment-wrap">
              <div class="photo">
                  <div class="avatar" style="background-image: url('https://s3.amazonaws.com/uifaces/faces/twitter/dancounsell/128.jpg')"></div>
              </div>
              <div class="comment-block">
                  
                <input type="hidden" name="offered_to_book" value="{{$book->id}}">
                <select class="custom-select" name="offered_book">
                   @foreach(Auth::user()->books as $user_book)

                    <option value="{{$user_book->id}}">{{$user_book->name}}</option>
                   @endforeach
                </select>
                 
              </div>          
          </div>    
          <div class="comment-wrap add-comment">
          <div class="addComment">
              <p class="mt-5"><button href="#" class="btn btn-primary  py-2 px-4">Təklif əlavə et</button></p>
          </div>
        </div>
       </form>
      @endif
    </div>
    <div class="comments">
        

    <h1 style="margin-left: 50px;">Təkliflər</h1>
    @foreach($book->offers as $offer)
      <div class="comment-wrap">
          <div class="photo">
              <div class="avatar" style="background-image: url('')"></div>
          </div>
          <div class="comment-block" >
              <p class="comment-text">{{$offer->offered_book->author}} - {{ $offer->offered_book->name}}

              @if($offer->status==1)

              <svg style="float:right" viewBox="0 0 26 26" enable-background="new 0 0 26 26" width="50px" height="50px">
                <path d="m.3,14c-0.2-0.2-0.3-0.5-0.3-0.7s0.1-0.5 0.3-0.7l1.4-1.4c0.4-0.4 1-0.4 1.4,0l.1,.1 5.5,5.9c0.2,0.2 0.5,0.2 0.7,0l13.4-13.9h0.1v-8.88178e-16c0.4-0.4 1-0.4 1.4,0l1.4,1.4c0.4,0.4 0.4,1 0,1.4l0,0-16,16.6c-0.2,0.2-0.4,0.3-0.7,0.3-0.3,0-0.5-0.1-0.7-0.3l-7.8-8.4-.2-.3z" fill="#26baee"/>
              </svg>
              <div style="clear: both"></div>
              @endif

              </p>
              <div class="bottom-comment">
                  <div class="comment-date">{{$offer->created_at}} </div>
                  <ul class="comment-actions">
                      <li class="complain">Şikayət et</li>
                      <li class="reply">Cavabla</li>
                  </ul>
              </div>
          </div>
      </div>
    @endforeach

    </div>
@endsection

@section('scripts')
 <script src="/js/offer.js"></script>
@endsection