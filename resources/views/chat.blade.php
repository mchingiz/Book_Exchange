@extends('layouts.layout')

@section('title')
    'Single Book'
@endsection

@section('content')

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
            <p class="mt-5"><a href="#" class="btn btn-primary py-2 px-4">Göndər</a></p>
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