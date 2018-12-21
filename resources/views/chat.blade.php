@extends('layouts.layout')

@section('metatags')
    <meta name="user_id" value="{{ $current_user_id }}">
    <meta name="recieving_user_id" value="{{ $user->id }}">
@endsection

@section('title')
    'Single Book'
@endsection

@section('content')

    <div class="unit-6 overlayrel overlay" style="background-image: url('img/shelf.jpg');">
        <div class="overlayBox"></div>
        <div class="text-center breads">
          <h2 class="mb-0">Bəhruz Aydınlı</h2>
          <p class="mb-0 unit-6"><a href="index.html">Əsas səhifə</a> <span class="sep">></span> <span>Mesajlarım</span> </p>
        </div>
      </div>

  <div class="container">
    <div class="row profile">
      
      <div class="col-lg-12 col-md-12">


           <div class="container">
            <h3 style="margin-bottom: 20px; padding-bottom: 10px; border-bottom: 1px solid darkred;" class="text-left">{{ $user->name.' '.$user->surname }} ilə mesaj qutum</h3>
            <div class="messaging">
                  <div class="inbox_msg">
                    <div class="mesgs">
                      <div class="msg_history">
                        <div class="incoming_msg template" style="display:none">
                          <div class="received_msg">
                            <div class="received_withd_msg">
                              <p>Salam, zəhmət olmasa mənə haqqında elan yerləşdirdiyiniz "Kwai körpüsü" əsərinin vəziyyəti barədə məlumat verin.</p>
                              <span class="time_date"> 11:01 | 10 Noy</span></div>
                          </div>
                        </div>
                        <div class="outgoing_msg template" style="display:none">
                          <div class="sent_msg">
                            <p>Salam, kitab yenidir, heç oxunmayıb.</p>
                            <span class="time_date"> 12:16 | 15 Noy</span> </div>
                        </div>
                      </div>
                      <div class="type_msg">
                        <div class="input_msg_write">
                          <input type="text" class="write_msg" value="testMessage" onkeydown="sendIfEnter()" placeholder="Type a message" />
                          <button class="msg_send_btn" type="button" onclick="sendMessage()"><i class="fas fa-paper-plane"></i></i></button>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>

      </div>
    </div>
  </div>
  </div>
@endsection