@extends('layouts.layout')

@section('title')
    'Single Book'
@endsection

@section('content')
<div class="unit-6 overlayrel overlay" style="background-image: url('img/shelf.jpg');">
        <div class="overlayBox"></div>
        <div class="text-center breads">
          <h2 class="mb-0">451 Farenheit</h2>
          <p class="mb-0 unit-6"><a href="index.html">Əsas səhifə</a> <span class="sep">></span> <span>Kitab</span> <span class="sep">></span> <span>451 Farenheit</span></p>
        </div>
      </div>

    <div class="site-section bg-light">
      <div class="container">
        <div class="row">     
            <div class="col-lg-4">                        
                <div class="p-4 mb-3 bg-white">
                  <h3 class="h5 text-black mb-3">Kitabın fotosu</h3>
                  <img style="width: 100%" src="img/books/1.jpg"/>
                </div>
              </div>  
          <div class="col-md-12 col-lg-8 mb-5">          
            <div class="p-5 bg-white">

              <div class="mb-4 mb-md-5 mr-5">
               <div class="job-post-item-header d-flex align-items-center">
                 <h2 class="mr-3 text-black h4">451 Farenheit</h2>
                 <div class="badge-wrap">
                  <span class="bg-danger text-white badge py-2 px-4">Müvəqqəti</span>
                 </div>
               </div>
               <div class="job-post-item-body d-block d-md-flex">
                 <!-- <div class="mr-3"><span class="fl-bigmug-line-portfolio23"></span> <a href="#">New York Times</a></div> -->
                 <div class="mr-3"><span class="fl-bigmug-line-user144"></span> <span>Bəhruz Aydınlı </span></div>
                 <div class="mr-3"><span class="fl-bigmug-line-chat51"></span> <span>Ray Bradbury </span></div>
                 <div><span class="fl-bigmug-line-big104"></span> <span>Bakı, Azərbaycan</span></div>                 
               </div>
              </div>
              <p><strong>Uyğun məkanlar:</strong> Bakı, metro yaxınlığı</p>
              
              <h4>Kitab haqqında</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, iure beatae! Voluptas tempora doloremque atque repudiandae maiores odio magni. Illo ut nihil officia numquam in. Deleniti pariatur at minima quaerat!</p>
              <p>Qui corrupti animi, dignissimos veritatis, necessitatibus consequuntur nobis, placeat beatae dolorum ullam harum at atque dolor! Accusantium cupiditate ipsum placeat, vel voluptatibus non eaque, animi neque minima facere provident aspernatur!</p>
              <p>Porro magni numquam ex natus repellat accusamus laborum blanditiis odit consequatur at veritatis nostrum provident recusandae dolores incidunt distinctio facere, nulla odio quo tempore libero! Voluptatum porro velit, qui optio.</p>

              <p class="mt-5"><a href="#" class="btn btn-primary  py-2 px-4">Kitab təklif et</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
       
    <div class="comments">
        <div class="comment-wrap">
            <div class="photo">
                <div class="avatar" style="background-image: url('https://s3.amazonaws.com/uifaces/faces/twitter/dancounsell/128.jpg')"></div>
            </div>
            <div class="comment-block">
                <form action="">
                    <textarea name="" id="" cols="30" rows="3" placeholder="Şərhiniz və ya təklifiniz..."></textarea>
                </form>
            </div>          
        </div>    
        <div class="comment-wrap add-comment">
        <div class="addComment">
            <p class="mt-5"><a href="#" class="btn btn-primary  py-2 px-4">Şərh / Təklif əlavə et</a></p>
        </div>
      </div>
        <div class="comment-wrap">
            <div class="photo">
                <div class="avatar" style="background-image: url('https://s3.amazonaws.com/uifaces/faces/twitter/jsa/128.jpg')"></div>
            </div>
            <div class="comment-block">
                <p class="comment-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto temporibus iste nostrum dolorem natus recusandae incidunt voluptatum. Eligendi voluptatum ducimus architecto tempore, quaerat explicabo veniam fuga corporis totam reprehenderit quasi
                    sapiente modi tempora at perspiciatis mollitia, dolores voluptate. Cumque, corrupti?</p>
                <div class="bottom-comment">
                    <div class="comment-date">Noy 15, 2018 @ 12:35 </div>
                    <ul class="comment-actions">
                        <li class="complain">Şikayət et</li>
                        <li class="reply">Cavabla</li>
                    </ul>
                </div>
            </div>
        </div>   
        <div class="comment-wrap">
            <div class="photo">
                <div class="avatar" style="background-image: url('https://s3.amazonaws.com/uifaces/faces/twitter/felipenogs/128.jpg')"></div>
            </div>
            <div class="comment-block">
                <p class="comment-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto temporibus iste nostrum dolorem natus recusandae incidunt voluptatum. Eligendi voluptatum ducimus architecto tempore, quaerat explicabo veniam fuga corporis totam.</p>
                <div class="bottom-comment">
                    <div class="comment-date">Noy 16, 2018 @ 18:12 </div>
                    <ul class="comment-actions">
                        <li class="complain">Şikayət et</li>
                        <li class="reply">Cavabla</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection