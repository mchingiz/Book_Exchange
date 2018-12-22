@extends('layouts.layout')

@section('title')
    Blog
@endsection

@section('content')
    <div class="unit-6 overlayrel overlay" style="background-image: url('/img/shelf.jpg');">
      <div class="overlayBox"></div>
      <div class="text-center breads">
        <h2 class="mb-0">{{ $user->name }}</h2>
        <p class="mb-0 unit-6"><a href="index.html">Əsas səhifə</a> <span class="sep">></span> <span>İstifadəçi</span> </p>
      </div>
    </div>

    <div class="container">
      <div class="row profile">
        <div class="col-lg-3 col-md-4">
          <div class="profile-sidebar">
            <div class="profile-userpic">
              <img src="/img/person1.jpg" class="img-responsive" alt="" />
            </div>
            <div class="profile-usertitle">
              <div class="profile-usertitle-name">{{ $user->name }}</div>
            </div>
            <div class="profile-userbuttons">
              <button type="button" class="btn btn-warning btn-sm">Mesaj yaz</button>
              <button type="button" class="btn btn-primary btn-sm"><a style="color: white; text-decoration: none;" href="{{ route('edit_profile', $user) }}">Profİlİ redaktə et</a></button>
            </div>
            <div class="profile-usermenu">
              <ul class="nav">
                <li class="active">
                  <a href="#">
                    <i class="far fa-envelope"></i>{{ $user->email  }}
                  </a>
                </li>
                <li>
                  <a href="#bookslist" target="_blank">
                    <i class="fas fa-book"></i> {{  $user->books->count() }} books
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-9 col-md-8">
          <div id="bookslist" class="profile-content">
            <h2 style="font-size: 24px; padding-bottom: 10px; border-bottom: 1px solid darkred;">İstifadəçinin kitabları</h2>
            <div class="table-responsive" style="padding-top: 10px;">
              <table class="table">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Kitabın adı</th>
                    <th>Müəllif</th>
                    <th>Şəhər</th>
                    <th>İl</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($user->books as $key=>$book)
                    <tr>
                      <td>{{ $key+1 }}</td>
                      <td>{{ $book->name }}</td>
                      <td>{{ $book->author }}</td>
                      <td>{{ $book->city->name }}</td>
                      <td>{{ $book->year }}</td>
                      <th class="d-flex justify-content-between">
                          <a class="btn btn-warning" href="{{ route('show_book',$book) }}">Ətraflı</a>
                          @if(auth()->id() == $user->id)
                          <a class="btn btn-primary" href="{{ route('edit_book',$book) }}">Redaktə et</a>
                          <form action="{{route('delete_book',$book)}}" method="post">
                            {{ csrf_field() }}
                            <input type="submit" value="Sil" class="btn btn-danger">
                          </form>
                          @endif
                      </th>
                    </tr>
                  @endforeach


                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection